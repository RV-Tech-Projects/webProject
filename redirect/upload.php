<?php
$ds = DIRECTORY_SEPARATOR;

$storeFolder = 'images';

if (!empty($_FILES))
{
    $tempFile = $_FILES['file']['tmp_name'];

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;

    $hash = md5(rand(1, 213213212));

    $replacement_array = array('\'', '"', ' ', '`');

    $file_name = substr($hash, 1, 5) . "_" . str_replace($replacement_array, '_', $_FILES['file']['name']);

    $targetFile =  $targetPath. $file_name;

    if(move_uploaded_file($tempFile,$targetFile)){
        die( "images/" . $file_name );
    }else{
        die('Fail');
    }

}
?>
