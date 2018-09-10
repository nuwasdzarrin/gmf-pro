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
                                <th>Cetak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alldt->result() as $all) { ?>
                                <tr class="odd-gradeX">
                                    <?php $change_no=$all->code_pla."-".$all->id;?>
                                    <td><?php echo $change_no; ?></td>
                                    <td><?php echo $all->intime;?></td>
                                    <td class="center">
                                        <?php if($all->item_no){ ?>
                                            <?php echo $all->item_no;?>
                                        <?php } else { ?>
                                            <p> - </p>
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
                                            <p> - </p>
                                        <?php } ?>
                                    </td>
                                    <td class="center"><p class="status <?php echo $all->status;?>"><?php echo $all->status;?></p></td>
                                    <td class="center">
                                        <form method="POST" action="<?php echo site_url('SgReport/single')?>">
                                            <input type="hidden" name="id" value="<?php echo $all->id;?>">
                                            <input type="hidden" name="item_no" value="<?php echo $all->item_no;?>">
                                            <button type="submit" title="Print Data" class="btn btn-primary fa fa-print" ></button>
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


