<?php
//Admin login form
$status = "";

include_once('pdo.php');

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $pdo->prepare("SELECT * FROM login WHERE username='".$username."' && password='".$password."'");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {
      if(($user['username'] == $username) &&
            ($user['password'] == $password)) {
                header("location: admin(project).php");
        }
        else {

            $status = "Invalid admin account";
        }
    }
}

?>


<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Our Products</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="main(project).css">
    </head>

  <body>

    <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#"><strong>YK Company</strong></a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main-navigation">
       <ul class="navbar-nav">
           <li class="nav-item">
               <a class="nav-link" href="index(project).php">Home</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="about(project).php">About Us</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="product(project).php">Products</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="contact(project).php">Contacts</a>
           </li>
	 <li class="nav-item">
               <a class="nav-link" href="#"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></a>

               <div id="id01" class="modal">

                 <form class="modal-content animate" action="" method="POST">
                   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                   <div class="container1">
                     <h1 class="feature-title" style="text-align: center">Admin Login Form</h3>
                     <label for="username"><b>Username</b></label>
                     <input type="text" placeholder="Enter Username" name="username" id="username" required>

                     <label for="password"><b>Password</b></label>
                     <input type="password" placeholder="Enter Password" name="password" id="password" required>

                     <input type="submit" class="btn btn-primary btn-block" value="Login" name="">

                     <label>
                       <input type="checkbox" checked="checked" name="remember"> Remember me
                     </label>
                   </div>

                   <div class="container1" style="background-color:#f1f1f1">
                     <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
<form action="changepassword.php" method="POST">       
<span class="password"><a href="changepassword.php">Change password?</a></span></form>
                   </div>
                 </form>
               </div>
           </li>



       </ul>
    </div>
    </nav>

   <div class="page-header product container-fluid">
   <div class="overlay"></div>
   <div class="description">
    <h1>Protecting you and your family</h1><br>
    <p>Below show our products and services by YK insurance company. Your health and wellbeing is important to us.
	When it comes to staying well, physically, emotionally, and financially, we are with you all the way.</p>
   </div>
 </div>

<div class="container features">
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
	<h3 class="features-title">Life Protection</h3>
	<p>Protect yourself and your loved ones from life's uncertainties with YK's life insurance plans</p><br>
	<h3 class="features-title">Medical Protection</h3>
        <p>Avoid unforeseen medical expenses with YK's medical insurance plans</p><br>
	<h3 class="features-title">Crtical Illness Protection</h3>
        <p>Focus on your recovery and not your financial commitments when you have YK's critical illness insurance plans </p><br>
</div>
  <div class="col-lg-4 col-md-4 col-sm-12">
	<h3 class="features-title">Saving & Investment</h3>
	<p>Stay protected while you secure your future with YK's savings and investment plans</p><br>
	<h3 class="features-title">Accident Protection</h3>
        <p>Safeguard yourself from accidents with YK's personal accident insurance plans</p><br>
	<h3 class="features-title">Motor Insurance</h3>
        <p>Get comprehensive protection for your motor vehicles</p>
</div>
  <div class="col-lg-4 col-md-4 col-sm-12">
	<h3 class="features-title">Employee Benefits</h3>
	<p>Secure your company's most important asset through our market-leading solutions</p><br>
	<h3 class="features-title">Commercial Insurance</h3>
        <p>Secure your business against mishaps and damages</p><br>
</div>

</div>
</div>

	   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
           <script src="main(project).js"></script>

    </body>

</html>
