<?php include "header.php"; ?>
<main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">

                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">with patrick potter</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Build Perfect body Shape for good and Healthy life.</h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">with patrick potter</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Build Perfect body Shape for good and Healthy life.</h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
 <!--? Want To work -->
        <section class="wantToWork-area w-padding">
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-6 col-md-9 col-sm-9">
                        <div class="section-tittle">
                            <span>one of </span>
                            <h2>our Most Exprienced Trainers</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="contact.php" class="btn wantToWork-btn f-right">contact us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Team Ara Start -->
        <div class="team-area pb-150">
            <div class="container">
                <div class="row">
<?php
include "dbconnect.php";
$sql="select *,c.cname as cname,t.name as tname,t.image as timage,t.phoneno as tphone from trainer t,course c where t.courseid=c.id";
//echo "<script>alert('Hello');</script>";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
  {
?>


                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="uploads/<?php echo $row["timage"]; ?>" alt="">
                                <div class="team-caption">
                                   <span>GYM TRAINER</span>
                                    <h3><a href="#"><?php echo $row["tname"]; ?><br><br>CPR & AED certification</a></h3>
                                     <h3><a href="#"><?php echo $row["tphone"]; ?></a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<?php
}
?>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <?php include "footer.php";?>
          <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint, Hover Direction-->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>