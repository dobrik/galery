<?php
//session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
//var_dump(scandir('images'));
$dir = 'images/';

function hashName($name)
{
    $typeArr = explode('.', $name);
    $type = $typeArr[count($typeArr) - 1];
    return md5($name . microtime()) . '.' . $type;
}

function uploadImage($files, $dir)
{
    if (is_array($files)) {
        foreach ($files['error'] as $key => $img) {
            if ($img == UPLOAD_ERR_OK) {
                if (validImg($files['type'][$key])) {
                    move_uploaded_file($files['tmp_name'][$key], $dir . hashName($files['name'][$key]));
                }
            }
        }
    }
}
function getImages($dir){
    foreach(glob($dir.'*.{jpg, png, gif, jpeg}', GLOB_BRACE) as $img){
            echo "<div class='col-md-3'><img src=\"{$img}\"></div>";
    }
}
function validImg($type)
{
    $validFormats = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    return in_array($type, $validFormats);
}