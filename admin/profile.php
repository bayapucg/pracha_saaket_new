<?php include("header.php"); ?>
<?php include('sidebar.php'); ?>
<style>
#pic{
     display: none;
       }
       
 .newbtn{
         cursor: pointer;
      }
      #blah{
  max-width:100px;
  height:100px;
  margin-top:20px;
}

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <section class="content">
     
     <div class="">
      <div class="row">
     
        <div class="col-md-12">
   
   
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title pull-left">Customer 1</h3>
			  <span class="pull-right"><a href="update-profile.php" class="btn btn-primary btn-sm">Update / Edit</a></span>
			  <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
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
                
            
          </div>
        </div>
      </div>
    </div>

     

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php"); ?>
<script>
 
 $('.newbtn').bind("click" , function () {
        $('#pic').click();
 });
 
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
 