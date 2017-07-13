
			<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open("",$attributes); 
				?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_supid</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_supid" class="form-control" placeholder="Supdetail_supid" value="<?PHP if(!empty($supdetail[0]->supdetail_supid)) echo $supdetail[0]->supdetail_supid;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_address</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_address" class="form-control" placeholder="Supdetail_address" value="<?PHP if(!empty($supdetail[0]->supdetail_address)) echo $supdetail[0]->supdetail_address;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_email</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_email" class="form-control" placeholder="Supdetail_email" value="<?PHP if(!empty($supdetail[0]->supdetail_email)) echo $supdetail[0]->supdetail_email;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_phone</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_phone" class="form-control" placeholder="Supdetail_phone" value="<?PHP if(!empty($supdetail[0]->supdetail_phone)) echo $supdetail[0]->supdetail_phone;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_taxno</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_taxno" class="form-control" placeholder="Supdetail_taxno" value="<?PHP if(!empty($supdetail[0]->supdetail_taxno)) echo $supdetail[0]->supdetail_taxno;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_branch</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_branch" class="form-control" placeholder="Supdetail_branch" value="<?PHP if(!empty($supdetail[0]->supdetail_branch)) echo $supdetail[0]->supdetail_branch;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_branchname</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_branchname" class="form-control" placeholder="Supdetail_branchname" value="<?PHP if(!empty($supdetail[0]->supdetail_branchname)) echo $supdetail[0]->supdetail_branchname;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_des</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_des" class="form-control" placeholder="Supdetail_des" value="<?PHP if(!empty($supdetail[0]->supdetail_des)) echo $supdetail[0]->supdetail_des;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_update</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_update" class="form-control" placeholder="Supdetail_update" value="<?PHP if(!empty($supdetail[0]->supdetail_update)) echo $supdetail[0]->supdetail_update;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supdetail_save</label>
					  <div class="col-sm-10">
						<input type="text" name="supdetail_save" class="form-control" placeholder="Supdetail_save" value="<?PHP if(!empty($supdetail[0]->supdetail_save)) echo $supdetail[0]->supdetail_save;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="supdetail_id" value="<?PHP if(!empty($supdetail[0]->supdetail_id)) echo $supdetail[0]->supdetail_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			