<!DOCTYPE html>
<html>
<head>
    <?php

        require_once('../inc_nccfhead.php');

    ?>


    <title>NCCF | SEARCH GALLERY</title>
    
    <!--------- for fontawesome -------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <!-------- Add jQuery library ------->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-------- Add fancyBox --------->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>


    <link rel="stylesheet" href="http://localhost/nccf/css/indexstyle.css">
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

    // If search form is submitted
    if(isset($_POST['submitsearch'])){
    $search = mysqli_real_escape_string($connection, $_POST['search']);

    // Retrieve images from the database
    $query = "SELECT * FROM images WHERE file_name LIKE '%$search%' OR description LIKE '%$search%' ORDER BY date DESC";
    
    $result = mysqli_query($connection, $query);
    $queryresult = mysqli_num_rows($result);
 
    
    if($queryresult > 0){
        while($row = mysqli_fetch_assoc($result)){
            $imageURL = 'mupload/images/'.$row["file_name"];
            $id = $row["id"];
            $description = $row["description"];

    ?>
        <div class="gallery-div">
        <a rel="gallery" class="fancybox" title="<?php echo $row["description"]; ?>" href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["description"]; ?>" >
            <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageURL; ?>" />
        </a>
        </div>
    <?php }
    }else{
        echo "There are no results matching your search!";
    }
    
}
    ?>

</div>

 
 
 
 

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

</script>




</body>
</html>