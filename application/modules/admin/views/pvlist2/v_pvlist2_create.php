
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
					  <label class="col-sm-2 control-label">Pvlist2_pmvid</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_pmvid" class="form-control" placeholder="Pvlist2_pmvid" value="<?PHP if(!empty($pvlist2[0]->pvlist2_pmvid)) echo $pvlist2[0]->pvlist2_pmvid;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist2_account</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_account" class="form-control" placeholder="Pvlist2_account" value="<?PHP if(!empty($pvlist2[0]->pvlist2_account)) echo $pvlist2[0]->pvlist2_account;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist2_code</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_code" class="form-control" placeholder="Pvlist2_code" value="<?PHP if(!empty($pvlist2[0]->pvlist2_code)) echo $pvlist2[0]->pvlist2_code;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist2_list</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_list" class="form-control" placeholder="Pvlist2_list" value="<?PHP if(!empty($pvlist2[0]->pvlist2_list)) echo $pvlist2[0]->pvlist2_list;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist2_vat</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_vat" class="form-control" placeholder="Pvlist2_vat" value="<?PHP if(!empty($pvlist2[0]->pvlist2_vat)) echo $pvlist2[0]->pvlist2_vat;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist2_tax</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_tax" class="form-control" placeholder="Pvlist2_tax" value="<?PHP if(!empty($pvlist2[0]->pvlist2_tax)) echo $pvlist2[0]->pvlist2_tax;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist2_total</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_total" class="form-control" placeholder="Pvlist2_total" value="<?PHP if(!empty($pvlist2[0]->pvlist2_total)) echo $pvlist2[0]->pvlist2_total;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvlist2_num</label>
					  <div class="col-sm-10">
						<input type="text" name="pvlist2_num" class="form-control" placeholder="Pvlist2_num" value="<?PHP if(!empty($pvlist2[0]->pvlist2_num)) echo $pvlist2[0]->pvlist2_num;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="pvlist2_id" value="<?PHP if(!empty($pvlist2[0]->pvlist2_id)) echo $pvlist2[0]->pvlist2_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			