





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
    }

    input {
        font-size: 2rem;
    }
    </style>
</head>

<body>
    <a href="view.php">Videos</a>
    <?php
    if(isset($_GET['error'])) { ?>
    <p><?=$_GET['error']?></p>
    <?php } ?>
    <form action="video.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_video" id="my_video">
        <input type="submit" name="submit" value="upload">
    </form>
</body>

</html>