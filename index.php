<?php


include('controller.php');

$control = new controller;

//$control->allow_session_private();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php

        require_once('inc_nccfhead.php');

    ?>

    
    <title>NCCF - Home</title>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js" integrity="sha512-KCwrxBJebca0PPOaHELfqGtqkUlFUCuqCnmtydvBSTnJrBirJ55hRG5xcP4R9Rdx9Fz9IF3Yw6Rx40uhuAHR8Q==" crossorigin="anonymous"></script>


    
    <!--------- for fontawesome -------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    


    <!--------- for jquery -------->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    


    <!--------- for swiper -------->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    



    <!--------- for nivo slider -------->
    <link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />



    <!--------- for animate.css -------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    

    <!--------- for css styles -------->
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>

 
    <?php require_once 'nav.php'; ?>



    <!--------- header -----
    <header>

        
        <div class="logo">
            <a href="http://localhost/nccf/"><img src="http://localhost/nccf/image/nccflogo.png"></a>
        </div>

        <nav class="navbar">
            <a href="http://localhost/nccf/">home</a>
            <a href="#">about</a>
            <a href="#">contact</a>
            <a href="#">blog</a>
            <a href="https://music.nccfebonyi.com/" target="_blank">media</a>
            <a href="http://localhost/nccf/gallery/">gallery</a>
            <a href="#">donate</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
            <div id="menu-bar" class="fas fa-bars"></div>
        </div>

        <form action="#" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>



    </header>
--->

    

    <!--------- home -------->
    <div class="home" id="home">
        <div class="content">
            <h3>Rural Rugged Evangelism</h3>
            <p>our vision</p>
            <a href="#" class="btn">know more</a>
        </div>
    
        <div class="controls">
            <span class="vid-btn active" data-src="video/nccfvideo1.mp4"></span>
            <span class="vid-btn" data-src="video/nccfvideo2.mp4"></span>
            
        </div>

        <div class="video-container">
            <video src="video/nccfvideo1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

            
        <ul class="sci">
            <li class="playpause-icon"><ion-icon name="pause-outline" class="active"></ion-icon></li>
            <li class="picturemode-icon"><ion-icon name="image-outline"></ion-icon></li>
            <li><ion-icon name="videocam-outline"></ion-icon></li>
            
        </ul>
    </div>

    <!--------- home2 -------->
    <section class="home2" id="home">
        <div class="home2img">
            
                    <!-- Swiper -->

                    <div id="slider" class="nivoSlider">

                        <img src="img/20.jpg" alt="" title="#htmlcaption1" data-transition="boxRainGrowReverse" />


                        <img src="image/bg1.jpg" alt="" title="#htmlcaption1" data-transition="sliceDown" />



                        <img src="img/21.jpg" data-thumb="images/up.jpg" alt=""
                                title="#htmlcaption2" data-transition="slideInLeft" />



                        <img src="img/22.jpg" alt="" data-transition="fold" title="#htmlcaption3" />




                        <img src="img/17.jpg" alt="" title="#htmlcaption4" data-transition="boxRainGrow" />

                        



                    </div>



                    <!-- Swiper end  -->
            
        </div>
        <div class="content">
            <h3>
                <span>NCCF</span>
                <span>EBONYI</span>
            </h3>
            <p>
                The Nigeria Christian Corpers' Fellowship (NCCF) is a body of Christian Corps members currently serving the nation across the 
                federation. It is an inter-denominational, non-denominational and non ethical fellowship. It is an independent body which is not 
                affiliated to or sponsored by anybody within or outside Nigeria.
            </p>
            <a href="#" class="btn">know more</a>
        </div>

        
        <ul class="sci">
            <li><ion-icon name="play-outline" class="icon-disabled"></ion-icon></li>
            <li><ion-icon name="image-outline" class="active"></ion-icon></li>
            <li class="videomode-icon"><ion-icon name="videocam-outline"></ion-icon></li>
            
        </ul>
    </section>


    <div class="tood-all">

        <!----------------- section1 ----------------->

        <section class="section1">
            <div class="about">
                <div class="about-text">
                    <h1>Our Mission</h1>
                    <p>Our core vision at the Nigerian Christian Corpers Fellowship is to ensure that Corps members encounter Jesus Christ and 
                        are effectively equipped to preach the gospel and at the same time disciple men everywhere they find themselves in the 
                        thirty-six states of Nigeria.
                    </p>
                    <div class="about-link-below">
                        <hr>
                        <a href="#">ABOUT US</a>
                    </div>
                </div>
                <div class="about-image">
                    <div class="allimage">
                        <div class="image-set">
                            <img class="lozad" src="image/imgplaceholder.png" data-src="image/img1.jpg">
                        </div>
                        <div class="image-set">
                            <img class="lozad" src="image/imgplaceholder.png" data-src="image/img2.jpg">
                        </div>
                        <div class="image-set">
                            <img class="lozad" src="image/imgplaceholder.png" data-src="image/img3.JPG">
                        </div>
                        <div class="image-set">
                            <img class="lozad" src="image/imgplaceholder.png" data-src="image/img4.JPG">
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>



        <!----------------- section2 ----------------->

        <section class="section2">
            <div class="welcome">
                <div class="welcome-bg">
                    <img src="image/bg1.jpg" alt="">
                </div>
                <div class="welcome-content">
                    <div class="welcome-content-img">
                        <img class="lozad" src="image/imgplaceholder.png" data-src="image/president.jpeg" alt="NCCF President">
                    </div>
                    <div class="welcome-content-text">
                        <h1>Welcome To The Nigerian Christians Corpers Fellowship</h1>
                        <p>Hello friends! It's my profound pleasure to welcome you to the Salt of the Nation. The Nigeria Christian Corpers' Fellowship,
                            of which we are a branch, is a child of Prophecy and what sustains us is the supernatural force of that same spoken word! 
                            The gospel of Christ has been committed to us for maximum dispersion in our state of existence, the nook and crannies are 
                            our major targets. We are rugged about our convictions for Christ, and it shows in all we do. Let me also make it clear 
                            that the spiritual welfare of each and every Corp member God brings in here is our business, so you are our business. 
                            We would love to meet with you, do well to stop by as soon as you arrive
                        </p>
                        <h2>Iheanyi Elewa Success</h2>
                        <h3>NCCF President</h3>
                    </div>
                </div>
            </div>
        </section>





        <!----------------- section3 ----------------->

        
        <div class="section3">
        
        <div class="section3whole">
            <div class="section3wholebottom">
                <div class="gallery">
                    <div class="gallery-img">
                        <img src="img/15.jpg" alt="">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-asc">
                            <p>JOIN US & connect with other Jesus Corp members as we</p>
                            <h2>Worship Together</h2>
                            <a id="join-us-btn" href="#">Join Now</a>
                        </div>
                    </div>
                </div> 
    
                <div class="gallery">
                    <div class="gallery-img">
                        <img src="img/12.jpg" alt="">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-asc">
                            <p>We welcome you to be a part of the family as we</p>
                            <h2>Live Together</h2>
                            <a id="view_gallery" href="#">View Gallery</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        </div>




        <!----------------- section4 ----------------->

        
        <div class="section4">
        
        <div class="section4whole">
            <div class="section4wholebottom">
                <div class="gallery">
                    <div class="gallery-img">
                        <img src="img/8.jpg" alt="">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-asc">
                            <hr>
                            <p>Royal Priesthood</p>
                            <h5>one name, one love, one family</h5>
                            <div class="asc-icon">
                                <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="gallery-desc">
                            <h3>Royal Priesthood</h3>
                            <br>
                            <p>Royal Priesthood provides caring and loving environment for developing 
                                children in preparation for the Nursery 
                            </p>
                            <div class="desc-link">
                                <a href="#">read more</a>
                            </div>
                            
                        </div>
                    </div>
                </div> 

                <div class="gallery">
                    <div class="gallery-img">
                        <img src="img/20.jpg" alt="">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-asc">
                            <hr>
                            <p>Rugged Family</p>
                            <h5>connecting the world to Christ</h5>
                            <div class="asc-icon">
                                <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="gallery-desc">
                            <h3>Rugged Family</h3>
                            <br>
                            <p>Rugged Family focuses on encouraging the child to become independent by working together 
                                with the environment to help  
                            </p>
                            <div class="desc-link">
                                <a href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery">
                    <div class="gallery-img">
                        <img src="img/5.jpg" alt="">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-asc">
                            <hr>
                            <p>Kitchen Family</p>
                            <h5>making the stomach smiles </h5>
                            <div class="asc-icon">
                                <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="gallery-desc">
                            <h3>Kitchen Family</h3>
                            <br>
                            <p>Kitchen Family focuses on encouraging the child to become independent by working together 
                                with the environment to help  
                            </p>
                            <div class="desc-link">
                                <a href="#">read more</a>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>

        </div>

        
        <!----------------- nfcalender ----------------->

        
        <div class="nfcalender">

            <?php
            include('calender/index.php');
            ?>

        </div>


        <!----------------- nfallcontain ----------------->

        
        <div class="nfallcontain">

                <?php
                include('allcontain.php');
                ?>

        </div>


        <!----------------- section5 ----------------->

        
        <div class="section5">
            <div class="section5all">
                <div class="section5overlay">
                    <img src="img/19.jpg" alt="">
                </div>
                <div class="section5content">
                    <h1>Rural Rugged Evangelism</h1>
                    <h2>Together we can make an impact</h2>
                    <p>We spread the love and gospel of Jesus, through humanitarian services and evangelism, it is an integral part of our fellowship. We need each other to get through this journey, 
                        because we can do more, be more, and endure more when we're walking through life together.
                    </p>
                    <button id="get-involved">Get Involved</button>
                </div>
            </div>
        </div>
        
    </div>



    <!--- Footer Start-->
        <?php

            include('footer.php');

        ?>

    
    
    <!--- Footer Closed-->





    <!--------- site construction notice with cookie function -------->
    <div class="sectiononprocess">
        <div class="onprocess">
            <div class="mainprocess">
                <div class="head">
                    <div class="noticeimg"><img src="http://localhost/nccf/image/nccflogo.png" alt="nccf"></div>
                    <h3> Site Construction notice</h3>
                    <i class="fas fa-times closi"></i>
                </div>
                <div class="bottom">
                    <h1>This site is under construction and therefore will always be changes and updates at all time.</h1>
                    <h2>Please, bear with us if we cause you any inconveniences</h2>
                    <!--
                    <p>You can visit our Music page to enjoy our tons of music playlist</p>
                    <button> Visit music page </button>
                    -->
                    <form id="exam_form" method="post">
                        <label class="close-forever">
                            <input type="checkbox" name="close-mainprocess-input" value="1" class="close-mainprocess-input" id="close-mainprocess-input-id">
                            don't show me this again
                        </label>
                        
	        		    <input type="hidden" name="page" value="exam" />
                        <input type="submit" id="submit" name="submit" class="cookiesubmitBtn" value='Close'>
                    </form>
                   
                    <?php
                     /*
                        if (isset($_COOKIE["sitenotice"]))
                        {
                            echo "Auction Item is " . $_COOKIE["sitenotice"];
                        }
                        else
                        {
                            echo "No items for auction.";
                        }
                        */
                    ?>
                    
                </div>
            </div>
            
        </div>
    </div>


<!---
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
            integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
            crossorigin="anonymous"></script>
--->
    <script src="scroll/jquery.waypoints.min.js"></script>
    <script src="scroll/waypointscroll.js"></script>



    <!----------------- script section ----------------->
    
    <?php

        require_once('inc_nccffoot.php');

    ?>




    <script>

        function getCookie(name) {
            var dc = document.cookie;
            var prefix = name + "=";
            var begin = dc.indexOf("; " + prefix);
            if (begin == -1) {
                begin = dc.indexOf(prefix);
                if (begin != 0) return null;
            }
            else
            {
                begin += 2;
                var end = document.cookie.indexOf(";", begin);
                if (end == -1) {
                end = dc.length;
                }
            }
            // because unescape has been deprecated, replaced with decodeURI
            //return unescape(dc.substring(begin + prefix.length, end));
            return decodeURI(dc.substring(begin + prefix.length, end));
        } 


        function doSomethingcookie() {
            var myCookie = getCookie("sitenotice");

            if (myCookie == null) {
                // cookie doesn't exist;
                
                setTimeout(function () {
                    $('.sectiononprocess').toggleClass('active');
                }, 4000);

            }
            else {
                // cookie exists
            }
        }
        doSomethingcookie();



        /* lazy loads */
        const observer = lozad(); // lazy loads elements with default selector as '.lozad'
        observer.observe();

    </script>


    <script>
        $(function () {
                    
            

            $('.closi').click(function () {
                $('.sectiononprocess').toggleClass('active');
                Notiflix.Notify.Info('Thanks for Understanding');
            });


            $('.bottom button').click(function () {
                animate('.bottom button', 'animate__bounce');
                //set the timeout to load url starts
                setTimeout(function () {
                     window.open('https://music.nccfebonyi.com/', '_blank');
                }, 1300);
                //set the timeout to load url ends
                return false;
            });

        

            $('#join-us-btn').click(function () {
                animate('#join-us-btn', 'animate__bounce');
                //set the timeout to load url starts
                setTimeout(function () {
                    Notiflix.Report.Info(
                        'Usage Info',
                        '"Sorry, this option will be available for use in the next version" <br/><br/> - Admin',
                        'Okay',
                        {
                            svgSize: '42px',
                            messageMaxLength: 1923,
                            plainText: false,
                        }
                    );
                }, 800);
                //set the timeout to load url ends
                return false;
            });

            $('#view_gallery').click(function () {
                animate('#view_gallery', 'animate__bounce');
                //set the timeout to load url starts
                setTimeout(function () {
                    window.location = 'http://localhost/nccf/gallery';
                }, 800);
                //set the timeout to load url ends
                return false;
            });



            // Animate
            function animate(element, animation) {
                $(element).addClass('animate__animated ' + animation);
                var wait = setTimeout(function () {
                    $(element).removeClass('animate__animated ' + animation);
                }, 1000);
            }



        });
    </script>

    


            
    <!-- Swiper JS

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 -->

    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>

 <!-- 
    <script type="text/javascript">
        $('#slider').nivoSlider({
        backgroundSize:'687px 400px',
        effect: 'random',
        animSpeed: 500,
        pauseTime: 3000,
        directionNav: true,
        controlNav: true,
        controlNavThumbs: false,
        pauseOnHover: true});
    </script>
JS -->

    <script type="text/javascript">
        $('#slider').nivoSlider({

            effect: 'fade',


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

            prevText: ' <i class="fas fa-chevron-left"  style="padding-left: 50px; font-size: 1rem; color: white;"></i>',

            nextText: '<i class="fas fa-chevron-right" style="padding-right: 50px; font-size: 1rem; color: white;"></i>',

            randomStart: false,

            beforeChange: function () {},

            afterChange: function () {},

            slideshowEnd: function () {},

            lastSlide: function () {},

            afterLoad: function () {}

        });
    </script>


    
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
          // Disable preloading of all images
        preloadImages: false,
        // Enable lazy loading
        lazy: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        loop: true,
        effect: "fade",
        /*
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        */
        pagination: {
         el: ".swiper-pagination",
          clickable: true,
        },
        
      });
    </script>


<script>

  $(document).ready(function(){

      $('#exam_form').on('submit', function(event){
		event.preventDefault();
        //mainprocess_input = $(this).val();
      // alert(mainprocess_input);
     // console.log(mainprocess_input);

     //var form_data = new FormData();
        $.ajax({
            url:"ajaxup.php",
            method:"POST",
            data:$(this).serialize(),
            dataType:"json",
            success: function (response) {
                if (response.status == 1) {
                    //alert(response.message);
                    setTimeout(function () {
                        Notiflix.Notify.Success('You will not be shown this message again');
                    }, 300);
                    console.log(response.message);
                    $('.sectiononprocess').toggleClass('active');
                }else{
                    console.log(response.message);
                    $('.sectiononprocess').toggleClass('active');
                }


            }
        });
      
    });

  });

</script>




  
</body>
</html>