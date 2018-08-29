<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Change</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/adminast/report/table.css" type="text/css" media="all">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
	<style type="text/css">
		@media print {
    		#non_print {
      			display: none;
    		}
  		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="logo">
			<img src="<?php echo base_url();?>/assets/adminast/report/GI.png">
			Engineering & Maintenance
		</div>
		<button id="non_print" onclick="javascript:window.print()" class="btn btn-primary"><i class="fa fa-print"></i>Print</button>
		<div class="row">
			<div class="change-no">
				CHANGE NO : <?PHP echo $ac_cod->code_pla."-".$one->id; ?>
			</div>
		</div>
		<div class="row">
			<div class="table">
				<table class="table1">
					<tr>
						<th>CAMP ITEM NO: <br><?PHP echo $one->item_no; ?></th>
						<th colspan="8">CAMP ITEM CHANGE /COMPONENT DATA CHANGE</th>
						<th colspan="3">A/C TYPE : <?php echo $one->ac_type;?></th>
					</tr>
					<tr>
						<th>CAMP TITLE TASK DESCRIPTION</th>
						<th>TASK CODE</th>
						<th>AC EFF/ENG EFF</th>
						<th>INTV</th>
						<th>SIGN CODE/ REF NO</th>
						<th>MSG-3 CAT</th>
						<th>RVCD</th>
						<th>CAMP RESP</th>
						<th>EFFECT DATE</th>
						<th>PART NO</th>
						<th>QTY</th>
						<th>COMP CAT</th>
					</tr>
					<?php foreach ($cha->result() as $chang) { ?>
						<tr>
							<td class="kr">
								<p> <?PHP echo $chang->sta; ?> </p>
								<?PHP echo $chang->task_desc; ?><br><br>
								<?PHP echo $chang->ref_man; ?><br>
								ZONE : <?PHP echo $chang->zone; ?>
							</td>
							<td><?PHP echo $chang->task_code; ?></td>
							<td><?PHP echo $chang->ac_eff; ?></td>
							<td>10 Y</td>
							<td>
								<?PHP echo $chang->sg_code; ?><br>
								<?PHP echo $chang->sg_num; ?>
							</td>
							<td><?PHP echo $chang->cat; ?></td>
							<td><?PHP echo $chang->rvcd; ?></td>
							<td><?PHP echo $chang->resp; ?></td>
							<td><?PHP echo $chang->eff_date; ?></td>
							<td><?PHP echo $chang->part_no; ?></td>
							<td><?PHP echo $chang->qty; ?></td>
							<td><?PHP echo $chang->comp; ?></td>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="12" class="kr"><p> REASON FOR CHANGE:</p> <?PHP echo $one->reason; ?></td>
					</tr>
					<tr>
						<td colspan="12" class="kr"><p> SUPPORTING DOCUMENT LIST :</p> <?PHP echo $one->support_doc; ?> </td>
					</tr>
					<tr>
						<td colspan="3" rowspan="6" class="kr">CHANGE ACCEPTED &nbsp <input type="checkbox"> &nbsp &nbsp &nbsp &nbsp NOT ACCEPTED &nbsp <input type="checkbox"> <p> JUSTIFICATION </p> </td>
						<td colspan="2">&nbsp</td>
						<th colspan="3">PREPARED BY</th>
						<th colspan="2">APPROVED BY</th>
						<th colspan="3">ACCEPTED BY</th>
					</tr>
					<tr>
						<th colspan="2">SECTION</th>
						<td colspan="3">TER-2</td>
						<td colspan="2">TER-2</td>
						<td colspan="3">MQA</td>
					</tr>
					<tr >
						<th colspan="2" height="75px">NAME & SIGN</th>
						<td colspan="3" height="75px">&nbsp</td>
						<td colspan="2" height="75px">&nbsp</td>
						<td colspan="3" height="75px">&nbsp</td>
					</tr>
					<tr>
						<th colspan="2">DATE</th>
						<td colspan="3">4 JULY 2018</td>
						<td colspan="2">5 JULY 2018</td>
						<td colspan="3">5 JULY 2018</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>