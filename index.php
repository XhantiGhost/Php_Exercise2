<?php 
include_once 'connect.php'

$sql = "CREATE TABLE film (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(64) NOT NULL,
    director VARCHAR(64) NOT NULL,
    year INT(4)";

    if(mysqli_query($conn, $sql)) {
        echo '<br>Table film created successfully. you may now procced to <a>
        href="add.php">add</a> data to the table';
    }else {
        echo "<br> Error create table: " . mysqli_error($conn);
    }

    ?>