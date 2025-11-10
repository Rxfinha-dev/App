<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $conexao = null;

    /**
     * Retorna a conexão PDO (singleton)
     */
    public static function getConnection(): PDO
    {
        if (self::$conexao === null) {
            try {
                $dsn = "mysql:host={$_ENV['db']['host']};port={$_ENV['db']['port']};dbname={$_ENV['db']['database']};charset=utf8mb4";
                
                self::$conexao = new PDO(
                    $dsn,
                    $_ENV['db']['user'],
                    $_ENV['db']['pass'],
                    [
                        PDO::ATTR_PERSISTENT => true,
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
                    ]
                );
            } catch (PDOException $e) {
                error_log($e->getMessage(), 3, __DIR__ . '/../logs/error.log');
                die("Erro ao conectar ao banco de dados. Verifique usuário, senha e permissões.");
            }
        }

        return self::$conexao;
    }
}

