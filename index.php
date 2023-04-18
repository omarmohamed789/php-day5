<!DOCTYPE html>
<?php
session_start();
require('config.php');
require('function.php');
$user_data =check_login($con)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<h2>Hello <?php echo $user_data['name']?></h2>
<a href="logout.php">LogOut</a>
</body>
</html>