<?php
$con->auth();
$conn=$con->koneksi();
switch(@$_GET['page']){
    case 'add':
        $kategori="select * from kategori_produk";
        $kategori=$conn->query($kategori);
        $page = "views/produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(empty($_POST['nama_produk'])){
                $error['nama_produk']="nama produk wajib terisi";
            }
            if(empty($_POST['file_gambar'])){
                $error['file_gambar']="gambar produk wajib terisi";
            } 
            if(!is_numeric($_POST['harga_modal'])){
                $error['harga_modal']="harga modal wajib angka";
            }
            if(!is_numeric($_POST['harga_jual'])){
                $error['harga_jual']="harga jual wajib angka";
            }
            if(!is_numeric($_POST['stok'])){
                $error['stok']="stok wajib angka";
            }
            if(!is_numeric($_POST['berat'])){
                $error['berat']="berat wajib angka";
            }
            if(!is_numeric($_POST['id_kategori'])){
                 $error['id_kategori']="kategori produk wajib terisi";
            }
            if(!isset($error)){
                //$id_kategori=$_SESSION['login']['id_kategori'];
                if(!empty($_POST['id_kategori'])){
                    if($file_gambar != NULL){
                        $ektensi = array('png', 'jpg');
                        $x = explode('.', $file_gambar);//memisahkan ektensi file dengan ektensi yang diupload
                        $ektensi2 = strtolower(end($x));
                        $file_tmp = $_FILES['file_gambar']['tmp_name'];
                        $angka_acak = rand(1,999);
                        $nama_baru = $angka_acak.'-'.$file_gambar;
                        
                        if(in_array($ektensi2, $ektensi === true)){
                            move_uploaded_file($file_tmp, '../../media'.$nama_baru); //memindahkan file ke folder gambar
                            $sql = "update produk set nama_produk='$_POST[nama_produk]', harga_modal='$_POST[harga_modal]', harga_jual='$_POST[harga_jual]', 
                            stok='$_POST[stok]', berat='$_POST[berat]', keterangan='$_POST[keterangan]', file_gambar='$nama_baru', id_kategori='$_POST[id_kategori]' 
                            where md5(id_produk)='$_POST[id_produk]'";

                        }else{
                            echo "<script>alert('Ektensi tidak cocok');<script>";
                            $page="views/produk/tambah.php";
                            include_once 'views/template.php';
                        }
                    }else{
                        $sql = "update produk set nama_produk='$_POST[nama_produk]', harga_modal='$_POST[harga_modal]', harga_jual='$_POST[harga_jual]', 
                        stok='$_POST[stok]', berat='$_POST[berat]', keterangan='$_POST[keterangan]', file_gambar='$nama_baru', id_kategori='$_POST[id_kategori]' 
                        where md5(id_produk)='$_POST[id_produk]'";
                    }
                }else{
                    if($file_gambar != NULL){
                        $ektensi = array('png', 'jpg');
                        $x = explode('.', $file_gambar);//memisahkan ektensi file dengan ektensi yang diupload
                        $ektensi2 = strtolower(end($x));
                        $file_tmp = $_FILES['file_gambar']['tmp_name'];
                        $angka_acak = rand(1,999);
                        $nama_baru = $angka_acak.'-'.$file_gambar;
                        
                        if(in_array($ektensi2, $ektensi === true)){
                            move_uploaded_file($file_tmp, '../../media'.$nama_baru); //memindahkan file ke folder gambar
                            $sql = "INSERT INTO produk (id_produk, nama_produk, harga_modal, harga_jual, stok, berat, keterangan, file_gambar, id_kategori) 
                            VALUES (NULL,'$_POST[nama_produk]','$_POST[harga_modal]','$_POST[harga_jual]','$_POST[stok]','$_POST[berat]','$_POST[keterangan]','$nama_baru','$_POST[id_kategori]')";

                        }else{
                            echo "<script>alert('Ektensi tidak cocok');<script>";
                            $page="views/produk/tambah.php";
                            include_once 'views/template.php';
                        }
                    }else{
                        $sql = "INSERT INTO produk (id_produk, nama_produk, harga_modal, harga_jual, stok, berat, keterangan, file_gambar, id_kategori) 
                        VALUES (NULL,'$_POST[nama_produk]','$_POST[harga_modal]','$_POST[harga_jual]','$_POST[stok]','$_POST[berat]','$_POST[keterangan]','$nama_baru','$_POST[id_kategori]')";
                    }
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location:'.$con->site_url().'/admin/index.php?mod=produk');
                } else {
                    $error['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $error['msg']="Tidak diizinkan";
        }
        if(isset($error)){
            $kategori="select * from kategori_produk";
            $kategori=$conn->query($kategori);
            $page = "views/produk/tambah.php";
            include_once 'views/template.php';
        }
        $conn->close();
    break;
    case 'edit':
        $sql = "SELECT * FROM produk WHERE md5(id_produk)='$_GET[id]'";
        $produk = $conn->query($sql);
        $_POST=$produk->fetch_assoc();
        $_POST['id_produk']=md5($_POST['id_produk']);
       // var_dump($pelanggan);
        $kategori="select * from kategori_produk";
        $kategori=$conn->query($kategori);
        $conn->close();
        $page="views/produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $sql = "delete from produk where md5(id_produk)='$_GET[id]'";
        $produk = $conn->query($sql);
        header('Location:'.$con->site_url().'/admin/index.php?mod=produk');
    break;
    default :
        $sql = "SELECT * FROM produk join kategori_produk on produk.id_kategori=kategori_produk.id_kategori";
        $produk = $conn -> query($sql);
        $conn -> close();
        $page = "views/produk/tampil.php";
        include_once 'views/template.php';
} 
?>