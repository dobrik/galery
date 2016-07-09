<?php
session_start(['cookie_lifetime' => 86400, 'gc_maxlifetime' => 86400]);
echo 'hello world ';
function hashName($name)
{
    $typeArr = explode('.', $name);
    $type = $typeArr[count($typeArr) - 1];
    return md5($name . microtime()) . '.' . $type;
}

function uploadImage($files)
{
    if (is_array($files)) {
        foreach ($files['error'] as $key => $img) {
            if ($img == UPLOAD_ERR_OK) {
                if (validImg($files['type'][$key])) {
                    move_uploaded_file($files['tmp_name'][$key], 'images/' . hashName($files['name'][$key]));
                }
            }
        }
    }
}

function validImg($type)
{
    $validFormats = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    return in_array($type, $validFormats);
}