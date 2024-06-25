<?php
if (isset($_POST["submit"])) {
    require_once "db_connect.php";  // Ensure this file has proper database connection setup

    $emp_id = $_POST["id"];
    $security_answer1 = $_POST["security_answer1"];
    $security_answer2 = $_POST["security_answer2"];

    // Check if user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE emp_id = ?");
    if ($stmt) {
        $stmt->bind_param("s", $emp_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if ($user["color"] === $security_answer1 && $user["petname"] === $security_answer2) {
                session_start();
                $_SESSION["reset_emp_id"] = $emp_id;

                // Redirect to password reset form
                header("Location: reset_password.php");
                exit();
            } else {
                echo "<p>Incorrect security answers.</p>";
            }
        } else {
            echo "<p>User not found.</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Failed to prepare the SQL statement.</p>";
    }

    $conn->close();
}
?>
