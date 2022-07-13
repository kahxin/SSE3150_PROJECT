<?php
include_once('pdo.php');

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $stmt = $pdo->prepare("SELECT * FROM login WHERE username='".$username."' && password='".$password."'");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {
      if(($user['username'] == $username) &&
            ($user['password'] == $password)) {
                header("location: admin(project).php");
        }
    }
}

?>

<h1>Invalid username and password</h1>