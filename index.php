<?php

/**
 * One World 365 (oneworld365.org) Website Bootstrap  
 * 
 * 
 */



require_once("./conf/config.php");
require_once("./conf/brand_config.php");
require_once("./init.php");



include("./includes/header.php");
include("./includes/footer.php");


$aRequestUri = Request::GetUri("ARRAY");
$oRequestRouter = new RequestRouter();

$oRequestRouter->Route($aRequestUri);


?>