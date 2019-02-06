<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Top Nav
            <!--<small>Preview</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Top Nav</a></li>
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
                        <h1 class="box-title pull-left">Top Navigation</h1>
                        <a href="topnav_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="top_nav.php" id="formValidate" name="formValidate">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputaddress">Address</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" name="address"placeholder="Enter Address">
								
                            </div>
                            <div class="form-group">
                                <label for="exampleInputemailid">Email Id</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="emailid" placeholder="Enter Email id">
                            </div>
							<div class="form-group">
                                <label for="exampleInputphonenumber">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputphonenumber" placeholder="Enter Phone Number" name="phonenumber">
                            </div>
                         <div class="row">
						 <div class="col-lg-6"><div class="form-group">
                                <label for="exampleInputhours">Opening Hours:</label>
                                <select class="form-control" name="fv_select" id="">
                                        <option value="" selected disabled>From</option>
                                        <option value="">monday</option>
                                        <option value="">tuesday</option>
                                        <option value="">Wednesday</option>
                                        <option value="">Thursday</option>
                                        <option value="">Friday</option>
                                        <option value="">Saturday</option>
                                        <option value="">Sunday</option>
                                    </select>
                            </div></div>
						  <div class="col-lg-6"><div class="form-group">
                                <label for="exampleInputhours">Opening Hours:</label>
                                <select class="form-control" name="fv_select" id="">
                                        <option value="" selected disabled>To</option>
                                        <option value="">monday</option>
                                        <option value="">tuesday</option>
                                        <option value="">Wednesday</option>
                                        <option value="">Thursday</option>
                                        <option value="">Friday</option>
                                        <option value="">Saturday</option>
                                        <option value="">Sunday</option>
                                    </select>
                            </div></div>
						 </div>
						 <div class="row">
						 <div class="col-lg-6"><label for="exampleInputemailid">Time From</label>
                                <input type="time" class="form-control" id="exampleInputemailid" name="emailid" placeholder="Enter Email id"></div>
						 <div class="col-lg-6"><label for="exampleInputemailid">Time To</label>
                                <input type="time" class="form-control" id="exampleInputemailid" name="emailid" placeholder="Enter Email id"></div>
						 </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#formValidate').bootstrapValidator({

            fields: {

                
                address: {
                    validators: {
                        notEmpty: {
                            message: 'address is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
               phonenumber: {
                    validators: {
                        notEmpty: {
                            message: 'PhoneNumber is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Mobile Number must be 10 to 14 digits'
                        }
                    }
                },
                emailid: {
                    validators: {
                        notEmpty: {
                            message: 'Emailid is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                            message: 'Please enter a valid email address. For example johndoe@domain.com.'
                        }
                    }
                },
                
            }
        })

    });
</script>