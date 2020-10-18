<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beautyd-Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
body{
    padding: 0;
    margin:0;
}
.container{
    width : 100%;
    padding: 0;
    margin:0;
}
.nav-ul{
    background-color: #4e73df;
    margin-bottom:unset;
    height:74vh;
}
.nav-list{
    background-color: #4e73df;
    padding: 6% 0% 5% 0%;
    margin: 3% 0% 3% 10%;
    border:unset;
    border-bottom: 1px solid #b2b2b2;
}
.nav-list:hover{
    color:white;
}
.text-list{
    color:#e9e9e9;
}
.text-list:hover{
    color:white;
    text-decoration:none;
    transition: .3s;
}
.content-right{
    padding: 2% 4% 2% 3%;
}
.footer{
    background-color:#4e73df;
    height:10vh;

    color:white;
    line-height: 70px;
}
</style>
<body>

    <div class="container">
        <nav class="navbar navbar-default" style="background-color: #4e73df; margin: 0px; padding: 2% 2%;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                          </button>
                    <a class="navbar-brand" style="color: white; border-radius:unset;" href="index.php?mod">SISTEM INFORMSI BEAUTYD</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../admin/controller/logout.php" style="color: white;"><span class="glyphicon glyphicon-log-in" style="color: white;"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content" >
            <ul class="list-group col-md-2 col-xs-2 nav-ul">
                <li class="list-group-item nav-list"><a href="index.php?mod" class="text-list"> <i class="fa fa-tachometer "></i> <span class="hidden-xs">DASHBOARD</span></a></li>
                <li class="list-group-item nav-list"><a href="index.php?mod=pelanggan" class="text-list"> <i class="fa fa-address-card "></i> <span class="hidden-xs">Data Pelanggan</span></a></li>
                <li class="list-group-item nav-list"><a href="index.php?mod=pegawai" class="text-list"> <i class="fa fa-address-card "></i> <span class="hidden-xs">Data Pegawai</span></a></li>
                <li class="list-group-item nav-list"><a href="index.php?mod=kategoriproduk" class="text-list"> <i class="fa fa-address-card "></i> <span class="hidden-xs">Data Kategori Produk</span></a></li>
                <li class="list-group-item nav-list"><a href="index.php?mod=produk" class="text-list"> <i class="fa fa-address-card "></i> <span class="hidden-xs">Data Produk</span></a></li>
                <li class="list-group-item nav-list"><a href="index.php?mod=ongkir" class="text-list"> <i class="fa fa-address-card  "></i> <span class="hidden-xs">Data Ongkir</span></a></li>
                <li class="list-group-item nav-list"><a href="index.php?mod=keranjang" class="text-list"> <i class="fa fa-address-card  "></i> <span class="hidden-xs">Data Keranjang</span></a></li>
                <li class="list-group-item nav-list"><a href="index.php?mod=pemesanan" class="text-list"> <i class="fa fa-address-card  "></i> <span class="hidden-xs">Data Pesanan</span></a></li>
            </ul>
            <div class="col-md-10 col-xs-10 content-right">
                <?php include_once $page; ?>
            </div>
        </div>
        
    </div>
    <footer class="container-fluid text-center footer">
        <p>&copy Copy Right 2020</p>
    </footer>
    <div id="myModal " class="modal fade " role="dialog ">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content ">
                <div class="modal-header ">
                    <button type="button " class="close " data-dismiss="modal ">&times;</button>
                    <h4 class="modal-title ">Berhasil</h4>
                </div>
                <div class="modal-body ">
                    <p></p>
                </div>
                <div class="modal-footer ">
                    <button type="button " class="btn btn-default " data-dismiss="modal ">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>