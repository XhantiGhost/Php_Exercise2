<?php 

include_once 'user.php';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {

    die("Connection failed: " . mysqli_connect_error());

} else{
    
    echo "Connection successfully";
}

?>

<?php 

//include creds
require_once 'add.php';

//establsih connection
$db_server = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//is connection sucessful
if($db_server ->connect_error) {
    die("connection failed: " . $db_server->connect_error);
}
?>