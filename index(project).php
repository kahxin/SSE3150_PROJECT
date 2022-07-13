<?php
//Register form
require_once "pdo.php";

if ( isset($_POST['name']) && isset($_POST['mobile'])
      && isset($_POST['email']) && isset($_POST['occupation'])) {

      $sql = "INSERT INTO users (name, mobile, email, occupation) VALUES (:name, :mobile, :email, :occupation)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
        ':name' => $_POST['name'],
        ':mobile' => $_POST['mobile'],
        ':email' => $_POST['email'],
        ':occupation' => $_POST['occupation']));
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Yap Kah Xin and Kong Chee Kei</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="main(project).css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
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

                 <form class="modal-content animate" action="loginpage.php" method="POST">
                   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Form">&times;</span>
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
                     <span class="psw"><a href="changepassword.php">Change password?</a></span>
                   </div>

                   </div>
                 </form>
               </div>
           </li>
       </ul>
    </div>
</nav>

   <header class="page-header header container-fluid">
   <div class="overlay"></div>
   <div class="description">
    <h1>Welcome to YK Insurance</h1>
    <p>Upload your insurance policy here and we will tell you what your insurance agent didn’t you. You will know if you have overpaid your insurance, and you may cash out what you have paid for the last few years without compromising the protection on your current policy.</p>
    <p>Join our FREE seminar and let the experts tell you the truth about your insurance policy.</p>
</div>

</header>

<div class="container features">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title">Terms and Conditions</h3>
            <div class="my-custom-scrollbar table-wrapper-scroll-y">
            <p><strong>Termination of contract and payment of insurance premium balance</strong></p>
            <p>1. The policyholder may cancel the medical insurance contract by giving at least one month notice of cancellation, taking into
                  account that the contract expires upon expiry of the insurance period.</p>
            <p>2. The insurer has the right to cancel a health insurance contract concluded for a shorter period than one year by giving at least
                  three days’ notice thereof.</p>
            <p>3. The insurer has the right to ordinarily cancel a health insurance contract within the first three years by giving notice
                  thereof one month in advance.</p>
            <p>4. If the insurer increases the premium or excess or reduces its obligations, the policyholder may cancel the contract within
                  one month as of receipt of the notice of change. In such case, the insurance contract shall expire upon entry into force of the
                  increase of insurance premium or the reduction of obligations.</p>
            <p>5. The policyholder may withdraw from the insurance contract within 14 days as of conclusion of the contract. To this end,
                  the policyholder shall submit a written withdrawal application to the insurer. If the policyholder withdraws from the contract,
                  the insurer will refund the insurance premiums paid by the policyholder, subtracting administration costs according to
                  the applicable price list.</p>
            <p>6. Upon cancellation of and withdrawal from the contract, the policyholder has the right for refund of the premium paid for
                  the remaining insurance period, from which the insurer may deduct 25% for administrative costs. Upon refunding the premium,
                  account shall be taken, inter alia, of the degree to which the insurer already has or is about to have the obligation to
                  pay indemnity</p></div>
            <div class="form-check mb-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember">I have read and agree with the terms and conditions.
              </label></div>

      </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Policy documents upload</h3>
          <p><strong>Upload your policy and mobile number, our agents will contact you soon.</strong></p>
          <form method="POST" action="uploader.php" enctype="multipart/form-data">
        <div class="drop-zone">
        <span class="drop-zone__prompt">Drag and Drop a file or click to upload</span>
        <input type="file" name="fileToUpload" class="drop-zone__input form-control">
        </div><br>
        <input type="submit" value="Upload" name="submit"/>
        </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
             <h3 class="feature-title">Register Here!</h3>
          <form action="" method="POST" class="need-validated">
         <div class="form-group">
               <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
             </div>

         <div class="form-group">
               <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" id="mobile" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
             </div>

         <div class="form-group">
               <input type="text" class="form-control" placeholder="Email Address"name="email" id="email" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
             </div>

         <div class="form-group">
              <input type="text" class="form-control" placeholder="Occupation"name="occupation" id="occupation" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
             </div>

        <input type="submit" class="btn btn-primary btn-block" value="Send" name="">
       </form>
      </div>

    </div>

    <div class="btn-container">
      <a href="https://www.instagram.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" class="btn-ins">
        <i class="fab fa-instagram"></i>
        <span>Instagram</span>
      </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" class="btn-f">
        <i class="fab fa-facebook"></i>
        <span>Facebook</span>
      </a>
    </div>

</div>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

     <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

     <script src="main(project).js"></script>

    </body>

</html>
