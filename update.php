<?php
include ('connection.php');
    $i = $_POST['id'];
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Address = $_POST['address'];
    $sql = "UPDATE users_tb SET name='$Name', age='$Age', address='$Address' WHERE id='$i'";
    $conn->query($sql);
    header('Location:dashboard.php');

?>