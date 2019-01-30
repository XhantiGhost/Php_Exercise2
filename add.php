<?php

include_once 'connect.php';

$sql = "INSERT INTO film (title, director, year)
VALUES ('Escape from New York', 'John Carpenter', '1981')";

if (mysql_query($conn, $sql)) {
    echo '<br>New record for table, film, create successfully. You may now select an entry
    for <a href="dip.php">didsplay</a>'; 
}else {
    echo "Failed to add data: " .$sql . "<br>" . mysqli_error($conn);
}


?>