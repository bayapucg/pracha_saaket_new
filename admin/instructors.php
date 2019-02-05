<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add More Items
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Add Multiple Items</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="box box-success">
                    <div class="box-header with-border">
                        <h5 class="box-title">Add Contacts</h5>
                    </div>
                    <!-- form start -->
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
                </div>

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

            cols += '<td><input type="text" class="form-control" placeholder="Text" name="btext' + counter + '"/></td>';

            cols += '<td><input type="email" class="form-control" placeholder="Email" name="bemail' + counter + '"/></td>';

            cols += '<td><input type="number" class="form-control" placeholder="Phone Number" name="bnumber' + counter + '"/></td>';

            cols += '<td><select class="form-control" name="bselect' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option 1</option><option value="2">Option 2</option></select></td>';

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