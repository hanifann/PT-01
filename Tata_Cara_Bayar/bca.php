<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="bayar">
    <hr>
    <img class="mx-auto d-block mb-3" src="bca.png" alt="">

    <h6 class="text-center mt-12"><img class="mr-3" src="caution.png" alt="">Metode Pembayaran tidak dapat diganti</h6>
    <div class="row justify-content-center mt-4 mb-5">
      <div class="col-4">
        <button type="button" class="btn btn-outline-info col-lg-12" data-toggle="modal" data-target="#myModal">Tata Cara Pembayaran</button>
      </div>
      <div class="col-4">
        <button type="button" id="lanjut" class="btn btn-info col-lg-12">Lanjutkan Pembayaran</button>
      </div>
    </div>
    <button class="btn btn-secondary" id="kembali" name="button">
      <img class="mr-3" src="left.png" alt="">Kembali
    </button>
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tata Cara Pembayaran</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="Bayar-BCA.jpg" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  // PRASASTI JAVASCRIPT
  // $(document).ready(function(){
  //   $("#kembali").click(function(){
  //     $("#bayar").load("BayarBang.php #tabelBayar");
  //   });
  // });

  $(document).on("click","#kembali",function() {
    $("#bayar").load("BayarBang.php #tabelBayar");
  });

  $(document).ready(function(){
    $("#lanjut").click(function(){
      $("#bayar").load("lanjut.php");
    });
  });
  </script>
</div>
</body>
</html>
