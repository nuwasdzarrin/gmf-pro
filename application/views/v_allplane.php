<style type="text/css">
.odd-gradeX td form button {
    margin: 2px 2px 2px 2px; 
    float: left;
    display:inline-block;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Aircraft</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <!-- /.panel-heading -->
                <button class="add-plane btn btn-success" data-codea="" data-tipea="" style="margin: 10px 0 0 10px;"> Add Plane </button>
                <!-- <a href="user/loAddUser" class="btn btn-success" style="margin: 10px 0 0 10px;">Add User</a> -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tipe</th>
                                <th>Code</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($plane->result() as $pl) { ?>
                                <tr class="odd-gradeX">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $pl->name_pla;?></td>
                                    <td class="center"><?php echo $pl->code_pla;?></td>
                                    <td class="center"><button class="edit-plane btn btn-info fa fa-edit" data-id="<?php echo $pl->id_pla;?>" data-tipe="<?php echo $pl->name_pla;?>" data-code="<?php echo $pl->code_pla;?>" title="Edit Plane"> </button></td>
                                    <td class="center">
                                        <form method="POST" action="<?php echo site_url('allplane/delete')?>">
                                            <input type="hidden" name="id" value="<?php echo $pl->id_pla;?>">
                                            <button type="submit" title="Hapus Data" class="btn btn-danger fa fa-trash-o" ></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<!-- modal For Add User -->
<div id="addPlane" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo site_url('allplane/insert')?>">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">Tipe:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tipea" name="tipe" style="width: 250px" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Code:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="codea" name="code" style="width: 150px"  required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span class='glyphicon glyphicon-ok'></span> Add Plane
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal add user -->
<!-- modal For Edit User -->
<div id="editPlane" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo site_url('allplane/update')?>">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">Tipe:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tipe" style="width: 200px" name="tipe">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Code:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="code" style="width: 150px" name="code" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span class='glyphicon glyphicon-ok'></span> Update
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal add link -->

<script type="text/javascript">
    //js for modal add user
    $(document).on('click', '.add-plane', function() {
        $('.modal-title').text('Add New Plane');
        $('#codea').val($(this).data('codea'));
        $('#tpea').val($(this).data('tipea'));
        $('#email').val($(this).data('emaila'));
        $('#unita').val($(this).data('unita'));
        $('#pass').val($(this).data('passworda'));
        $('#re_pass').val($(this).data('re-password'));
        $('#role').val($(this).data('rolea'));
        $('#addPlane').modal('show');
    });
    //js for modal edit user
    $(document).on('click', '.edit-plane', function() {
        $('.modal-title').text('Edit Plane');
        $('#id').val($(this).data('id'));
        $('#tipe').val($(this).data('tipe'));
        $('#code').val($(this).data('code'));
        $('#editPlane').modal('show');
    });
</script>
