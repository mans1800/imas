
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
						<input type="text" name="typeaccount_code" class="form-control" placeholder="Code" value="<?PHP if(!empty($typeaccount[0]->typeaccount_code)) echo $typeaccount[0]->typeaccount_code;?>">
                                                <?php echo form_error('typeaccount_code', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ประเภทบัญชี<font color="red">*</font></label>
					  <div class="col-sm-10">
                              
                                    <select class="form-control" name="typeaccount_type" required>
                                        <option value="1" <?PHP if((!empty($typeaccount[0]->typeaccount_type))&&($typeaccount[0]->typeaccount_type == '1')) { echo 'selected'; }?>>สินทรัพย์</option>
                                        <option value="2" <?PHP if((!empty($typeaccount[0]->typeaccount_type))&&($typeaccount[0]->typeaccount_type == '2')) { echo 'selected'; }?>>หนี้สิน</option>
                                        <option value="3" <?PHP if((!empty($typeaccount[0]->typeaccount_type))&&($typeaccount[0]->typeaccount_type == '3')) { echo 'selected'; }?>>ทุน</option>
                                        <option value="4" <?PHP if((!empty($typeaccount[0]->typeaccount_type))&&($typeaccount[0]->typeaccount_type == '4')) { echo 'selected'; }?>>รายได้</option>
                                        <option value="5" <?PHP if((!empty($typeaccount[0]->typeaccount_type))&&($typeaccount[0]->typeaccount_type == '5')) { echo 'selected'; }?>>ค่าใช้จ่าย</option>
                                    </select>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ชื่อ<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="typeaccount_name" class="form-control" placeholder="ชื่อ" value="<?PHP if(!empty($typeaccount[0]->typeaccount_name)) echo $typeaccount[0]->typeaccount_name;?>">
                                                <?php echo form_error('typeaccount_name', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="box-footer"><div align="right">
                                                <a href="javascript:history.back();"><input type="button" class="btn btn-primary" value="ยกเลิก" style="margin-right:10px;"></a>
                                                <button type="submit" class="btn btn-info pull-right">บันทึก</button>
						<input type="hidden" name="typeaccount_id" value="<?PHP if(!empty($typeaccount[0]->typeaccount_id)) echo $typeaccount[0]->typeaccount_id;?>">
                                            </div></div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			