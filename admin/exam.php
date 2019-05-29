<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Exam
            <!--<small>Preview</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Exam</a></li>
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
                        <h1 class="box-title pull-left">Exam</h1>
                        <a href="#"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="time_table.php" id="formValidate" name="formValidate">
                        <div class="box-body">
							<div class="row">
						<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputbanner">Exam Day</label>
                             <select class="form-control" name="fv_select" id="" >
													<option value="">Friday</option>
													<option value="">Saturday</option>
													<option value="">Sunday</option>
												</select>
								</div>
                            </div>
							<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputtitle">Gathering Duartion</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="title" placeholder="Enter Duration">
                            </div> 
							</div>
							</div>
							<div class="row">
						<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputbanner">Exam Duration From</label>
                             <input type="time" class="form-control" id="exampleInputEmail1" name="text_linkname"placeholder="Enter Frequency">
								</div>
								
                            </div>
							<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputtitle">Exam Duration To</label>
                                <input type="time" class="form-control" id="exampleInputemailid" name="title" placeholder="Enter Duration">
                            </div> 
							</div>
							</div>
							<div class="row">
						<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputbanner">Break Frequency</label>
                             <input type="number" class="form-control" id="exampleInputEmail1" name="text_linkname"placeholder="Enter Frequency">
								</div>
								
                            </div>
							<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputbanner">Break Duration</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" name="text_linkname"placeholder="Enter Duration">
								</div>
                            </div>
							</div>
                        <div class="row">
						<div class="col-lg-6">
							<div class="form-group">
                               <label for="exampleInputphonenumber">Counselling Session</label>
                                <input type="text" class="form-control" id="exampleInputphonenumber" placeholder="Enter Counselling session" name="file">
                            </div>
							</div>
						<div class="col-lg-6">
							<div class="form-group">
                               <label for="exampleInputphonenumber">Mentorship</label>
                                <input type="text" class="form-control" id="exampleInputphonenumber" placeholder="Enter Mentership" name="file">
                            </div>
							</div>
							
							</div>
                        </div>
                        <!-- /.box-body -->
						
					<div class="box-body text-center">
                            
							<button type="submit" class="btn btn-primary">Create</button>
                        </div>
					
                        <div class="box-footer">
                            
							<a href="time_table.php" class="previous_1 pull-left">&laquo; Previous</a>
<a href="timetable_final.php" class="next_1 pull-right">Next &raquo;</a>
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

                
                file: {
                    validators: {
                        notEmpty: {
                            message: 'File is required'
                        }
                    }
                },
                title: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
				text_linkname: {
                    validators: {
                        notEmpty: {
                            message: 'linkname is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
				text_link: {
                    validators: {
                        notEmpty: {
                            message: 'link is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
				paragraph: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
				heading: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                }
			,text_heading: {
                    validators: {
                        notEmpty: {
                            message: 'Heading is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },text_content: {
                    validators: {
                        notEmpty: {
                            message: 'Content is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
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