<?php
require '/opt/lampp/htdocs/PT-01/register/conpik.php';

if(isset($_POST["login"])){
    login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <link href="http://allfont.net/allfont.css?fonts=1-vivaldi-bold" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>
      <img style="width:15%" src="kambing.png" alt="">
    </h1>
    <hr>
    <div class="container">
      <div class="col-md-6">
        <img src="pohon.png" class="img-responsive img-log" alt="">
      </div>
      <div class="col-md-6 text-center">
        <div class="g">
          <h3 class="head">Login </h3>
          <form class="login" action="" method="post">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="username" placeholder="username" autofocus required>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="password" placeholder="password" required>
            </div>
            <button class="btn btn-info" type="submit" name="login">Login</button>
          </form>
          <p>Belum Punya akun? silahkan <a href="/register/register.php">daftar</a></p>
        </div>
      </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  <footer>
    <hr>
    <p style="text-align:center;font-face:opensans">Coyright &copy; KebunKu 2019</p>
</html>
