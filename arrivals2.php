<?php
	//require ('connection/connect.php');	
	require ('connection/settings.php');	

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="arrstyle.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- jQuery library -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- DataTables CSS and JS library -->
	<!-- <link rel="stylesheet" type="text/css" href="plugins/jquery/jquery.dataTables.min.css"/> -->
    <script type="text/javascript" src="plugins/jquery/jquery.dataTables.min.js"></script> 

	<script>
    $(document).ready(function () {
        $("#TableOne").dataTable({
            processing: true,
            serverSide: true,
            pageLength: 4,
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
            info:false,
            ajax: 'connection/dataTable.php'
            
        });
    });

    $(document).ready(function () {
                var table = $('#TableOne').DataTable();
                setInterval(function(){ 
                var info = table.page.info();
                var pageNum = (info.page < info.pages) ? info.page + 1 : 1;
                table.page(pageNum).draw(false);    
                }, 5000);   
            });


		
			$('#TableOne').DataTable({
				createdRow: function (row, data, index) {
					if (data[7] = "DEPARTED" ) {
						$('td', row).eq(7).addClass('highlight');
					}
				},
			});
		


			</script>
</head>
<body>


<?php	
echo ('<div style="position: fixed; bottom: 0px; left: 0px; width: 100%; height:5%; background-color: rgb(39,40,34); text-align: right; vertical-align: middle; line-height: 200%;  ">Local Time : '.date("H:i").' &nbsp; </div>');
?>

<table width="100%">
<tr>
<te style="font-size:70px;">SERVICE VEHICLE SHEDULE BOARD</te>
</tr>
</table>

<table id="TableOne" cellspacing="5" width="100%">

<colgroup>
	<col style="width:5%;">
    <col style="width:7%">
    <col style="width:5%">
    <col style="width:5%">
    <col style="width:5%">
    <col style="width:25%">
    <col style="width:5%">
    <col style="width:10%">
</colgroup>
	
	
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


</table>
</div>

</body>

</html>
