
<DOCTYPE html>
    <html>
    <head>
    <!-- <meta http-equiv="refresh" content="10"> 
    <link rel="stylesheet" type="text/css" href="arrstyle.css">
    <link rel="stylesheet" href="plugins/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="plugins/css/dataTables.bootstrap5.min.css"> -->
    
    
    <!-- jQuery library -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- DataTables CSS and JS library -->
    <link rel="stylesheet" type="text/css" href="plugins/jquery/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="plugins/jquery/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function () {
        $("#example").dataTable({
            processing: true,
            serverSide: true,
            pageLength: 5,
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
            ajax: 'data.php'
            
        });
    });

    $(document).ready(function () {
                var table = $('#example').DataTable();
                setInterval(function(){ 
                var info = table.page.info();
                var pageNum = (info.page < info.pages) ? info.page + 1 : 1;
                table.page(pageNum).draw(false);    
                }, 5000);   
            });
        </script>
    
    </head>
    <body>
    <div class="container">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                <th> Vehicle </th>
                <th> Plate Number</th>
                <th> Capacity</th>
                <th> Starting Point</th>
                <th> Departure</th>
                <th> Route</th>
                <th> Arrival Time</th>
                <th> Status</th>
                </tr>
            </thead>
 
    
    </table>
    </div>
    
    </body>
    </html>
    
    