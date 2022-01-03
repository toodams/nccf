<?php

//ajax.php

 

date_default_timezone_set('Africa/Lagos');

$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));
$datetime = '2021-04-05 14:59:54';
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="calender/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="calender-sermon-whole">
      <!--------- calender-wrapper ------->
      <div class="calender-wrapper">
        <div class="container">
          <div class="calendar">
            <div class="month">
              <i class="fas fa-angle-left prev"></i>
              <div class="date">
                <h2></h2>
                <h3></h3>
                <h1></h1>
                <p></p>
              </div>
              <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
              <div>Sun</div>
              <div>Mon</div>
              <div>Tue</div>
              <div>Wed</div>
              <div>Thu</div>
              <div>Fri</div>
              <div>Sat</div>
            </div>
            <div class="days"></div>
            <div class="preacher-img">
              <img src="image/president.jpeg" alt="">
            </div>
          </div>
        </div>
      </div>

      
      <!--------- sermon-content-info ------->
      <div class="single-sermon-wrapper" id="section232">
        <!--<div class="circle"></div>--->
        <div class="tood-loader">
						<span></span>
						<span></span>
						<span></span>
				</div>
        <div id="single_sermon_area">
          
        </div>
      </div>
    </div>
        <!--------- hide for now----
    <div class="eho" id="echo_day">avalable</div>
    <div class="eho" id="echo_month">avalable</div>
    <div class="eho" id="echo_year">avalable</div>
           hide for now------>


    <!--------- calender-info ------->
    <div class="calender-info-wrapper">
      <div class="eho" id="date_avail">
        <h4>
          <span id="echo_year">avalable</span>
          <span">-</span>
          <span id="echo_month">avalable</span>
          <span">-</span>
          <span id="echo_day">avalable</span>
        </h4>
      </div>
      <input type="hidden" name="action" id="hidden_action" value="Add" />
    </div>

    











<!-- Jquery JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
    integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ=="
    crossorigin="anonymous"></script>



<script>

  $(document).ready(function(){

      
    function reset_click()
    {
      $('.date_click.active').css("background-color", "transparent");
      
    }

    
      
    jQuery.load_sermon = function load_sermon(sermon_id = '')
    {

      $.ajax({
        url:"ajax.php",
        method:"POST",
        data:{sermon_id:sermon_id, page:'calendar_index', action:'load_sermon'},
        beforeSend:function()
        {
          $("#section232 .tood-loader").css({'display':'flex', 'opacity':'1'}); 
          //$(".circle").css({'display':'flex', 'opacity':'1'}); 
        },
        success:function(data)
        {
          $("#section232 .tood-loader").fadeOut();
          

            $('#single_sermon_area').html(data);
         // $('#single_sermon_area').html(data.body);
         // $('.audioplay').attr("src",  data.sermon_audio);
          
        }
      })
    }


    //$( "#edit_eho" ).html( "Next Step..." )
    //$('#edit_eho').text("go")
    $(document).on('click', '.date_click', function(){
      
      reset_click();
      day_id = $(this).attr('id');
      month_id = $(".date h3").text();
      year_id = $('.date h2').text();
      $(this).css("background-color", "#bfcc0a");
      $(this).addClass("active");
      $('#echo_day').html(day_id);
      $('#echo_month').html(month_id);
      $('#echo_year').html(year_id);

      date_complete = $("#date_avail").text();
      var noSpaceDate = date_complete.replace(/\s+/g, '');
      
      // alert(noSpaceDate);
      console.log(noSpaceDate);

      $('#hhidden_action').val('2021-04-05');
      $('#hidden_action').val(noSpaceDate);
      var sermon_id = $("#hidden_action").val();

     // var sermon_id = date_complete;
    
                var sermon_testing = "<?php echo $datetime; ?>";
    
    
        var sermon_idd = $("#date_avail").text();
        $.load_sermon(sermon_id);
      


    });


    // previous_devotion_click on click
    $(document).on('click', '.previous_devotion_click', function(){
      
      reset_click();
      
      var noSpaceDate = $(this).attr('data-devotion_date');
      
       //alert(noSpaceDate);
      console.log(noSpaceDate);

      $('#hidden_action').val(noSpaceDate);
      var sermon_id = $("#hidden_action").val();

     // var sermon_id = date_complete;
    
    
        var sermon_idd = $("#date_avail").text();
        $.load_sermon(sermon_id);
      
      
    });

  });

</script>






    <script src="calender/script.js"></script>



  </body>
</html>
