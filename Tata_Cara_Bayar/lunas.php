<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="bayar">
    <hr>
    <h1 class="text-center">Pembayaran Berhasil</h1>
    <button type="button" class="btn btn-secondary" id="kembali" name="button"><img class="mr-3" src="left.png" alt="">Kembali</button>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#kembali").click(function(){
      $("#bayar").load("BayarBang.php #tabelBayar");
    });
  });
  $(document).ready(function(){
    $("#lanjut").click(function(){
      $("#bayar").load("lanjut.php");
    });
  });
  //HOHO
  </script>
</div>
</body>
</html>
