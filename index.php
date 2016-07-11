<?php
require 'upload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Include</title>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="?" method="post" enctype="multipart/form-data">
    <input type="file" name="img[]" multiple>
    <input type="submit" name="send">
</form>

<div class="container">
    <?php
    uploadImage($_FILES['img'],$dir);
    ?>
    <div class="row">
    <?php
    getImages($dir);
?>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
