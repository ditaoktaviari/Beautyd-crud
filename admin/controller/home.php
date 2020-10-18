<?php
$con->auth();
$conn=$con->koneksi();

switch(@$_GET['page']){
    
    default :
        $page = "views/home/tampil.php";
        include_once 'views/template.php';
} 
?>