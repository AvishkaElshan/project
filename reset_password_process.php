<?php
session_start();
if (isset($_POST["submit"]) && isset($_SESSION["reset_emp_id"])) {
    require_once "db_connect.php";  // Ensure this file has proper database connection setup

    $emp_id = $_SESSION["reset_emp_id"];
    $new_password = password_hash($_POST["new_password"], PASSWORD_DEFAULT);

    // Update user's password
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE emp_id = ?");
    if ($stmt) {
        $stmt->bind_param("ss", $new_password, $emp_id);
        $stmt->execute();
        $stmt->close();

        // Unset the session variable
        unset($_SESSION["reset_emp_id"]);

        echo "<p>Password has been successfully reset. <a href='login.php'>Login now</a></p>";
    } else {
        echo "<p>Failed to prepare the SQL statement.</p>";
    }

    $conn->close();
} else {
    echo "<p>Invalid request.</p>";
}
?>
