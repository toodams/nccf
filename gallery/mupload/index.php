<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCCF - Gallery Upload</title>

<!-- Bootstrap Css -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body>
<style type="text/css">
#preview img{
   margin: 5px;
   width: 100px;
   height: 100px;
}
</style>


<!-- Status message -->
<div class="statusMsg"><p class="alert alert-success">You can upload single or multiple images</p></div>

<!-- File upload form -->
<div class="col-lg-12">
    <form id="fupForm" name="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Files</label>
            <input type="file" class="form-control" id="files" name="files[]" multiple />
        </div>
        
        <input type="button" id="submit" name="submit" class="btn btn-success submitBtn" value='Upload'>
    </form>
</div>


<!-- Preview -->
<div id='preview'></div>
</body>
 

<script>
$(document).ready(function(){
    // Submit form data via Ajax
    
    $('#submit').click(function(){

        var form_data = new FormData();


        // Read selected files
        var Element = document.querySelector('input');
        var totalfiles = document.getElementById('files').files.length;
        for (var index = 0; index < totalfiles; index++) {
            form_data.append("files[]", document.getElementById('files').files[index]);
            $('#preview').append("<img src='"+URL.createObjectURL(Element.files[index])+"'>");
        }

        // AJAX request
        $.ajax({
            url: 'ajaxUpload.php', 
            type: 'POST',
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#submit').attr("disabled", "disabled");
                $('#fupForm').css("opacity", ".5");
                $('.statusMsg').html('<p class="alert alert-success">Processing...</p>');
            },
            success: function (response) {
                if (response.status == 1) {
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">' +
                        response.message + '</p>');
                    alert("Uploaded SuccessFully");
                    console.log(response);
                } else {
                    $('.statusMsg').html('<p class="alert alert-danger">' + response
                        .message + '</p>');
                }


                $('#fupForm').css("opacity", "");
                $("#submit").removeAttr("disabled");
              


            }
        });

    });

});
</script>







</html>