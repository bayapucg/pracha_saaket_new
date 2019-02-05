<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Validations
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Form</a></li>
            <li class="active">Form Validations</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <form id="formValidate" name="formValidate" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <input type="file" class="form-control" name="fv_file" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="fv_image" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" class="form-control" name="fv_text" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number</label>
                                    <input type="number" class="form-control" name="fv_number" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="fv_email" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="fv_select" id="">
                                        <option value="" selected disabled>Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="email" class="form-control" name="fv_password" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="email" class="form-control" name="fv_confirmpassword" id="">
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#formValidate').bootstrapValidator({

            fields: {

                fv_file: {
                    validators: {
                        notEmpty: {
                            message: 'File is required'
                        }
                    }
                },
                fv_image: {
                    validators: {
                        notEmpty: {
                            message: 'Image is required'
                        },
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                            message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                        }
                    }
                },
                fv_text: {
                    validators: {
                        notEmpty: {
                            message: 'Text is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
                fv_number: {
                    validators: {
                        notEmpty: {
                            message: 'Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Mobile Number must be 10 to 14 digits'
                        }
                    }
                },
                fv_email: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                            message: 'Please enter a valid email address. For example johndoe@domain.com.'
                        }
                    }
                },
                fv_select: {
                    validators: {
                        notEmpty: {
                            message: 'Select field is required'
                        }
                    }
                },
                fv_password: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Password wont allow <> [] = % '
                        }
                    }
                },
                fv_confirmpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Confirm Password is required'
                        },
                        identical: {
                            field: 'fv_password',
                            message: 'Password and Confirm Password do not match'
                        }
                    }
                }
            }
        })

    });
</script>