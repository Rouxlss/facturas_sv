<?php session_start();

include('./config/config.php');
include('./config/functions.php');

$connection = connection($data_base_config);

include('./routes.php');

?>