<?php
//add seminars
session_start();
require_once "pdo.php";

if ( isset($_POST['topic']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['venue']) && addslashes(file_get_contents ($_FILES['image']['tmp_name']))) {

      $sql = "INSERT INTO register (topic, date, time, venue, image) VALUES (:topic, :date, :time, :venue, :image)";

      $stmt = $pdo->prepare($sql);

      $stmt->execute(array(
        ':topic' => $_POST['topic'],
        ':date' => $_POST['date'],
        ':time' => $_POST['time'],
        ':venue' => $_POST['venue'],
        ':image' => file_get_contents ($_FILES['image']['tmp_name'])));
}

$stmt = $pdo->query("SELECT distinct topic, date, time, venue, image FROM register");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>

<title>Register</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="main(project).css">

</head>
<body>
 <nav class="navbar navbar-expand-md">
	<a class="navbar-brand" href="#">
        <p><strong>YK company</strong></p>
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
<h1 style="color:lightblue";>Register new seminar</h1>

        <form action="" method="POST" class="need-validated" enctype="multipart/form-data">
         <div class="form-group">
               <input type="text" class="form-control" placeholder="Topic" name="topic" id="topic" required>
	       <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
	</div>

         <div class="form-group">
               <input type="date" class="form-control" placeholder="Date" name="date" id="date" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
	</div>

	<div class="form-group">
               <input type="text" class="form-control" placeholder="Time" name="time" id="time" required>
	       <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
	</div>

	<div class="form-group">
               <input type="text" class="form-control" placeholder="Venue" name="venue" id="venue" required>
	       <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
	</div>

  <div class="form-group">
                <input class="form-control" type="file" name="image" />
  </div>

 	    <input type="submit" class="btn btn-primary btn-block" name="register" value="Register">
    </form>
</div>
</div>

<div class="container features">
<table style ="margin-left:auto; margin-right:auto; text-align:center; width:70%" border="1px solid">

<?php
echo "<h3 style=text-align:center>Seminar Available</h3>";

     echo"<th>";
     echo'Topic';
     echo("</th>");
     echo"<th>";
     echo'Date';
     echo("</th>");
     echo"<th>";
     echo'Time';
     echo("</th>");
     echo"<th>";
     echo'Venue';
     echo("</th>");
     echo"<th>";
     echo'Banner';
     echo("</th>");

foreach ( $rows as $row ) {

    echo "<tr><td>";
    echo($row['topic']);
    echo("</td><td>");
    echo($row['date']);
    echo("</td><td>");
    echo($row['time']);
    echo("</td><td>");
    echo($row['venue']);
    echo("</td><td>");
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="Image" style="width:150px; height:150px;" />';
    echo("</td></tr>\n");

}
?>
</table><br>
</div>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="main(project).js"></script>
</body>

</html>
