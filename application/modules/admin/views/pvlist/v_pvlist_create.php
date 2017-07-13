
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
					  <label class="col-sm-2 control-label">Pvlist_pmvid</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist_pmvid" class="form-control" placeholder="Pvlist_pmvid" value="<?PHP if(!empty($pvlist[0]->pvlist_pmvid)) echo $pvlist[0]->pvlist_pmvid;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist_account</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist_account" class="form-control" placeholder="Pvlist_account" value="<?PHP if(!empty($pvlist[0]->pvlist_account)) echo $pvlist[0]->pvlist_account;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist_list</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist_list" class="form-control" placeholder="Pvlist_list" value="<?PHP if(!empty($pvlist[0]->pvlist_list)) echo $pvlist[0]->pvlist_list;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist_vat</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist_vat" class="form-control" placeholder="Pvlist_vat" value="<?PHP if(!empty($pvlist[0]->pvlist_vat)) echo $pvlist[0]->pvlist_vat;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist_tax</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist_tax" class="form-control" placeholder="Pvlist_tax" value="<?PHP if(!empty($pvlist[0]->pvlist_tax)) echo $pvlist[0]->pvlist_tax;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist_total</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist_total" class="form-control" placeholder="Pvlist_total" value="<?PHP if(!empty($pvlist[0]->pvlist_total)) echo $pvlist[0]->pvlist_total;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="pvlist_id" value="<?PHP if(!empty($pvlist[0]->pvlist_id)) echo $pvlist[0]->pvlist_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			