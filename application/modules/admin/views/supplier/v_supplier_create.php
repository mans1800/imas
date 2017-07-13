
			<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
			
			</div>
			<div class="box-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open("",$attributes); 
				?>
                                
					<div class="form-group">
					  <label class="col-sm-2 control-label">Account Code</label>
					  <div class="col-sm-4">
						<input type="text" name="supplier_accountid" class="form-control" placeholder="Account Code" value="<?PHP if(!empty($supplier[0]->supplier_accountid)) echo $supplier[0]->supplier_accountid;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supplier Code</label>
					  <div class="col-sm-4">
						<input type="text" name="supplier_code" class="form-control" placeholder="Supplier Code" value="<?PHP if(!empty($supplier[0]->supplier_code)) echo $supplier[0]->supplier_code;?>">
					  </div>
					
					
				
					  <label class="col-sm-2 control-label">Lookup Code</label>
					  <div class="col-sm-4">
						<input type="text" name="supplier_lookupcode" class="form-control" placeholder="Lookup Code" value="<?PHP if(!empty($supplier[0]->supplier_lookupcode)) echo $supplier[0]->supplier_lookupcode;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Supplier Name</label>
					  <div class="col-sm-4">
						<input type="text" name="supplier_name" class="form-control" placeholder="Supplier Name" value="<?PHP if(!empty($supplier[0]->supplier_name)) echo $supplier[0]->supplier_name;?>">
					  </div>
					
					
					
					  <label class="col-sm-2 control-label">Supplier Status</label>
					  <div class="col-sm-4">
                          <select class="form-control" name="supplier_status" required style="margin-bottom:10px;">
                             <option value="1">Open</option>
                            <option value="2">Closed/Complete</option>
                        </select>
					  </div>
					</div>
					
					<div class="box-footer"><div align="right">
                                            <a href="javascript:history.back();" style="margin-right: 10px;"><input type="button" class="btn btn-primary" value="Cancel"></a>
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="supplier_id" value="<?PHP if(!empty($supplier[0]->supplier_id)) echo $supplier[0]->supplier_id;?>">
					</div></div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	






	<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
			
			</div>
			<div class="box-body table-responsive"><h4><center><b><u><font color="#367fa9">Head Office / Branch Office</font></u></b></center></h4>
              
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
     
                <?php echo form_open_multipart(base_url() . "admin/suptype/create") ?>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <input type="text" name="suptype_code"   class="form-control" placeholder="Code" required="" style="margin-bottom:10px;">
                    <div class="hidden-xs hidden-sm"><br></div>
                </div>
                   
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <select class="form-control" name="suptype_branchtype" required style="margin-bottom:10px;">
                        <option selected value="1">Head Office</option>
                        <option value="2">Branch Office</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <input type="text" name="suptype_branchname"   class="form-control" placeholder="Name" required="" style="margin-bottom:10px;">
                    <div class="hidden-xs hidden-sm"><br></div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <input type="hidden" name="suptype_id">
                    <input type="hidden" name="suptype_supplierid">
                </div>
                    <?php echo form_close(); ?>	
            </div>
                    
                    
                    <table class="table table-striped  table-autosort" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="15%">Code</th>
                                <th width="20%">Type</th>

                                <th width="45%">Name</th>

                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <?PHP
                            foreach ($data_branch as $row_branch) {
                                ?>
                                <tr>
                                    <td width="15%"><?PHP echo $row_branch->suptype_code; ?></td>
                                    <td width="20%"><?PHP 
                                    if ($row_branch->suptype_branchtype == 1) {
                                    echo 'Head Office'; 
                                    } else {
                                        echo 'Branch Office';
                                    }
                                    ?></td>

                                    <td width="45%"><?PHP echo $row_branch->suptype_branchname; ?></td>

                                    <td width="20%">
                                        <a href="suptype/create/<?PHP echo $row_branch->suptype_id; ?>">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i>
                                        </a>
                                        |
                                        <a href="suptype/deletes/<?PHP echo $row_branch->suptype_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            <i class="fa fa-times-circle" aria-hidden="true"> Delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <?PHP
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	








	
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
			
			</div>

                                    <div class="box-body table-responsive"><h4><center><b><u><font color="#367fa9">Tax ID Number</font></u></b></center></h4>
                    
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
     
                <?php echo form_open_multipart(base_url() . "admin/suptax/create") ?>

               <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                       <select class="form-control" name="suptax_officecode" required style="margin-bottom:10px;">
                           <option disabled selected value="">Office Code</option>  
                        <option value="1">001</option>
                        <option value="2">002</option>
                    </select>
                    <div class="hidden-xs hidden-sm"><br></div>
                </div>
                   
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <input type="text" name="suptax_taxnumber"   class="form-control" placeholder="Tax ID Number" required="" style="margin-bottom:10px;">
                    <div class="hidden-xs hidden-sm"><br></div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <input type="hidden" name="suptax_id">
                    <input type="hidden" name="suptax_supplierid">
                </div>
                    <?php echo form_close(); ?>	
            </div>
                    
                    
                    <table class="table table-striped  table-autosort" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                 <th width="20%">Office Code</th>
                                 
                                <th width="60%">Tax ID Number</th>

                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <?PHP
                            foreach ($data_suptax as $row_suptax) {
                                ?>
                                <tr>

                                    <td width="20%"><?PHP echo $row_suptax->suptype_code; ?></td>
                                    
                                    <td width="60%"><?PHP echo $row_suptax->suptax_taxnumber; ?></td>

                                    <td width="20%">
                                        <a href="suptax/create/<?PHP echo $row_suptax->suptax_id; ?>">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i>
                                        </a>
                                        |
                                        <a href="suptax/deletes/<?PHP echo $row_suptax->suptax_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            <i class="fa fa-times-circle" aria-hidden="true"> Delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <?PHP
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                    
			</div>
		</div>
	</div>









	<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
			
			</div>
			<div class="box-body table-responsive"><h4><center><b><u><font color="#367fa9">Address</font></u></b></center></h4>
              
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
     
                <?php echo form_open_multipart(base_url() . "admin/supadd/create") ?>

               <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                         <select class="form-control" name="supadd_officecode" required style="margin-bottom:10px;">
                           <option disabled selected value="">Office Code</option>  
                        <option value="1">001</option>
                        <option value="2">002</option>
                    </select>
                    <div class="hidden-xs hidden-sm"><br></div>
                </div>
                   
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <input type="text" name="supadd_address"   class="form-control" placeholder="Address" required="" style="margin-bottom:10px;">
                    <div class="hidden-xs hidden-sm"><br></div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <input type="hidden" name="supadd_id">
                    <input type="hidden" name="supadd_supplierid">
                </div>
                    <?php echo form_close(); ?>	
            </div>
                    
                    
                    <table class="table table-striped  table-autosort" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="20%">Office Code</th>
                                <th width="60%">Address</th>
                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <?PHP
                            foreach ($data_supadd as $row_supadd) {
                                ?>
                                <tr>
                                    <td width="20%"><?PHP echo $row_supadd->suptype_code; ?></td>
                                    <td width="60%"><?PHP echo $row_supadd->supadd_address; ?></td>


                                    <td width="20%">
                                        <a href="supadd/create/<?PHP echo $row_supadd->supadd_id; ?>">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i>
                                        </a>
                                        |
                                        <a href="supadd/deletes/<?PHP echo $row_supadd->supadd_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            <i class="fa fa-times-circle" aria-hidden="true"> Delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <?PHP
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
</div>




