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
						<form role="form" enctype="multipart/form-data" method="post" action="<?php echo site_url('AllData/upLink')?>">
							<div class="col-lg-6">
								<div class="form-group">
                                    <label for="disabledSelect">Change No</label>
                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $change_no;?>" disabled>
                                    <input type="hidden" name="id_change" value="<?php echo $link;?>">
                                </div>
								<div class="form-group">
									<label>Link Attachment</label>
									<input class="form-control" name="att" value="">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<button type="submit" class="btn btn-success">Update</button>
								<button type="reset" class="btn btn-danger">Reset</button>
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