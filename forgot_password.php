<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <style>
        .box {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .btn {
            background-color: #0000FF;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h3>Forgot Password</h3>
    <form action="reset_password_request.php" method="post">
        <p>Your Employee ID <span>*</span></p>
        <input type="text" name="id" placeholder="Enter your employee ID" class="box">
        <p>Security Question 1: <span>*</span></p>
        <input type="text" name="security_answer1" placeholder="Enter your answer" class="box">
        <p>Security Question 2: <span>*</span></p>
        <input type="text" name="security_answer2" placeholder="Enter your answer" class="box">
        <input type="submit" value="Reset Password" name="submit" class="btn">
    </form>
</body>
</html>
