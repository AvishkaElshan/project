<?php

@include 'db_connect.php';

session_start();
// Directory to upload images
$target_dir = "addpic/";

$images = ['img1', 'img2', 'img3'];
$descriptions = ['text1', 'text2', 'text3'];
$file_paths = [];

foreach ($images as $index => $image) {
    if (isset($_FILES[$image]) && $_FILES[$image]['error'] == 0) {
        $target_file = $target_dir . basename($_FILES[$image]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES[$image]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            
            $_SESSION['message'] = "File is not an image.";
            $_SESSION['msg_type'] = "danger";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            
            $_SESSION['message'] = "Sorry, file already exists.";
            $_SESSION['msg_type'] = "danger";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES[$image]["size"] > 500000) {
            
            $_SESSION['message'] = "Sorry, your file is too large.";
            $_SESSION['msg_type'] = "danger";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            
            $_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $_SESSION['msg_type'] = "danger";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
           
            $_SESSION['message'] = "Sorry, your file was not uploaded.";
            $_SESSION['msg_type'] = "danger";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$image]["tmp_name"], $target_file)) {
                $file_paths[$image] = $target_file;
                $_SESSION['message'] = "User  details have been updated!";
                $_SESSION['msg_type'] = "success";
                header("Location: admin_intimo.php");
            } else {
                
                $_SESSION['message'] = "Sorry, there was an error uploading your file.";
                $_SESSION['msg_type'] = "danger";
                header("Location: admin_intimo.php");
            }
        }
    }
}

if (!empty($file_paths)) {
    $stmt = $conn->prepare("INSERT INTO addpic_table (img1, desc1, img2, desc2, img3, desc3, emp_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $file_paths['img1'], $_POST['text1'], $file_paths['img2'], $_POST['text2'], $file_paths['img3'], $_POST['text3'],$_POST['emp_id']);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
