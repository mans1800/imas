
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
							<th>Supadd_supplierid</th>
							
							<th>Supadd_address</th>
							
							<th>Supadd_tel</th>
							
							<th>Supadd_email</th>
							
							<th>Supadd_fax</th>
							
							<th>Supadd_country</th>
							
							<th>Supadd_web</th>
							
							<th>Supadd_contactname</th>
							
							<th>Supadd_des</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->supadd_supplierid;?></td>
							
							<td><?PHP echo $row->supadd_address;?></td>
							
							<td><?PHP echo $row->supadd_tel;?></td>
							
							<td><?PHP echo $row->supadd_email;?></td>
							
							<td><?PHP echo $row->supadd_fax;?></td>
							
							<td><?PHP echo $row->supadd_country;?></td>
							
							<td><?PHP echo $row->supadd_web;?></td>
							
							<td><?PHP echo $row->supadd_contactname;?></td>
							
							<td><?PHP echo $row->supadd_des;?></td>
							
							<td>
								<a href="supadd/create/<?PHP echo $row->supadd_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="supadd/deletes/<?PHP echo $row->supadd_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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