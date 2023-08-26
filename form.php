<!DOCTYPE html>
<html lang="en" style="background-color: #FFBFBF;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>

    <div class="container">
        <div class="header">
            <span id="title">LOGIN</span>
            <div class="content">
                <form action="data.php" method="post">
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

</body>
</html>