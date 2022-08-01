<?php
if (!isset($_SESSION)) {
  session_start();
}
include_once('connection.php');
$conn = connector();
if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];
    $select = "SELECT * FROM client_user WHERE user_name = '$user_name' AND pass_word = '$pass_word'";
    $result = $conn->query($select) or die($conn->error);
    $row = $result->fetch_assoc();
    $total = $result->num_rows;

    if ($total > 0) {
      $_SESSION['username'] = $row['user_name'];
      $_SESSION['access'] = $row['access'];

      echo header("Location: main.php");
    }else {
      echo "NO USER FOUND";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WELCOME</title>
</head>
<body>
  <form action="" method="POST" id="form_1">

    <label>USER</label><br>
    <input type="text" name="username"><br>
    <label>PASSWORD</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="submit">

  </form>
</body>
</html>
