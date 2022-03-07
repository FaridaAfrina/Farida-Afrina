<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <h1>Belanja Online</h1>
  <div class="container-fluid">
	<div class="row">
    <!-- Bagian Kiri-->
		<div class="col-md-6">
    <form action="form_belanja.php" method="POST">
  
  <div class="form-group row">
    <label for="Costumer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="Costumer" name="Costumer" type="text" class="form-control" style="border: bold">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Pilih Produk_0" type="radio" class="custom-control-input" value="Tv"> 
        <label for="Pilih Produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Pilih Produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="Pilih Produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Pilih Produk_2" type="radio" class="custom-control-input" value="Mesin cuci"> 
        <label for="Pilih Produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_beli" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah_beli" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>
		</div>

<!--Bagian Kanan-->

		<div class="col-md-6">
    <ul class="list-group">
          <li class="list-group-item active">Daftar Harga</li>
          <li class="list-group-item"> TV : 4.200.000 </li>
          <li class="list-group-item"> Kulkas : 3.100.000</li>
          <li class="list-group-item"> Mesin Cuci : 3.800.000 </li>
          <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
      </ul>
		</div>
	</div>
</div>



<?php
$proses = $_POST["proses"];
$nama_costumer = $_POST["Costumer"];
$produk_pilihan = $_POST["Produk"];
$jumlah_beli = $_POST["jumlah"];

if($produk_pilihan == "Tv"){
    $total_belanja = $jumlah_beli * 4200000;
} elseif ($produk_pilihan == "Kulkas"){
  $total_belanja = $jumlah_beli * 3100000;
} elseif ($produk_pilihan == "Mesin cuci"){
  $total_belanja = $jumlah_beli * 3800000;
} else{
  $total_belanja = 0;
}


echo '<br> Nama Costumer:' . $nama_costumer;
echo '<br> Produk Pilihan:' . $produk_pilihan;
echo '<br> Jumlah Beli:' . $jumlah_beli;
echo '<br> Total Belanja: Rp.' . number_format($total_belanja,2,',','.'); 

?>


</body>
</html>