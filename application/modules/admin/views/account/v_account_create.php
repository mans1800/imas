
			<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
                            <h3 class="box-title">

                            </h3>
			</div>
			<div class="box-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open("",$attributes); 
				?>
					<div class="form-group">
                                            <label class="col-sm-2 control-label">Code<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="account_code" class="form-control" placeholder="รหัส" value="<?PHP if(!empty($account[0]->account_code)) echo $account[0]->account_code;?>">
                                                <?php echo form_error('account_code', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ชื่อบัญชี<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="account_name" class="form-control" placeholder="ชื่อบัญชี" value="<?PHP if(!empty($account[0]->account_name)) echo $account[0]->account_name;?>">
                                                <?php echo form_error('account_name', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
                            
                            
                            		<div class="form-group">
					  <label class="col-sm-2 control-label">ปี<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="account_year" class="form-control" placeholder="ปี" value="<?PHP if(!empty($account[0]->account_year)) echo $account[0]->account_year;?>">
                                                <?php echo form_error('account_year', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="box-footer"><div align="right">
                                                <a href="javascript:history.back();"><input type="button" class="btn btn-primary" value="ยกเลิก" style="margin-right:10px;"></a>
						<button type="submit" class="btn btn-info pull-right">บันทึก</    button>
						<input type="hidden" name="account_id" value="<?PHP if(!empty($account[0]->account_id)) echo $account[0]->account_id;?>">
                                                </div></div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			