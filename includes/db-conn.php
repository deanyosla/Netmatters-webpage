<?php
try {
    $env = parse_ini_file('db.env');
    $host = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USER"];
    $password = $env["DB_PASSWORD"];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
          echo "Connected to $dbname at $host successfully.";
    } 
    catch (PDOException $e) {
        die ("Could not connect to the database $dbname, $host, :" . $e->getMessage());
    }
}
catch (PDOException $e) {
    $_SESSION['errMsg'] = "Database details are not correct";
    
}
