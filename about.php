<?php
    include('controller.php');
    $control = new controller;
?>

<!-- New Navbar -->
<html lang="en">

<head>

 <?php require_once('inc_nccfhead.php'); ?>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" type="image/jpg" href="image/favicon.svg" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="css/style-two.css">
 <title>NCCF Ebonyi</title>
</head>

<body>

 <?php require_once 'nav.php'; ?>

 <!-- Header -->
 <div class="pages-header">
  <div class="container">
   <div class="pages-header__image">
    <img src="image/nccf_opic.jpg" alt="" class="pages-header__image__picture">
   </div>
   <div class="pages-header__bg">
    <div class="pages-header__bg__section"></div>
    <div class="pages-header__bg__section"></div>
    <div class="pages-header__bg__section"></div>
    <div class="pages-header__bg__section"></div>
   </div>
   <div class="pages-header__content">
    <h2 class="heading-2">
     ABOUT
    </h2>
    <p class="paragraph">
     The Nigeria Christian Corpers' Fellowship (NCCF) is a body of Christian Corps members currently serving the nation across the federation. It is an inter-denominational, non-denominational and non ethical fellowship. It is an independent body which is not affiliated to or sponsored by anybody within or outside Nigeria. The Ebonyi State Chapter was founded in 19
    </p>
   </div>
  </div>
 </div>

 <!-- Vision -->
 <div class="container">
  <div class="vision">
   <div class="vision__text">
    <h2 class="heading-2">Our Vision</h2>
    <p class="paragraph">
     Our core vision at the Nigerian Christian Corpers Fellowship is to ensure that Corps members encounter Jesus Christ and are effectively equipped to preach the gospel and at the same time disciple men everywhere they find themselves in the thirty-six states of
     Nigeria.
    </p>
   </div>
   <div class="vision__image">
    <img src="image/15.jpg" alt="">
   </div>
  </div>
 </div>

 <!-- Mission -->
 <div class="container">
  <div class="mission">
   <div class="mission__text">
    <h2 class="heading-2">Our Mission</h2>
    <p class="paragraph">
     Our core vision at the Nigerian Christian Corpers Fellowship is to ensure that Corps members encounter Jesus Christ and are effectively equipped to preach the gospel and at the same time disciple men everywhere they find themselves in the thirty-six states of
     Nigeria.
    </p>
   </div>
   <div class="mission__image">
    <img src="image/college_1.jpg" alt="">
   </div>
  </div>
 </div>

 <!-- Zones -->
 <div class="zone">
  <div class="zone__bg">
   <img src="image/welcome-image.jpg" alt="">
  </div>
  <div class="container">
   <div class="zone__content">
    <div class="zone__content__text">
     <h3 class="heading-3">
      State Zones
     </h3>
     <p class="paragraph">
      The Nigerian Christian Corpers Fellowship has a zone in all the local government areas in Ebonyi State and they include the following.
     </p>
     <div class="zone__content__text__row">
      <ul class="zone__content__text__row__list">
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Abakaliki</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Afikpo North </li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Afikpo South</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Ezaa North</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Ezaa south</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Ikwo</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Izzi</li>
      </ul>
      <ul class="zone__content__text__row__list">
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Ivo </li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Ohaukwu</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Ohaozara</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Onicha</li>
       <li class="zone__content__text__row__list__items paragraph"><span>~ </span> Ebonyi</li>
      </ul>
     </div>
    </div>
    <div class="zone__content__image">
     <img src="image/zone-map.svg" alt="">
    </div>
   </div>
  </div>
 </div>

 <!-- Rural Rugged -->
 <div class="rugged">
  <div class="rugged__bg">
   <img class="rugged__bg__img" src="image/rugged-images.png" alt="">
  </div>
  <div class="container">
   <div class="rugged__caption">
    <h3 class="heading-2">
     Rural Rugged Evangelism
    </h3>
    <p class="paragraph">
     We spread the love and gospel of Jesus, through humanitarian services and evangelism, it is an integral part of our fellowship.
    </p>
   </div>
   <div class="rugged__images">
    <img class="rugged__images__pic" src="image/rugged-image-one.png" alt="">
    <img class="rugged__images__pic" src="image/rugged-image-two.png" alt="">
    <img class="rugged__images__pic" src="image/rugged-image-three.png" alt="">
   </div>
  </div>
 </div>

 <?php include('footer.php'); ?>


</body>

<?php require_once('inc_nccffoot.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js"></script>

<script>
function getCookie(name) {
 var dc = document.cookie;
 var prefix = name + "=";
 var begin = dc.indexOf("; " + prefix);
 if (begin == -1) {
  begin = dc.indexOf(prefix);
  if (begin != 0) return null;
 } else {
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

  setTimeout(function() {
   $('.sectiononprocess').toggleClass('active');
  }, 4000);

 } else {
  // cookie exists
 }
}
doSomethingcookie();



/* lazy loads */
const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();
</script>

<script>
$(document).ready(function() {

 $('#exam_form').on('submit', function(event) {
  event.preventDefault();
  //mainprocess_input = $(this).val();
  // alert(mainprocess_input);
  // console.log(mainprocess_input);

  //var form_data = new FormData();
  $.ajax({
   url: "ajaxup.php",
   method: "POST",
   data: $(this).serialize(),
   dataType: "json",
   success: function(response) {
    if (response.status == 1) {
     //alert(response.message);
     setTimeout(function() {
      Notiflix.Notify.Success('You will not be shown this message again');
     }, 300);
     console.log(response.message);
     $('.sectiononprocess').toggleClass('active');
    } else {
     console.log(response.message);
     $('.sectiononprocess').toggleClass('active');
    }


   }
  });

 });

});
</script>

</html>