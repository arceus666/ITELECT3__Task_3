<!DOCTYPE html>
<html lang="en" style="background-color: #FFBFBF;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1 Page</title>
    
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <span id="title">LOGIN</span>
            <div class="content">
                <form  action="<?php $_SERVER["PHP_SELF"]?>" method="post">
                    <div class="form-row">
                        <label for="txtName" class="form-label">Enter Name:</label><br> 
                        <input type="text" name="txtName" class="form-control">
                    </div>
                    <div class="form-row">
                        <label for="txtName" class="form-label">Enter Email:</label><br>
                        <input type="text" name="txtEmail" class="form-control">
                    </div>
                    <div class="form-row">
                        <label for="">Enter Password:</label><br>
                        <input type="password" name="txtPass"  class="form-control">
                    </div>
                    <div class="form-row">
                        <label for="">Confirm Password:</label><br>
                        <input type="password" name="txtConPass" class="form-control">
                    </div>
                    <div class="form-row">
                        <input type="submit" value="REGISTER" name="Submit">
                        <input type="reset" value="CANCEL" name="Cancel">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style> 
   .container-form1{
    margin: 3svh 35svw 0 35svw;
    text-align: center;
    border: 1px solid black;
    border-radius: 25px;
    font-family: 'Segoe UI', sans-serif;
    background-color: #FFE5E5;
   }
    </style>
    <div class="container-form1">
    <div class="header-form1">
    <span id="title-form1"></span>
    <div class="form-row-form1">
    
       <?php

            if(isset($_POST['txtName'], $_POST['txtEmail'], $_POST['txtPass'])){
            $name = $_POST['txtName'];
            $email = $_POST['txtEmail'];
            $password = $_POST['txtPass'];
            
            echo "<h2>Registered Information:</h2>";
            echo "Your name is: ".$name."<br>";
            echo "Your email is: ".$email."<br>";
            echo "Your password is: ".$password."<br>";
        }
        ?>
            
    </div>
    </div>
    </div>
</body>
</html>