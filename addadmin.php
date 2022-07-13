<?php
//add admin
require_once "pdo.php";

if ( isset($_POST['username']) && isset($_POST['password'])) {

      $sql = "INSERT INTO login (username, password) VALUES (:username, :password)";

      $stmt = $pdo->prepare($sql);

      $stmt->execute(array(
        ':username' => $_POST['username'],
        ':password' => $_POST['password']));

}

if ( isset($_POST['delete']) && isset($_POST['login_id']) ) {
    $sql = "DELETE FROM login WHERE login_id = :zip";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['login_id']));
} 


$stmt = $pdo->query("SELECT username, password, login_id FROM login");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>

<title>Add/Suspend</title>
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
               <a class="nav-link" href="admin(project).php">Admin page</a>
           </li>
</nav>

<div class="page-header about container-fluid">
<div class="overlay"></div>
<div class="description">
<h1 style="color:lightblue";>Add an admin by entering username and password!</h1>

<body>
        <form action="" method="POST" class="need-validated">
         <div class="form-group">
               <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
	       <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>             
	</div>

         <div class="form-group">
               <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>               
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>             
	</div>

 	    <input type="submit" class="btn btn-primary btn-block" value="Add">
    </form>
</div>
</div>

<div class="container features">
<table style ="margin-left:auto; margin-right:auto; text-align:center; width:50%" border="1px solid">

<?php
echo "<h3 style=text-align:center>Current exist admin's username and password</h3>";
echo "<p style=text-align:center;color:red;>*You may suspend the admin by clicking the button of delete.</h3>";

     echo"<th>";
     echo'Username';
     echo("</th>");
     echo"<th>";
     echo'Password';
     echo("</th>");
     echo"<th>";
     echo'Suspend';
     echo("</th>");

foreach ( $rows as $row ) {

    echo "<tr><td>";
    echo($row['username']);
    echo("</td><td>");
    echo($row['password']);
    echo("</td><td>");
    echo('<form method="post"><input type="hidden" ');
    echo('name="login_id" value="'.$row['login_id'].'">'."\n");
    echo('<input type="submit" value="Delete" name="delete">');
    echo("\n</form>\n");
    echo("</td></tr>\n");
}
?>
</table>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="main(project).js"></script>
</body>

</html>