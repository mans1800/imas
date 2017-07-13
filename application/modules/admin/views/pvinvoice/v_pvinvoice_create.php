
			<div class="row">
	<div class="col-md-12">
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
					  <label class="col-sm-2 control-label">Supplier ID</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_supplierid" class="form-control" placeholder="Supplier ID" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_supplierid)) echo $pvinvoice[0]->pvinvoice_supplierid;?>">
					  </div>
									  <label class="col-sm-2 control-label">Head Office / Branch Office</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_suptypeid" class="form-control" placeholder="Head Office / Branch Office" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_suptypeid)) echo $pvinvoice[0]->pvinvoice_suptypeid;?>">
					  </div>
					
				

					</div>
					
					<div class="form-group">
                                            					  <label class="col-sm-2 control-label">Supplier Address</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_subaddid" class="form-control" placeholder="Supplier Address" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_subaddid)) echo $pvinvoice[0]->pvinvoice_subaddid;?>">
					  </div>
                                                                                  
                                                                                  
					  <label class="col-sm-2 control-label">Supplier Tax</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_suptaxid" class="form-control" placeholder="Supplier Tax" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_suptaxid)) echo $pvinvoice[0]->pvinvoice_suptaxid;?>">
					  </div>
					

					</div>
                            <hr width="50%">
					<div class="form-group">
					  <label class="col-sm-2 control-label">Invoice No.</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_no" class="form-control" placeholder="Invoice no." value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_no)) echo $pvinvoice[0]->pvinvoice_no;?>">
					  </div>

					  <label class="col-sm-2 control-label">Invoice Date</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_date" class="form-control" placeholder="Invoice Date" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_date)) echo $pvinvoice[0]->pvinvoice_date;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Invoice Credit Term</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_crterm" class="form-control" placeholder="Invoice Credit Term" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_crterm)) echo $pvinvoice[0]->pvinvoice_crterm;?>">
					  </div>

					  <label class="col-sm-2 control-label">Status</label>
					  <div class="col-sm-4">
						<input type="text" name="pvinvoice_status" class="form-control" placeholder="Status" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_status)) echo $pvinvoice[0]->pvinvoice_status;?>">
					  </div>
					</div>
                            
                            					<div class="form-group">
					  <label class="col-sm-2 control-label">Description</label>
					  <div class="col-sm-4">
                                              <textarea  rows="3" name="pvinvoice_des" class="form-control" placeholder="Description"><?PHP if(!empty($pvinvoice[0]->pvinvoice_des)) echo $pvinvoice[0]->pvinvoice_des;?></textarea>
                                              
					  </div>
					</div>
                            
                            
                         
                            
                            <br>
                            <div class="col-lg-1"></div>
                                          <div class="col-lg-10">
                    <table class="table table-bordered" id="tab_logic">
                        <thead>
                            <tr>
                         <th style="width: 20%;"><center>No.</center></th>
                        <th style="width: 60%;"><center>Description</center></th>
                        <th style="width: 20%;"><center>Amount</center></th>


                        </tr>
                        </thead>
                        <tbody><?PHP
                                  for ($i = 1; $i < 10; $i++) {
                                ?>
                            <tr>
                               <td><input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                           <td><input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                           <td><input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                            </tr>

                                  <?PHP } ?>
                                <tr>
                                   
                                    <td colspan="2" align="right">Vat</td>
                                <td>
                                 <input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                </td>
                            </tr>
                            
                                                            <tr>
                          
                               <td colspan="2" align="right">Non Vat</td>
                                <td>
                                 <input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                </td>
                            </tr>
                            
                                                            <tr>
                              
                               <td colspan="2" align="right">Total</td>
                                <td>
                                 <input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                                          </div>
                            
                            <div class="col-lg-1"></div>
                            
                            
                         
              
					

					
					<div class="col-lg-12"></div>
                                        <div class="col-lg-9"></div>
                                        <div class="col-lg-2">
					<div class="box-footer"><div align="right">
                        <a href="javascript:history.back();"><input style="margin-right: 10px;" type="button" class="btn btn-primary" value="Cancel"></a>
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="pvinvoice_id" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_id)) echo $pvinvoice[0]->pvinvoice_id;?>">
					</div></div></div>
                                        <div class="col-lg-1"></div>
                            </div>
                            
                            
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			