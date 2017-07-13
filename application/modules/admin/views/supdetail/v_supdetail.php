
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
							<th>Supdetail_supid</th>
							
							<th>Supdetail_address</th>
							
							<th>Supdetail_email</th>
							
							<th>Supdetail_phone</th>
							
							<th>Supdetail_taxno</th>
							
							<th>Supdetail_branch</th>
							
							<th>Supdetail_branchname</th>
							
							<th>Supdetail_des</th>
							
							<th>Supdetail_update</th>
							
							<th>Supdetail_save</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->supdetail_supid;?></td>
							
							<td><?PHP echo $row->supdetail_address;?></td>
							
							<td><?PHP echo $row->supdetail_email;?></td>
							
							<td><?PHP echo $row->supdetail_phone;?></td>
							
							<td><?PHP echo $row->supdetail_taxno;?></td>
							
							<td><?PHP echo $row->supdetail_branch;?></td>
							
							<td><?PHP echo $row->supdetail_branchname;?></td>
							
							<td><?PHP echo $row->supdetail_des;?></td>
							
							<td><?PHP echo $row->supdetail_update;?></td>
							
							<td><?PHP echo $row->supdetail_save;?></td>
							
							<td>
								<a href="supdetail/create/<?PHP echo $row->supdetail_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="supdetail/deletes/<?PHP echo $row->supdetail_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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