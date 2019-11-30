
<?php
    session_start();

    $hostname = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "library";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

?>