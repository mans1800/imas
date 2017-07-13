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
                    <label class="col-sm-1 col-md-1 col-lg-1 control-label">จ่ายให้</label>
                    <div class="col-sm-5 col-md-5 col-lg-5"> 
                        <?PHP if (!empty($paymentvoucher2[0]->pmv2_to)) { ?> 
                            <!-- ถ้ามีการเลือกบริษัทแล้ว -->
                            <select class="form-control select2" width="100%" name="pmv2_to">
                                <?php
                                foreach ($data_company as $data_company1) {
                                    $datacompany = $data_company1->company_name;
                                    $dataid = $data_company1->company_id;
                                    ?> 
                                    <option value="<?php echo $dataid; ?>" <?php echo ($paymentvoucher2[0]->pmv2_to == $dataid) ? "selected=\"selected\"" : ""; ?> ><?php echo $datacompany; ?></option>
                                <?php } ?>
                            </select> 
                        <?PHP } else { ?> 
                            <!-- ถ้ายังไม่ได้เลือกบริษัท -->
                            <select class="form-control select2" width="100%" name="pmv2_to">
                                <?php
                                foreach ($data_company as $data_company) {
                                    $datacompany = $data_company->company_name;
                                    $dataid = $data_company->company_id;
                                    ?> 
                                    <option value="<?php echo $dataid; ?>" ><?php echo $datacompany; ?></option>
                                <?php } ?>
                            </select> 


            
                        <?PHP } ?>
                    
                    </div> 

                    
                    <label class="col-sm-1 control-label">วันที่<font color="red">*</font></label>
                    <div class="col-sm-5">
                        <input type="text" name="pmv2_date" class="form-control datepicker" placeholder="วันที่" value="<?PHP if (!empty($paymentvoucher2[0]->pmv2_date)) echo $paymentvoucher2[0]->pmv2_date; ?>">
                        <?php echo form_error('pmv2_date', '<font color="error">', '</font>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">เช็คธนาคาร</label>
                    <div class="col-sm-5">
                        <input disabled="" type="text" name="pmv2_check" class="form-control" placeholder="เช็คธนาคาร" value="<?PHP if (!empty($paymentvoucher2[0]->pmv2_check)) echo $paymentvoucher2[0]->pmv2_check; ?>">
                    </div>



                    <label class="col-sm-1 control-label">เลขที่เช็ค</label>
                    <div class="col-sm-5">
                        <input disabled="" type="text" name="pmv2_checkno" class="form-control" placeholder="เลขที่เช็ค" value="<?PHP if (!empty($paymentvoucher2[0]->pmv2_checkno)) echo $paymentvoucher2[0]->pmv2_checkno; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">เช็คลงวันที่</label>
                    <div class="col-sm-5">
                        <input disabled="" type="text" name="pmv2_checkdate" class="form-control datepicker" placeholder="เช็คลงวันที่" value="<?PHP if ((!empty($paymentvoucher2[0]->pmv2_checkdate)) && ($paymentvoucher2[0]->pmv2_checkdate != 0000 - 00 - 00)) echo $paymentvoucher2[0]->pmv2_checkdate; ?>">
                    </div>
                </div>
                <br>

                <div class="col-lg-12">
                    <table class="table table-bordered" id="tab_logic">
                        <thead>
                            <tr>
                                <th style="width: 20%;"><center>ชื่อบัญชี</center></th>
             
                        <th style="width: 50%;"><center>รายการ</center></th>
                        <th style="width: 10%;"><center>VAT</center></th>
                        <th style="width: 10%;"><center>TAX</center></th>
                        <th style="width: 10%;"><center>จำนวนเงิน</center></th>

                        </tr>
                        </thead>
                        <tbody>


                            <?PHP 
                            if (!empty($pvlist)) { $countlist = count($pvlist);
                                foreach ($pvlist as $pvlist) {
                                    ?>
                                    <tr>
                                        <td><input type="text" name="pvlist2_account[<?PHP $i; ?>]" class="form-control" value="<?PHP echo $pvlist->pvlist2_account; ?>"></td>
                                        <td>
                                            <div class="col-lg-5">         
                            <select class="form-control select2" width="100%" name="pvlist2_code[<?PHP $i; ?>]"><option value="">ประเภทของรายการ</option>
                                <?php
                                foreach ($data_type as $data_type1) {
                                    $datatype = $data_type1->type_name;
                                    $dataid = $data_type1->type_id;
                                    $datatypeid = $data_type1->type_typeid;
                                    ?> 
                                    <option value="<?php echo $dataid; ?>" <?php echo ($pvlist->pvlist2_code == $dataid) ? "selected=\"selected\"" : ""; ?> ><?php echo $datatypeid.' '.$datatype; ?></option>
                                <?php } ?>
                            </select> 
                                 </div><div class="col-lg-7">
                                     <input type="text" name="pvlist2_list[<?PHP $i; ?>]" class="form-control" value="<?PHP echo $pvlist->pvlist2_list; ?>"></div></td>
                                        <td><input type="text" name="pvlist2_vat[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                            if (!empty($pvlist->pvlist2_vat)) {
                                                echo $pvlist->pvlist2_vat;
                                            }
                                            ?>" onblur="findTotal()"></td>
                                        <td><input type="text" name="pvlist2_tax[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                            if (!empty($pvlist->pvlist2_tax)) {
                                                echo $pvlist->pvlist2_tax;
                                            }
                                            ?>" onblur="findTotal()"></td>
                                        <td><input type="text" name="pvlist2_total[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                            if (!empty($pvlist->pvlist2_total)) {
                                                echo $pvlist->pvlist2_total;
                                            }
                                            ?>" onblur="findTotal()"></td>
                                        
                        
                                        
                                <input type="hidden" name="pvlist2_id[<?PHP $i; ?>]" value="<?PHP
                                if (!empty($pvlist->pvlist2_id)) {
                                    echo $pvlist->pvlist2_id;
                                }
                                ?>"> 
                                <input type="hidden" name="
                                       
                                       [<?PHP $i; ?>]" value="<?PHP
                                if (!empty($pvlist->pvlist2_pmvid2)) {
                                    echo $pvlist->pvlist2_pmvid2;
                                } else {
                                    echo $pvlist2_pmvid2;
                                }
                                ?>">
                                </tr>
                                <?PHP 
                            }
                            for ($i=$countlist; $i<8; $i++) { ?>
                                                               <tr>
                                    <td><input type="text" name="pvlist2_account[<?PHP $i; ?>]" class="form-control"></td>
                                    <td>
                                        <div class="col-lg-5">         
                              <select class="form-control select2" width="100%" name="pvlist2_code[<?PHP $i; ?>]"><option value="">ประเภทของรายการ</option>
                                <?php 
                                foreach ($data_type as $data_type1) {
                                    $datatype = $data_type1->type_name;
                                    $dataid = $data_type1->type_id;
                                    $datatypeid = $data_type1->type_typeid;
                                    ?> 
                                    <option value="<?php echo $dataid; ?>" ><?php echo $datatypeid.' '.$datatype; ?></option>
                                <?php }   ?>
                            </select>   
                                 </div><div class="col-lg-7">
                                     <input type="text" name="pvlist2_list[<?PHP $i; ?>]" class="form-control"></div></td>
                                    <td><input type="text" name="pvlist2_vat[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td><input type="text" name="pvlist2_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td><input type="text" name="pvlist2_total[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>

                                </tr> 
                            <?PHP }
                        } else {
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <tr>
                                    <td><input type="text" name="pvlist2_account[<?PHP $i; ?>]" class="form-control"></td>
                                
                                    <td><div class="col-lg-5">         
                              <select class="form-control select2" width="100%" name="pvlist2_code[<?PHP $i; ?>]"><option value="">ประเภทของรายการ</option>
                                <?php 
                                foreach ($data_type as $data_type1) {
                                    $datatype = $data_type1->type_name;
                                    $dataid = $data_type1->type_id;
                                    $datatypeid = $data_type1->type_typeid;
                                    ?> 
                                    <option value="<?php echo $dataid; ?>" ><?php echo $datatypeid.' '.$datatype; ?></option>
                                <?php }   ?>
                            </select>   
                                 </div><div class="col-lg-7"><input type="text" name="pvlist2_list[<?PHP $i; ?>]" class="form-control"></div></td>
                                    <td><input type="text" name="pvlist2_vat[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td><input type="text" name="pvlist2_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td><input type="text" name="pvlist2_total[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                </tr>

                                <?PHP
                            }
                        }
                        ?>


                        <tr>
                            <td colspan="4"></td>
                            <td><input type="text" name="pmv2_total" id="pmv2_total" class="form-control" value="<?PHP if (!empty($paymentvoucher2[0]->pmv2_total)) echo $paymentvoucher2[0]->pmv2_total; ?>"></td>
                        </tr>

                        </tbody>



                    </table>

                </div>




                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>
                <div class="box-footer">
                    <div align="right">
                        <a href="javascript:history.back();"><input type="button" class="btn btn-primary" value="ยกเลิก"></a>
                        <input type="button" class="btn btn-info" value="บันทึกและทำรายการต่อ">
                        <button type="submit" class="btn btn-info">บันทึก</button>


                    </div>
                    <input type="hidden" name="pmv2_pmvid" value="<?PHP if (!empty($paymentvoucher2[0]->pmv2_pmvid)) { echo $paymentvoucher2[0]->pmv2_pmvid; } else { echo $pmv2_pmvid; } ?>">
                    <input type="hidden" name="pmv2_id" value="<?PHP if (!empty($paymentvoucher2[0]->pmv2_id)) echo $paymentvoucher2[0]->pmv2_id; ?>">
                    <input type="hidden" name="pmv2_save" value="<?PHP echo $user->id; ?>"> 
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
  var pmv2_to = [{id: <?php echo json_encode($dataid); ?>, text: <?php echo json_encode($datacompany); ?>}, ];

  $(".pmv2_to").select2({
  data: pmv2_to
  })

  $(".pmv2_to_selected").select2({
  data: pmv2_to
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
        var arr = document.getElementsByName('pvlist2_total[<?PHP $i; ?>]');
        var vat = document.getElementsByName('pvlist2_vat[<?PHP $i; ?>]');
        var tax = document.getElementsByName('pvlist2_tax[<?PHP $i; ?>]');
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

        document.getElementById('pmv2_total').value = (tot + sumvat) + sumtax;
    }
</script>





<!--<p id="resultx"></p>
<input type="text" name="result" id="result" class="form-control">

<script type="text/javascript">
function pvdate(){
    var xxx = document.getElementsByName('pmv2_date')[0].value;
    var xxy = xxx.substring (0,7); 
        document.getElementById('result').value = xxy;
        document.getElementById("resultx").innerHTML = xxy; 
    }
</script>-->