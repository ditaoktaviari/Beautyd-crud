<?php
$con->auth();
$conn=$con->koneksi();
switch(@$_GET['page']){
    case 'add':
        $page = "views/pelanggan/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(empty($_POST['nama_pelanggan'])){
                $error['nama_pelanggan']="nama pelanggan wajib";
            }
            if(empty($_POST['email'])){
                $error['email']="email wajib";
            }
            if(empty($_POST['alamat'])){
                $error['alamat']="alamat wajib";
            }
            if(empty($_POST['password'])){
                $error['password']="password wajib";
            }
            if(!is_numeric($_POST['telp'])){
                $error['telp']="telp wajib angka";
            }
            if(!isset($error)){
                if(!empty($_POST['id_pelanggan'])){
                    $sql = "update pelanggan set nama_pelanggan='$_POST[nama_pelanggan]', email='$_POST[email]', 
                    telp='$_POST[telp]', alamat='$_POST[alamat]', password=md5('$_POST[password]') where md5(id_pelanggan)='$_POST[id_pelanggan]'";
                }else{
                    $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, email, telp, alamat, password) 
                    VALUES (NULL,'$_POST[nama_pelanggan]','$_POST[email]','$_POST[telp]','$_POST[alamat]', md5('$_POST[password]'))";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location:'.$con->site_url().'/admin/index.php?mod=pelanggan');
                } else {
                    $error['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $error['msg']="Tidak diizinkan";
        }
        if(isset($error)){
            $page = "views/pelanggan/tambah.php";
            include_once 'views/template.php';
        }
        $conn->close();
    break;
    case 'edit':
        $sql = "SELECT * FROM pelanggan WHERE md5(id_pelanggan)='$_GET[id]'";
        $pelanggan = $conn->query($sql);
        $_POST=$pelanggan->fetch_assoc();
        $_POST['id_pelanggan']=md5($_POST['id_pelanggan']);
       // var_dump($pelanggan);

        $page="views/pelanggan/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $sql = "delete from pelanggan WHERE md5(id_pelanggan)='$_GET[id]'";
        $pelanggan = $conn->query($sql);
        header('Location:'.$con->site_url().'/admin/index.php?mod=pelanggan');
    break;
    default :
        $sql = "select * from pelanggan";
        $pelanggan = $conn -> query($sql);
        $conn -> close();
        $page = "views/pelanggan/tampil.php";
        include_once 'views/template.php';
} 
?>