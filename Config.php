<?php
    define('BASE_DIR', __DIR__);
    define('VIEWS', BASE_DIR . '/View');

    // Configuração do banco de dados
    $_ENV['db']['host'] = "localhost";
    $_ENV['db']['port'] = 3307;
    $_ENV['db']['user'] = "root";
    $_ENV['db']['pass'] = "etecjau";
    $_ENV['db']['database'] = "terceirods";

    // Configuração de logs
    define('LOG_DIR', BASE_DIR . '/logs'); // pasta onde os logs serão salvos
    define('LOG_FILE', LOG_DIR . '/error.log'); // arquivo de log
    
    // Cria a pasta de logs automaticamente, se não existir
    if (!file_exists(LOG_DIR)) {
        mkdir(LOG_DIR, 0777, true); // 0777 = permissões completas, true = recursivo
    }

    // Define PHP para registrar erros no arquivo
    ini_set('log_errors', 1);
    ini_set('error_log', LOG_FILE);
    error_reporting(E_ALL); // Reporta todos os tipos de erros

    // Define timezone
    date_default_timezone_set('America/Sao_Paulo');

    if(session_status() !== PHP_SESSION_ACTIVE ){
        session_start();
    }
?>