<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
if (isset($_POST['Submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $user = $_SESSION['user']['name'];
    require_once('utilities.php');
    $conn = getConnection();
    $conn->query("INSERT INTO BLOG (title, body, user) VALUES ('$title', '$body', '$user')");
    header("Location: blog.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Post</title>
</head>

<body>
    <?php include_once('Navigation.php') ?>
    <div >
        <form action="" method="post">
            <div>
                <label>POST TITLE</label>
                <input type="text" name="title" required>
            </div>
            <div>
                <label>Post Body</label>
                <textarea  name='body' rows="6" required></textarea>
            </div>
            <input type="submit"  name="Submit">
        </form>
    </div>
</body>
</html>