<?php

$filename = "logo.png";



//file_get_contents : le o arquibo inteiro e retorna binario
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$minetype = $fileinfo->file($filename);

//echo "data:image/png;base64," . $base64;

$base64encode = "data:" . $minetype . ";base64," . $base64;

?>


<a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>
<img src="<?=$base64encode?>">
