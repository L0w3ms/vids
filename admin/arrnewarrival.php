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




	echo ('<div style="text-align: left; position:fixed;  ">Adding New Vehicle Schedule</div><div style="text-align: right;  ">Last Reload : '.date("H:i").' &nbsp; </div>');


	echo '<table border="0" cellpadding="1" cellspacing="10" width="100%">';


	echo '<tr>'; 
	echo '<th>Vehicle</th>';	
	echo '<th>Plate Number</th>';	
	echo '<th>Capacity</th>';		
	echo '<th>Starting Point</th>';
	echo '<th>Departure</th>';
	echo '<th>Route</th>';
	echo '<th>Arrival Time</th>';
	echo '<th>Status</th>';   
	echo '</tr>';


	echo '<tr>';


echo ('<form name="newarrival" method="post" action="arradmin.php">');

/*

echo ('<td><select name="airlinecode" size="10" required>');


$aquery = 'SELECT * FROM `airlines`';
$atable = mysqli_query($conn, $aquery);

while (list($airlinecode,$airlinename)=mysqli_fetch_row($atable)){

echo ('<option value="'.$airlinecode.'">'.$airlinename.'</option>');	

}

echo ('</select></td>');


echo '<td><input type="number" id="flightno" name="flightno" min="1" max="9999" value="" required></td>';


echo ('<td><select name="airportcode" size="10" required>');


$aquery = 'SELECT * FROM `airports`';
$atable = mysqli_query($conn, $aquery);

while (list($airportcode,$airportname)=mysqli_fetch_row($atable)){

echo ('<option value="'.$airportcode.'">'.$airportname.'</option>');	

}

echo ('</select></td>');

*/


echo ('<td><input type="text" id="vehicle" name="vehicle" size="8" value="" required></td>');
echo ('<td><input type="text" id="vehicleno" name="vehicleno" size="8" value="" required></td>');
echo ('<td><input type="text" id="capacity" name="capacity" size="8" value="" required></td>');
echo ('<td><input type="text" id="startpoint" name="startpoint" size="15" value="" required></td>');
echo ('<td><input type="time" id="departure" name="departure" size="7" value="" required></td>');
echo ('<td><input type="text" id="route" name="route" size="80" value="" required></td>');
echo ('<td><input type="time" id="arrivaltime" name="arrivaltime" size="7" value="" required></td>');
echo ('<td><input type="text" id="status" name="status" size="8" value="" required></td>');

echo '</table>';


echo ('<input type="submit" value="Add New Schedule" name="newarrival">');


echo '</form>';
echo ('<a href="arradmin.php"><button>SERVICE VEHICLE SHEDULE</button></a>');





echo ('</body>');
echo('</html>');



?>