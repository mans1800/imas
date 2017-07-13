
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
					  <label class="col-sm-2 control-label">Bigtype_name</label>
					  <div class="col-sm-10">
						<input type="text" name="bigtype_name" class="form-control" placeholder="Bigtype_name" value="<?PHP if(!empty($bigtype[0]->bigtype_name)) echo $bigtype[0]->bigtype_name;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="bigtype_id" value="<?PHP if(!empty($bigtype[0]->bigtype_id)) echo $bigtype[0]->bigtype_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			