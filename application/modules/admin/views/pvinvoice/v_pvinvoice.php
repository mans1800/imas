
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><a href="<?php echo base_url(); ?>admin/pvinvoice/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'Add'; ?>
                    </a></h3>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
                                                    	<th>Invoice No</th>
							
							<th>Invoice Date</th>
							
							<th>Credit Term</th>
                                                        
							<th>Supplier ID</th>
							


							<th>Total Amount</th>
							
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
						
							<td><?PHP echo $row->pvinvoice_supplierid;?></td>
							
							<td><?PHP echo $row->pvinvoice_suptaxid;?></td>
							
							<td><?PHP echo $row->pvinvoice_suptypeid;?></td>
							
							<td><?PHP echo $row->pvinvoice_subaddid;?></td>
							
							<td><?PHP echo $row->pvinvoice_no;?></td>
							
							<td><?PHP echo $row->pvinvoice_date;?></td>
							
							<td><?PHP echo $row->pvinvoice_crterm;?></td>
							
							<td><?PHP echo $row->pvinvoice_vat;?></td>
							
							<td><?PHP echo $row->pvinvoice_nonvat;?></td>
							
							<td><?PHP echo $row->pvinvoice_total;?></td>
							
							<td><?PHP echo $row->pvinvoice_status;?></td>
							
							<td><?PHP echo $row->pvinvoice_des;?></td>
							
							<td><?PHP echo $row->pvinvoice_update;?></td>
							
							<td><?PHP echo $row->pvinvoice_save;?></td>
							
							<td>
								<a href="pvinvoice/create/<?PHP echo $row->pvinvoice_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="pvinvoice/deletes/<?PHP echo $row->pvinvoice_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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