
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Pmv2_pmvid</th>
							
							<th>Pmv2_to</th>
							
							<th>Pmv2_date</th>
							
							<th>Pmv2_check</th>
							
							<th>Pmv2_checkno</th>
							
							<th>Pmv2_checkdate</th>
							
							<th>Pmv2_total</th>
							
							<th>Pmv2_update</th>
							
							<th>Pmv2_save</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->pmv2_pmvid;?></td>
							
							<td><?PHP echo $row->pmv2_to;?></td>
							
							<td><?PHP echo $row->pmv2_date;?></td>
							
							<td><?PHP echo $row->pmv2_check;?></td>
							
							<td><?PHP echo $row->pmv2_checkno;?></td>
							
							<td><?PHP echo $row->pmv2_checkdate;?></td>
							
							<td><?PHP echo $row->pmv2_total;?></td>
							
							<td><?PHP echo $row->pmv2_update;?></td>
							
							<td><?PHP echo $row->pmv2_save;?></td>
							
							<td>
								<a href="paymentvoucher2/create/<?PHP echo $row->pmv2_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="paymentvoucher2/deletes/<?PHP echo $row->pmv2_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
					<?PHP 
						} 
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>