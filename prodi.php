<?php 
include_once('koneksi.db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Program Studi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <div class="row">
   <h2 class="col-sm-4">Program Studi</h2>
   <div class="col-sm-8">
   <form name="frmcari" method="post" class="input-group mb-8" target="frmhasil" action="hasilcariprodi.php">
   <input type="text" class="form-control" placeholder="Ketik kode atau nama prodi yang dicari" name="kCari" id="kCari">
   <button class="btn btn-success" type="submit" name="bCari">🔎 Go</button>
  </form>
   </div>
  </div> 
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="kodeprodi">Kode Prodi:</label>
      <input type="text" class="form-control" id="kodeprodi" placeholder="Ketik kode prodinya" name="kodeprodi">
    </div>
    <div class="mb-3">
      <label for="namaprodi">Nama Prodi:</label>
      <input type="text" class="form-control" id="namaprodi" placeholder="Enter nama prodi" name="namaprodi">
    </div>
   
    <button type="submit" class="btn btn-primary" name="bSimpan">💾 Simpan</button>
  </form>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $kodeprodi=$_POST['kodeprodi'];
	  $namaprodi=$_POST['namaprodi'];
	  $sql="insert into prodi (kodeprodi,namaprodi) values ('".$kodeprodi."','".$namaprodi."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
