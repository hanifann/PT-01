<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <a href="">
          <div class="col md-4 mt-4 overflow-hidden">
            <div class="card" style="width: 25rem;">
              <iframe width="398" height="315" src="https://www.youtube.com/embed/oIZzIv2xRVU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <h5 class="card-title">Tutorial Bertani Cabai</h5>
                </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="col md-4 mt-4 overflow-hidden">
            <div class="card" style="width: 25rem;">
              <iframe width="398" height="315" src="https://www.youtube.com/embed/oIZzIv2xRVU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <h5 class="card-title">Tutorial Bertani Cabai</h5>
                </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="col md-4 mt-4 overflow-hidden">
            <div class="card" style="width: 25rem;">
              <iframe width="398" height="315" src="https://www.youtube.com/embed/oIZzIv2xRVU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <h5 class="card-title">Tutorial Bertani Cabai</h5>
                </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="col md-4 mt-4 overflow-hidden">
            <div class="card" style="width: 25rem;">
              <iframe width="398" height="315" src="https://www.youtube.com/embed/oIZzIv2xRVU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <h5 class="card-title">Tutorial Bertani Cabai</h5>
                </div>
            </div>
          </div>
        </a>

      </div>
    </div>

  </body>
</html>
