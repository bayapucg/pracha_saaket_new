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
							<table  class="table table-striped table-bordered" id="tabledata1" >
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

</script>