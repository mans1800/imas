
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
							<th>Pvinvoice2_pvinvoiceid</th>
							
							<th>Pvinvoice2_no</th>
							
							<th>Pvinvoice2_des</th>
							
							<th>Pvinvoice2_amount</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->pvinvoice2_pvinvoiceid;?></td>
							
							<td><?PHP echo $row->pvinvoice2_no;?></td>
							
							<td><?PHP echo $row->pvinvoice2_des;?></td>
							
							<td><?PHP echo $row->pvinvoice2_amount;?></td>
							
							<td>
								<a href="pvinvoice2/create/<?PHP echo $row->pvinvoice2_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="pvinvoice2/deletes/<?PHP echo $row->pvinvoice2_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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