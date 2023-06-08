<?php

	//$screennumber = '7';
	require ('connection/connect.php');	
	require ('connection/settings.php');	
	//ini_set('display_errors', 'Off');	



echo ('<!DOCTYPE html>');
echo ('<html>');
echo ('<head>');
//echo ('<meta http-equiv="refresh" content="10">');
echo ('<link rel="stylesheet" type="text/css" href="arrstyle.css">');
//echo ('<link rel="stylesheet" href="plugins/css/bootstrap.min.css">');
//echo ('<link rel="stylesheet" href="plugins/css/dataTables.bootstrap5.min.css">');
echo ('<script src="plugins/jquery/jquery.min.js"></script>');
echo ('<script src="plugins/js/bootstrap.min.js"></script>');
echo ('<script src="plugins/jquery/jquery.dataTables.min.js"></script>');
echo ('<script src="plugins/js/dataTables.bootstrap5.min.js"></script>');
echo ('<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">');
echo ('</head>');
echo ('<body>');

$tquery = 'SELECT * FROM `schedule` ORDER BY `departure`';
$ttable = mysqli_query($conn, $tquery);


if(!$ttable){
	echo('<p>Oops, Try again</p>');
} else {

	
	echo ('<div style="position: fixed; bottom: 0px; left: 0px; width: 100%; height:7.5%; background-color: rgb(39,40,34)
	; text-align: right; vertical-align: middle; line-height: 200%;  ">Local Time : '.date("H:i").' &nbsp; </div>');



	echo '<table border="0" cellpadding="1" cellspacing="10" width="100%">';
	echo '<tr>';
	echo '<te style="font-size:60px;">SERVICE VEHICLE SHEDULE BOARD</te>';	
	echo '</tr>';
	echo '</table>';

	echo '<table id="myTable" border="0" cellpadding="0" cellspacing="10" width="100%">';

	echo '<colgroup>
	<col style="width:5%">
    <col style="width:7%">
    <col style="width:5%">
    <col style="width:5%">
    <col style="width:5%">
    <col style="width:25%">
    <col style="width:5%">
    <col style="width:10%">
 	 </colgroup> ';
	
	
	echo '<thead>';
	echo '<tr>';
	echo '<th style="font-size:30px; border-radius:8px;">Vehicle</th>';	
	echo '<th style="font-size:30px; border-radius:8px;">Plate Number</th>';	
	echo '<th style="font-size:30px; border-radius:8px;">Capacity</th>';		
	echo '<th style="font-size:30px; border-radius:8px;">Starting Point</th>';
	echo '<th style="font-size:30px; border-radius:8px;">Departure</th>';
	echo '<th style="font-size:40px; border-radius:8px;">Route</th>';
	echo '<th style="font-size:30px; border-radius:8px;">Arrival Time</th>';
	echo '<th style="font-size:30px; border-radius:8px;">Status</th>';
	echo '</tr>';
	echo '<thead>';

	echo '<tbody>';



	while (list($id,$vehicle,$vehicleno,$capacity,$startpoint,$depature,$route,$arrivaltime,$status)=mysqli_fetch_row($ttable)){
	



/*$airquery = "SELECT `airlinename` FROM `airlines` WHERE `airlinecode`='".$airlinecode."'";
if ($airresult = mysqli_query($conn, $airquery)) {
    while ($airrow = mysqli_fetch_row($airresult)) {
        $airlinename = $airrow[0];
    }

}


$destquery = "SELECT `airportname` FROM `airports` WHERE `airportcode` = '".$airport."'";
if ($destresult = mysqli_query($conn, $destquery)) {
    while ($destrow = mysqli_fetch_row($destresult)) {
        $destinationname = $destrow[0];
    }

}*/

/*	
	$timescheduled = date('H:i', strtotime($arrivestime));
	$timeactual = date('H:i', strtotime($eta));



	if (file_exists('airlinelogos/'.$airlinecode.'.png')) {
    echo '<td><img src="airlinelogos/'.$airlinecode.'.png" style="width:50px;height:39px" ></td>';	
	} 

	else {
    echo '<td><img src="airlinelogos/default.png" style="width:50px;height:39px" ></td>';	
	} 
*/
echo '<tr>';
	echo '<td>'.$vehicle.'</td>';
	echo '<td>'.$vehicleno.'</td>';
	echo '<td>'.$capacity.'</td>';
	echo '<td>'.$startpoint.'</td>';
	echo '<td>'.$depature.'</td>';
	echo '<td>'.$route.'</td>';
	echo '<td >'.$arrivaltime.'</td>';
	echo '<td>'.$status.'</td>';

echo '</tr>';
echo '</tbody>';
/*
	if ($timescheduled==$timeactual) {
		echo '<td>'.$timescheduled.'</td>';
	}

	elseif ($timescheduled>$timeactual) {
		echo '<td><old style="color:grey;">'.$timescheduled.'</old><br><early style="color:rgb(0,226,85);">'.$timeactual.'</earyl></td>';
		$delay = '2';
	}

	else{
		echo '<td><old style="color:grey;">'.$timescheduled.'</old><br><delay style="color:red;">'.$timeactual.'</delay></td>';
		$delay = '1';
	}




	if ($delay=='2') {
		echo '<td><early style="color:rgb(0,226,85);">'.$status.'</early></td>';
	}


	elseif ($delay=='1') {
		echo '<td><delay style="color:red;">'.$status.'</delay></td>';
	}


	else {
		echo '<td>'.$status.'</td>';
	}
		echo '</tr>';
*/



}}


echo '</table>';


echo ('</body>');

echo ('</html>');
?>

<!--
<script> 
$(document).ready(function() {
   $('#myTable').DataTable({ 
  pageLength: 2,
    lengthChange: false,
    responsive: true,
    autoWidth: false,
    ordering: false,
    searching: false,
    scrollCollapse: true,
    binfo:     false,
    dom: "lfrti", // HIDE NAV
    bFilter: false,
    bLengthChange: false,
   });
} );

$(document).ready(function () {
                var table = $('#myTable').DataTable(
                );
                setInterval(function(){ 
                var info = table.page.info();
                var pageNum = (info.page < info.pages) ? info.page + 1 : 1;
                table.page(pageNum).draw(false);    
                }, 1000);   
            });
</script>
		-->
