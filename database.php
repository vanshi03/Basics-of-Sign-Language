<?php
#    $conn = new mysqli("localhost", "root", "proj3ctw0rk");
#    if(!$conn)
#        die("Connection Error: ".$conn->connect_error."<br>");
#    echo "Connection Setup done.<br>";
#
#    $sql = "CREATE DATABASE signlanguage";
#    if(!$conn->query($sql))
#        die("Database Error: ".$conn->error."<br>");
#    echo "Database Created.<br>";
#    $conn->close();
?>

<?php
#    $conn = new mysqli("localhost", "root", "proj3ctw0rk", "signlanguage");
#    if(!$conn)
#        die("Connection Error: ".$conn->connect_error."<br>");
#    echo "Connection Setup done.<br>";
#
#    $sql = "CREATE TABLE  words(
#        id INT(6) AUTO_INCREMENT PRIMARY KEY,
#        wordname VARCHAR(30) NOT NULL UNIQUE,
#        link VARCHAR(255) NOT NULL UNIQUE,
#        meaning VARCHAR(500),
#        categories VARCHAR(150) NOT NULL,
#        typesofsign VARCHAR(3),
#        )";
#    if ($conn->query($sql) === TRUE)
#        echo "Table words created successfully";
#    else
#        die("Table Error: ".$conn->error."<br>");
#    echo "<br>";
#    $conn->close();
?>

