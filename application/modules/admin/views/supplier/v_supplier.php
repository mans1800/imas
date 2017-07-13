
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
                            <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>admin/supplier/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'Add';?>
                    </a> 
                            </h3>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>							
							<th>Supplier Code</th>
							
							<th>Lookupcode</th>
							
							<th>Supplier Name</th>
							
							<th>Status</th>
							
							<th>Last Update</th>
							
							<th>Employee Code</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
							
							<td><?PHP echo $row->supplier_code;?></td>
							
							<td><?PHP echo $row->supplier_lookupcode;?></td>
							
							<td><?PHP echo $row->supplier_name;?></td>
							
							<td><?PHP 
                                                        if ($row->supplier_status == 1) {
                                                        echo 'Open';
                                                        } else {
                                                            echo 'Closed/Complete';
                                                        }
                                                                ;?></td>
							
							<td><?PHP echo $row->supplier_update;?></td>
							
							<td><?PHP echo 'EM001';?></td>
							
							<td>
								<a href="supplier/create/<?PHP echo $row->supplier_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i>
								</a>
								|
								<a href="supplier/deletes/<?PHP echo $row->supplier_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"> Delete</i>
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