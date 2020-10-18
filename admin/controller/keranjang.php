<?php
$con->auth();
$conn=$con->koneksi();
switch(@$_GET['page']){
    case 'delete':
        $sql = "delete from keranjang WHERE md5(id_keranjang)='$_GET[id]'";
        $keranjang = $conn->query($sql);
        header('Location:'.$con->site_url().'/admin/index.php?mod=keranjang');
    break;
    default :
        $sql = "select * from keranjang join pelanggan using(id_pelanggan) join produk using(id_produk)";
        $keranjang = $conn -> query($sql);
        $conn -> close();
        $page = "views/keranjang/tampil.php";
        include_once 'views/template.php';
} 
?>