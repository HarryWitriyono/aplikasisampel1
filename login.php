<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Login Form</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="KodeLogin">Kode login:</label>
      <input type="text" class="form-control" id="KodeLogin" placeholder="Enter kode login" name="KodeLogin">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary" name="bLogin">Submit</button>
  </form>
  <?php 
  if (isset($_POST['bLogin'])) {
	  $KodeLogin=$_POST['KodeLogin'];
	  $Password=$_POST['pswd'];
	  $kon=mysqli_connect("localhost","root","","aplikasisampel1");
	  $sql="select * from login where KodeLogin='".$KodeLogin."' and Password='".$Password."'";
	  $q=mysqli_query($kon,$sql);
	  $r=mysqli_fetch_array($q);
	  if (empty($r)) {
		  echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gagal Login!</strong> Anda gagal login silahkan ulangi lagi !.
</div>';echo $sql;
	  } else {
		  if (!isset($_SESSION)) session_start();
		  $_SESSION['_login']=$r['KodeLogin'];
		  header('location:index.php');
	  }
  }
  ?>
</div>

</body>
</html>