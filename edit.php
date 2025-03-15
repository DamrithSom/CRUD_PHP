<?php
include ('connection.php');
$i = $_GET['id'];
$sql = "SELECT * FROM users_tb WHERE id = $i";
$rs = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .form-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 20px 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #666;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class='form-container'>
        <h1>Update Personal Information</h1>
        <form action='update.php' method='post'>
        <?php
  while($row=$rs->fetch_row()){
    // echo "$row[0] $row[1] $row[2] $row[3]";
  echo "
        <div class='form-group'>
                <label for='id'>Id:</label>
                <input type='text' id='name' name='id' readonly value='".htmlspecialchars($row[0], ENT_QUOTES, 'UTF-8')."'>
            </div>
            <div class='form-group'>
                <label for='name'>Name:</label>
                <input type='text' id='name' name='name' value='".htmlspecialchars($row[1], ENT_QUOTES, 'UTF-8')."'>
            </div>
            <div class='form-group'>
                <label for='age'>Age:</label>
                <input type='number' id='age' name='age' value='".htmlspecialchars($row[2], ENT_QUOTES,'UTF-8')."' min='0' max='150'>
            </div>
            <div class='form-group'>
                <label for='address'>Address:</label>
                <textarea id='address' name='address'>'".$row[3]."' </textarea>
            </div>
            
           <button type='submit'>Update</button>
        </form>
    </div>
  ";
}
  ?>

</body>
</html>


