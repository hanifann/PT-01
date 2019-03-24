<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script>
$(document).ready(function(){
  $("#button").click(function(){
    $("#div1").load("BayarBang.php");
  });
});
</script>
</head>
<body>
  <hr>
  <img class="mx-auto d-block" src="bca.png" alt="">

  <h6 class="text-center mt-12"><img class="mr-3" src="caution.png" alt="">Metode Pembayaran tidak dapat diganti</h6>
  <div class="row justify-content-center mt-4 mb-5">
    <div class="col-4">
      <button type="button" class="btn btn-outline-info col-lg-12">Tata Cara Pembayaran</button>
    </div>
    <div class="col-4">
      <button type="button" class="btn btn-info col-lg-12">Lanjutkan Pemmbayaran</button>
    </div>
  </div>

</div>
</body>
</html>
