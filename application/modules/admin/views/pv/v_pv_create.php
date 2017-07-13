<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
                <?PHP
                $attributes = array('class' => 'form-horizontal', "role" => "form");
                echo form_open("", $attributes);
                ?>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Business Unit</label>
                    <div class="col-sm-5">
                        <input type="text" name="pv_checkno" class="form-control" placeholder="Business Unit Code" value="<?PHP if (!empty($pv[0]->pv_checkno)) echo $pv[0]->pv_checkno; ?>">
                    </div>
                    
                    
                                        <label class="col-sm-1 control-label">Account Code</label>
                    <div class="col-sm-5 col-md-5 col-lg-5"> 
                        <?PHP if (!empty($pv[0]->pv_ref)) { ?> 
                            <!-- ถ้ามีการเลือกบริษัทแล้ว -->
                            <select class="form-control select2" width="100%" name="pv_ref">
                                <?php
                                foreach ($data_account as $data_account1) {
                                    $data_account = $data_account1->account_code.' '.$data_account1->account_name;
                                    $dataaccid = $data_account1->account_id;
                                    ?> 
                                    <option value="<?php echo $dataaccid; ?>" <?php echo ($pv[0]->pv_ref == $dataaccid) ? "selected=\"selected\"" : ""; ?> ><?php echo $data_account; ?></option>
                                <?php } ?>
                            </select> 
                        <?PHP } else { ?> 
                            <!-- ถ้ายังไม่ได้เลือกบริษัท -->
                            <select class="form-control select2" width="100%" name="pv_supid">
                                <?php
                                foreach ($data_account as $data_account2) {
                                    $data_account = $data_account2->account_code.' '.$data_account2->account_name;
                                    $dataaccid = $data_account2->account_id;
                                    ?> 
                                    <option value="<?php echo $dataaccid; ?>" ><?php echo $data_account; ?></option>
                                <?php } ?>
                            </select> 



                        <?PHP } ?>

                    </div> 
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                
                
                
                <div class="form-group">
                    <label class="col-sm-1 col-md-1 col-lg-1 control-label">Supplier Name</label>
                    <div class="col-sm-5 col-md-5 col-lg-5"> 
                        <?PHP if (!empty($pv[0]->pv_supid)) { ?> 
                            <!-- ถ้ามีการเลือกบริษัทแล้ว -->
                            <select class="form-control select2" width="100%" name="pv_supid">
                                <?php
                                foreach ($data_supplier as $data_supplier1) {
                                    $data_supplier = $data_supplier1->supplier_code.' '.$data_supplier1->supplier_name;
                                    $datasupid = $data_supplier1->supplier_id;
                                    ?> 
                                    <option value="<?php echo $datasupid; ?>" <?php echo ($pv[0]->pv_supid == $datasupid) ? "selected=\"selected\"" : ""; ?> ><?php echo $data_supplier; ?></option>
                                <?php } ?>
                            </select> 
                        <?PHP } else { ?> 
                            <!-- ถ้ายังไม่ได้เลือกบริษัท -->
                            <select class="form-control select2" width="100%" name="pv_supid">
                                <?php
                                foreach ($data_supplier as $data_supplier) {
                                    $data_supplier = $data_supplier->supplier_code.' '.$data_supplier->supplier_name;
                                    $datasupid = $data_supplier->supplier_id;
                                    ?> 
                                    <option value="<?php echo $datasupid; ?>" ><?php echo $data_supplier; ?></option>
                                <?php } ?>
                            </select> 



                        <?PHP } ?>

                    </div> 

                                       <label class="col-sm-1 control-label">Head Office / Branch Office</label>
					  <div class="col-sm-5">
						<input type="text" name="pvinvoice_subaddid" class="form-control" placeholder="Head Office / Branch Office" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_subaddid)) echo $pvinvoice[0]->pvinvoice_subaddid;?>">
					  </div>
                </div>
                
                
                
                
                
                <div class="form-group">

                                                                                  
                                                                                  
					  <label class="col-sm-1 control-label">Supplier Tax</label>
					  <div class="col-sm-5">
						<input type="text" name="pvinvoice_suptaxid" class="form-control" placeholder="Supplier Tax" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_suptaxid)) echo $pvinvoice[0]->pvinvoice_suptaxid;?>">
					  </div>
					
                                       <label class="col-sm-1 control-label">Address</label>
					  <div class="col-sm-5">
						<input type="text" name="pvinvoice_subaddid" class="form-control" placeholder="Supplier Address" value="<?PHP if(!empty($pvinvoice[0]->pvinvoice_subaddid)) echo $pvinvoice[0]->pvinvoice_subaddid;?>">
					  </div>
					</div>
                
                
                
                
 
                <div class="form-group">
                    <label class="col-sm-1 control-label">Cheque Number</label>
                    <div class="col-sm-5">
                        <input type="text" name="pv_checkno" class="form-control" placeholder="Cheque Number" value="<?PHP if (!empty($pv[0]->pv_checkno)) echo $pv[0]->pv_checkno; ?>">
                    </div>

                    <label class="col-sm-1 control-label">Cheque Date</label>
                    <div class="col-sm-5">
                        <input type="text" name="pv_checkdate" class="form-control datepicker" placeholder="Cheque Date" value="<?PHP if (!empty($pv[0]->pv_checkdate)) echo $pv[0]->pv_checkdate; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">Status</label>
                    <div class="col-sm-5">
                        <select class="form-control" width="100%" name="pv_supid">
                            <option value="1" >จ่ายแล้ว</option>   
                            <option value="0" >ค้างจ่าย</option>  
                        </select>    
                    </div>
                </div>
                
             
                

                <br>

              <div class="col-lg-12">
                    <table class="table table-bordered" id="tab_logic">
                        <thead>
                            <tr>
                         <th style="width: 10%;"><center>Invoice No.</center></th>
                        <th style="width: 15%;"><center>Transaction Date</center></th>

                        <th style="width: 45%;"><center>Description</center></th>
                        <th style="width: 10%;"><center>Debit</center></th>
                        <th style="width: 10%;"><center>Credit</center></th>

                        </tr>
                        </thead>
                        <tbody>


                            <?PHP
                            if (!empty($pvlist)) {
                                $countlist = count($pvlist);
                                
                                foreach ($pvlist as $pvlist) {
                                    
                                    ?>
                                    <tr>
                                        <td><input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                        <td><input type="text" name="pvlist_account[<?PHP $i; ?>]" class="form-control" value="<?PHP echo $pvlist->pvlist_account; ?>"></td>
                                        <td>
                                            <div class="col-lg-6">         
                                                <select class="form-control select2" width="100%" name="pvlist_code[<?PHP $i; ?>]"><option value="">ประเภทของบัญชี</option>
                                                    <?php
                                                    foreach ($data_type as $data_type1) {
                                                        $datatype = $data_type1->typeaccount_name;
                                                        $dataid = $data_type1->typeaccount_id;
                                                        $datatypeid = $data_type1->typeaccount_code;
                                                        ?> 
                                                        <option value="<?php echo $dataid; ?>" <?php echo ($pvlist->typeaccount_code == $dataid) ? "selected=\"selected\"" : ""; ?> ><?php echo $datatypeid . ' ' . $datatype; ?></option>
                                                    <?php } ?>
                                                </select> 
                                            </div><div class="col-lg-6">
                                                <input type="text" name="pvlist_list[<?PHP $i; ?>]" class="form-control" value="<?PHP echo $pvlist->pvlist_list; ?>"></div></td>
                                        <td><input type="text" name="pvlist_vat[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                            if (!empty($pvlist->pvlist_vat)) {
                                                echo $pvlist->pvlist_vat;
                                            }
                                            ?>" onblur="findTotal()"></td>
                                        <td>
                                      
                                    
                                                    <input type="text" name="pvlist_total[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                                    if (!empty($pvlist->pvlist_total)) {
                                                        echo $pvlist->pvlist_total;
                                                    }
                                                    ?>" onblur="findTotal()">
                                        
                                      
                                        </td>
                                <input type="hidden" name="pvlist_id[<?PHP $i; ?>]" value="<?PHP
                                if (!empty($pvlist->pvlist_id)) {
                                    echo $pvlist->pvlist_id;
                                }
                                ?>"> 
                                <input type="hidden" name="pvlist_pmvid[<?PHP $i; ?>]" value="<?PHP
                                if (!empty($pvlist->pvlist_pmvid)) {
                                    echo $pvlist->pvlist_pmvid;
                                }
                                ?>">
                                </tr>
                                <?PHP
                            }
                            
                            for ($i = $countlist; $i < 8; $i++) {
                                ?>
                                <tr>
                                    <td><input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td><input type="text" name="pvlist_account[<?PHP $i; ?>]" class="form-control" ></td>
                                    <td>
                                        <div class="col-lg-6">         
                                            <select class="form-control select2" width="100%" name="pvlist_code[<?PHP $i; ?>]"><option value="">ประเภทของบัญชี</option>
                                                <?php
                                                foreach ($data_type as $data_type1) {
                                                    $datatype = $data_type1->typeaccount_name;
                                                    $dataid = $data_type1->typeaccount_id;
                                                    $datatypeid = $data_type1->typeaccount_code;
                                                    ?> 
                                                    <option value="<?php echo $dataid; ?>" ><?php echo $datatypeid . ' ' . $datatype; ?></option>
                                                <?php } ?>
                                            </select>   
                                        </div><div class="col-lg-6">
                                            <input type="text" name="pvlist_list[<?PHP $i; ?>]" class="form-control"></div></td>
                                    <td><input type="text" name="pvlist_vat[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>

                                    <td>
                                 

                                 
                                                <input type="text" name="pvlist_total[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                  
                                
                                    </td>

                                </tr> 
                                <?PHP
                            }
                        } else {
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <tr>
                                    <td><input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td><input type="text" name="pvlist_account[<?PHP $i; ?>]" class="form-control datepicker"></td>

                                    <td><div class="col-lg-6">         
                                            <select class="form-control select2" width="100%" name="pvlist_code[<?PHP $i; ?>]"><option value="">ประเภทของบัญชี</option>
                                                <?php
                                                foreach ($data_type as $data_type1) {
                                                    $datatype = $data_type1->typeaccount_name;
                                                    $dataid = $data_type1->typeaccount_id;
                                                    $datatypeid = $data_type1->typeaccount_code;
                                                    ?> 
                                                    <option value="<?php echo $dataid; ?>" ><?php echo $datatypeid . ' ' . $datatype; ?></option>
                                                <?php } ?>
                                            </select>   
                                        </div><div class="col-lg-6"><input type="text" name="pvlist_list[<?PHP $i; ?>]" class="form-control"></div></td>
                                    <td><input type="text" name="pvlist_vat[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>

                                    <td>
                                                                           
                           
                                        <input type="text" name="pvlist_total[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                          
                                       
                                    </td>
                                </tr>

                                <?PHP
                            }
                        }
                        ?>


                        <tr>
                            <td colspan="3"></td>
                            <td><input type="text" name="pmv_total" id="pmv_total" class="form-control" value="<?PHP if (!empty($paymentvoucher[0]->pmv_total)) echo $paymentvoucher[0]->pmv_total; ?>"></td>
                            <td><input type="text" name="pmv_total" id="pmv_total" class="form-control" value="<?PHP if (!empty($paymentvoucher[0]->pmv_total)) echo $paymentvoucher[0]->pmv_total; ?>"></td>
                        </tr>

                        </tbody>



                    </table>

                </div>




                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>
                <div class="box-footer">
                    <div align="right">
                        <a href="javascript:history.back();"><input type="button" class="btn btn-primary" value="Cancel"></a>
                 
                        <button type="submit" class="btn btn-info">Submit</button>


                    </div>

                    <input type="hidden" name="pmv_id" value="<?PHP if (!empty($paymentvoucher[0]->pmv_id)) echo $paymentvoucher[0]->pmv_id; ?>">
                    <input type="hidden" name="pmv_save" value="<?PHP echo $user->id; ?>"> 
                </div>
                <?php echo form_close(); ?>	
            </div>
        </div>
    </div>
</div>	







<?PHP
//select รายชื่อบริษัท
/*
  foreach ($data_company as $data_company) {
  $datacompany = $data_company->company_name;
  $dataid = $data_company->company_id;
  ?>

  <script type="text/javascript">
  var pmv_to = [{id: <?php echo json_encode($dataid); ?>, text: <?php echo json_encode($datacompany); ?>}, ];

  $(".pmv_to").select2({
  data: pmv_to
  })

  $(".pmv_to_selected").select2({
  data: pmv_to
  })
  </script>
  <?PHP } */
?>












<!-- แสดงรายชื่อบริษัท / คำนวณจำนวนเงิน , +VAT , -TAX -->
<script type="text/javascript">
    $(document).ready(function () {

        $(".select2").select2();
    });


    function findTotal() {
        var arr = document.getElementsByName('pvlist_total[<?PHP $i; ?>]');
        var vat = document.getElementsByName('pvlist_vat[<?PHP $i; ?>]');
        var tax = document.getElementsByName('pvlist_tax[<?PHP $i; ?>]');
        var tot = 0;
        var sumvat = 0;
        var sumtax = 0;
        for (var i = 0; i < arr.length; i++) {
            if (parseFloat(arr[i].value))
                tot += parseFloat(arr[i].value);
        }
        for (var i = 0; i < vat.length; i++) {
            if (parseFloat(vat[i].value))
                sumvat += parseFloat(vat[i].value);
        }
        for (var i = 0; i < tax.length; i++) {
            if (parseFloat(tax[i].value))
                sumtax += parseFloat(tax[i].value);
        }

        document.getElementById('pmv_total').value = (tot + sumvat) + sumtax;
    }
</script>





<!--<p id="resultx"></p>
<input type="text" name="result" id="result" class="form-control">

<script type="text/javascript">
function pvdate(){
    var xxx = document.getElementsByName('pmv_date')[0].value;
    var xxy = xxx.substring (0,7); 
        document.getElementById('result').value = xxy;
        document.getElementById("resultx").innerHTML = xxy; 
    }
</script>-->