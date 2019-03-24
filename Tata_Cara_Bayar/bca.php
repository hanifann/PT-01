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
<div class="container border mt-3">
  <h5 class="text-center mt-4">Total Pembelian</h5>
  <h5 class="text-center" style="color:#FF7300;">Rp. 500.000</h5>
</div>
</body>
</html>
