<?php

	$type = 'i';
	$login = 'y';
	require ('../connection/connect.php');	
	require ('../connection/settings.php');	


if (isset($_POST['newarrival'])){
$vehicle= $_POST['vehicle'];
$vehicleno= $_POST['vehicleno'];
$capacity= $_POST['capacity'];
$startpoint= $_POST['startpoint'];
$depature= $_POST['departure'];
$route= $_POST['route'];
$arrivestime= $_POST['arrivaltime'];
$status= $_POST['status'];


$newsql = "INSERT INTO `vids`.`schedule` (`vehicle`,`vehicleno`, `capacity`, `startpoint`, `departure`, `route`, `arrivaltime`, `status`) VALUES ('".$vehicle."','".$vehicleno."', '".$capacity."', '".$startpoint."', '".$depature."', '".$route."', '".$arrivestime."', '".$status."');";


if (mysqli_query($conn, $newsql)) {
echo ('');
}


}

if (isset($_POST['updateschedule'])){
$id= $_POST['id'];
$a= $_POST['a'];
$b= $_POST['b'];
$c= $_POST['c'];
$d= $_POST['d'];
$e= $_POST['e'];
$f= $_POST['f'];
$g= $_POST['g'];
$h= $_POST['h'];


$sql = "UPDATE `vids`.`schedule` SET `capacity` = '".$c."', `startpoint` = '".$d."',`departure` = '".$e."',`route` = '".$f."',`arrivaltime` = '".$g."',`status` = '".$h."' WHERE `schedule`.`id` = '".$id."';";


if (mysqli_query($conn, $sql)) {
echo ('');
}


}



if (isset($_POST['deletevehicle'])){
	$vehicledelete= $_POST['vehicle'];
	$vehiclenodelete= $_POST['vehicleno'];
	$vehicleid= $_POST['id'];




$removesql = "DELETE FROM `vids`.`schedule` WHERE `schedule`.`id` = '".$vehicleid."'";


if (mysqli_query($conn, $removesql)) {
echo ('');
}

}




echo ('<!DOCTYPE html>');
echo ('<html>');
echo ('<head>');
echo ('<meta http-equiv="refresh" content="10">');
echo ('<link rel="stylesheet" type="text/css" href="staff.css">');
echo ('<meta name="google" value="notranslate">');
echo ('</head>');
echo ('<body>');



$tquery = 'SELECT * FROM `schedule` ORDER BY `id`';

$ttable = mysqli_query($conn, $tquery);


if(!$ttable){
	echo('<p>Oops, Try again</p>');
} else {

		
	echo ('<div style="text-align: left; position:fixed;  "> SERVICE VEHICLE SHEDULE BOARD </div><div style="text-align: right;  ">Local Time : '.date("H:i").' &nbsp; </div>');


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
	echo '<td><a href="arrnewarrival.php"><button>New Arrival</button></a></td>';
	echo '<td><a href="../arrivals.php"><button>Schedule Board</button></a></td>';
	echo '</tr>';



	while (list($id,$vehicle,$vehicleno,$capacity,$startpoint,$depature,$route,$arrivaltime,$status)=mysqli_fetch_row($ttable)){
	
/*
	$timescheduled = date('H:i', strtotime($arrivestime));
	$timeactual = date('H:i', strtotime($eta));
	$slot = date('H:i', strtotime($slottime));
*/

	echo '<tr>';

/*	
	if (file_exists('airlinelogos/'.$airlinecode.'.png')) {
    echo '<td><img src="airlinelogos/'.$airlinecode.'.png" style="height:20px" ></td>';	
	} 

	else {
    echo '<td><img src="airlinelogos/default.png" style="height:20px" ></td>';	
	}
*/

			echo '<td>'.$vehicle.'</td>';
			echo '<td>'.$vehicleno.'</td>';
			echo '<td>'.$capacity.'</td>';
			echo '<td>'.$startpoint.'</td>';
			echo '<td>'.$depature.'</td>';
			echo '<td>'.$route.'</td>';
			echo '<td>'.$arrivaltime.'</td>';
			echo '<td>'.$status.'</td>';
	/*
		if ($gate=='0') {
		echo '<td></td>';
	}

	else {
		echo '<td>'.$gate.'</td>';
	}



	echo '<td>'.$belt.'</td>';
	echo '<td>'.$status.'</td>';

	if ($type=='d') {
		echo '<td>Dom</td>';
	}

	elseif ($type=='i') {
		echo '<td>Intl</td>';
	}

	else
	{
		echo '<td>Other</td>';
	}

	echo '<td>'.$staffmsg.'</td>';
*/
	echo ('<form name="updatevehicles" method="post" action="arrupdate.php">');
	echo ('<input type="text" id="vehicle" name="vehicle" value="'.$vehicle.'" hidden>');
	echo ('<input type="text" id="vehicleno" name="vehicleno" value="'.$vehicleno.'" hidden>');
	echo ('<input type="text" id="id" name="id" value="'.$id.'" hidden>');

	if ($login=='y') {
		echo '<td><input type="submit" value="Update Vehicle" name="updatevehicle"></td>';
	}

	else {
		echo '<td><input type="submit" value="Update Vehicle" name="updatevehicle"></td>';
	}

	echo ('</form>');


	

	echo ('<form name="deletevehicles" method="post" action="arradmin.php">');
	echo ('<input type="text" id="vehicle" name="vehicle" value="'.$vehicle.'" hidden>');
	echo ('<input type="text" id="vehicleno" name="vehicleno" value="'.$vehicleno.'" hidden>');
	echo ('<input type="text" id="id" name="id" value="'.$id.'" hidden>');

	if ($login=='y') {
		echo '<td><input type="submit" value="Delete Flight" name="deletevehicle"></td>';
	}

	else {
		echo '<td><input type="submit" value="Delete Flight" name="deletevehicle"></td>';
	}

	
	echo ('</form>');

	echo '</tr>';


}}


echo '</table>';


echo ('</body>');
echo ('</html>');





?>