<?php 

require_once('db_connect.php');
session_start();

$update = false;
$id = 0;
$reg_date = '';
$img1 = '';





if (isset($_GET['delete'])) {

    $id = $_GET['delete']; //7

    $sql = "DELETE FROM addpic_table WHERE id = '$id'"; //7

    $conn->query($sql) or die($conn->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    echo "<h1>Now you are in the process.php file /$_GET[delete]/<-deleted</h1>";

    header("Location: admin_intimo.php");
}


if (isset($_GET['deletec'])) {

    $id = $_GET['deletec']; //7

    $sql = "DELETE FROM chart WHERE id = '$id'"; //7

    $conn->query($sql) or die($conn->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    echo "<h1>Now you are in the process.php file /$_GET[delete]/<-deleted</h1>";

    header("Location: admin_intimo.php");
}