<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
            </div>
            <div class="container bootstrap snippet">
  <div class="row">
    <div class="col-lg-3 ">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content blue">
          <div class="circle-tile-description text-faded"> Students Enrolled</div>
          <div class="circle-tile-number text-faded ">5000+</div>
          <a class="circle-tile-footer" href="#"><i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
     
    <div class="col-lg-3">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading red"><i class="fa fa-book fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Courses Uploaded </div>
          <div class="circle-tile-number text-faded ">500+</div>
          <a class="circle-tile-footer" href="#"><i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
	<div class="col-lg-3 ">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading purple"><i class="fa fa-certificate fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content purple">
          <div class="circle-tile-description text-faded"> People Certified</div>
          <div class="circle-tile-number text-faded ">4000+</div>
          <a class="circle-tile-footer" href="#"><i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
     
    <div class="col-lg-2">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading green"><i class="fa fa-user fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content green">
          <div class="circle-tile-description text-faded"> Global Teachers </div>
          <div class="circle-tile-number text-faded ">200+</div>
          <a class="circle-tile-footer" href="#"><i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div> 
</div>
			<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Quarterly Sales</h3>
                </div>
                <div class="panel-body">
                    <div id="performance1" style="height: 270px;"></div>
                </div>
            </div>
        </div>
       
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Quarterly Sales</h3>
                </div>
                <div class="panel-body">
                    <div id="performance2" style="height: 270px;"></div>
                </div>
            </div>
        </div>
        
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Quarterly Sales</h3>
                </div>
                <div class="panel-body">
                    <div id="performance3" style="height: 270px;"></div>
                </div>
            </div>
        </div>
        
    </div>  
</div>
                     </div>
          

    </section>
    <!-- /.content -->
</div>

<?php include('footer.php'); ?>
<script>
jQuery(function ($) {
        var performance = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67],
            visits = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7],
            budget = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];

        $("#performance1").shieldChart({
            primaryHeader: {
                text: "Quarterly Performance"
            },
            dataSeries: [{
                seriesType: "area",
                collectionAlias: "Q Data",
                data: performance
            }]
        });

        $("#performance2").shieldChart({
            primaryHeader: {
                text: "Visitors"
            },
                axisX: {
                    categoricalValues: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                },
            dataSeries: [{
                seriesType: "bar",
                collectionAlias: "Visits",
                data: visits
            }]
        });

        $("#performance3").shieldChart({
            primaryHeader: {
                text: "Budget"
            },
            dataSeries: [{
                seriesType: "line",
                collectionAlias: "Budget",
                data: budget
            }]
        });
    });
</script>