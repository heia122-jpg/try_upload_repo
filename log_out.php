<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['access']);
echo header("Location: main.php");
?>