<?php
function error_handler($code ,$message , $file, $line){
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
         "file"=>$file
    ));
}

//função php que manipula o erro e como parametro passa o nome da funcao que manipula erro
set_error_handler("error_handler");

echo 100/0;

?>