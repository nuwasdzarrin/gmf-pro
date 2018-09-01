<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Edit All Data</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Please enter valid data
				</div>
				<div class="panel-body">
					<div class="row">
						<form role="form" enctype="multipart/form-data" method="post" action="<?php echo site_url('AllData/upAllData')?>">
							<div class="col-lg-6">
								<div class="form-group">
                                    <label for="disabledSelect">Change No</label>
                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $change_no;?>" disabled>
                                    <input type="hidden" name="change_no" value="<?php echo $all->id_change;?>">
                                </div>
								<div class="form-group">
									<label>Engineer</label>
									<input class="form-control" name="engineer" value="<?php echo $all->engineer;?>">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Rev No</label>
									<input class="form-control" name="rev_no" value="<?php echo $all->rev_no;?>">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<button type="submit" class="btn btn-success">Update</button>
								<button type="reset" class="btn btn-danger">Reset</button>
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Sent To Garuda</label>
									<input type="date" class="form-control" name="send_ga" value="<?php echo $all->send_ga;?>">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Receive From Garuda</label>
									<input type="date" class="form-control" name="recei_ga" value="<?php echo $all->recei_ga;?>">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Attachment</label>
									<input class="form-control" name="att" value="<?php echo $all->att;?>">
									<p class="help-block">Example block-level help text here.</p>
								</div>
							</div>
						<!-- /.col-lg-6 (nested) -->
					</div>
					<!-- /.row (nested) -->

				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	
</div>