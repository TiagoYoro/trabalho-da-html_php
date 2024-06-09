<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'db_informatica');
define('USER', 'root');
define('PASSWORD', 'sua senha ');

try {
    $dsn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
    echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' .$e->getMessage();
}


?>





