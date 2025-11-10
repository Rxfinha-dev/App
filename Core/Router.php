<?php

use App\Controller\{
    LoginController,
};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//var_dump()

switch($url){

    case '/':
        include __DIR__ . '/../View/Includes/Cabecalho.php';
        include __DIR__ . '/../View/Login/Sidebar.php';
        break;

    case '/login':
        include __DIR__ . '/../View/Login/form_login.php';
        break;

    case '/paciente':
        include __DIR__ . '/../View/Includes/Cabecalho.php';
        include __DIR__ . '/../View/Login/Paciente/form_paciente.php';
        break;

    case '/medico':
        include __DIR__ . '/../View/Includes/Cabecalho.php'; 
        include __DIR__ . '/../View/Login/Medico/form_medico.php';
        break;

    case '/produto':
        include __DIR__ . '/../View/Includes/Cabecalho.php';
        include __DIR__ . '/../View/Login/Produto/form_produto.php';
        break;

    case '/servico':
        include __DIR__ . '/../View/Includes/Cabecalho.php';
        include __DIR__ . '/../View/Login/Servico/form_servico.php';
        break;
    

}

?>