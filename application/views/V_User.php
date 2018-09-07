<style type="text/css">
.odd-gradeX td form button {
    margin: 2px 2px 2px 2px; 
    float: left;
    display:inline-block;
}
  
</style>

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
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <a href="user/loAddUser" class="btn btn-success" style="margin: 10px 0 0 10px;">Add User</a>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID Employee</th>
                                <th>Name</th>
                                <th>Email</th>
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
                                    <td class="center"><?php echo $us->role;?></td>
                                    <td class="center">
                                        <!-- <form method="POST" action="<?php echo site_url('alldata/edAllData')?>">
                                            <input type="hidden" name="id" value="<?php //echo $all->id;?>">
                                            <input type="hidden" name="change_no" value="<?php //echo $change_no;?>">
                                            <button type="submit" title="Revisi Data" class="btn btn-warning fa fa-edit" ></button>
                                        </form> -->
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


