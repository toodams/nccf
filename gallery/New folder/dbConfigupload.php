
<?php include '../dbConfigmysqli.php';?>



<?php

//file upload path
$targetDir = "images/thumb/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$size = $_FILES['file']['size'];
$description = $_POST['description'];

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    //allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        //upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $sql = "INSERT INTO images (file_name, title, size, description) VALUES ('$fileName', '$fileType', '$size', '$description')";
            if (mysqli_query($connection, $sql)) {
                header("location: upload.php?status=success");
                
            }
            
        }else{
            header("location: upload.php?status=error");
            
        }
    }else{
        header("location: upload.php?status=formatwrong");
        
    }
}else{
    header("location: upload.php?status=choose");
    
}




?>
   