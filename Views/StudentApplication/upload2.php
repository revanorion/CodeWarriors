
<?php
session_start();
$files  = $_FILES["inputfa"];
$target_dir = "tmpuploads/";
$target_file = $target_dir . basename($files['name'][0]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($files["tmp_name"][0]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "{\"error\":\"File is not an image.\"}";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "{\"error\":\"Sorry, file already exists.\"}";
    $uploadOk = 0;
}
// Check file size
if ($files["size"][0] > 500000) {
    echo "{\"error\":\"Sorry, your file is too large.\"}";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
    echo "{\"error\":\"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\"}";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    return;
} else {
    if (move_uploaded_file($files["tmp_name"][0], $target_file)) {
        echo "{\"success\":\"true\"}";
    } else {
        echo "{\"error\":\"Sorry, there was an error uploading your file.\"}";
    }
    $file = array("target_file"=>$target_file, "name"=>$files['name'][0]);
    if($_SESSION["image_posts"]==null)
    {
        $_SESSION["image_posts"]=array(0=>$file);
    }
    else{
        array_push($_SESSION["image_posts"],$file);
    }
}
?>
