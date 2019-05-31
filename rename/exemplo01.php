<?php

$dir1  = "folder_01";
$dir2  = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename ="README.txt";
if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename , "w+");
    fwrite($file , date("d/m/Y  H:i:s"));
    fclose($file);
}
/**
 * função rename move um arquivo ou altera no nome se for na mesma pasta
 */
rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename,//origem
    $dir2 . DIRECTORY_SEPARATOR . $filename//destino
);

echo "arquivo movido com sucesso" ;


?>