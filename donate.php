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
   <img src="image/donate-header.jpg" alt="" class="pages-header__image__picture">
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
     Donate
    </h2>
    <p class="paragraph">
     It is an inter-denominational, non-denominational and non ethical fellowship, which means we are not affiliated or sponsored with any individual or organization. That being said if you want to support the ministry please click on the donate button. If you would like to donate in kind please feel free to contact us.
    </p>
   </div>
  </div>

 </div>

 <!-- Donate  -->
 <div class="container">
  <div class="donate">
   <h2 class="heading-2">
    Rural Rugged Evangelism
   </h2>
   <p class="paragraph">
    We spread the love and gospel of Jesus, through humanitarian services and evangelism, it is an integral part of our fellowship. We carry out medical check-ups, and most importantly - preaching the gospel of Jesus Christ the risen King in the nooks and crannies of the Country. We also do evangelism through hospital visitation, prison visitation, house to house and street evangelism, among many others. for Rural Rugged Donation please click the button below
   </p>
   <div class="button-group">
    <hr class="separator">
    <a class="button-link" href="">
     <h4 class="heading-4">DONATE</h4>
    </a>
   </div>
  </div>
 </div>

 <!-- Donate  -->
 <div class="donate-banner">
  <div class="donate-banner__bg">
   <img src="image/welcome-image.jpg" alt="">
  </div>
  <div class="container">
   <div class="donate-banner__content">
    <div class="donate-banner__content__text">
     <h3 class="heading-2">
      Interested in Supporting...?
     </h3>
     <p class="paragraph">
      So you're a kigndom financier or you love what we are doing for the kingdom as whole in Ebonyi state or your are a mumu for Christ then please support the ministry by using the donate button below arrive
     </p>
     <div class="button-group">
      <hr class="separator">
      <a class="button-link" href="">
       <h4 class="heading-4">DONATE</h4>
      </a>
     </div>
    </div>
   </div>
  </div>
 </div>

 <!-- Bus Project -->
 <div class="container">
  <div class="bus-project">
   <div class="bus-project__text">
    <h2 class="heading-2">Bus Project</h2>
    <p class="paragraph">
     In order to achieve our vision in spreading the love of christ to every nook and crany in our immediate environment there is a need to be mobile at a moments notice. This is why we cam up with the bus project, we currently have one bus in the house at the moment which is not sufficient for our transportation needs hence the need for a new one. To be part of this projct please find the donate button
    </p>
    <div class="button-group">
     <hr class="separator">
     <a class="button-link" href="">
      <h4 class="heading-4">DONATE</h4>
     </a>
    </div>
   </div>
   <div class="bus-project__image">
    <img src="image/bus-project-image.png" alt="" class="bus-project__image__pic">
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