<?php

if (isset($_POST['SIGN'])) {
    
    $bloggers = array(
        array("userId" => "darsjaved@gmail.com", "password" => "password1", "name" => "JAVED HUSSAIN"),
        array("userId" => "darsadam@gmail.com", "password" => "password2", "name" => "ADAM DARS"),
        array("userId" => "darsferozkarimgmail.com", "password" => "password3", "name" => "FEROZ KARIM DARS"),
    );

    $user_Email = $_POST['userEmail'];
    $user_Password = $_POST['userPassword'];
    foreach ($bloggers as  $user) {
        if ($user['userId'] == $user_Email && $user['password'] == $user_Password)
         {
            session_start();
            $_SESSION['blogger'] = $user;
            header("Location: home.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php include_once("Navigation.php") ?>

    <div>
        <form action="" method="post">
        <div>
                <label>Username</label> <br>
                <input type="email" name="userEmail" required>
            </div>
            <div>
                <label>Password</label> <br>
                <input type="password" name="userPassword" required>
            </div> 
            <br>
            <input type="submit" name='SIGN' value='SIGN IN'>
        </form>
    </div>    
</body>
</html>