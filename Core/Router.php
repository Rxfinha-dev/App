<?php

use App\Controller\{
    LoginController,
};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//var_dump()

switch($url){

    case '/':
        echo "pagina inicial";
        break;

    case '/login':
        include __DIR__ . '/../View/Login/form_login.php';
        break;

}

?>