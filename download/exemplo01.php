<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

//var_dump($parse);
//var_dump(basename($parse["path"]));
//var_dump(basename($parse["host"]));
//var_dump(basename($parse["scheme"]));

$baseName = basename($parse["path"]);


$file = fopen($baseName, "w+");
//$file = fopen("google.png" , "w+");

fwrite($file , $content);
fclose($file);

?>


<!-- abrindo o bloco php com igual seria como se usasse um echo-->
<img src="<?=$baseName?>">