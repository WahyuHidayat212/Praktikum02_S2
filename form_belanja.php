<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header style="background-color: gainsboro">
<nav style="display: flex; align-items: center; padding: 10px; border-bottom: 1px solid black">
        <ul style="margin-right: 50px; display: flex; list-style-type: none; gap: 10px">
          <li>
            <i class="bi bi-square-fill"></i>
            <a>Belanja Online</a>
          </li>
        </ul>
</nav>
</header>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
    <form class="form-horizontal mt-3" method="POST" action="form_belanja.php">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Costumer</label> 
                <div class="col-6">
                <input id="nama_costumer" name="nama_costumer" placeholder="Nama costumer" type="text" class="form-control" size="30">
                </div>
            </div>
            <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-4">
                <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-9">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
    </div>
<div class="col-6">
		<div class="col-md-8">
    <form class="form-horizontal mt-3">
			<div class="list-group">
				 <a  class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV Rp. 3.200.000
				</div>
				<div class="list-group-item">
					KULKAS Rp. 3.100.000
				</div>
        <div class="list-group-item">
					MESIN CUCI Rp. 3.800.000
				</div>
				</div> <a  class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</a>
			</div>
		</div>
		</div>
	</div>
</div>
  <footer style="margin-top: 50px; border-top: 1px solid black; padding: 1px; display: grid; gap: 10px">

  </footer>
</form>
</div>
<br/>  
  <?php
        if (isset($_POST['proses'])) {
          $nama_costumer = $_POST['nama_costumer'];
          $produk = $_POST['produk'];
          $jumlah = $_POST['jumlah'];
          $TV = 3200000;
          $KULKAS = 3100000;
          $MESIN = 3800000;
          
          echo '<br/>Costumer : '.$nama_costumer;
          echo '<br/>Jenis Produk : '.$produk;
          echo '<br/>Jumlah : '.$jumlah;
        }
  
       

        if(isset($produk)){
        }if($produk == "TV"){ 
          $hasil = $TV * $jumlah ; 
          
        }if($produk == "KULKAS"){ 
          $hasil = $KULKAS * $jumlah ; 
          
        }if($produk == "MESIN"){ 
          $hasil = $MESIN * $jumlah ; }
          {
           echo '<br/>Total Pembayaran : '.$hasil; 
          }
  ?>
</body>
</html>