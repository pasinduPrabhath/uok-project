
<?php 
    @include 'config.php';
    session_start();
   
    
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="payment-page.css">
    <title>Document</title>
</head>
<body>
    
    <div id="home" class="navbar">
        <nav>
            <h2 class="logo">Sandamini Pre School</h2>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li id="payment"><a href="payment/payment.html">Payments</a></li>
            </ul>
        </nav>
        
    </div>

    

    <div class="payment-section">
        <h2>Monthly Payments</h2>
        <h3>Sandamini Pre School</h3>
        <div>
            <h4>Hi, <span id="uname" style="color:blue;"></span> your ,</h4>
            <script>
                var uname= '<?php echo $_SESSION['user_name']; ?>';
                document.getElementById("uname").innerHTML = uname;
             </script>

        </div>
        <div class="pay-amount">
            
            <h2>Monthly Payment : <span id="payment-status"></span></h2>
            <button id="pay" onclick="location.href='checkout.html'">Pay Now</button>
            <script>
                var payment= '<?php echo $_SESSION['payment_status']; ?>';
                
               if(payment==1){
                document.getElementById("payment-status").innerHTML = "Already done !";
                document.getElementById("payment-status").style.color = "green";
                document.getElementById("pay").style.display ="none";
               }else{
                document.getElementById("payment-status").innerHTML = "Rs 4000/=";
               }
              
             </script>
            
        </div>
    </div>
</body>
</html>