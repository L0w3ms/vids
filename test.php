<?php
	//require ('connection/connect.php');	
	require ('connection/settings.php');	

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="test.css">

<div class="container">
  <div class="toppane">SERVICE VEHICLE SHEDULE BOARD</div>
  <div class="d-flex">
    <div class="leftpane">




    <thead>
    <tr>
    <th style="font-size:30px; border-radius:8px;">Vehicle</th>
    <th style="font-size:30px; border-radius:8px;">Plate Number</th>
    <th style="font-size:30px; border-radius:8px;">Capacity</th>	
    <th style="font-size:30px; border-radius:8px;">Starting Point</th>
    <th style="font-size:30px; border-radius:8px;">Departure</th>
    <th style="font-size:40px; border-radius:8px;">Route</th>
    <th style="font-size:30px; border-radius:8px;">Arrival Time</th>
    <th style="font-size:30px; border-radius:8px;">Status</th>
    </tr>
    <thead>

    </div>
    <div class="rightpane">
      <h1></h1>
    </div>
  </div>
</div>

</head>
<body>

<?php	
echo ('<div style="position: fixed; bottom: 0px; left: 0px; width: 100%; height:5%; background-color: rgb(39,40,34); text-align: right; vertical-align: middle; line-height: 200%;  ">Local Time : '.date("H:i").' &nbsp; </div>');
?>

</body>
</html>
