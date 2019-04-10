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
  
    <link rel="stylesheet" href="BayarBang.css">
  </head>

  <body>
  <!--end of navbar 2-->

<!-- PANEL -->
<?php
bayar();
function bayar(){
  if (isset($_GET['bayarkau'])) {
    $id = $_GET['bayarkau'];
    $_SESSION['bayarkau'] = $id;
  }
  global $connBarang;
  $query = "SELECT * FROM jual_barang WHERE id_barang = '$id'";
  $result = mysqli_query($connBarang,$query);
  while ($row = mysqli_fetch_array($result)) {
    // code...
 ?>
<div class="container border mt-3">
  <h5 class="text-center mt-4">Total Pembelian</h5>
  <h5 class="text-center" style="color:#FF7300;">
    <?php
    $rupiah = "Rp ".number_format($row[6],0,',','.');
    echo "<p><b> $rupiah </b></p>"; ?>
  </h5>
  <?php
}
}
?>
  <table id="tabelBayar" class="table table-hover">
    <tbody>
      <tr>
        <td>
          <div id="bni" class="row">
            <div class="col-md-auto">
              <img style="width:50%;" src="bni.png" alt="">
            </div>
            <div class="col mt-1">
              <h7>BNI</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="bni" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="bri" class="row">
            <div class="col-md-auto">
              <img style="width:50%;" src="bri.png" alt="">
            </div>
            <div class="col mt-1">
              <h7>BRI</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="bri" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="bca" class="row">
            <div class="col-md-auto">
              <img style="width: 61.5px" src="bca.png" class="img-fluid" alt="">
            </div>
            <div class="col mt-1 ml-3">
              <h7 class="ml-5">BCA</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="bca" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="mandiri" class="row">
            <div class="col-md-auto">
              <img style="width:50%;" src="mandiri.png" alt="">
            </div>
            <div class="col mt-1">
              <h7>Mandiri</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="mandiri" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="hana" class="row">
            <div class="col-md-auto">
              <img style="width: 61.5px" src="hana.png" class="img-fluid" alt="">
            </div>
            <div id="" class="col mt-1 ml-3">
              <h7 class="ml-5">Hana bank</h7>
            </div>
            <div id="" class="col-lg-1">
              <button style="border:none;background:none;" id="hana" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="maybank" class="row">
            <div id="maybank" class="col-md-auto">
              <img style="width: 61.5px" src="maybank.png" class="img-fluid" alt="">
            </div>
            <div id="" class="col mt-1 ml-3">
              <h7 class="ml-5">Maybank</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="mayban" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
    <script>
      // PRASASTI JAVASCRIPT
      // $(document).ready(function(){
      //   $("#bni").click(function(){
      //     $("#tabelBayar").load("bni.php");
      //   });
      // });

      $(document).on("click","#bni",function() {
        $("#tabelBayar").load("bni.php");
      });

      $(document).on("click","#bri",function() {
        $("#tabelBayar").load("bri.php");
      });

      $(document).on("click","#bca",function() {
        $("#tabelBayar").load("bca.php");
      });

      $(document).on("click","#mandiri",function() {
        $("#tabelBayar").load("mandiri.php");
      });

      $(document).on("click","#hana",function() {
        $("#tabelBayar").load("hana.php");
      });

      $(document).on("click","#maybank",function() {
        $("#tabelBayar").load("maybank.php");
      });

      </script>
  </table>
</div>
</body>
