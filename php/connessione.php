<?php

// nome di host
$host = "localhost";
// username dell'utente in connessione
$user = "root";
// password dell'utente
$password = "root";
// nome del database
$db = "cerca_voli";
// crea la connessione mysqli

$connessione = new mysqli($host,$user,$password,$db);

if ($connessione === false) {
    die("Errore di connessione: " . $connessione->connect_error);
}

echo "Connessione avvenuta con successo: " . $connessione->host_info;

?>