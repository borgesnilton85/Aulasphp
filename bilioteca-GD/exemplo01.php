<?php

header("Content-Type: image/png");

//criando a imagem
//tamanho imagem
$image = imagecreate(256,256);//em pixel

//primeira cor que cria vira cor de fundo
//criando a cor passa a variavel depois paramento rgb (red green blue)
$black = imagecolorallocate($image , 255 , 255 ,255);
$red = imagecolorallocate($image , 255 , 0 ,0);

//ESCREVER NA TELA
//imagestring(variavel , tamanho da font 1 a 5 ,eixo x , eixo y , frase ,cor)
imagestring( $image, 5 ,60 , 120 , "CURSO PHP7",$red);

//formato que a imagem sera gerada

imagepng($image);

//destroy a imagem da memoria
imagedestroy($image);

?>