<?php
include ('connection.php');
$sql = "SELECT * FROM users_tb";
$rs = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2>Php CRUD</h2>
    <a href="create.php"><button class="add-btn">Add</button></a>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if($rs->num_rows > 0){
                while($row=$rs->fetch_row())

                {
                echo "
                    <tr>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>
                             <a href='edit.php?id=$row[0]'><button class='edit-btn'>Edit</button></a>
                            <a href='delete.php?id=$row[0]'> <button class='delete-btn'>Delete</button></a>  
                        </td>
                    </tr>
                    ";
                }
            }
            else{
                echo "<tr><td colspan='4'>No data found</td></tr>";
            }
           
        ?>
         
        </tbody>
    </table>
</body>
</html>