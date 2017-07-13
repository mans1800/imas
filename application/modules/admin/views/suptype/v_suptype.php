
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
							<th>Suptype_supplierid</th>
							
							<th>Suptype_branchtype</th>
							
							<th>Suptype_branchname</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->suptype_supplierid;?></td>
							
							<td><?PHP echo $row->suptype_branchtype;?></td>
							
							<td><?PHP echo $row->suptype_branchname;?></td>
							
							<td>
								<a href="suptype/create/<?PHP echo $row->suptype_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="suptype/deletes/<?PHP echo $row->suptype_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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