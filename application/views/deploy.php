<!DOCTYPE html>
<html lang="en">
<head>
	<title><?PHP echo $ac_cod->code_pla."-".$one->id; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/adminast/report/table.css" type="text/css" media="all">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
	<style type="text/css">
	footer {
		font-size: 12px;
		color: #000;
		text-align: left;
	}
	@media print {
		#non_print {
			display: none;
		}

		footer {
			position: fixed;
			bottom: 0;
		}
	}
</style>
</head>
<body>
	Tetetetetetetet
	<div class="container-fluid">
		<div class="logo">
			<?php 
			$cplane = $ac_cod->code_pla;
			if ($cplane == 'A2' || $cplane == 'B3-MG' || $cplane == 'B3') { ?>
				<img src="<?php echo base_url();?>assets/adminast/report/citilink.png">
			<?php	}else{	?>
				<img src="<?php echo base_url();?>assets/adminast/report/GI.png">
				Engineering & Maintenance
			<?php	}	?>
			
		</div>
		<button id="non_print" onclick="javascript:window.print()" class="btn btn-primary" style="margin-right: 10px;">Print</button>
		<a href="<?php echo site_url('alldata');?>" id="non_print" class="btn btn-warning">Back to All Data</a>
		<div class="row">
			<div class="change-no">
				CHANGE NO : <?PHP echo $cplane."-".$one->id; ?>
			</div>
		</div>
		<div class="row">
			<div class="table">
				<table class="table1">
					<tr>
						<th width="350px">CAMP TITLE TASK DESCRIPTION</th>
						<th width="65px">AC EFF/ENG EFF</th>
						<th width="120px">INTV</th>
						
					</tr>
					<?php $oldNo = $this->db->select('item_no')->from('dt_change')->order_by('item_no','ASC')->limit(1)->get()->row();
					$oldNo = $oldNo->item_no;
					echo  $oldNo; ?>
					<?php foreach ($cha->result() as $chang) { ?>
						<?php if ($chang->item_no != $oldNo) { ?>
							</table>
							<br><br>
							<table>
						<?php } ?>
						<tr>
							<td class="kr">
								<p> <?PHP echo $chang->sta; ?> </p>
								<p> <?PHP echo $chang->item_no; ?> </p>
								<?PHP echo $chang->task_desc; ?><br><br>
								<?PHP echo $chang->ref_man; ?><br>
								ZONE : <?PHP echo $chang->zone; ?>
							</td>
							<td><?PHP echo $chang->ac_eff; ?></td>
							<td>
								<p>THRESHOLD : </p>
								<?PHP echo $chang->threshold; ?>
								<p>REPETITIVE : </p>
								<?PHP echo $chang->repetitive; ?>
							</td>
							
							<?php $oldNo = $chang->item_no; ?>
						</tr>
					<?php } ?>
					
				<!-- </table> -->
			</div>
		</div>
		<footer>
			<?php if ($cplane == 'A2' || $cplane == 'B3-MG' || $cplane == 'B3') { ?>
				Form: CT-3-13 (06-08)
			<?php	}else{	?>
				Form: MZ-3-13 (06-08)
			<?php	}	?>
		</footer>
	</div>
</body>
</html>