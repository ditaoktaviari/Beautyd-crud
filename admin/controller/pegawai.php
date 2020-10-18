<?php
$con->auth();
$conn=$con->koneksi();
switch(@$_GET['page']){
    case 'add':
        $page = "views/pegawai/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(empty($_POST['nama_pegawai'])){
                $error['nama_pegawai']="nama pegawai wajib";
            }
            if(empty($_POST['email'])){
                $error['email']="email wajib";
            }
            if(empty($_POST['alamat'])){
                $error['alamat']="alamat wajib";
            }
            if(empty($_POST['jabatan'])){
                $error['jabatan']="jabatan wajib";
            }
            if(empty($_POST['password'])){
                $error['password']="password wajib";
            }
            if(!is_numeric($_POST['telp'])){
                $error['telp']="telp wajib angka";
            }
            if(!isset($error)){
                if(!empty($_POST['id_pegawai'])){
                    $sql = "update pegawai set nama_pegawai='$_POST[nama_pegawai]', telp='$_POST[telp]', alamat='$_POST[alamat]', 
                    jabatan='$_POST[jabatan]',email='$_POST[email]', password=md5('$_POST[password]') where md5(id_pegawai)='$_POST[id_pegawai]'";
                }else{
                    $sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, telp, alamat, jabatan, email,  password) 
                    VALUES (NULL,'$_POST[nama_pegawai]','$_POST[telp]','$_POST[alamat]','$_POST[jabatan]','$_POST[email]', md5('$_POST[password]'))";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location:'.$con->site_url().'/admin/index.php?mod=pegawai');
                } else {
                    $error['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $error['msg']="Tidak diizinkan";
        }
        if(isset($error)){
            $page = "views/pegawai/tambah.php";
            include_once 'views/template.php';
        }
        $conn->close();
    break;
    case 'edit':
        $sql = "SELECT * FROM pegawai WHERE md5(id_pegawai)='$_GET[id]'";
        $pegawai = $conn->query($sql);
        $_POST=$pegawai->fetch_assoc();
        $_POST['id_pegawai']=md5($_POST['id_pegawai']);
       // var_dump($pelanggan);

        $page="views/pegawai/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $sql = "delete from pegawai WHERE md5(id_pegawai)='$_GET[id]'";
        $pelanggan = $conn->query($sql);
        header('Location:'.$con->site_url().'/admin/index.php?mod=pegawai');
    break;
    default :
        $sql = "select * from pegawai";
        $pegawai = $conn -> query($sql);
        $conn -> close();
        $page = "views/pegawai/tampil.php";
        include_once 'views/template.php';
} 
?>