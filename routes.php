<?php

if(!isset($_GET['view'])){
    require('./app/login/login.php');
}else {
    
    $view = $_GET['view'];

    switch ($view) {
        case 'login':
            require('./app/login/login.php');
        break;
        case 'main':
            require('./app/main/main.php');
            break;
        
        default:
            # code...
            break;
    }

}

?>