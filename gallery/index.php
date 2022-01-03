<!DOCTYPE html>
<html>
<head>
    <?php

        require_once('../inc_nccfhead.php');

    ?>

    
    <title>NCCF | GALLERY</title>
 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    
    <!--------- for fontawesome -------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <!-------- Add jQuery library ------->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-------- Add fancyBox --------->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>


    <link rel="stylesheet" href="http://localhost/nccf/css/indexstyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" href="style.css">
  

</head>



<body>


       
    <?php require_once '../nav.php'; ?>


                <div class="aboutsection4">

                <div class="backgroundnccf"></div>

                <div class="nccfontopbackground">
                
                    <div class="nccfontopbackgroundcenter">
                    <h1> NCCF GALLERY </h1>

                    <form method="POST" name="searchform" id="searchform" action="search.php">
                        <input type="text" name="search" id="search" placeholder="Priesthood" required />
                        <button type="submitsearch" name="submitsearch" id="submitsearch">SEARCH</button>
                    </form>
                        

                    <p> e.g: priesthood, state conference, rural rugged, etc.
                    </p>
                    </div>
                </div>

                <div class="nccfrightimage">
                <img src="../image/nccfpicbackground.png" alt=""/> 
                </div>
                </div>



<div class="gallery">
    <?php
    // Include database configuration file
    require '../dbConfigmysqli.php';



    // pagination settings start

    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];
        } else {
            $page_no = 1;
            }
    
        $total_records_per_page = 20;
        $offset = ($page_no-1) * $total_records_per_page;
        $previous_page = $page_no - 1;
        $next_page = $page_no + 1;
        $adjacents = "2"; 
    
        $result_count = mysqli_query($connection,"SELECT COUNT(*) As total_records FROM `images`");
        $total_records = mysqli_fetch_array($result_count);
        $total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
        $second_last = $total_no_of_pages - 1; // total page minus 1


            // pagination settings ends



    // Retrieve images from the database
    $query = $connection->query("SELECT * FROM images WHERE status = 1 ORDER BY Date DESC LIMIT $offset, $total_records_per_page");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageURL = 'mupload/images/'.$row["file_name"];
            $id = $row["id"];
            $description = $row["description"];

    ?>
        <div class="gallery-div">
        <a rel="gallery" class="fancybox" title="<?php echo $row["description"]; ?>" href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["description"]; ?>" >
            <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageURL; ?>" />
           <!--   <img class="lozad" src="image/imgplaceholder.png" data-src="<?php //echo $imageURL; ?>" alt="<?php //echo $imageURL; ?>" /> -->
        </a>
        </div>
    <?php }
    } ?>

</div>






            <!-- pagination display starts -->
           
            <div style='margin:10px auto; padding: 10px 20px 0px; border: none;'>
            <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
            </div>

            <div style='margin:0 auto; padding: 10px 20px 0px; border: none;'>
            <ul class="pagination">
            <?php  if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

            <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
            <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
            </li>
                
            <?php 
            if ($total_no_of_pages <= 10){  	 
                for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                    if ($counter == $page_no) {
                    echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                        }
                }
            }
            elseif($total_no_of_pages > 10){
                
            if($page_no <= 4) {			
                for ($counter = 1; $counter < 8; $counter++){		 
                    if ($counter == $page_no) {
                    echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                        }
                }
                echo "<li><a>...</a></li>";
                echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                }

                elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                echo "<li><a href='?page_no=1'>1</a></li>";
                echo "<li><a href='?page_no=2'>2</a></li>";
                echo "<li><a>...</a></li>";
                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
                    if ($counter == $page_no) {
                    echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                        }                  
                }
                echo "<li><a>...</a></li>";
                echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                    }
                
                else {
                echo "<li><a href='?page_no=1'>1</a></li>";
                echo "<li><a href='?page_no=2'>2</a></li>";
                echo "<li><a>...</a></li>";

                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                    if ($counter == $page_no) {
                    echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                        }                   
                        }
                    }
            }
            ?>

            <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
            <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
            </li>
            <?php if($page_no < $total_no_of_pages){
                echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                } ?>
            </ul>
            </div>

            </div>

           <!-- pagination display ends -->





    <!--- Footer Start-->
        <?php

            include('../footer.php');

        ?>

    
    <!--- Footer Closed-->






    <!----------------- script section ----------------->
    
    <?php

        require_once('../inc_nccffoot.php');

    ?>



    <script>
    $(".fancybox").fancybox({
    afterShow: function() {
        $(".fancybox-title").wrapInner('<div />').show();
        
        $(".fancybox-wrap").hover(function() {
            $(".fancybox-title").show();
        }, function() {
            $(".fancybox-title").hide();
        });
    },
    helpers : {
        title: {
            type: 'over'
        }
    }
    });



        /* lazy loads */
        const observer = lozad(); // lazy loads elements with default selector as '.lozad'
        observer.observe();

</script>



</body>
</html>