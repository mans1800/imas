
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
                    <label class="col-sm-2 control-label">Office Code<font color="red">*</font></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="Supadd_officecode" required style="margin-bottom:10px;">
                            <option disabled selected value="">Office Code</option>  
                            <option value="1">001</option>
                            <option value="2">002</option>
                        </select>
                    </div>
                </div> 
                            
					<div class="form-group">
					  <label class="col-sm-2 control-label">Address<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="supadd_address" class="form-control" placeholder="Address" value="<?PHP if(!empty($supadd[0]->supadd_address)) echo $supadd[0]->supadd_address;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Telephone</label>
					  <div class="col-sm-10">
						<input type="text" name="supadd_tel" class="form-control" placeholder="Telephone" value="<?PHP if(!empty($supadd[0]->supadd_tel)) echo $supadd[0]->supadd_tel;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">E-mail</label>
					  <div class="col-sm-10">
						<input type="text" name="supadd_email" class="form-control" placeholder="E-mail" value="<?PHP if(!empty($supadd[0]->supadd_email)) echo $supadd[0]->supadd_email;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Fax</label>
					  <div class="col-sm-10">
						<input type="text" name="supadd_fax" class="form-control" placeholder="Fax" value="<?PHP if(!empty($supadd[0]->supadd_fax)) echo $supadd[0]->supadd_fax;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Country</label>
					  <div class="col-sm-10">
						<input type="text" name="supadd_country" class="form-control" placeholder="Country" value="<?PHP if(!empty($supadd[0]->supadd_country)) echo $supadd[0]->supadd_country;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Website</label>
					  <div class="col-sm-10">
						<input type="text" name="supadd_web" class="form-control" placeholder="Website" value="<?PHP if(!empty($supadd[0]->supadd_web)) echo $supadd[0]->supadd_web;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Contact Name</label>
					  <div class="col-sm-10">
						<input type="text" name="supadd_contactname" class="form-control" placeholder="Contact Name" value="<?PHP if(!empty($supadd[0]->supadd_contactname)) echo $supadd[0]->supadd_contactname;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Description</label>
					  <div class="col-sm-10">
                                              <textarea rows="3" name="supadd_des" class="form-control" placeholder="Description"><?PHP if(!empty($supadd[0]->supadd_des)) echo $supadd[0]->supadd_des;?></textarea>
					  </div>
					</div>
					
					<div class="box-footer"><div align="right">
                                            <a href="javascript:history.back();" style="margin-right: 10px;"><input type="button" class="btn btn-primary" value="Cancel"></a>
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="supadd_id" value="<?PHP if(!empty($supadd[0]->supadd_id)) echo $supadd[0]->supadd_id;?>">
					</div></div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			