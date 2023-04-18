<?php
function check_login($con)
{
    if(isset($_SESSION['name'])){
       $name=$_SESSION['name'];
       $query= "SELECT * FROM `users` WHERE name = '$name'";
       $result = mysqli_query($con,$query);
       if($result && mysqli_num_rows($result)>0){
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
       }
    }
    //Go to login
    header("location: login.php");
    die;
}

?>