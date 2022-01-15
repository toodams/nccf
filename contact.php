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
  <div class="pages-header__image">
   <img src="image/contact-header.jpg" alt="" class="pages-header__image__picture">
  </div>
  <div class="container">
   <div class="pages-header__bg">
    <div class="pages-header__bg__section"></div>
    <div class="pages-header__bg__section"></div>
    <div class="pages-header__bg__section"></div>
    <div class="pages-header__bg__section"></div>
   </div>
   <div class="pages-header__content">
    <h2 class="heading-2">
     Contact Us
    </h2>
    <p class="paragraph">
     So you want to reach us for one reason or the other, then please fill the form below or better yet you can make use of Philps Express and move on the wings of the spirit...
    </p>
   </div>
  </div>
 </div>

 <!-- Contact -->
 <div class="contact">
  <div class="contact__bg">
   <img src="image/contact-map.png" alt="" class="contact__bg__image">
  </div>
  <div class="container">
   <form class="contact__form">
    <input type="text" class="input" placeholder="name">
    <input type="email" class="input" placeholder="mail@example.com">
    <textarea class="textarea" name="" id="" cols="7" rows="10" placeholder="Hi I'd like to find out who was the TD for..."></textarea>
    <button class="btn">Send</button>
   </form>
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