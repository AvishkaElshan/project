<?php
$error = '';
if (isset($_POST["editC"])) {
    require_once "db_connect.php";  // Ensure this file has proper database connection setup

    
    $emp_id = $_POST['emp_id'];
    $year = $_POST['year'];
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    $c6 = $_POST['c6'];
    $c7 = $_POST['c7'];
    $c8 = $_POST['c8'];
   

    if (empty($emp_id)) {
        $error = "Please enter all the details!";
    } else {
        
                $insertStmt = $conn->prepare("INSERT INTO chart (emp_id, year,c1,c2,c3,c4,c5,c6,c7,c8) VALUES (?, ?, ?, ?,?,?,?,?,?,?)");
                if ($insertStmt) {
                    $insertStmt->bind_param("ssssssssss", $emp_id, $year, $c1, $c2, $c3,$c4,$c5,$c6,$c7,$c8);
                    if ($insertStmt->execute()) {
                        
                        header("Location:../admin_intimo.php");
                        exit();
                    } else {
                        $error = "Error: " . $insertStmt->error;
                    }
                    $insertStmt->close();
                } else {
                    $error = "Failed to prepare the SQL statement for insertion.";
                }
        
            }
        }