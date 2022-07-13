<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Admin Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="main(project).css">
 	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
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
               <a class="nav-link" href="index(project).php">Log out</a>
           </li>
</nav>

  <div class="page-header about container-fluid">
  <div class="overlay"></div>
  <div class="description">
    <h1>Welcome back to admin page!</h1><br>
      <em><p>You're in! Click here to add and suspend an admin!</em></p>
      <form action="addadmin.php">
         <button type="submit">Add / Suspend Admin</button><br><br>
      </form>

      <em><p>You're in! Click here to register a new seminar!</em></p>
      <form action="register.php">
         <button type="submit">Register seminar</button><br><br>
      </form>

      <em><p>You're in! Click here to get all infomation!</em></p>
      <form action="info.php">
         <button type="submit">Info</button><br><br>
      </form>

</div>
</div>
 
	   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
           <script src="main(project).js"></script>

    </body>

</html>
