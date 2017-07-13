
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><a href="<?php echo base_url(); ?>admin/pv/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'Add'; ?>
                    </a></h3>
			</div>
			<div class="box-body table-responsive">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
                                                     <th>Supplier Code</th>
                                                    <th>Supplier Name</th>

							<th>Account Code</th>
							
							<th>Cheque Date</th>
							
							<th>Cheque Number</th>
                                                        
                                                        <th>Total Payments</th>
			
							<th>Status</th>
                                                        <th>Update</th>
                                                        <th>Employee Code</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
													
							<td><?PHP echo $row->pv_supid;?></td>
							
							<td><?PHP echo $row->pv_ref;?></td>
							
							<td><?PHP echo $row->pv_checkdate;?></td>
							
							<td><?PHP echo $row->pv_checkno;?></td>
                                                        
                                                        <td><?PHP echo $row->pv_period;?></td>
							
							<td><?PHP echo $row->pv_total;?></td>
							
							<td><?PHP echo $row->pv_listid;?></td>
                                                        
                                                        <td><?PHP echo $row->pv_status;?></td>
							<td><?PHP echo $row->pv_status;?></td>
							<td>
								<a href="pv/create/<?PHP echo $row->pv_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"> แก้ไข</i>
								</a>
								|
								<a href="pv/deletes/<?PHP echo $row->pv_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"> ลบ</i>
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