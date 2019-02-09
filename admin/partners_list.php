<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Partners
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
             <li><a href="partners.php">Partners</a></li>
            <li><a href="#">Partners List</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12 table-responsive">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td><img src="img/list.jpg" style="width:50px;height:50px"></td>
                                   <td> <a href="partners_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                                <tr>
                                   <td><img src="img/list.jpg" style="width:50px;height:50px"></td>
                                    <td> <a href="partners_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                                <tr>
                                   <td><img src="img/list.jpg" style="width:50px;height:50px"></td>
                                    <td> <a href="partners_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                                <tr>
                                   <td><img src="img/list.jpg" style="width:50px;height:50px"></td>
                                     <td> <a href="partners_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>