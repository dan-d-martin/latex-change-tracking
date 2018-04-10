<?php

$link = new mysqli("localhost", "root", "going2", "corrections");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$result = $link->query('SELECT * FROM my_changes');

while($row = $result->fetch_assoc()) {
    print "Change found: " . $row['change_id'] . "\n";
}

mysqli_close($link);