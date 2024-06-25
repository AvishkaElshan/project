<?php

$error = "";

if (isset($_POST["submit"])) {
    require_once "db_connect.php";  // Ensure this file has proper database connection setup

    $name = $_POST['name'];
    $emp_id = $_POST['id'];
    $company_name = $_POST['company_name'];
    $password = $_POST['pass'];
    $color = $_POST['color'];
    $petname = $_POST['petname'];

    if (empty($name) || empty($emp_id) || empty($company_name) || empty($password)) {
        $error = "Please enter all the details!";
    } else {
        // Verify that the user is in the admin table
        $stmt = $conn->prepare("SELECT * FROM admin WHERE emp_id = ?");
        if ($stmt) {
            $stmt->bind_param("s", $emp_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                // The user is in the admin table, proceed with registration
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insert into the users table
                $insertStmt = $conn->prepare("INSERT INTO users (name, emp_id, company_name, password,user_type,color,petname) VALUES (?, ?, ?, ?,'admin',?,?)");
                if ($insertStmt) {
                    $insertStmt->bind_param("ssssss", $name, $emp_id, $company_name, $hashedPassword, $color, $petname);
                    if ($insertStmt->execute()) {
                        echo "<script type='text/javascript'>alert('Successfully registered as admin!');</script>";
                        header("Location: ../registered.html");
                        exit();
                    } else {
                        $error = "Error: " . $insertStmt->error;
                    }
                    $insertStmt->close();
                } else {
                    $error = "Failed to prepare the SQL statement for insertion.";
                }
            } else {
                $error = "You are not authorized to register as an admin.";
            }

            $stmt->close();
        } else {
            $error = "Failed to prepare the SQL statement for verification.";
        }
    }
    $conn->close();
} else {
    $error = "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Result</title>
    <style>
.button {
  background-color: #0000FF	;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.alert{
    font-weight: bold;
    font-size: 30px;
}
</style>
</head>
<body>
    <br>
    <br>

    <?php if (!empty($error)): ?>
        <div class='alert'><?php echo $error; ?></div>
    <?php endif; ?>
    <a href="adminregister.php" class="button">Go Back</a>
</body>
</html>