<?php 
    @include '../db_connect/config.php';

   



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-reg.css">
    <title>register</title>
</head>
<body>
    <div class="container"> 
        <div class="reg-left">
            <div class="reg-header">
                <h1>Registration Form</h1>
                <p>Track our programmes, manage your child future !</p>

            </div>
            <form action="#" class="reg-form" method="POST"> 
                <div class="reg-form-content">
                    <div class="form-item">
                        <label for="uname">User Name</label>
                        <input type="text" id="uname" name="uname" required>
                    </div>
                    <div class="form-item">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                    <div class="form-item">
                        <label for="password">Enter Password</label>
                        <input type="password" id="password" name="psw" required>
                    </div>
                    <div class="form-item">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpsw" required>
                    </div>
                   
                    <button type="submit" name="submit">Sign Up</button>
                    <div class="regnow">
                            <p>Already have an account?   <a href="login.php">  Log in</a> now</p>
                            
                    </div>
                </div>
           
            </form>
        </div>
        <div class="reg-right">
            <h1>Sandamini Pre School</h1>
            <h3>Adding Colours to your Child Dream.</h3>
        </div>
    </div>
    
</body>
</html>

