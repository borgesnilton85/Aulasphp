<?php

$dir = "images";

if(!is_dir($dir)){
    mkdir($dir);
}

for($i=0 ; $i<3;$i++){

    switch ($i) {
        case 0:
           $origem = "html5.png";
            break;
        case 1:
        $origem = "mysql.png";
        break;
        case 2:
        $origem = "php7.png";
       
    }

    $destino= ".". DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR. $origem;
    
if (!copy($origem , $destino)){
    echo "copiado";
}

}

foreach (scandir($dir) as $item) {
    
    if(!in_array($item, array(".",".."))){
        unlink($dir . DIRECTORY_SEPARATOR . $item);
    }


}

?>