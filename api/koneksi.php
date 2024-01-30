<?php
$database_hostname = 'localhost';
$database_username = 'id21749548_user_asep';
$database_password = '[KQ$ApJ+6S^<J{Q@';
$database_name = 'id21749548_db_asep';
$database_port = '3306';

try {
    $database_connection = new PDO("mysql:host=$database_hostname;port=$database_port;dbname=$database_name", 
    $database_username, $database_password);
    $cek = "Koneksi Berhasil";
    echo $cek;
} catch (PDOException $x){
    die($x->getMessage());
}
?>