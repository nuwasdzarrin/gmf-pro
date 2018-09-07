<style type="text/css">
.odd-gradeX td form button {
    margin: 2px 2px 2px 2px; 
    float: left;
    display:inline-block;
}
p.status {
    text-align: center;
    font-size: 10px;
    padding: 2px 2px 2px 2px;
    color: white;
    border-radius: 5px;
    margin-top: 5px;
    margin-left: 5px;
}

p.Progress {
    background-color: orange;
}
p.Approved {
    background-color: green;
}
p.Accepted {
    background-color: blue;
}
p.Rejected {
    background-color: red;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Data</h1>
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
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Change No</th>
                                <th>Date</th>
                                <th>CAMP No</th>
                                <th>RVCD</th>
                                <th>Engineer</th>
                                <th>Rev No</th>
                                <th>Send To Garuda</th>
                                <th>Receive From Garuda</th>
                                <th>Attachment</th>
                                <th>Status</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alldt->result() as $all) { ?>
                                <tr class="odd-gradeX">
                                    <?php $change_no=$all->code_pla."-".$all->id;?>
                                    <td><?php echo $change_no; ?></td>
                                    <td><?php echo $all->eff_date;?></td>
                                    <td class="center">
                                        <?php if($all->item_no){ ?>
                                            <?php echo $all->item_no;?>
                                        <?php } else { ?>
                                            <button class="show-modal btn btn-primary fa fa-plus" data-id="<?php echo $all->token;?>" data-change="<?php echo $change_no;?>" title="Add Camp Item Number"></button>
                                        <?php } ?>
                                    </td>
                                    <td class="center"><?php echo $all->rvcd;?></td>
                                    <td class="center"><?php echo $all->engineer;?></td>
                                    <td class="center"><?php echo $all->rev_no;?></td>
                                    <td class="center"><?php echo $all->send_ga;?></td>
                                    <td class="center"><?php echo $all->recei_ga;?></td>
                                    <td class="center">
                                        <?php if($all->att){ ?>
                                            <a href="<?php echo $all->att;?>"><?php echo $all->att;?></a>
                                        <?php } else { ?>
                                            <button class="add-link btn btn-info fa fa-link" data-id="<?php echo $all->token;?>" data-change="<?php echo $change_no;?>" title="Add Link Document"> </button>
                                            <a href="#" class="btn btn-success fa fa-upload" title="upload file"></a>
                                        <?php } ?>
                                    </td>
                                    <td class="center"><p class="status <?php echo $all->status;?>"><?php echo $all->status;?></p></td>
                                    <td class="center">
                                        <form method="POST" action="<?php echo site_url('SgReport/single')?>">
                                            <input type="hidden" name="id" value="<?php echo $all->id;?>">
                                            <input type="hidden" name="item_no" value="<?php echo $all->item_no;?>">
                                            <button type="submit" title="Print Data" class="btn btn-danger fa fa-print" ></button>
                                        </form>
                                        <form method="POST" action="<?php echo site_url('alldata/edAllData')?>">
                                            <input type="hidden" name="id" value="<?php echo $all->idd;?>">
                                            <input type="hidden" name="change_no" value="<?php echo $change_no;?>">
                                            <button type="submit" title="Revisi Data" class="btn btn-warning fa fa-edit" ></button>
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
<!-- modal for add camp item no -->
<div id="showModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo site_url('alldata/addItemNo')?>">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">Change No:</label>
                        <div class="col-sm-8">
                            <input type="name" class="form-control" id="title_show" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Camp Item No:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="item_no">
                            <input type="hidden" class="form-control" id="id_show" value="id_show" name="id">
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
<!-- end modal add camp -->
<!-- modal for add link -->
<div id="addLink" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo site_url('alldata/upLink')?>">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">Change No:</label>
                        <div class="col-sm-8">
                            <input type="name" class="form-control" id="change" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="content">Link Attachment:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="att">
                            <input type="hidden" class="form-control" id="id" value="id" name="token">
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
    //js for modal add camp no
    $(document).on('click', '.show-modal', function() {
        $('.modal-title').text('Add Camp Item No');
        $('#id_show').val($(this).data('id'));
        $('#title_show').val($(this).data('change'));
        $('#showModal').modal('show');
    });
    //js for modal add link
    $(document).on('click', '.add-link', function() {
        $('.modal-title').text('Add Link Document');
        $('#id').val($(this).data('id'));
        $('#change').val($(this).data('change'));
        $('#addLink').modal('show');
    });
</script>


