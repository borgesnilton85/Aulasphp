<?php
//criando imagem a partir de outra imagem
$image  = imagecreatefromjpeg("certificado.jpg");

//primeira cor que cria vira cor de fundo
//criando a cor passa a variavel depois paramento rgb (red green blue)
$titleColor = imagecolorallocate($image, 0 , 0 , 0);
$gray  =imagecolorallocate($image , 100 , 100 ,100);


//ESCREVER NA TELA
//imagestring(variavel , tamanho da font 1 a 5 ,eixo x , eixo y , frase ,cor)
imagestring($image , 5 , 450 , 150 , "CERTIFICADO" , $titleColor);
imagestring($image , 5 , 440 , 350 , "DIVANEI APARECIDO" , $titleColor);
imagestring($image , 3 , 440 , 370 , utf8_decode("Concluído em:") . date("d/m/Y") , $titleColor);

header("Content-Type: image/jpg");

//formato que a imagem sera gerada , segundo parametro salva a imagem no servidor , terceiro paramentro qualidade na escala de 1 a 100
//imagejpeg($image, "Certificado-" . date("Y-m-d") .  ".jpg" , 10);
//gera imagem no navegador
imagejpeg($image);
imagedestroy($image);
?>