<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Seminars Single
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
            <li class="active">Seminars Single</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
			
			<div class="box box-primary">
                    <div class="box-header with-border">
                        <h1 class="box-title pull-left">Seminars</h1>
                        <a href="courses_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="courses.php" id="formValidate" name="formValidate">
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
						
                        <div class="box-body">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-list">
                                        <thead>
                                            <tr>
                                                <th>image</th>
                                                <th>Date</th>
                                                <th>Course</th>
												<th>Instuctor Image</th>
                                                <th>Instuctor Name</th>
                                                <th>Category</th>
                                                <th>Heading</th>
                                                <th>Paragraph</th>
                                                <!--<th>Action</th>-->
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="file" class="form-control" name="bfile" placeholder="Enter Instuctor "/ >
                                                </td>
                                                <td>
                                                    <input type="time" class="form-control" name="btext" placeholder="Enter Rating"/>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bspecification" placeholder="Enter Course"/>
                                                </td>
                                               <td>
                                                    <input type="file" class="form-control" name="bfile" placeholder="Enter Instuctor "/ >
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="btext" placeholder="Enter Instuctor Name"/>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bspecification" placeholder="Enter Category"/>
                                                </td>
												<td>
                                                    <input type="text" class="form-control" name="btext" placeholder="Enter Heading"/>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bspecification" placeholder="Enter Paragraph"/>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-md" id="addRow">Add Row</button>

                                </div>
                                <hr class="mb-10">
                                
                            </div>
                        </div>
                 
                        
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!--<div class="box box-primary">
                    <div class="box-header with-border">
                        <h5 class="box-title">Add Contacts</h5>
                    </div>
                    <!-- form start 
                    <form id="" name="" action="" method="">
                        <div class="box-body">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-list">
                                        <thead>
                                            <tr>
                                                <th>Text</th>
                                                <th>Email</th>
                                                <th>Number</th>
                                                <th>Select</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" name="btext" placeholder="Text"/>
                                                </td>
                                                <td>
                                                    <input type="email" class="form-control" name="bemail" placeholder="Email"/>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" name="bnumber" placeholder="Number"/>
                                                </td>
                                                <td>
                                                    <select name="bselect" class="form-control">
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-md" id="addRow">Add Row</button>

                                </div>
                                <hr class="mb-10">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-md btn-success btn-flat">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>-->

            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>

<script>
    $(document).ready(function() {
        var counter = 0;

        $("#addRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="file" class="form-control" placeholder="" name="btext' + counter + '"/></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Enter Rating" name="bemail' + counter + '"/></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Enter Course" name="bnumber' + counter + '"/></td>';
			cols += '<td><input type="file" class="form-control" placeholder="" name="btext' + counter + '"/></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Enter Instuctor Name" name="bemail' + counter + '"/></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Enter Category" name="bnumber' + counter + '"/></td>';
			cols += '<td><input type="text" class="form-control" placeholder="Enter Heading" name="bemail' + counter + '"/></td>';

            cols += '<td><input type="text" class="form-control" placeholder="Enter Category" name="bnumber' + counter + '"/></td>';
          <!--  cols += '<td><select class="form-control" name="bselect' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option 1</option><option value="2">Option 2</option></select></td>';-->

            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            
            newRow.append(cols);
            $("table.table-list").append(newRow);
            counter++;
        });

        $("table.table-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1;
        });
    });
</script>	
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