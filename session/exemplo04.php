<?php
require_once("config.php");

session_regenerate_id();

session_id('v2198gsklch3rvi380le34aqgo'); // passa um id ja existente

echo session_id();

var_dump($_SESSION);



 ?>
