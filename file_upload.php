<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false){
        $uploadOK = 1;
    }else{
        echo "File is not an image.";
        $uploadOK = 0;
    }
}

// Check if the file exists
if (file_exists($target_file)){
    echo "Sorry, the file already exists";
    $uploadOK = 0;
}

// Check the file size
if ($_FILES["fileToUpload"]["size"] > 500000){
    echo "Sorry, your file is to too large.";
    $uploadOK = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "Sorry, only JPEG, JPG, PNG, and GIF are allowed";
    $uploadOK = 0;
}

// Check if $upload is set to 0 by an error
if ($uploadOK == 0) {
    echo "Sorry, your file was not uploaded";
// If everything is ok, then upload the file.
}else{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded successfully.";
    } else{
        echo "Sorry, there was an error uploading your file.";
    }
}

