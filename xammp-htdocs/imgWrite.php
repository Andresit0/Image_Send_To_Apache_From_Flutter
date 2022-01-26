<?php

$data = $_REQUEST['image'];
$filename = $_REQUEST['name'];
$imagePath = __DIR__ . "/img/$filename";

$realImage = base64_decode($data);
file_put_contents($imagePath , $realImage);

list($width, $height) = getimagesize($imagePath);
$newwidth = 200;
$percent = $newwidth*100/$width;
$newheight = $height * $percent/100;


$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromstring($realImage);

imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagejpeg($thumb,$imagePath);

echo 'true';

?>
