<?php


////////////////////////////////////////////
///////// CONNECTION SETTINGS //////////////
////////////////////////////////////////////


// Simply Update the Host, Username  and Password to match your SQL server.

$host		=	'localhost';
$usrname	=	'root';
$passwd		=	'';

////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
//// DO NOT EDIT ANYTHING BELOW HERE ///////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////

$dbname		=	'vids';

$conn = new mysqli($host, $usrname, $passwd, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_select_db($conn,$dbname) or die ('Cannot find the DB');


?>