<?php include '../dbConfigmysqli.php';?>
<?php
    if(isset($_GET['status'])){
        if($_GET['status'] = "success"){
            $statusMsg = "The file has been successfully uploaded.";
        }elseif($_GET['status'] = "error"){
            $statusMsg = "Sorry, there was an error uploading your file.";
        }elseif($_GET['status'] = "formatwrong"){
            $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
        }elseif($_GET['status'] = "choose"){
            $statusMsg = 'Please select a file to upload.';
        }
   

//display status message
echo $statusMsg;

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="upload.css">
  <title>image</title>

</head>




 


<body>

<form action="dbConfigupload.php" method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="file">
    <input type="text" name="description" id="description" placeholder="Description" required />
                    
    <input id="submit" type="submit" name="submit" value="Upload">
</form>


</body>
</html>