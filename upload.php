<?php

$dir = 'images/';

function imgResize($img, $width, $height)
{
    $img = fopen($img, 'r');
    $size = getimagesize($img);
}

function hashName($name)
{
    $typeArr = explode('.', $name);
    $type = $typeArr[count($typeArr) - 1];
    return md5($name . microtime()) . '.' . $type;
}

function cutAdress($adress)
{
    $nameArr = explode('/', $adress);
    $adress = $nameArr[count($nameArr) - 1];
    return $adress;
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
            echo "<div class='col-md-3'><img src=\"{$img}\"><span class='imgRem'>&times;</span></div>";
    }
}
function validImg($type)
{
    $validFormats = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    return in_array($type, $validFormats);
}

if(!empty($_POST['remove'])){
    unlink($dir.cutAdress($_POST['remove']));
}
if (!empty($_FILES['img']) || !empty($_POST['getImg'])) {
    uploadImage($_FILES['img'], $dir);
    getImages($dir);
}