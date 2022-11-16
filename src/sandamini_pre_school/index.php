
<?php 
    @include 'db_connect/config.php';
    session_start();
   
  session_destroy();
    
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="sloganani.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
   
    <title>Sandamini Pre School</title>
</head>
<body>
    
    <div id="home" class="navbar">
        <nav>
            <h2 class="logo">Sandamini Pre School</h2>
            <ul>
                <li><a href="#Programmes">Programmes</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li id="payment"><a href="payment/payment.php">Payments</a></li>
                <script>
                     document.getElementById("payment").style.display ="none";
                </script>
                <li><button onclick="location.href='log_reg_page/login.php'" id="loginBtn" >Log in <span></span></button></li>
                <li><a href="profile/profile.php"><span id="profile"></span></a></li>
              
            </ul>
        </nav>
        
    </div>

    <!-- log in button hide -->

    <script>
    var uname= '<?php echo $_SESSION['user_name']; ?>';
    if(uname !== null){
        document.getElementById("payment").style.display ="inline";
        document.getElementById("loginBtn").style.display ="none";
        
        document.getElementById("profile").innerHTML = 'log in as '+uname;
        document.getElementById("profile").style.color ="blue";

       
    }
 

    </script>

    <!-- end -->

    <div class="slideshow">
        <div class="namenslogan">
            <div class="name">
                <h1>Sandamini Pre School</h1>
            </div>
            <div class="slogan">
                 
                <H2 class="ml12">Adding Colours to your Child Dream.</H2>
            </div>
        </div>
       
        <img class="mySlides" src="img/1.jpg">
        <img class="mySlides" src="img/2.jpg">
        <img class="mySlides" src="img/3.jpg">
        <script src="js_files/slideshowControl.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="js_files/slogan_ani.js"></script>        
    </div>
    <div class="vission">
        <h2>Our vission</h2>
        <p>We believe that a happy child is a successful one. We are committed to providing a positive, 
            safe and stimulating environment for children to learn, where all are valued. We intend that all children should enjoy their
             learning, achieve their potential and become independent life-long learners.
        </p>
             <div class="target-img">
                <img src="img/target.png">
             </div>
      

    </div>
    <div class="Programmes" id="Programmes">
        <H2>Programmes</H2>
       
        <div class="row">
            <div class="container">
                <div class="test_box box-01">
                    <div class="inner">
                        <a href="#Programmes" class="test_click">
                            <div class="flex_this">
                                <h1 class="test_title">ESALA PERAHARA</h1>
                                <span class="test_link">The Kandy Esala Perahera also known as The Festival of 
                                    the Tooth is a festival held in July and August in Kandy, Sri Lanka. 
                                    This historical procession is held annually to pay homage to the Sacred 
                                    Tooth Relic of Buddha, which is housed at the Sri Dalada Maligawa in Kandy. </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="test_box box-02">
                    <div class="inner">
                        <a href="#Programmes" class="test_click">
                            <div class="flex_this">
                                <h1 class="test_title">ANNUAL SPORTMEET</h1>
                                <span class="test_link">A wide range of sporting activities specially designed for preschool children were
                                     also held this year and two sporting events namely ‘Kabadi’ and ‘Elle’ had been 
                                     included as special events. Besides, a relay sprint was scheduled for the NSVU members,
                                     preschool teachers and parents by the organizers. The participants were rewarded with special
                                      prizes. Meanwhile, the President of the NSVU gave away mementoes to the retired preschool teachers in recognition of their service.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="test_box box-03">
                    <div class="inner">
                        <a href="#Programmes" class="test_click">
                            <div class="flex_this">
                                <h1 class="test_title">AWRUDU</h1>
                                <span class="test_link">The Sinhala and Hindu New Year falls in the month of April every year.
                                     It is celebrated by Sinhala Buddhists and Tamil Hindus in Sri Lanka. They set their eyes 
                                     on the new moon before the New Year. We make preparations and decorate our houses before the 
                                     New Year dawns. Some clean up their gardens and houses before the New Year.</span>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
       
    </div>

    <div class="about-us">
        <h2>About Us</h2>
        <div class="about-us-content">
            <img src="img/about.png"  width="90%" alt="">
            <p>
            Preschool ought to energize chuckling, fun, and tolerance while giving a deal and minding condition that invigorates the physical.
             social. enthusiastic. what’s more, intellectual advancement of kids. <br><br>

            Our bespoke educational programs give a mix of scholarly aptitudes, individual information, and social mindfulness that
            empowers kids to figure out how without limitations of their capacities.<br><br>

            Setting them up or further training and deep rooted adapting little by aim and plan.
            ‘Sandamini pre school’ ‘ estimate is an extraordinary quality as it advances transparency, availability and joint effort.
            </p>
        </div>
    </div>

    <div class="d-flex flex-column h-100">



    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Sandamini Pre School</h5>
                    <p class="small text-muted">‘Sandamini pre school’ ‘ estimate is an extraordinary quality as it advances transparency, availability and joint effort.   </p>
                   
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#home">Get started</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#Programmes">Programmes</a></li>
                        <li><a href="#">Contact</a></li>
                       
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted">Get useful information & free resources directly to your inbox </p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>