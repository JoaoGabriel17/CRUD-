<?php
/*
$localhost = "localhost";
$user = "root";
$password = "";
$database = "crud";

$connection = mysqli_connect($localhost, $user, $password, $database);

if (!$connection) {
    echo "Não conectado ao banco de dados";
} else {
    echo "Conectado ao banco";
}
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crud');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$connection) {
    die("ERROR: Não conectou ao banco" . mysqli_connect_error());

} else {
    echo "Conectado ao banco!";
}

?>