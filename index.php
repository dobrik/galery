<?php
require 'upload.php';

//$_SESSION['name'] = 'Vasya';
echo $_SESSION['name'] . '<br>';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Include</title>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<form action="?" method="post" enctype="multipart/form-data">
    <input type="file" name="img[]" multiple>
    <input type="submit" name="send">
</form>

<div class="container">
    <div class="row">
        <?php
        uploadImage($_FILES['img']);
        ?>
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
