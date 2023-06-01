<?php 
include_once('koneksi.db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
 <div class="row">
  <div class="col-sm-4">
  <h2>Rekord Mahasiswa</h2>
  </div>
  <div class="col-sm-8">
   <form method="post" action="hasilcarimhs.php" target="frmhasilcari" class="input-group">
    <input type="text" name="kCari" placeholder="Ketik nomor pokok mahasiswa yang dicari" class="form-control">
	<input type="submit" value="🔎 Go" class="btn btn-info">
   </form>
  </div>  
 </div> 
 <form action="" method="post">
  <div class="row">
   <div class="col-sm-5">
    <div class="mb-3 mt-3">
      <label for="npm">NPM :</label>
      <input type="text" class="form-control" id="npm" placeholder="Ketik kode npm-nya" name="npm">
    </div>
    <div class="mb-3">
      <label for="namamahasiswa">Nama Mahasiswa:</label>
      <input type="text" class="form-control" id="namamahasiswa" placeholder="Enter nama mahasiswanya" name="namamahasiswa">
    </div>
	<div class="mb-3">
	 <label for="sex" class="form-label">Jenis Kelamin:</label>
     <select class="form-select" id="sex" name="sex">
      <option value="P">Perempuan</option>
      <option value="L">Laki-laki</option>
    </select>
    </div>
	<div class="input-group">
	<div class="mb-3">
      <label for="tempatlahir">Tempat Lahir:</label>
      <input type="text" class="form-control" id="tempatlahir" placeholder="Enter tempat lahir mahasiswanya" name="tempatlahir">
    </div>
	<div class="mb-3">
      <label for="tanggallahir">Tanggal Lahir:</label>
      <input type="date" class="form-control" id="tanggallahir" placeholder="Enter tempat lahir mahasiswanya" name="tanggallahir">
    </div>
	</div>
   </div>
   <div class="col-sm-6">   
	
	<div class="mb-3">
      <label for="alamat">Alamat mahasiswa:</label>
      <textarea title="Enter alamat tinggal mahasiswanya" name="alamat" class="form-control">
	  </textarea>
    </div>
	<div class="mb-3">
	 <label for="kodeprodi" class="form-label">Kode Prodi:</label>
     <select class="form-select" id="kodeprodi" name="kodeprodi">
	 <?php 
	 $sql="select * from prodi";
	 $q=mysqli_query($kon,$sql);
	 $r=mysqli_fetch_array($q);
	 do {
	 ?>
      <option value="<?php echo $r['kodeprodi'];?>"><?php echo $r['namaprodi'];?></option>
	 <?php 
	 } while($r=mysqli_fetch_array($q));
	 ?>
    </select>
    </div>
    <button type="submit" class="btn btn-primary" name="bSimpan">💾 Simpan</button>
   </div>
  </div>
  </form>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $npm=$_POST['npm'];
	  $namamahasiswa=$_POST['namamahasiswa'];
	  $sex=$_POST['sex'];
	  $tempatlahir=$_POST['tempatlahir'];
	  $tanggallahir=$_POST['tanggallahir'];
	  $alamat=$_POST['alamat'];
	  $kodeprodi=$_POST['kodeprodi'];
	  
	  $sql="insert into mahasiswa (npm,namamahasiswa,sex,tempatlahir,tanggallahir,alamat,kodeprodi) values ('".$npm."','".$namamahasiswa."','".$sex."','".$tempatlahir."','".$tanggallahir."','".$alamat."','".$kodeprodi."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
<div class="row">  
<iframe name="frmhasilcari" class="col-sm-12"></iframe>  
</div>
</div>
</body>
</html>
