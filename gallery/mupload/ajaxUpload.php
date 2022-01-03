
<?php include '../../dbConfigmysqli.php';?>

<?php

$response = array( 
   'status' => '0', 
   'message' => 'Form submission failed, please try again.',
   'files' => '' 
); 
$errMsg = ''; 
$valid = ''; 

      $valid = 1;
      $response['status'] = 1; 
      $response['message'] = 'Form data submitted successfully!'; 
      
      // Check whether submitted data is not empty 
      if($valid == 1){ 
         $uploadStatus = 1; 
      
         // Count total files
         $countfiles = count($_FILES['files']['name']);

         // Upload directory
         $upload_location = "images/";
         
         // To store uploaded files path
         $files_arr = array();

         // Loop all files
         for($index = 0;$index < $countfiles;$index++){


                  
         if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
            // File name
            $filename = $_FILES['files']['name'][$index];

            // Get extension
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            // Valid image extension
            $valid_ext = array("png","jpeg","jpg");

            //foreach($_FILES['files']['name'] as $index=>$val){  
            //$description = $_POST['description'];

            $size = $_FILES['files']['size'][$index];

            // Check extension
            if(in_array($ext, $valid_ext)){

               // File path
               $path = $upload_location.$filename;

               // Upload file
               if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){

                  $files_arr[] = $path;

                  $sql = "INSERT INTO images (file_name, file_path, size) VALUES ('$filename', '$path', '$size')";
                  $insert = mysqli_query($connection, $sql);
                     
                  
                  //$insert = mysqli_query($connection,"INSERT INTO images (file) VALUES ('".$path."')");
                  if($insert){ 
                     $response['files'] = $files_arr;
                     $response['status'] = 1; 
                     $response['message'] = 'File uploaded successfully! You can Upload Another File'; 
                  }else{ 
                     $uploadStatus = 0; 
                     $response['status'] = 0; 
                     $response['message'] = 'There was an issue inserting into database!'.$errMsg; 
                  } 
               }else{  
                  $uploadStatus = 0; 
                  $response['status'] = 0; 
                  $response['message'] = 'Sorry, there was an error uploading your file.'; 
               }  
            }else{  
               $uploadStatus = 0; 
               
               $response['status'] = 0; 
               $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
            }  

         }
      }
      }
      
      else{ 
         $valid = 0; 
         $errMsg = '<br/>Please '; 
         $response['status'] = 0; 
         $response['message'] = 'Please fill all the mandatory fields!'.$errMsg; 
      }


echo json_encode($response);
die;