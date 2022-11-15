

<?php
    
    @include '../db_connect/config.php';
    session_start();
   

    if(isset($_POST['submit'])){
        $email =$_POST['email'];
        $password=$_POST['psw'];

        $sql ="select *from user where email ='". $email."' AND password= '". $password."' limit 1";

        $result=mysqli_query($con,$sql);
        $row =mysqli_fetch_array($result);

        if(mysqli_num_rows($result)==1){
            $_SESSION['user_name']=$row['name'];
            $_SESSION['payment_status'] =$row['payment'];
            $_SESSION['email']=$row['email'];




            echo "you have successfully logged in !";
            header('location:../index.php');
            
            exit();
        }else{
            echo "your details mismatch !";
            exit();

        }

        

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <title>Log in</title>
</head>
<body>
    <div class="container"> 
        <div class="login-left">
            <div class="login-header">
                <h1>Sandamini Pre School</h1>
                <p>Adding Colours to your Child Dream.</p>

            </div>
            <form action="#" class="login-form" method="POST"> 
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="email">Enter Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                    <div class="form-item">
                        <label for="password">Enter Password</label>
                        <input type="password" id="password" name="psw" required>
                    </div>
                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="rememberMeCheckbox">
                            <label for="RememberMeCheckbox" id="checkboxLabel">Remember Me</label>
                        </div>
                      
                    </div>
                    <button type="submit" name="submit">Sign In</button>
                    <div class="regnow">
                            <p>dont have an account? <a href="register.html">register now</a></p>
                            
                        </div>
                </div>
            <!--   <div class="login-form-footer">
                    <a href="#">
                        <img src="img/fb.png" width="30" alt="">login with Facebook
                    </a>
                    <a href="#">
                        <img src="img/google.png" width="30" alt="">Login with Google
                    </a>
                </div>  -->
            </form>
        </div>
        <div class="login-right">
            <img  src="img/prescl.jpg">
        </div>
    </div>
    
</body>
</html>

