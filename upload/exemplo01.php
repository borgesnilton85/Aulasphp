

<!-- enctype="multipart/form-data  indica que tudo que esta no form sera enviado como
dados binarios sem isso o upload no php nao funciona-->
<form method="POST" enctype="multipart/form-data">
<input type="file" name="fileupload">
<button type="submit">Send</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $file = $_FILES["fileupload"];

    if ($file["error"]) {
        throw new Exception("Error" . $file["error"]);
        
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)) {
            mkdir($dirUploads);
    }

    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

        echo "upload realizado com sucesso";

    }else{
        throw new Exception("Não foi possivel realizar o upload", 1);
        
    }
}


?>