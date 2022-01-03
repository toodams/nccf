<?php 
$uploadDir = '../images/thumb/'; 
$allowTypes = array('jpg', 'png', 'jpeg'); 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
$errMsg = ''; 
$valid = 1; 
if(isset($_POST['name']) || isset($_POST['files'])){ 
    // Get the submitted form data 
    $name = $_POST['name']; 
    $filesArr = $_FILES["files"]; 
     
    if(empty($name)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter your name.'; 
    } 
     
     
    // Check whether submitted data is not empty 
    if($valid == 1){ 
        $uploadStatus = 1; 
        $fileNames = array_filter($filesArr['name']); 
         
        // Upload file 
        $uploadedFile = ''; 
        if(!empty($fileNames)){  
            foreach($filesArr['name'] as $key=>$val){  
                // File upload path  
                $fileName = basename($filesArr['name'][$key]);  
                $targetFilePath = $uploadDir . $fileName; 
                // File size
                $size = $_FILES['files']['size'];
                  
                // Check whether file type is valid  
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);  
                if(in_array($fileType, $allowTypes)){  
                    // Upload file to server  
                    if(move_uploaded_file($filesArr["tmp_name"][$key], $targetFilePath)){  
                        $uploadedFile .= $fileName.','; 
                    }else{  
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    }  
                }else{  
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                }  
            }  
        } 
         
        if($uploadStatus == 1){ 
            // Include the database config file 
            include_once 'dbConfig.php'; 
             
            // Insert form data in the database 
            $uploadedFileStr = trim($uploadedFile, ','); 
            print $uploadedFileStr;
            //foreach ($uploadedFile as $value) {
               // echo $value, "\n";
            //}
            $insert = $db->query("INSERT INTO images (file_name, title, Size, description) VALUES ('".$uploadedFileStr."', '".$fileType."', '".$size."', '".$name."')"); 
             
            if($insert){ 
                $response['status'] = 1; 
                $response['message'] = 'Form data submitted successfully!'; 
            }
            else{ 
                $response['message'] = 'There was an issue inserting into database!'.$errMsg; 
           } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields!'.$errMsg; 
    } 
} 
 
// Return response 
echo json_encode($response);