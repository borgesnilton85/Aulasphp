<?php
//thumbnail diminui o tamanho do arquivi mantendo as proporções
header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";
$new_width = 256;
$new_height = 256;
//mostra informações do tamanho arquivo
//var_dump(getimagesize($file));
/**
 * $data = getimagesize($file);
 *$width = $data[0];
 *$height = $data[1];
 *
 * o o codigo comentado é substiduito pela linha abaixo
 */
 
 list($old_width , $old_height) = getimagesize($file);
//imagecreatetruecolor carrega 16 milhoes de cores
 $new_image = imagecreatetruecolor($new_width,$new_height);
 $old_image = imagecreatefromjpeg($file); 

//imagecopyresampled(novaimagem , imagemorigem , eixo x onde comeca o corte da imagem de nova , eixo y onde comeca o corte da imagem de nova
//                     eixo x onde comeca o corte da imagem de origem , eixo y onde comeca o corte da imagem de origem , 
//                  altua imagem nova , largura imagem nova, 
//                  altua imagem antiga,largura imagem antiga)
imagecopyresampled($new_image , $old_image , 0 , 0 ,
                    0 , 0 , 
                    $new_width,$new_height ,
                    $old_width , $old_height);

//cria imagem
imagejpeg($new_image);
imagedestroy($new_image);
imagedestroy($old_image);

 
?>