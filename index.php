<?php

/*
 * This demo assumes the database is ready on localhost, 
 * and the database named "test" has a table named "users",
 * and obviously the "users" table has some data to show
 * 
 */

require 'Models/User.php';

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, name, password FROM users");
    $stmt->execute();

    // return a result into a custom object
    $users = $stmt->fetchAll(PDO::FETCH_CLASS, "User");

    foreach ($users as $user) {
        echo $user->display();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
