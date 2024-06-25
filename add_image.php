<?php
// // Database connection
// $servername = "localhost"; // your server name
// $username = "your_username"; // your database username
// $password = "your_password"; // your database password
// $dbname = "your_database"; // your database name

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

if(isset($_POST['submit'])) {
    // Directory where files will be uploaded
    $target_dir = "addimage/";

    // Process each file
    for ($i = 1; $i <= 3; $i++) {
        $img_name = "img" . $i;
        $text_name = "text" . $i;

        $target_file = $target_dir . basename($_FILES[$img_name]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES[$img_name]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES[$img_name]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES[$img_name]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES[$img_name]["name"])). " has been uploaded.";
                $description = $_POST[$text_name];
                $filePath = $target_file;

                // Insert into database
                $sql = "INSERT INTO advertisements (image_path, description) VALUES ('$filePath', '$description')";
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}

$conn->close();
?>
