<?php
include ('includes/database.php');
$idp = $_GET["id"];
$statusMsg = '';
include ('adminsession.php');
$targetDir = "upload/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','webp');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insert = $con->query("UPDATE item SET picture = '$targetFilePath'  WHERE prodID=$idp");
            if($insert){
                echo '<script>alert("Photo Update Successfully")</script>';
                header("Location: adminedititem.php?id=$idp");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & webp files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;

?>
