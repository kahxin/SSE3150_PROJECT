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
<html>
<head>

<title>About Us</title>
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

<div class="page-header about container-fluid">
<div class="overlay"></div>
<div class="description">
 <h1>Our Slogan</h1><br>

 <em><p>The untold stories behind your insurance policies.</p>

 <p>We tell you the truth that your insurance agents may not tell you.</p></em><br><br>

 <p>We are a group of professional insurance advisors, financial planners and risk management consultants who volunteer ourselves to help you planning for your future and protect your loved ones from potential financial risks. Our advice and seminars are completely FREE.</p>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="main(project).js"></script>
</body>
