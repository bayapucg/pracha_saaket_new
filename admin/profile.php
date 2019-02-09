<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profile
            <!--<small>Preview</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Profile</a></li>
        </ol>
    </section>

 
	 
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h1 class="box-title pull-left">Profile</h1>
                        <a href="aboutus_edit.php"><button type="button" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Update/Edit</button></a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="profile.php" id="formValidate" name="formValidate">
                        <div class="box-body">
						<div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
				<div>
				<label class=newbtn>
				<img id="blah" alt="User Pic" src="img/user.png" class="img-circle img-responsive">
					
					<input id="pic" class='pis' onchange="readURL(this);" type="file" >
				</label>
				</div>
				</div>
                
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td>Customer1</td>
                      </tr>
                      <tr>
                        <td>Contact number:</td>
                        <td>850022xxxx</td>
                      </tr>
                      <tr>
                        <td>Email Id</td>
                        <td>customer1@gamil.com</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Company name or Individual</td>
                        <td>Prachatech</td>
                      </tr>
                       
                     
                    </tbody>
                  </table>
                  
               
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
</div>

<?php include('footer.php'); ?>