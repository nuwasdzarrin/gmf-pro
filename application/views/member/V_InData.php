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
					Section 1
				</div>
				<div class="panel-body">
					<div class="row">
						<form role="form" enctype="multipart/form-data" method="post" action="<?php echo site_url('member/InData/input')?>">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Camp Item No</label>
									<input class="form-control" name="item_no" disabled style="width: 150px;">
								</div>
								<div class="form-group">
									<label>Ref_Man</label>
									<input class="form-control" name="ref_man" style="width: 300px">
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="desc" rows="9"></textarea>
								</div>
								<div class="form-group">
									<label>AC EFF/ENG EFF</label>
									<textarea class="form-control" rows="9" name="ac_eff"></textarea>
								</div>
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>A/C Type</label>
									<select class="form-control" name="ac_type" style="width: 150px">
										<option >-</option>
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
								</div>
								<div class="form-group">
									<label>Zone</label>
									<input class="form-control" name="zone" style="width: 100px">
								</div>
								<div class="form-group">
									<label>Sign Code</label>
									<input class="form-control" name="sg_code" style="width: 200px">
								</div>
								<div class="form-group">
									<label>Ref No</label>
									<input class="form-control" name="sg_num"  style="width: 200px">
								</div>
								<div class="form-group">
									<label>THRESHOLD</label>
									<textarea class="form-control" name="threshold" rows="5"></textarea>
								</div>
								<div class="form-group">
									<label>REPETITIVE</label>
									<textarea class="form-control" name="repetitive" rows="5"></textarea>
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
						Section 2
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Task Code</label>
									<input class="form-control" name="task_code" style="width: 150px">
								</div>
								<div class="form-group">
									<label>MSG-3 CAT</label>
									<input class="form-control" name="cat"style="width: 200px">
								</div>
								<div class="form-group">
									<label>CAMP RESP</label>
									<input class="form-control" name="resp" style="width: 200px">
								</div>
								<div class="form-group">
									<label>PART NO</label>
									<input class="form-control" name="part_no" style="width: 300px">
								</div>
								<div class="form-group">
									<label>QTY</label>
									<input class="form-control" name="qty" style="width: 300px">
								</div>
								<div class="form-group">
									<label>COMP CAT</label>
									<input class="form-control" placeholder="Enter text" name="comp" style="width: 300px">
								</div>
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>EFFECT DATE</label>
									<input type="date" class="form-control" name="eff_date" style="width: 180px">
								</div>
								<div class="form-group">
									<label>REASON</label>
									<textarea class="form-control" rows="6" name="reason"></textarea>
								</div>
								<div class="form-group">
									<label>SUPPORTING DOCUMENT LIST</label>
									<input class="form-control" name="support_doc" style="width: 200px">
								</div>
								<div class="form-group">
									<label>Accepted By</label>
									<select class="form-control" name="acc_by" style="width: 150px">
										<option >-</option>
										<option value="MQA">MQA</option>
										<option value="---">---</option>
										<option value="---">---</option>
										<option value="---">---</option>
									</select>
								</div>
								<button type="submit" class="btn btn-success" style="margin-right: 10px;">Save</button>
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