<?php
try {
    $db = "mysql:host=localhost;dbname=cinema;charset=utf8";
 
    $username = "root";
 
    $password = "";

    $pdo = new PDO($db, $username, $password);

 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
    $output = 'Impossível conectar BD : ' . $e . '<br>';
    echo $output;
}

?>