<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type"text/css">
.container{
    background-color: #4e73df;
    background-image: linear-gradient(180deg,#4e73df 10%,#224abe 100%);
    background-size: cover;
    padding:0%;
    margin:0%;
    width: 100%;
    height:100vh;
}
.conten{
    background-color:white;
    padding: 3% 4%;
    margin-top: 10%;
    border-radius: 3%;
}
.title{
    text-align: center;
    padding-bottom: 3%;
}
</style>
<body>
    <div class="container ">
        <div class="content center" >
            <div class="col-md-offset-4 col-md-4 conten">
                <form action="" method="POST">
                    <div class="form-group">
                        <h4 class="title"><b>LOGIN</b></h4>
                        
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password"  name="password" class="form-control" >
                        <span><?=(isset($msg))?$msg:'';?></span>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>