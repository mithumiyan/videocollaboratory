<?php
header('Content-Type: image/png');
header("Content-Disposition: attachment; filename=image.png");
echo base64_decode($_POST["image"]);
?>