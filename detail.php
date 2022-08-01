<?php
include_once('connection.php');

$id = $_GET['ID'];
$conn = connector();
$display = "SELECT * FROM students WHERE ID = '$id'";
$result = $conn->query($display);
$row = $result->fetch_assoc();



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo $row['first_name'];?></h1>
</body>
</html>