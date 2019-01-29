<?php 
//connect to database
include_once 'connect.php';

// query to create table
$sql = "CREATE TABLE film (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(64) NOT NULL,
    director VARCHAR(64) NOT NULL,
    year INT(4)";

// accept link to the database and the query to create the table
    if(mysqli_query($conn, $sql)) {
        echo '<br>Table film created successfully. you may now procced to <a>
        href="add.php">add</a> data to the table';
    }else {
        echo "<br> Error create table: " . mysqli_error($conn);
    }

    //delete the table manually for testing purposes eg. DROP table publications.film;
    ?>