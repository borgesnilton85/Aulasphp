<?php

$images = scandir("images");

//var_dump($images);

$data = array();

foreach ($images as $img) {
    //in_array faz uma busca no array 
    //in_array(needle,haystack)
    //needele = o que procura
    if(!in_array($img , array(".",".."))){
       
        $filename = "images"  .DIRECTORY_SEPARATOR. $img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/y=Y H:i:s" , filemtime($filename));
        $info["url"] = "http://localhost/Aulasphp/DIR/" . str_replace("\\" ,"/" ,$filename);
        //var_dump($info);

        //push inserir no primeiro array as informações do outro array
        array_push($data , $info);
    }
}

echo json_encode($data);

?>