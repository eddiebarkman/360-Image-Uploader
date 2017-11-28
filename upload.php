
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$newfilename2 = round(microtime(true));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 9242880) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    
//A new random name is given to the image so that no two will ever be the same.
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $newfilename    )) {
        
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. Go here $newfilename2";
        //This takes you to the 360 image viewing page with the ID of the page that was just created for your image.
        header('Location: http://www.eddiebarkman.com/VR/Upload360/360.php?id='.$newfilename2);
        include 'pageGen.php';
        
        
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>

<head>
<meta http-equiv="refresh" content="3;url=http://www.eddiebarkman.com/VR/Upload360/" />
</head>