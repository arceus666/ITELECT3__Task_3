<?php

$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$pass = $_POST['txtPass'];

?>
<html lang="en" style="background-color: #FFBFBF;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PAGE</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    
<div class="container-bg">
        <div class="header">
            <span id="title">User Information</span>
            <div class="content">
                    Username: <?php echo $name;?><br>
                    Email: <?php echo $email;?><br>
                    Password: <?php echo $pass;?><br>
                </span>
            </div>
        </div>
    </div>
    
</body>
</html>
