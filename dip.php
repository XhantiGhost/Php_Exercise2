<?php 
include_once 'connect.php';

$sql = "SELECT * FROM film";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    //output data of selection
    $display = mysqli_fetch_assoc($result);
    echo "<br>Title: " . $display["director"];
}else {
    echo "0 results";
}

mysqli_close($conn);

?>