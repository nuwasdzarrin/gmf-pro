<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">New Data</h1>
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
						<form role="form" enctype="multipart/form-data" method="post" action="<?php echo site_url('InData/input')?>">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Camp Item No</label>
									<input class="form-control" name="item_no">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Task Code</label>
									<input class="form-control" name="task_code">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>MSG-3 CAT</label>
									<input class="form-control" name="cat">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>EFFECT DATE</label>
									<input type="date" class="form-control" name="eff_date">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>QTY</label>
									<input class="form-control" name="qty">
									<p class="help-block">Example block-level help text here.</p>
								</div>
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>A/C Type</label>
									<select class="form-control" name="ac_type">
										<option value="-">-</option>
										<option value="A-320">A-320</option>
										<option value="A-330">A-330</option>
										<option value="ATR-72-212A">ATR-72-212A</option>
										<option value="B-737-800">B-737-800</option>
										<option value="B-747-400">B-747-400</option>
										<option value="B-777">B-777</option>
										<option value="B-737-345 MSG-2">B-737-345 MSG-2</option>
										<option value="B-737-345 MSG-3">B-737-345 MSG-3</option>
										<option value="CRJ-1000">CRJ-1000</option>
									</select>
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>INTV</label>
									<input class="form-control" name="intv">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>CAMP RESP</label>
									<input class="form-control" name="resp">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>PART NO</label>
									<input class="form-control" name="part_no">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>COMP CAT</label>
									<input class="form-control" placeholder="Enter text" name="comp">
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
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Please enter valid data
				</div>
				<div class="panel-body">
					<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Description</label>
									<input class="form-control" name="desc">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Ref_Man</label>
									<input class="form-control" name="ref_man">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Zone</label>
									<input class="form-control" name="zone">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Sign Code</label>
									<input class="form-control" name="sg_code">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Ref No</label>
									<input class="form-control" name="sg_num">
									<p class="help-block">Example block-level help text here.</p>
								</div>
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>AC EFF/ENG EFF</label>
									<textarea class="form-control" rows="7" name="ac_eff"></textarea>
								</div>
								<div class="form-group">
									<label>REASON</label>
									<textarea class="form-control" rows="3" name="reason"></textarea>
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>SUPPORTING DOCUMENT LIST</label>
									<input class="form-control" name="support_doc">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<button type="submit" class="btn btn-success">Save & Print</button>
								<button type="reset" class="btn btn-danger">Reset</button>
							</div>
						</form>
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