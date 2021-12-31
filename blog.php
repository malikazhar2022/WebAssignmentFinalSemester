<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <?php include_once('Navigation.php') ?>
    <div>

        <?php
        require_once('utilities.php');
        $conn = getConnection();
        $posts = $conn->query("SELECT * FROM " . TABLE);
        foreach ($posts as $key => $post) :
        ?>
            <div>
                <div >
                <h1>#<?= $key + 1 ?>. <?= $post['title'] ?></h1>
                <div>Posted By: <?= $post['user'] ?></div>
                <div>Posted At: <?= $post['createdAt'] ?></div>
                <hr>
                <p><?= $post['body'] ?></p>
                </div>
            </div>
        <?php
        endforeach?>
    <?php ?>
    </div>
</body>
</html>