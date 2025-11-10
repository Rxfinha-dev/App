<?php
spl_autoload_register(function($nome_da_classe)
{
    // Converte namespace (Core\Database) em caminho de arquivo (Core/Database.php)
    $nome_da_classe = str_replace('\\', '/', $nome_da_classe);
    $arquivo = BASE_DIR . "/" . $nome_da_classe . ".php";

    if (file_exists($arquivo)){
        include $arquivo;

    }
    else
        throw new Exception("Arquivo nao encontrado: " . $arquivo);
});
?>