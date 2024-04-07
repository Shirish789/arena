<?php

//Frontend purpose data
define("SITE_URL","http://127.0.0.1/Arena/");
define("ABOUT_IMG_PATH",SITE_URL."images/about/");
define("CAROUSEL_IMG_PATH",SITE_URL."images/carousel_images/");


// backend upload process needs this data
define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/arena/images/');
define('ABOUT_FOLDER', 'about/');
define('CAROUSEL_FOLDER', 'carousel_images/');

function admin_login()
{
    session_start();
    if (!(isset($_SESSION["admin_login"]) && $_SESSION["admin_login"] == true)) {
        echo "<script>
            window.location.href='index.php';
            </script>";
        exit;
    }
}
function redirect($url)
{
    echo "<script>
             window.location.href='$url';
             </script>";
}

function alert($type, $message)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
    <strong>$message</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}

function uploadImage($image, $folder)
{

    $valid_mime = ['image/jpeg', 'image/png', 'image/webp',];
    $img_mime = $image['type'];
    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img'; //Inavalid image mime or formate
    } else if (($image['size'] / (1024 * 1024)) > 2) {
        return 'inv_size'; //Inavalid image size
    }else{
        $ext=pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname='IMG'.random_int(11111,99999).'.'.$ext;
        $img_path=UPLOAD_IMAGE_PATH.$folder.$rname;
        if(move_uploaded_file($image['tmp_name'], $img_path)){
            return $rname;
        }else{
            return'upd_failed';
        }
    }
}

function deleteImage($image, $folder){
    if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
        return true;
    }else{
        return false;
    }
}