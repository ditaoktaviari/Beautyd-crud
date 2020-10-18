<?php
$con->auth();
$conn=$con->koneksi();
switch(@$_GET['page']){
    case 'add':
        $page = "views/ongkir/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(empty($_POST['nama_tujuan'])){
                $error['nama_kategori']="nama kategori wajib terisi";
            }
            if(!is_numeric($_POST['biaya'])){
                $error['nama_kategori']="biaya wajib angka";
            }
            if(!isset($error)){
                if(!empty($_POST['id_ongkir'])){
                    $sql = "update ongkir set nama_tujuan='$_POST[nama_tujuan]', biaya='$_POST[biaya]'  where md5(id_ongkir)='$_POST[id_ongkir]'";
                }else{
                    $sql = "INSERT INTO ongkir (id_ongkir, nama_tujuan, biaya) 
                    VALUES (NULL,'$_POST[nama_tujuan]','$_POST[biaya]')";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location:'.$con->site_url().'/admin/index.php?mod=ongkir');
                } else {
                    $error['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $error['msg']="Tidak diizinkan";
        }
        if(isset($error)){
            $page = "views/ongkir/tambah.php";
            include_once 'views/template.php';
        }
        $conn->close();
    break;
    case 'edit':
        $sql = "SELECT * FROM ongkir WHERE md5(id_ongkir)='$_GET[id]'";
        $ongkir = $conn->query($sql);
        $_POST=$ongkir->fetch_assoc();
        $_POST['id_ongkir']=md5($_POST['id_ongkir']);
       // var_dump($pelanggan);

        $page="views/ongkir/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $sql = "delete from ongkir where md5(id_ongkir)='$_GET[id]'";
        $ongkir = $conn->query($sql);
        header('Location:'.$con->site_url().'/admin/index.php?mod=ongkir');
    break;
    default :
        $sql = "select * from ongkir";
        $ongkir = $conn -> query($sql);
        $conn -> close();
        $page = "views/ongkir/tampil.php";
        include_once 'views/template.php';
} 
?>