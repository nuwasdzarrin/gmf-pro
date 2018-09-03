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
                                    <td class="center"><?php echo $all->item_no;?></td>
                                    <td class="center"><?php echo $all->rvcd;?></td>
                                    <td class="center"><?php echo $all->engineer;?></td>
                                    <td class="center"><?php echo $all->rev_no;?></td>
                                    <td class="center"><?php echo $all->send_ga;?></td>
                                    <td class="center"><?php echo $all->recei_ga;?></td>
                                    <td class="center">
                                        <?php if($all->att){ ?>
                                            <a href="<?php echo $all->att;?>"><?php echo $all->att;?></a>
                                        <?php } else { ?>
                                            <a href="<?php echo site_url('alldata/edLink/').$change_no."/".$all->id;?>" class="btn btn-primary fa fa-link" title="link"></a>
                                            <a href="#" class="btn btn-success fa fa-upload" title="upload file"></a>
                                        <?php } ?>
                                    </td>
                                    <td class="center"><?php echo $all->sta;?></td>
                                    <td class="center">
                                        <form method="POST" action="<?php echo site_url('SgReport/single')?>">
                                            <input type="hidden" name="id" value="<?php echo $all->id;?>">
                                            <input type="hidden" name="item_no" value="<?php echo $all->item_no;?>">
                                            <button type="submit" title="Print Data" class="btn btn-primary fa fa-print" ></button>
                                        </form>
                                        <form method="POST" action="<?php echo site_url('alldata/edAllData')?>">
                                            <input type="hidden" name="id" value="<?php echo $all->id;?>">
                                            <input type="hidden" name="change_no" value="<?php echo $change_no;?>">
                                            <button type="submit" title="Revisi Data" class="btn btn-warning fa fa-edit" ></button>
                                        </form>
                                        <form method="POST" action="<?php echo site_url('EdData/del')?>">
                                            <input type="hidden" name="id" value="<?php echo $all->id;?>">
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


