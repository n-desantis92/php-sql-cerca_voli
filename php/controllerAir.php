<?php
include 'connessione.php';

$sql = "SELECT * FROM airports";

if ($result = $connessione->query($sql)) {
    if ($result->num_rows > 0) {
        echo ' <table>
        <tr>
        <th>id</th>
        <th>name</th>
        <th>code</th>
        <th>lat</th>
        <th>lng</th>
        </tr>';
        while ($row = $result->fetch_array()) {
            echo '
            <tr>
            <td>'. $row['id'] .'</td>
            <td>'. $row['name'] .'</td>
            <td>'. $row['code'] .'</td>
            <td>'. $row['lat'] .'</td>
            <td>'. $row['lng'] .'</td>
            </tr>
            ';
        }
        echo "</table>";
    }else {
        echo "Non ci sono righe per questa query";
    }
}else {

    echo "Errore, impossibile eseguire la query $sql. " . $connessione->error;
}



$connessione->close();

?>