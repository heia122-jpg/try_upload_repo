<?php
  if (!isset($_SESSION)) {
    session_start();
  }
  include_once('connection.php');
  if (isset($_SESSION['username'])) {
      echo "WELCOME ".$_SESSION['username'];
  }else{
      echo "HELLO GUEST <br>";
  }
  //display data
  $conn = connector();
  $display = "SELECT * FROM students";
  $result = $conn->query($display);
  $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main page</title>
</head>
<body>
  
  <?php echo (isset($_SESSION['username']))? "<a href='log_out.php'>Log out<a/> <br>":"<a href='log_in.php'>Log in<a/> <br>"; ?>
  <table>
    <thead>
      <th> </th>
      <th>first name</th>
      <th>last name</th>
    </thead>
    <tbody>
    <?php do{?>
      <tr>
      <td><a href="detail.php?ID=<?php echo $row['ID']; ?>">view</a></td>
      <td> <?php echo $row['first_name']; ?></td>
      <td> <?php echo $row['last_name']; ?></td>
      </tr>
      <?php }while($row = $result->fetch_assoc())?>
      

    
    </tbody>
  </table>
</body>
</html>