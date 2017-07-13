
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
							<th>Pvlist_pmvid</th>
							
							<th>Pvlist_account</th>
							
							<th>Pvlist_list</th>
							
							<th>Pvlist_vat</th>
							
							<th>Pvlist_tax</th>
							
							<th>Pvlist_total</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->pvlist_pmvid;?></td>
							
							<td><?PHP echo $row->pvlist_account;?></td>
							
							<td><?PHP echo $row->pvlist_list;?></td>
							
							<td><?PHP echo $row->pvlist_vat;?></td>
							
							<td><?PHP echo $row->pvlist_tax;?></td>
							
							<td><?PHP echo $row->pvlist_total;?></td>
							
							<td>
								<a href="pvlist/create/<?PHP echo $row->pvlist_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="pvlist/deletes/<?PHP echo $row->pvlist_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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