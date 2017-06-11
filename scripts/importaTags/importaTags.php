<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "arspect";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $route = "tags.txt";
    $fileOriginal = fopen($route, "r+");

    while(!feof($fileOriginal)) {
        $line = fgets($fileOriginal);
        $data = explode(":",$line);
        $id = $data[0];
        $nom = $data[1];
        $sql = "insert into tags values ('". $id . "','" . trim($nom, PHP_EOL ). "','','')";
        echo $sql;
        echo "<br/>";
        $conn->query($sql);;
    }
    fclose($fileOriginal);
    $conn->close();

