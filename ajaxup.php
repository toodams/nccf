
<?php include 'dbConfigmysqli.php';?>

<?php

    $response = array( 
    'status' => '0', 
    'message' => 'Thanks.'
    ); 

        if(isset($_POST['close-mainprocess-input'])){
                    
        //if(isset($_POST['page'])){

            $response['status'] = 1; 
            $response['message'] = 'You will not be shown this message again'; 

            $close_mainprocess_input = $_POST['close-mainprocess-input'];
            if($close_mainprocess_input==1){
                //setcookie("sitenotice", $close_mainprocess_input, time() + 5 * 60);
                setcookie("sitenotice", $close_mainprocess_input, time() + 30 * 24 * 60 * 60);
            }


        }
                


echo json_encode($response);
die;