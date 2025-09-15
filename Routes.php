<?php

use App\Controller\{
    LoginController,
};
$url = parse_url($_SERVER['REQUEST_URL'], PHP_URL_PATH);

//var_dump()

switch(@$url){
    case'/':
        echo "pagina inicial";
    break;

    /**
     *  rotas para o login
     */

    case '/login':
        LoginController::index();
    break;

    case '/logout':
        LoginController::logout();
    break;

    default:
        echo "pagina nao encontrada";
    break;  
}

?>