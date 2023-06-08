<?php

require ('../connection/connect.php');	
require ('../connection/settings.php');		


echo ('<!DOCTYPE html>');
echo ('<html>');
echo ('<head>');
echo ('<link rel="stylesheet" type="text/css" href="staff.css">');
echo ('<meta name="google" value="notranslate">');
echo ('</head>');
echo ('<body>');



if (isset($_POST['updatevehicle'])){

$vehicle= $_POST['vehicle'];
$vehicleno= $_POST['vehicleno'];
$id= $_POST['id'];




	echo ('<div style="text-align: left; position:fixed;  ">Updating Schedule '.$vehicle.$vehicleno.'</div><div style="text-align: right;  ">Last Reload : '.date("H:i").' &nbsp; </div>');


	echo '<table border="0" cellpadding="1" cellspacing="10" width="100%">';


	echo '<tr>';
	echo '<th>id</th>';
	echo '<th>Vehicle</th>';	
	echo '<th>Plate Number</th>';	
	echo '<th>Capacity</th>';		
	echo '<th>Starting Point</th>';
	echo '<th>Departure</th>';
	echo '<th>Route</th>';
	echo '<th>Arrival Time</th>';
	echo '<th>Status</th>';
	echo '</tr>';



$aquery = "SELECT `capacity` FROM `schedule` WHERE `schedule`.`id` = '".$id."'";

$arow = mysqli_fetch_row(mysqli_query($conn, $aquery));
$c = $arow[0];


$bquery = "SELECT `startpoint` FROM `schedule` WHERE `schedule`.`id` = '".$id."'";

$brow = mysqli_fetch_row(mysqli_query($conn, $bquery));
$d = $brow[0];


$cquery = "SELECT `departure` FROM `schedule` WHERE `schedule`.`id` = '".$id."'";

$crow = mysqli_fetch_row(mysqli_query($conn, $cquery));
$e = $crow[0];


$dquery = "SELECT `route` FROM `schedule` WHERE `schedule`.`id` = '".$id."'";

$drow = mysqli_fetch_row(mysqli_query($conn, $dquery));
$f = $drow[0];


$equery = "SELECT `arrivaltime` FROM `schedule` WHERE `schedule`.`id` = '".$id."'";

$erow = mysqli_fetch_row(mysqli_query($conn, $equery));
$g = $erow[0];


$fquery = "SELECT `status` FROM `schedule` WHERE `schedule`.`id` = '".$id."'";

$frow = mysqli_fetch_row(mysqli_query($conn, $fquery));
$h = $frow[0];



	echo '<tr>';



echo ('<form name="updateschedule" method="post" action="arradmin.php">');

/*
	if (file_exists('airlinelogos/'.$airlinecode.'.png')) {
    echo '<td><img src="airlinelogos/'.$airlinecode.'.png" style="height:20px" ></td>';	
	} 

	else {
    echo '<td><img src="airlinelogos/default.png" style="height:20px" ></td>';	
	}

echo '<td>'.$airlinecode.$flightno.'</td>';



echo ('<input type="text" id="airlinecde" name="airlinecde" value="'.$airlinecode.'" hidden>');
echo ('<input type="text" id="flightnumber" name="flightnumber" value="'.$flightno.'" hidden>');
echo ('<input type="text" id="date" name="date" value="'.$arrives.'" hidden></td>');



echo ('<td><select name="airportcode">');



$nquery = "SELECT `airportname` FROM `airports` WHERE `airportcode` = '".$airport."'";

$nrow = mysqli_fetch_row(mysqli_query($conn, $nquery));
$airportnameselect = $nrow[0];




echo ('<option selected value="'.$airport.'">'.$airportnameselect.'</option>');	


$aquery = 'SELECT * FROM `airports`';
$atable = mysqli_query($conn, $aquery);

while (list($airportcode,$airportname)=mysqli_fetch_row($atable)){

echo ('<option value="'.$airportcode.'">'.$airportname.'</option>');	

}



echo ('</select></td>');

*/


/* FOR UPDATE VIEWING ONLY*/
echo ('<td><input type="text" id="id" name="id" size="2" value="'.$id.'" readonly style="border:0px"></td>');
echo ('<td><input type="text" id="a" name="a" size="8" value="'.$vehicle.'" readonly style="border:0px"></td>');
echo ('<td><input type="text" id="b" name="b" size="8" value="'.$vehicleno.'" readonly style="border:0px"></td>');
echo ('<td><input type="text" id="c" name="c" size="8" value="'.$c.'" readonly style="border:0px"></td>');
echo ('<td><input type="text" id="d" name="d" size="15" value="'.$d.'" readonly style="border:0px"></td>');
echo ('<td><input type="time" id="e" name="e" size="7" value="'.$e.'" readonly style="border:0px"></td>');
echo ('<td><input type="text" id="f" name="f" size="80" value="'.$f.'" readonly style="border:0px"></td>');
echo ('<td><input type="time" id="g" name="g" size="7" value="'.$g.'"></td>');
echo ('<td><input type="text" id="h" name="h" size="8" value="'.$h.'"></td>');



/*

if ($type=='d') {
	echo ('<td><select name="type">');
	echo ('<option selected value="d">Dom</option>');	
	echo ('<option value="i">Intl</option>');	
	echo ('<option value="o">Other</option>');	
}

elseif ($type=='i') {
	echo ('<td><select name="type">');
	echo ('<option selected value="i">Intl</option>');	
	echo ('<option value="d">Dom</option>');	
	echo ('<option value="o">Other</option>');	
}

else {
	echo ('<td><select name="type">');
	echo ('<option selected value="o">Other</option>');	
	echo ('<option value="d">Dom</option>');	
	echo ('<option value="i">Intl</option>');	
}

echo ('<td><input type="text" id="staffmsg" name="staffmsg" size="10" value="'.$staffmsg.'"></td>');

*/


echo '</table>';




echo ('<input type="submit" value="Update Vehicle" name="updateschedule">');
echo '</form>';


echo ('<a href="arradmin.php"><button>Admin Flight Display</button></a>');





echo ('</body>');
echo('</html>');
}

else {
	echo('');
}

?>
