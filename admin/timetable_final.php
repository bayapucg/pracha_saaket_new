<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Time Table
            <!--<small>Preview</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Time Table</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h1 class="box-title pull-left">Time Table</h1>
                       
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="time_table.php" id="formValidate" name="formValidate">
                        <div class="box-body">
						<div class="table-responsive">
							<table  class="table table-striped table-bordered" id="tabledata" >
        <thead>
            <tr>
                <th>Subject</th>
                <th>From date</th>
                <th>To date</th>
                <th>Per Day Teaching Hours</th>
                <th>Per Day Mentor Hours</th>
            </tr>
        </thead>
        <tbody>
            <tr>
			
                <td>Microbiology</td>
                <td>04-March-2019</td>
                <td>08-March-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr> 
			<tr>
                  <td>Pathology</td>
                <td>11-March-2019</td>
                <td>15-March-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr> 
			<tr>
                 <td>Pharmacology</td>
                <td>18-March-2019</td>
                <td>22-March-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>Medicine</td>
                <td>29-March-2019</td>
                <td>29-March-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>PSM</td>
                <td>01-April-2019</td>
                <td>04-April-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>OBG</td>
                <td>08-April-2019</td>
                <td>12-April-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>Surgery</td>
                <td>15-April-2019</td>
                <td>19-April-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>Orthopedics</td>
                <td>22-April-2019</td>
                <td>26-April-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>Radiology</td>
                <td>29-April-2019</td>
                <td>03-May-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>Anaesthesia</td>
                <td>06-May-2019</td>
                <td>10-May-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
			<tr>
                <td>Dermatology</td>
                <td>13-May-2019</td>
                <td>17-May-2019</td>
                <td>6.5 hours</td>
                <td>1 hour</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Subject</th>
                <th>From date</th>
                <th>To date</th>
                <th>Per Day Teaching Hours</th>
                <th>Per Day Mentor Hours</th>
            </tr>
        </tfoot>
</table>
							
                </div>       
                        </div>
                        <!-- /.box-body -->
						
					
					
                       
                    </form>
					<form role="form" action="time_table.php" id="formValidate" name="formValidate">
                        <div class="box-body">
						<div class="table-responsive">
							<table  class="table table-striped table-bordered" id="tabledata2" >
        <thead>
            <tr>
            <th rowspan="2">Name</th>
            <th colspan="5">Overview</th>
           
        </tr>
        <tr>
            <th></th>
            <th>OverView</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <tr>
			
                <td>Microbiology</td>
                <td>04-Mar</td>
                <td>05-Mar</td>
                <td>06-Mar</td>
                <td>07-Mar</td>
                <td>08-Mar</td>
            </tr> 
			<tr>
                  <td>Pathology</td>
				  <td>11-Mar</td>
                <td>12-Mar</td>
                <td>13-Mar</td>
                <td>14-Mar</td>
                <td>15-Mar</td>
            </tr> 
			<tr>
                 <td>Pharmacology</td>
<td>18-Mar</td>
                <td>19-Mar</td>
                <td>20-Mar</td>
                <td>21-Mar</td>
                <td>22-Mar</td>
            </tr>
			<tr>
                <td>Medicine</td>
				<td>25-Mar</td>
                <td>26-Mar</td>
                <td>27-Mar</td>
                <td>28-Mar</td>
                <td>29-Mar</td>
            </tr>
			<tr>
                <td>PSM</td>
				<td>01-apr</td>
                <td>02-apr</td>
                <td>03-apr</td>
                <td>04-apr</td>
                <td>05-apr</td>
            </tr>
			<tr>
                <td>OBG</td>
				<td>08-apr</td>
                <td>09-apr</td>
                <td>10-apr</td>
                <td>11-apr</td>
                <td>12-apr</td>
            </tr>
			<tr>
                <td>Surgery</td>
				<td>15-apr</td>
                <td>16-apr</td>
                <td>17-apr</td>
                <td>18-apr</td>
                <td>19-apr</td>
            </tr>
			<tr>
                <td>Orthopedics</td>
			<td>22-apr</td>
                <td>23-apr</td>
                <td>24-apr</td>
                <td>25-apr</td>
                <td>26-apr</td>
            </tr>
			<tr>
                <td>Radiology</td>
				<td>29-apr</td>
                <td>30-apr</td>
                <td>01-May</td>
                <td>02-May</td>
                <td>03-May</td>
            </tr>
			<tr>
                <td>Anaesthesia</td>
				<td>06-May</td>
                <td>07-May</td>
                <td>08-May</td>
                <td>09-May</td>
                <td>10-May</td>
            </tr>
			<tr>
                <td>Dermatology</td>
				<td>13-May</td>
                <td>14-May</td>
                <td>15-May</td>
                <td>16-May</td>
                <td>17-May</td>
            </tr>
        </tbody>
		
        <tfoot>
           <tr>
            <th rowspan="2">Name</th>
            <th colspan="5">Overview</th>
           
        </tr>
        <tr>
            <th></th>
            <th>OverView</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </tfoot>
</table>
							
                </div>       
                        </div>
                        <!-- /.box-body -->
					
						
                    </form>
					<form role="form" action="time_table.php" id="formValidate" name="formValidate">
                        <div class="box-body">
						<div class="table-responsive">
							<table  class="table table-striped table-bordered" id="tabledata1" >
        <thead>
        <tr>
            <th>Time / Day</th>
            <th>Mon</th>
            <th>Tues</th>
            <th>Wed</th>
            <th>Thurs</th>
            <th>Fri</th>
        </tr>
        </thead>
        <tbody>
            <tr>
			
                <td>8:30 Am - 8:30 Am</td>
                <td></td>
                <td>Gathering</td>
                <td></td>
                <td></td>
                <td></td>
            </tr> 
			<tr>
                  <td>9:00 Am - 10:00 Am</td>
				  <td></td>
					<td>Major Subject</td>
					<td></td>
                <td></td>
                <td>Exam</td>
            </tr> 
			<tr>
                 <td>10:00 Am - 11:00 Am</td>
					<td></td>
					<td>Major Subject</td>
					<td></td>
                <td></td>
                <td>Exam</td>
            </tr>
			<tr>
                <td>11:00 Am - 11:15 Am</td>
				<td></td>
                <td></td>
                <td>Break</td>
                <td></td>
                <td></td>
            </tr>
			<tr>
                <td>11:15 Am -12:15 Pm</td>
				<td></td>
					<td>Major Subject</td>
					<td></td>
                <td></td>
                <td>Exam</td>
            </tr>
			<tr>
                <td>12:15 Pm - 1:15 Pm</td>
				<td></td>
					<td>Major Subject</td>
					<td></td>
                <td></td>
                <td>Exam</td>
            </tr>
			<tr>
                <td>1:15 Pm - 2:00 Pm</td>
				<td></td>
                <td></td>
                <td>Lunch Break</td>
                <td></td>
                <td></td>
            </tr>
			<tr>
                <td>2:00 Pm - 3:00 Pm</td>
			<td></td>
					<td>Major Subject</td>
					<td></td>
                <td></td>
                <td>Analysis & Mentorship</td>
            </tr>
			<tr>
                <td>3:00 Pm - 4:00 Pm</td>
				<td></td>
					<td>Major Subject</td>
					<td></td>
                <td></td>
                <td>Analysis & Mentorship</td>
            </tr>
			<tr>
                <td>4:00 Pm - 4:30 Pm</td>
				<td></td>
					<td>Major Subject</td>
					<td></td>
                <td></td>
                <td>Analysis & Mentorship</td>
            </tr>
			<tr>
                <td>4:30 Pm - 5:30 Pm</td>
				<td></td>
                <td></td>
                <td>Counselling Session</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
		
        <tfoot>
           <tr>
            <th>Time / Day</th>
            <th>Mon</th>
            <th>Tues</th>
            <th>Wed</th>
            <th>Thurs</th>
            <th>Fri</th>
        </tr>
        </tfoot>
</table>
							
                </div>       
                        </div>
                        <!-- /.box-body -->
						
					
					
                        <div class="box-footer">
                            
							<a href="exam.php" class="previous_1 pull-left">&laquo; Previous</a>
<a href="#" class="next_1 pull-right">Next &raquo;</a>
                        </div>
						
                    </form>
                </div>
                <!-- /.box -->


               
                <!-- /.box -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<?php include('footer.php'); ?>
<script>
$(document).ready(function() {
    $('#tabledata').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'pdfHtml5' ,
			'print'
        ]
    } );
} );

$(document).ready(function() {
    $('#tabledata1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'pdfHtml5' ,
			'print'
        ]
    } );
} );
$(document).ready(function() {
    $('#tabledata2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'pdfHtml5' ,
			'print'
        ]
    } );
} );

</script>