<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Revision Submission</h1>
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
						<form role="form" enctype="multipart/form-data" method="post" action="<?php echo site_url('member/EdData/update')?>">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="disabledSelect">Camp Item No</label>
									<input class="form-control" id="disabledInput" type="text" value="<?php echo $edd->item_no;?>" style="width: 150px" disabled>
									<input type="hidden" name="item_no" value="<?php echo $edd->item_no;?>">
									<input type="hidden" name="token" value="<?php echo $edd->token;?>">
								</div>
								<div class="form-group">
									<label>Ref_Man</label>
									<input class="form-control" name="ref_man" value="<?php echo $edd->ref_man;?>" style="width: 300px">
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="desc" rows="9"><?php echo $edd->task_desc;?></textarea>
								</div>
								<div class="form-group">
									<label>AC EFF/ENG EFF</label>
									<textarea class="form-control" rows="9" name="ac_eff"><?php echo $edd->ac_eff;?></textarea>
								</div>
								
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>A/C Type</label>
									<select class="form-control" name="ac_type" style="width: 150px">
										<option value="<?php echo $edd->ac_type;?>"><?php echo $edd->ac_type;?></option>
										<?php foreach ($plane->result() as $pl) { ?>
											<option value="<?php echo $pl->name_pla; ?>"><?php echo $pl->name_pla; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Zone</label>
									<input class="form-control" name="zone" value="<?php echo $edd->zone;?>" style="width: 100px">
								</div>
								<div class="form-group">
									<label>Sign Code</label>
									<input class="form-control" name="sg_code" value="<?php echo $edd->sg_code;?>" style="width: 200px">
								</div>
								<div class="form-group">
									<label>Ref No</label>
									<input class="form-control" name="sg_num" value="<?php echo $edd->sg_num;?>" style="width: 200px">
								</div>
								<div class="form-group">
									<label>THRESHOLD</label>
									<textarea class="form-control" name="threshold" rows="5"><?php echo $edd->threshold;?></textarea>
								</div>
								<div class="form-group">
									<label>REPETITIVE</label>
									<textarea class="form-control" name="repetitive" rows="5"><?php echo $edd->repetitive;?></textarea>
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
									<input class="form-control" name="task_code" value="<?php echo $edd->task_code;?>" style="width: 150px">
								</div>
								<div class="form-group">
									<label>MSG-3 CAT</label>
									<input class="form-control" name="cat" value="<?php echo $edd->cat;?>" style="width: 200px">
								</div>
								<div class="form-group">
									<label>CAMP RESP</label>
									<input class="form-control" name="resp" value="<?php echo $edd->resp;?>" style="width: 200px">
								</div>
								<div class="form-group">
									<label>PART NO</label>
									<input class="form-control" name="part_no" value="<?php echo $edd->part_no;?>" style="width: 300px">
								</div>
								<div class="form-group">
									<label>QTY</label>
									<input class="form-control" name="qty" value="<?php echo $edd->qty;?>" style="width: 300px">
								</div>
								<div class="form-group">
									<label>COMP CAT</label>
									<input class="form-control" placeholder="Enter text" name="comp" value="<?php echo $edd->comp;?>" style="width: 300px">
								</div>
							</div>
							<!-- /.col-lg-6 (nested) -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>EFFECT DATE</label>
									<input type="date" class="form-control" name="eff_date" value="<?php echo $edd->eff_date;?>" style="width: 150px">
								</div>
								<div class="form-group">
									<label>REASON</label>
									<textarea class="form-control" rows="6" name="reason"><?php echo $edd->reason;?></textarea>
								</div>
								<div class="form-group">
									<label>SUPPORTING DOCUMENT LIST</label>
									<input class="form-control" name="support_doc" value="<?php echo $edd->support_doc;?>" style="width: 200px">
								</div>
								<div class="form-group">
									<label>Accepted By</label>
									<select class="form-control" name="acc_by" style="width: 150px">
										<option value="<?php echo $edd->acc_by;?>"><?php echo $edd->acc_by;?></option>
										<option value="MQA">MQA</option>
										<option value="---">---</option>
										<option value="---">---</option>
										<option value="---">---</option>
									</select>
								</div>
								<button type="submit" class="btn btn-success">Revisi</button>
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