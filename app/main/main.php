<?php

if(!isset($_SESSION['user_session'])){
    redirect ("login");
}

include('./views/main/main.view.php')

?>