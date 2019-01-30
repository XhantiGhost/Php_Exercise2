<?php
//class declaration

$object = new User;

//use print_r to output data in human readable form

     print_r($object); echo "<br />";
     
//NB property is not preceeded with $, this would result

//in referencing eg. if $name = "AXE" results in  $object->AXE

     $object ->name = "AXE";
     $object->password = "secret";
     print_r($object); echo "<br />";

     $object->save_user();

     //DEFINATIONS
 //************************************************************** */
//class properties AKA fields

	class User {

//class method AKA function

	public $name, $password;

	function save_user() {

	echo "save user code here";

}

}
?>