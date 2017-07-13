
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
						<input type="text" name="suptype_code" class="form-control" placeholder="Code" value="<?PHP if(!empty($suptype[0]->suptype_code)) echo $suptype[0]->suptype_code;?>">
					  </div>
					</div>
                            
					<div class="form-group">
					  <label class="col-sm-2 control-label">Type<font color="red">*</font></label>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                    <select class="form-control" name="suptype_branchtype" required style="margin-bottom:10px;">
                        <option selected value="1">Head Office</option>
                        <option value="2">Branch Office</option>
                    </select>
                </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Name<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="suptype_branchname" class="form-control" placeholder="Name" value="<?PHP if(!empty($suptype[0]->suptype_branchname)) echo $suptype[0]->suptype_branchname;?>">
					  </div>
					</div>
					
					<div class="box-footer"><div align="right">
                                            <a href="javascript:history.back();" style="margin-right: 10px;"><input type="button" class="btn btn-primary" value="Cancel"></a>
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="suptype_id" value="<?PHP if(!empty($suptype[0]->suptype_id)) echo $suptype[0]->suptype_id;?>">
					</div></div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			