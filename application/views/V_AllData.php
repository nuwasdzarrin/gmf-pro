
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
                                <th>No</th>
                                <th>Change No</th>
                                <th>Date</th>
                                <th>CAMP No</th>
                                <th>RVCD</th>
                                <th>Engineer</th>
                                <th>Rev No</th>
                                <th>Status</th>
                                <th>Send To Garuda</th>
                                <th>Receive From Garuda</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alldt->result() as $all) { ?>
                                <tr class="odd gradeX">
                                    
                                    <td><?php echo $all->id;?></td>
                                    <td><?php echo $all->code_pla."-".$all->id;?></td>
                                    <td><?php echo $all->eff_date;?></td>
                                    <td class="center"><a href="<?php echo site_url('SgReport/single/').$all->item_no.'/'.$all->id?>"><?php echo $all->item_no;?></a></td>
                                    <td class="center">X</td>
                                    <td class="center">X</td>
                                    <td class="center">X</td>
                                    <td class="center"><?php echo $all->sta;?></td>
                                    <td class="center">X</td>
                                    <td class="center">X</td>
                                    <td class="center">X</td>
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


