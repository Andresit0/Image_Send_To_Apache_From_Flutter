<?php
$imgName = $_REQUEST['imageName'];
$rutaImagen = __DIR__ . "/$imgName";
$informacionImagen = getimagesize($rutaImagen);
header("Content-type: {$informacionImagen['mime']}");
readfile($rutaImagen);
?>
