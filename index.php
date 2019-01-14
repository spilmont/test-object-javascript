<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "cliient_lefauxsite";

$conn = new mysqli($serverName,$userName,$password);

if($conn->connect_error){
    die("connted failed : ".$conn->connect_error);
}else{
    $conn->select_db($dbname);
    echo "cc";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php  include "header.php"; ?>
<section id="container">
</section>
<script src="script.js"></script>
<?php include "footer.php"; ?>
</body>
</html>