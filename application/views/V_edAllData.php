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
									<input class="form-control" id="disabledInput" type="text" style="width: 150px;" value="<?php echo $change_no;?>" disabled>
									<input type="hidden" name="idd" value="<?php echo $all->idd;?>">
								</div>
								<div class="form-group">
									<label>Engineer</label>
									<input class="form-control" name="engineer" value="<?php echo $all->engineer;?>">
								</div>
								<div class="form-group">
									<label>Rev No</label>
									<input class="form-control" name="rev_no" value="<?php echo $all->rev_no;?>">
								</div>
								<div class="form-group">
									<label>Attachment</label>
									<input class="form-control" name="att" value="<?php echo $all->att;?>">
								</div>
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status" style="width: 150px">
										<option value="<?php echo $all->status;?>"><?php echo $all->status;?></option>
										<option value="Progress">Progress</option>
										<option value="Approved">Approved</option>
										<option value="Accepted">Accepted</option>
										<option value="Rejected">Rejected</option>
									</select>
								</div>
								<div class="form-group">
									<label>Sent To Garuda</label>
									<input type="date" class="form-control" name="send_ga" value="<?php echo $all->send_ga;?>" style="width: 250px;">
								</div>
								<div class="form-group">
									<label>Receive From Garuda</label>
									<input type="date" class="form-control" name="recei_ga" value="<?php echo $all->recei_ga;?>" style="width: 250px;">
								</div>
								<div class="form-group">
									<label></label>
									<button type="submit" class="btn btn-success">Update</button>
								</div>
							</div>
							<!-- /.col-lg-6 (nested) -->
						</form>
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