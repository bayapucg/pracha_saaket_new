<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            About Us
            <!--<small>Preview</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">About Us</a></li>
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
                        <h1 class="box-title pull-left">About Us</h1>
                        <a href="aboutus_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="top_nav.php" id="formValidate" name="formValidate">
                        <div class="box-body">
						<div class="row">
						<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputbanner">Banner</label>
                             <input type="file" class="form-control" id="exampleInputEmail1" name="file"placeholder="Enter Address">
								</div>
                            </div>
							<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputtitle">Title</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="title" placeholder="Enter title">
                            </div> 
							</div>
							</div>
							<div class="row">
						<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputbanner">Link Name1</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" name="text_linkname"placeholder="Enter linkName1">
								</div>
								<div class="form-group">
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_link" placeholder="Enter Link">
                            </div>
                            </div>
							<div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputbanner">Link Name2</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" name="text_linkname"placeholder="Enter linkName2">
								</div>
								<div class="form-group">
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_link" placeholder="Enter Link">
                            </div>
                            </div>
							</div>
							<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
                                <label for="exampleInputheading">Heading</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_heading" placeholder="Enter Heading">
                            </div>
							</div>
							<div class="col-lg-6">
							<div class="form-group">
                                <label for="exampleInputparagraph">Paragraph</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="paragraph" placeholder="Enter Paragraph">
                            </div>
							</div>
							</div>
							<div class="form-group">
                                <label for="exampleInputphonenumber">Image</label>
                                <input type="file" class="form-control" id="exampleInputphonenumber" placeholder="Enter Phone Number" name="file">
                            </div>
                         <div class="row">
						<div class="col-lg-4">
							<div class="form-group">
                                <label for="exampleInputheading">Why Choose Us?</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_heading" placeholder="Enter Heading">
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_content" placeholder="Enter Content">
                            </div>
							</div>
							<div class="col-lg-4">
							<div class="form-group">
                                <label for="exampleInputheading">Our Vision</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_heading" placeholder="Enter Heading">
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_content" placeholder="Enter Content">
                            </div>
							</div>
							<div class="col-lg-4">
							<div class="form-group">
                                <label for="exampleInputheading">Our Mission</label>
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_heading" placeholder="Enter Heading">
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" id="exampleInputemailid" name="text_content" placeholder="Enter Content">
                            </div>
							</div>
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