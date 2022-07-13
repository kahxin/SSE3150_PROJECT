<?php
session_start();
require_once "pdo.php";

$stmt1 = $pdo->query("SELECT * FROM users");
$stmt2 = $pdo->query("select users.mobile, agent.agent_name, agent.email, agent.status, agent.remark from users join agent on users.user_id = agent.user_id;");
$stmt3 = $pdo->query("select register.topic, register.date, users.email, users.status, users.remark from register join users on register.user_id = users.user_id;");

$rows1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
$rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$rows3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>

<title>Info</title>
<meta charset="utf-8">

</head>
<body style="background:lightgrey">

<h1 style="color:black; text-align:center">Info list</h1>

<div class="container features">
<div class="row">

<div class="container features">
<table style ="margin-left:auto; margin-right:auto; text-align:center; width:50%" border="1px solid">

<?php
echo "<h3 style=text-align:center>List of participants</h3>";

     echo"<th>";
     echo'Name';
     echo("</th>");
     echo"<th>";
     echo'Mobile';
     echo("</th>");
     echo"<th>";
     echo'Email';
     echo("</th>");
     echo"<th>";
     echo'Occupation';
     echo("</th>");

foreach ( $rows1 as $row ) {
    
     echo "<tr><td>";
     echo($row['name']);
     echo("</td><td>");
     echo($row['mobile']);
     echo("</td><td>");
     echo($row['email']);
     echo("</td><td>");
     echo($row['occupation']);
     echo("</td></tr>\n");
}
?>
</table><br>
</div>

<div class="container features">
<table style ="margin-left:auto; margin-right:auto; text-align:center; width:50%" border="1px solid">

<?php
echo "<h3 style=text-align:center>List of contact</h3>";

     echo"<th>";
     echo'Mobile';
     echo("</th>");
     echo"<th>";
     echo'Agent name';
     echo("</th>");
     echo"<th>";
     echo'Agent email';
     echo("</th>");
     echo"<th>";
     echo'Status';
     echo("</th>");
     echo"<th>";
     echo'Remark';
     echo("</th>");


foreach ( $rows2 as $row ) {
     echo "<tr><td>";
     echo($row['mobile']);
     echo("</td><td>");
     echo($row['agent_name']);
     echo("</td><td>");
     echo($row['email']);
     echo("</td><td>");
     echo($row['status']);
     echo("</td><td>");
     echo($row['remark']);
     echo("</td></tr>\n");
}
?>
</table><br>
</div>

<div class="container features">
<table style ="margin-left:auto; margin-right:auto; text-align:center; width:50%" border="1px solid">

<?php
echo "<h3 style=text-align:center>List of seminar</h3>";

     echo"<th>";
     echo'Topic';
     echo("</th>");
     echo"<th>";
     echo'Date';
     echo("</th>");
     echo"<th>";
     echo'Participant email';
     echo("</th>");
     echo"<th>";
     echo'Status';
     echo("</th>");
     echo"<th>";
     echo'Remark';
     echo("</th>");

foreach ( $rows3 as $row ) {
     echo "<tr><td>";
     echo($row['topic']);
     echo("</td><td>");
     echo($row['date']);
     echo("</td><td>");
     echo($row['email']);
     echo("</td><td>");
     echo($row['status']);
     echo("</td><td>");
     echo($row['remark']);
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
