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
                                            <label class="col-sm-2 control-label">Code<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="company2_code" class="form-control" placeholder="Code" value="<?PHP if(!empty($company2[0]->company2_code)) echo $company[0]->company2_code;?>">
                                                <?php echo form_error('company2_code', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
                            
                            		<div class="form-group">
                                            <label class="col-sm-2 control-label">ชื่อย่อ<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="company2_subname" class="form-control" placeholder="ชื่อย่อ" value="<?PHP if(!empty($company2[0]->company2_subname)) echo $company[0]->company2_subname;?>">
                                                <?php echo form_error('company2_subname', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
                            
					<div class="form-group">
                                            <label class="col-sm-2 control-label">ชื่อบริษัท<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="company2_name" class="form-control" placeholder="ชื่อบริษัท" value="<?PHP if(!empty($company2[0]->company2_name)) echo $company2[0]->company2_name;?>">
                                                <?php echo form_error('company2_name', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">บันทึก</button>
						<input type="hidden" name="company2_id" value="<?PHP if(!empty($company2[0]->company2_id)) echo $company2[0]->company2_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>