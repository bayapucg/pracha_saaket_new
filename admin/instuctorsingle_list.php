<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Instructor Single List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="instuctor_single.php">Instructor Single</a></li>
            <li class="active">Instructor SIngle List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Instructor Image</th>
                                    <th>Instructor Name</th>
                                    <th>Specification</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="img/list.jpg" style="width:40px;height:50px"></td>
									<td>john</td>
                                    <td>java Specialist</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when ...</td>
                                    <td> <a href="instuctorsingle_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                                 <tr>
                                    <td><img src="img/list.jpg" style="width:40px;height:50px"></td>
									<td>john</td>
                                    <td>java Specialist</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when ...</td>
                                    <td> <a href="instuctorsingle_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                                <tr>
                                    <td><img src="img/list.jpg" style="width:40px;height:50px"></td>
									<td>john</td>
                                    <td>java Specialist</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when ...</td>
                                    <td> <a href="instuctorsingle_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                                 <tr>
                                    <td><img src="img/list.jpg" style="width:40px;height:50px"></td>
									<td>john</td>
                                    <td>java Specialist</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when ...</td>
                                    <td> <a href="instuctorsingle_edit.php"><button type="button" class="btn btn-warning pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>Instructor Image</th>
                                    <th>Instructor Name</th>
                                    <th>Specification</th>
                                    <th>Content</th>
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