<?php
session_start();
require("config.php");
require("function.php");
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $name =$_POST['name'];
    $password=$_POST['password'];
    if(!empty($name)&& !empty($password)&& !is_numeric($name))
    {
        // $query= "INSERT INTO `users`(name, password)
        // VALUES ('$name', '$password')";
        // mysqli_query($con , $query);
    
        
        header("location:login.php");
        die;

    }else{
        echo"please enter some valid information !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>signUp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>SignUp</h1>
    <form method ="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <div class="buttons">
            <input name="submit" type="submit" value="Submit" />
            <input type="reset" />
        </div>
        <div class="login">
            <h4>already have account ?</h4>
            <a href="login.php">login</a>
        </div>
    </form>
</body>

</html>