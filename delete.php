<?php
include ('connection.php');
$i = $_GET['id'];
$sql = "DELETE FROM users_tb WHERE id = $i";
$conn->query($sql);
header('Location:dashboard.php');
?>