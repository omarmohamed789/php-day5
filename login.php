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
        $query= "SELECT * From users WHERE name = $name limit 1";
        $result = mysqli_query($con,$query);
        if($result){
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result)>0){
             $user_data = mysqli_fetch_assoc($result);
             if($user_data['pasword']=== $password)
             {
                $_SESSION['name'] = $user_data['name'];
                header("location:index.php");
                die;
             }
            }
        }
        echo"please enter some valid name or password !";

    }else{
        echo"please enter some valid name or password !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>login</h1>
    <form method="post">
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
        </div>
        <div class="login">
            <h4>Dont have account ?</h4>
            <a href="signUp.php">signUp</a>
        </div>
</body>

</html>