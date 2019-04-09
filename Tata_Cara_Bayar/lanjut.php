<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php'; 
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div id="lanjut">
      <p class="text-center">Mohon segera menyelesaikan pembayaran melalui transfer(ATM/Internet Bangking/Mobile Banking)<br>
      jika tidak maka transaksi anda akan dianggap gagal</p>
      <div class="row justify-content-center border mr-2 ml-2">
       <div class="col-4 border-right">
         <img class="img-fluid mx-auto d-block" src="bca.png" alt="">
         <h6 class="text-center">BCA</h6>
       </div>
       <div class="col-8">
         <p>Nomor Rekening Kebunku<br>
         4455422335662129574<br></p>
         <input type="file" class="form-control-file" id="foto_produk" name="poto_barang">
       </div>
     </div>
     <div class="row justify-content-center mt-4 mb-5">
       <div class="col-4">
         <button type="button" class="btn btn-outline-info col-lg-12" data-toggle="modal" data-target="#myModal">Tata Cara Pembayaran</button>
       </div>
       <div class="col-4">
           <button type="button" id="bukti" name="upload" class="btn btn-info col-lg-12">Upload bukti pembayaran</button>
       </div>
     </div>
     <button class="btn btn-secondary" id="kembali" name="button">
       <img class="mr-3" src="left.png" alt="">Kembali
     </button>
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
       <script type="text/javascript">
       $(document).ready(function(){
         $("#kembali").click(function(){
           $("#lanjut").load("bca.php #bayar");
         });
       });
       $(document).ready(function(){
         $("#bukti").click(function(){
           $("#bayar").load("lunas.php #bayar");
         });
       });
       </script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     </div>
  </body>
</html>
