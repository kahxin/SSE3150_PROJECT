<?php

require_once "pdo.php";

if (isset($_POST['update'])) {

    $username = $_POST['username'];
    $newpassword = $_POST['newpassword'];

$sql="UPDATE login SET password = :newpassword WHERE username = :username";
  $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':username' => $_POST['username'],
        ':newpassword' => $_POST['newpassword']));

echo'<script type = "text/javascript"> alert("Password Changed!")</script>';

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Change password</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="main(project).css">

</head>
<body>
  <nav class="navbar navbar-expand-md">
	<a class="navbar-brand" href="#">
        <p><strong> YK company</strong></p>
	</a>
   	
	<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
   	<span class="navbar-toggler-icon"></span>
   </button>  

    <div class="collapse navbar-collapse" id="main-navigation">
       <ul class="navbar-nav">
           <li class="nav-item">
               <a class="nav-link" href="index(project).php">Home</a>
           </li>
</nav>

<div class="page-header about container-fluid">
<div class="overlay"></div>
<div class="description">
<h1 style="color:lightblue";>Change password</h1>

<body>
        <form action="" method="POST" class="need-validated">
         <div class="form-group">
               <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
	       <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>             
	</div>

         <div class="form-group">
               <input type="password" class="form-control" placeholder="New Password" name="newpassword" id="newpassword" required>               
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>             
	</div>

 	    <input type="submit" class="btn btn-primary btn-block" name="update" value="Change Password">
	   
    </form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="main(project).js"></script>
</body>

</html>





