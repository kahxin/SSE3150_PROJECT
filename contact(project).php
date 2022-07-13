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
        <title>Contact Us</title>
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

    <div class="page-header contact container-fluid">
    <div class="overlay"></div>
    <div class="description">

    <h1>Contact Us</h1>
    <p >At YK company, we believe in building meaningful relationships with our customers and partners.
      Contact us in person at the below address, via the phone,or visit us at our customer service centres.
      We would like to hear from you, be it an enquiry.</p>
    </div>
  </div>

<div class="container features">
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12" style="color:black; text-align: center;">
	<br>
	<h3 style="color:darkblue;">Customer Service</h3>
	<p>General Line and for Overseas customer <br>
	<strong>+603 0218 1229</strong></br></p>

<p>Customer Service Careline <strong>1300-1300 00</strong></p>
<p>Fax Life insurance <strong>+603 8000 8000</strong></p>
<p>Fax General Insurance <strong>+603 6000 0006</strong></p>
<p style="color: red; font-size:10px;">*Please note that all calls will be recorded for quality improvement and training purposes.</p>
</div>

  <div class="col-lg-4 col-md-4 col-sm-12" style="color:black; text-align: center;">
	<br>
	<h3 style="color:darkblue;">Department Service</h3>
	<h6>Life Insurance Complaint Handling</h6>
	<p><strong>+603 4813 3738</strong></p><br>
	<p>Monday to Friday 8:30am to 5:15pm<br>
	(except Public Holiday)<br>
	Lunch Hour: 12:00pm to 1:00pm</br></p>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12" style="color:black; text-align: center;">
	<br>
	<h4 style="color:darkblue;">Life Claims - Death, Living Assurance, Total Permanent Disability & Accident Claims</h4>
	<p>Menara YK Company<br>
	   Level 12, Life Claims Department<br>
	   No. 218 Jalan Ampang<br>
 	   50450 Kuala Lumpur</br></p>
	<p>Email: <strong>claim.my@ykcompany.com</strong></p><br>
  </div>

</div>

	   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
           <script src="main(project).js"></script>

    </body>

</html>
