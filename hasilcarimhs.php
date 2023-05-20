<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-1">
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Program Studi</th>
		<th>Aksi Record</th>
      </tr>
    </thead>
    <tbody>
<?php
$kon=mysqli_connect("localhost","root","","aplikasisampel1");
if (isset($_POST['kCari'])) {
	$kCari=$_POST['kCari'];
	$sql="select * from mahasiswa where npm like '%".$kCari."%'";
	$q=mysqli_query($kon,$sql);
	$r=mysqli_fetch_array($q);
	do {
?>	
      <tr>
        <td><?php echo $r['npm'];?></td>
        <td><?php echo $r['namamahasiswa'];?></td>
        <td><?php echo $r['sex'];?></td>
		<td><?php echo $r['tempatlahir'];?></td>
		<td><?php echo $r['tanggallahir'];?></td>
		<td><?php echo $r['alamat'];?></td>
		<td><?php echo $r['kodeprodi'];?></td>
		<td><?php echo $r['npm'];?></td>
      </tr>
	<?php } while($r=mysqli_fetch_array($q));
}
?>
    </tbody>
</table>
</div>
</body>
</html>