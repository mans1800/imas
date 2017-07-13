
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
							<th>Pvlist2_pmvid</th>
							
							<th>Pvlist2_account</th>
							
							<th>Pvlist2_code</th>
							
							<th>Pvlist2_list</th>
							
							<th>Pvlist2_vat</th>
							
							<th>Pvlist2_tax</th>
							
							<th>Pvlist2_total</th>
							
							<th>Pvlist2_num</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->pvlist2_pmvid;?></td>
							
							<td><?PHP echo $row->pvlist2_account;?></td>
							
							<td><?PHP echo $row->pvlist2_code;?></td>
							
							<td><?PHP echo $row->pvlist2_list;?></td>
							
							<td><?PHP echo $row->pvlist2_vat;?></td>
							
							<td><?PHP echo $row->pvlist2_tax;?></td>
							
							<td><?PHP echo $row->pvlist2_total;?></td>
							
							<td><?PHP echo $row->pvlist2_num;?></td>
							
							<td>
								<a href="pvlist2/create/<?PHP echo $row->pvlist2_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="pvlist2/deletes/<?PHP echo $row->pvlist2_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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