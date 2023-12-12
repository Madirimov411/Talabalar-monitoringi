<?php

    $db_name = "mysql:host=localhost;dbname=talabalar";
    $username = "root";
    $password = "";

    try {
        $connection = new PDO($db_name, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Ulanishda xatolik: " . $e->getMessage();
    }

?>