<?php 
if (isset($_GET['npm'])) {
	$npmdihapus=$_GET['npm'];
	$sql="delete from mahasiswa where npm='".$npmdihapus."'";
	$kon=mysqli_connect("localhost","root","","aplikasisampel1");
	$q=mysqli_query($kon,$sql);
}
header('location:mahasiswa.php');
?>