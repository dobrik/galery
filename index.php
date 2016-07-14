<?php
require 'upload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galery</title>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form name="imgForm">
    <input type="file" id="file" name="img[]" multiple>
    <input type="button" id="sendImg" value="send">
</form>

<div class="container">
    <div class="row" id="showImg">
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.0.0.js"></script>
<script src="js/main.js"></script>
</body>
</html>
