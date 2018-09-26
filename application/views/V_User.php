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
            <h1 class="page-header">All User</h1>
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
                <button class="add-user btn btn-success" data-id_emp="" data-username="" data-email="" data-unit="" data-role="" data-pass="" data-re_pass="" style="margin: 10px 0 0 10px;"> Add User </button>
                <!-- <a href="user/loAddUser" class="btn btn-success" style="margin: 10px 0 0 10px;">Add User</a> -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID Employee</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Unit</th>
                                <th>Role</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user->result() as $us) { ?>
                                <tr class="odd-gradeX">
                                    <td><?php echo $us->id_employee; ?></td>
                                    <td><?php echo $us->username;?></td>
                                    <td class="center"><?php echo $us->email;?></td>
                                    <td class="center"><?php echo $us->unit;?></td>
                                    <td class="center"><?php echo $us->role;?></td>
                                    <td class="center">
                                        <button class="edit-user btn btn-info fa fa-edit" data-id="<?php echo $us->id_user;?>" data-id_emp="<?php echo $us->id_employee;?>" data-username="<?php echo $us->username;?>" data-email="<?php echo $us->email;?>" data-unit="<?php echo $us->unit;?>" data-role="<?php echo $us->role;?>" data-pass="" title="Edit User"> </button>
                                        <form method="POST" action="<?php echo site_url('user/delet')?>">
                                            <input type="hidden" name="id" value="<?php echo $us->id_user;?>">
                                            <button type="submit" title="Hapus Data" class="btn btn-danger fa fa-trash-o" ></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
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
<div id="addUser" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo site_url('Register')?>">
                    <?php echo form_open('register');?>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">ID Employee:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="id_empa" name="name" style="width: 150px" maxlength="5" value="<?php echo set_value('name'); ?>" required>
                            <p> <?php echo form_error('name'); ?> </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="usernamea" name="username" value="<?php echo set_value('username'); ?>" required>
                            <p> <?php echo form_error('username'); ?> </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="emaila" name="email" value="<?php echo set_value('email'); ?>" required>
                            <p> <?php echo form_error('email'); ?> </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Unit:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="unita" name="unita" style="width: 250px" placeholder="huruf besar semua ex: TER-2" value="<?php echo set_value('unita'); ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="passworda" name="password" value="<?php echo set_value('password'); ?>" required>
                            <p> <?php echo form_error('password'); ?> </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Re-Enter Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="re-password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" required>
                            <p> <?php echo form_error('password_conf'); ?> </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Role:</label>
                        <div class="col-sm-8">
                            <label class="radio-inline"><input type="radio" name="rolea" value="MEMBER" checked>Member</label>
                            <label class="radio-inline"><input type="radio" name="rolea" value="ADMIN">Admin</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span class='glyphicon glyphicon-ok'></span> Add User
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                    <?php echo form_close();?>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal add user -->
<!-- modal For Edit User -->
<div id="editUser" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo site_url('User/editUser')?>">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">ID Employee:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="id_emp" style="width: 150px" maxlength="5" name="id_employee">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" name="username" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Email:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Unit:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="unit" name="unit" style="width: 250px" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Role:</label>
                        <div class="col-sm-8">
                            <label class="radio-inline"><input type="radio" name="role" value="MEMBER" checked>Member</label>
                            <label class="radio-inline"><input type="radio" name="role" value="ADMIN">Admin</label>
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
    $(document).on('click', '.add-user', function() {
        $('.modal-title').text('Add New User');
        $('#id_emp').val($(this).data('id_empa'));
        $('#username').val($(this).data('usernamea'));
        $('#email').val($(this).data('emaila'));
        $('#unita').val($(this).data('unita'));
        $('#pass').val($(this).data('passworda'));
        $('#re_pass').val($(this).data('re-password'));
        $('#role').val($(this).data('rolea'));
        $('#addUser').modal('show');
    });
    //js for modal edit user
    $(document).on('click', '.edit-user', function() {
        $('.modal-title').text('Edit User');
        $('#id').val($(this).data('id'));
        $('#id_emp').val($(this).data('id_emp'));
        $('#username').val($(this).data('username'));
        $('#email').val($(this).data('email'));
        $('#unit').val($(this).data('unit'));
        $('#pass').val($(this).data('password'));
        $('#role').val($(this).data('role'));
        $('#editUser').modal('show');
    });
</script>
