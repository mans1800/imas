
			<div class="row">
	<div class="col-md-10">
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
					  <label class="col-sm-2 control-label">ประเภท</label>
					  <div class="col-sm-10">
                                              
                            <select class="form-control select2" width="100%" name="type_bigtypeid">
                                <?php
                                foreach ($data_bigtype as $data_bigtype) {
                                    $databigtype = $data_bigtype->bigtype_name;
                                    $datatypeid = $data_bigtype->bigtype_id;
                                    ?> 
                                    <option value="<?php echo $datatypeid; ?>" ><?php echo $databigtype; ?></option>
                                <?php } ?>
                            </select> 
                                              
						
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ชื่อ</label>
					  <div class="col-sm-10">
						<input type="text" name="type_name" class="form-control" placeholder="ชื่อ" value="<?PHP if(!empty($type[0]->type_name)) echo $type[0]->type_name;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">บันทึก</button>
						<input type="hidden" name="type_id" value="<?PHP if(!empty($type[0]->type_id)) echo $type[0]->type_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	

<script type="text/javascript">
    $(document).ready(function () {

        $(".select2").select2();
    });
    </script>