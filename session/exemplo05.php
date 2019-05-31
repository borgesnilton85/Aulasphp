<?php 

require_once("config.php");

echo session_save_path();
echo "<br>";
echo session_status();
echo "<br>";
switch(session_status()){
    case PHP_SESSION_DISABLED :
        echo "PHP_SESSION_DISABLED se as sessões estiverem desabilitadas.";
        break;
    case PHP_SESSION_NONE:
        echo "PHP_SESSION_NONE se as sessões estiverem habilitadas, mas nenhuma existir.";
        break;
    case PHP_SESSION_ACTIVE:
        echo "PHP_SESSION_ACTIVE se as sessões estiverem habilitadas, e uma existir.";
        break;
    default:
        echo "erro";
        break;
}


?>