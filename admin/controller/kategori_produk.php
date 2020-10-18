<?php
$con->auth();
$conn=$con->koneksi();
switch(@$_GET['page']){
    case 'add':
        $page = "views/kategori_produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(empty($_POST['nama_kategori'])){
                $error['nama_kategori']="nama kategori wajib terisi";
            }
            if(!isset($error)){
                if(!empty($_POST['id_kategori'])){
                    $sql = "update kategori_produk set nama_kategori='$_POST[nama_kategori]' where md5(id_kategori)='$_POST[id_kategori]'";
                }else{
                    $sql = "INSERT INTO kategori_produk (id_kategori, nama_kategori) 
                    VALUES (NULL,'$_POST[nama_kategori]')";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location:'.$con->site_url().'/admin/index.php?mod=kategoriproduk');
                } else {
                    $error['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $error['msg']="Tidak diizinkan";
        }
        if(isset($error)){
            $page = "views/kategori_produk/tambah.php";
            include_once 'views/template.php';
        }
        $conn->close();
    break;
    case 'edit':
        $sql = "SELECT * FROM kategori_produk WHERE md5(id_kategori)='$_GET[id]'";
        $kategori = $conn->query($sql);
        $_POST=$kategori->fetch_assoc();
        $_POST['id_kategori']=md5($_POST['id_kategori']);
       // var_dump($pelanggan);

        $page="views/kategori_produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $sql = "delete from kategori_produk where md5(id_kategori)='$_GET[id]'";
        $kategori = $conn->query($sql);
        header('Location:'.$con->site_url().'/admin/index.php?mod=kategoriproduk');
    break;
    default :
        $sql = "select * from kategori_produk";
        $kategori = $conn -> query($sql);
        $conn -> close();
        $page = "views/kategori_produk/tampil.php";
        include_once 'views/template.php';
} 
?>