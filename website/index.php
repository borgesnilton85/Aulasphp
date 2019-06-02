<?php 
//para o slim funcionar é necessario colocar o arquivo .htaccess na pagina principal
require_once("vendor/autoload.php");

//exemplo do site
$app = new \Slim\Slim();

$app->get('/', function ()
{
    echo "home page";
});


$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();

?>

