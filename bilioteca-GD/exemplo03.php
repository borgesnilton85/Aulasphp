<?php
//COM ERRO
//criando imagem a partir de outra imagem
header("Content-Type: image/jpeg");
$image  = imagecreatefromjpeg("certificado.jpg");

//primeira cor que cria vira cor de fundo
//criando a cor passa a variavel depois paramento rgb (red green blue)
$titleColor = imagecolorallocate($image, 0 , 0 , 0);
$gray  =imagecolorallocate($image , 100 , 100 ,100);


//ESCREVER NA TELA
//usando fontes externas
////imagestring(variavel , tamanho da font 1 a x, angulo da fonte , eixo x , eixo y , cor ,  caminho da fonte, frase )
//o tamanho da fonte muda 
$fileBevan =  "fonts" . DIRECTORY_SEPARATOR . "\Bevan". DIRECTORY_SEPARATOR ."Bevan_Regular.ttf"; 
$filePlayball =  "fonts" . DIRECTORY_SEPARATOR . "Playball". DIRECTORY_SEPARATOR ."Playball_Regular.ttf"; 

if (file_exists($fileBevan)) {
    imagettftext($image , 32 , 0 , 450 , 150 , $titleColor ,$fileBevan ,"CERTIFICADO");
}
if (file_exists($filePlayball)) {
    imagettftext($image , 32 , 0 , 450 , 150 , $titleColor ,$filePlayball ,"CERTIFICADO");
}

imagestring($image , 3 , 440 , 370 , utf8_decode("Concluído em:") . date("d/m/Y") , $titleColor);




//formato que a imagem sera gerada , segundo parametro salva a imagem no servidor , terceiro paramentro qualidade na escala de 1 a 100
imagejpeg($image);

imagedestroy($image);



if (file_exists($file)) {
    echo "yes";
}
?>