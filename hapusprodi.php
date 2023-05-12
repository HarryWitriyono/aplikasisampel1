<?php $kodedihapus=$_GET['kodeprodi'];
if (isset($_GET['kodeprodi'])) {
 $sql="delete from prodi where kodeprodi='".$kodedihapus."'";
 $kon=mysqli_connect("localhost","root","","aplikasisampel1");
 $q=mysqli_query($kon,$sql);
 if ($q) {
	 echo "<script>alert('Rekord sudah dihapus !');</script>";
 } else {
	 echo "<script>alert('Rekord gagal dihapus !');</script>";
 }
 header('location:prodi.php');
}
?>