<?php

include("db_connect.php");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
     

        $name = $_POST['name'];
        $emp_id = $_POST['id'];
        $company_name = $_POST['company_name'];
        $password = $_POST['pass'];
        $sql = "INSERT INTO users (name,emp_id,Company_name,password,user_type)
            VALUES ('$name','$emp_id','$company_name','$password','user')";
        $error='';

        if(empty($name) || empty($emp_id) || empty($company_name) || empty($password) ){

          $error="Please enter all the details!";

        }
        else{ 
        
          mysqli_query($conn, $sql);
 
          
        
        echo "<script type='text/javascript'>alert('Succesfully registered!');</script>";

        header("Location:../registered.html");
      }

       

    }
    else {
        header("Location:../register.php");
        
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
    <a href="register.php" class="button">Go Back</a>
</body>
</html>