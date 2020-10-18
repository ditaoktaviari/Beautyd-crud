<?php
if(isset($_POST['email'])){
    //action
    $conn = $con->koneksi(); // panggil koneksi

    $email = $_POST['email'];
    $psw = md5($_POST['password']);

    $sql = "SELECT * FROM login where password='$psw' and email='$email' and active='Y'";
    $user = $conn->query($sql);

    if($user->num_rows>0){
        $sess = $user->fetch_array();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id_login']=$sess['id_login'];

        header('Location:'.'http://localhost:8080/Beautyd/admin/index.php?mod');
        //echo "<script>location:'../index.php?mod=pelanggan';<script>";
    }else{
        $msg = "Email atau Password salah";
        include_once 'views/v_login.php';
    }
}else{
    include_once 'views/v_login.php';
}

?>