<?php
$imgName = $_REQUEST['imageName'];
$rutaImagen = __DIR__ . "/img/$imgName";
$informacionImagen = getimagesize($rutaImagen);
header("Content-type: {$informacionImagen['mime']}");
readfile($rutaImagen);
?>