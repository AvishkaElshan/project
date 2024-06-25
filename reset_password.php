<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
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
    <h3>Reset Password</h3>
    <form action="reset_password_process.php" method="post">
        <p>New Password <span>*</span></p>
        <input type="password" name="new_password" placeholder="Enter your new password" class="box">
        <input type="submit" value="Reset Password" name="submit" class="btn">
    </form>
</body>
</html>
