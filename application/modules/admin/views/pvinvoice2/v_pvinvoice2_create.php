
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
					  <label class="col-sm-2 control-label">Pvinvoice2_pvinvoiceid</label>
					  <div class="col-sm-10">
						<input type="text" name="pvinvoice2_pvinvoiceid" class="form-control" placeholder="Pvinvoice2_pvinvoiceid" value="<?PHP if(!empty($pvinvoice2[0]->pvinvoice2_pvinvoiceid)) echo $pvinvoice2[0]->pvinvoice2_pvinvoiceid;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvinvoice2_no</label>
					  <div class="col-sm-10">
						<input type="text" name="pvinvoice2_no" class="form-control" placeholder="Pvinvoice2_no" value="<?PHP if(!empty($pvinvoice2[0]->pvinvoice2_no)) echo $pvinvoice2[0]->pvinvoice2_no;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvinvoice2_des</label>
					  <div class="col-sm-10">
						<input type="text" name="pvinvoice2_des" class="form-control" placeholder="Pvinvoice2_des" value="<?PHP if(!empty($pvinvoice2[0]->pvinvoice2_des)) echo $pvinvoice2[0]->pvinvoice2_des;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Pvinvoice2_amount</label>
					  <div class="col-sm-10">
						<input type="text" name="pvinvoice2_amount" class="form-control" placeholder="Pvinvoice2_amount" value="<?PHP if(!empty($pvinvoice2[0]->pvinvoice2_amount)) echo $pvinvoice2[0]->pvinvoice2_amount;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="pvinvoice2_id" value="<?PHP if(!empty($pvinvoice2[0]->pvinvoice2_id)) echo $pvinvoice2[0]->pvinvoice2_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			