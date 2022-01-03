<?php


include('controller.php');

$control = new controller;

//$control->allow_session_public();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCCF | Login</title>

    <!--------- for fontawesome -------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">



    <!--------- for nivo slider -------->
    <link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


    <!--------- for css styles -------->
    <link rel="stylesheet" href="loginstylee.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    

<!-- previous jquery script for $(window).load(function() {})
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
	-->
	
    <script type="text/javascript">
        //$(window).load(function() {
            $(window).on('load', function(){
            //$(document).ready(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    
</head>

<body>
<div id="background"></div>
<div id="header"> </div>

<div id="main-tood">
    <!--- page-wrapper start -->
    <div class="tood-page-wrapper">


        <!--- section 3 --->

        <section class="section3">

            <div class="nccflogo">
                <a href="http://localhost/nccf/index.html"> <img src="http://localhost/nccf/image/nccflogo.png" alt="logo"
                        class="imglogo"></a>
            </div>


            <div class="information">
                <div class="details">
                    <div class="navbottom">

                        <!-- Swiper -->

                        <div id="slider" class="nivoSlider">



                            <img src="image/bg1.jpg" alt="" title="#htmlcaption1" />



                            <img src="image/img1.jpg" data-thumb="images/up.jpg" alt=""
                                    title="#htmlcaption2" />



                            <img src="image/img2.jpg" alt="" title="#htmlcaption3" />




                            <img src="image/img3.JPG" alt="" title="#htmlcaption4" />



                        </div>



                        <!-- Swiper end  -->
                    </div>
                </div>



                <div class="logindetails">
                    <!------ Login form starts -->
                    <div class="loginbox">
                        <div class="containerlog">
                            <div class="loginpanel">
                                <div class="loginhead">
                                    <div class="logdashimg"><img src="http://localhost/nccf/image/nccflogo.png" alt="nccf">
                                    </div>
                                    <h3> Login to Dashboard</h3>
                                </div>
                                <div class="loginbody">
                                    <form method="POST" name="login" id="user_login_form" action="">
                                        <div class="input-box">
                                            <input type="text" name="user_email_address" id="user_email_address"
                                                required /><br>
                                            <label>Enter Email Address</label><br>
                                        </div>

                                        <div class="input-box">

                                            <input type="password" name="user_password" id="user_password" required /> <br>
                                            <label>Enter Password</label>
                                        </div>


                                        <input type="hidden" name="Page" value="login" />
                                        <input type="hidden" name="action" value="login" />
                                        <div class="submitdiv">
                                            <input type="submit" name="user_login" id="user_login" class="btn btn-info"
                                                value="Login"><br>
                                        </div>
                                    </form>

                                    <div class="logbodyfoot">
                                        <p><span> <input type="checkbox"> stay signed in
                                            </span>
                                            <span style="float: right; font-style: normal;"><a href="#"
                                                    class="forgotusername">Forgot username?</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>


                                <div class="loginfooter">
                                    <p><button class="signup-btn">Create an account</button></p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!------ Login form end -->
                </div>
            </div>





                <!------ signup form starts -->
                <div class="bgmodal">
                </div>
                    
                    <div class="signupnow">

                        <div class="x-btn signup-x">
                            &times;
                        </div>

                        
                    </div>
                




        </section>


    </div>
 
    <footer>
        <div class="foot">
            <div class="footleft">
                <p id="footer-text1"> Nigeria Christian Corpers' Fellowship (NCCF).
                    Copyright (c). All Rights
                    Reserved.
                </p>
            </div>

            <div class="footright">
                <p id="footer-text2">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>

                </p>
            </div>
        </div>

    </footer>





    <!--------- site construction notice with cookie function -------->
    <div class="sectioncontinuee">
        <div class="continuee">
            <div class="mainprocess">
                <div class="head">
                    <div class="noticeimg"><img src="http://localhost/nccf/image/nccflogo.png" alt="nccf"></div>
                    <h3> NCCF EBONYI</h3>
                    
                </div>
                <div class="bottom">
                    <div class="continueehide">
                        <h1>This site is under construction and therefore will always be changes and updates at all time.</h1>
                        <h2>Please, bear with us if we cause you any inconveniences</h2>
                        <p>You can visit our Music page to enjoy our tons of music playlist</p>
                        
                    </div>
                    <h2>Welcome to NCCF EBONYI</h2>
                    
                    
                </div>
                
                <form id="exam_form" method="post">
                        
                        
	        		    <input type="hidden" name="page" value="login" />
	        		    <input type="hidden" name="action" value="allow_user" />
                        <input type="submit" id="submit" name="submit" class="continuesubmitBtn" value='CONTINUE'>
                </form>
            </div>
            
        </div>
    </div>








</div>






    <script>
        $(function () {


            setTimeout(function () {
                    $('.sectioncontinuee').toggleClass('active');
            }, 1000);

            $('.closi').click(function () {
                $('.sectioncontinuee').toggleClass('active');

            });


        });
    </script>








    <!-- Swiper JS -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>


    <script type="text/javascript">
        $('#slider').nivoSlider({

            effect: 'fold,fade,sliceDown,boxRainGrow',

            animSpeed: 800,

            pauseTime: 8000,

            startSlide: 0,

            directionNav: true,

            directionNavHide: true,

            controlNav: false,

            controlNavThumbs: false,

            keyboardNav: true,

            pauseOnHover: true,

            manualAdvance: false,

            prevText: ' <i class="fas fa-chevron-left"  style="padding-left: 50px; font-size: 1rem; color: white; z-index: 9900002;"></i>',

            nextText: '<i class="fas fa-chevron-right" style="padding-right: 50px; font-size: 1rem; color: white; z-index: 9900002;"></i>',

            randomStart: false,

            beforeChange: function () {},

            afterChange: function () {},

            slideshowEnd: function () {},

            lastSlide: function () {},

            afterLoad: function () {}

        });
    </script>

 



<script src="loginscript.js"></script>



<script>

  $(document).ready(function(){

      $('#exam_form').on('submit', function(event){
		event.preventDefault();
        //mainprocess_input = $(this).val();
      // alert(mainprocess_input);
     // console.log(mainprocess_input);

     //var form_data = new FormData();
        $.ajax({
            url:"ajax.php",
            method:"POST",
            data:$(this).serialize(),
            dataType:"json",
            success: function (response) {
                if (response.status == 1) {
                    //alert(response.message);
                    console.log(response.message);
                    window.location.href = "index.php";
                }else{
                    console.log(response.message);
                    $('.sectioncontinuee').toggleClass('active');
                }


            }
        });
      
    });

  });

</script>




</body>

<div class="se-pre-con"></div>
<script type="text/javascript">
function headerAdjustment(){
	if(window.innerWidth > 767){
		$('#header').addClass('desktop-header').removeClass('mobile-header');
	}else{
		$('#header').addClass('mobile-header').removeClass('desktop-header');
	}
}

$(window).on('load resize',function(){
	headerAdjustment();
});




</html>