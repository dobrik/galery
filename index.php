<?php
require 'functions.php';

//$_SESSION['name'] = 'Vasya';
echo $_SESSION['name'] . '<br>';
var_dump($_FILES['img']);
if (!$_FILES['img']['error']) {
    move_uploaded_file($_FILES['img']['tmp_name'], 'images/img.jpg');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Include</title>
</head>
<body>
<form action="?" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" name="send">
</form>

</body>
</html>
