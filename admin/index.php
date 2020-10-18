<?php
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    //panggil fungsi
    switch(@$_GET['mod']){
        case 'pelanggan':
            include_once 'controller/pelanggan.php';
        break;
        case 'pegawai':
            include_once 'controller/pegawai.php';
        break;
        case 'kategoriproduk':
            include_once 'controller/kategori_produk.php';
        break;
        case 'produk':
            include_once 'controller/produk.php';
        break;
        case 'ongkir':
            include_once 'controller/ongkir.php';
        break;
        case 'keranjang':
            include_once 'controller/keranjang.php';
        break;
        case 'pemesanan':
            include_once 'controller/pemesanan.php';
        break;
        default:
            include_once 'controller/home.php';
    } 
}else{
    //panggil login
    include_once 'controller/login.php';
}
?>