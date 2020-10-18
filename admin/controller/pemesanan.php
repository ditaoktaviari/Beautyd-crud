<?php
$con->auth();
$conn=$con->koneksi();
switch(@$_GET['page']){
    case 'delete':
        $sql = "delete from pemesanan where md5(id_pemesanan)='$_GET[id]'";
        $pemesanan = $conn->query($sql);
        header('Location:'.$con->site_url().'/admin/index.php?mod=pemesanan');
    break;
    default :
        $sql = "select * from pemesanan join pelanggan using(id_pelanggan) join ongkir using(id_ongkir) join keranjang using(id_keranjang)"; 
        $pemesanan = $conn -> query($sql);
        $conn -> close();
        $page = "views/pemesanan/tampil.php";
        include_once 'views/template.php';
} 
?>