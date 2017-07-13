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
                <?PHP if (!empty($paymentvoucher[0]->pmv_no)) { ?>
                    <div class="form-group">
                        <label class="col-sm-11 control-label">เลขที่ PV</label>                                              
                        <div class="col-sm-1">
                            <input type="text" name="pmv_no" class="form-control" placeholder="เลขที่ PV" value="<?PHP
                            if (!empty($paymentvoucher[0]->pmv_no)) {
                                echo $paymentvoucher[0]->pmv_no;
                            }
                            ?>">
                        </div>
                    </div>
                <?PHP } ?>






                <div class="form-group">
                    <label class="col-sm-1 col-md-1 col-lg-1 control-label">จ่ายให้</label>
                    <div class="col-sm-5 col-md-5 col-lg-5"> 
                        <?PHP if (!empty($paymentvoucher[0]->pmv_to)) { ?> 
                            <!-- ถ้ามีการเลือกบริษัทแล้ว -->
                            <select class="form-control select2" width="100%" name="pmv_to">
                                <?php
                                foreach ($data_company as $data_company1) {
                                    $datacompany = $data_company1->company_name;
                                    $dataid = $data_company1->company_id;
                                    ?> 
                                    <option value="<?php echo $dataid; ?>" <?php echo ($paymentvoucher[0]->pmv_to == $dataid) ? "selected=\"selected\"" : ""; ?> ><?php echo $datacompany; ?></option>
                                <?php } ?>
                            </select> 
                        <?PHP } else { ?> 
                            <!-- ถ้ายังไม่ได้เลือกบริษัท -->
                            <select class="form-control select2" width="100%" name="pmv_to">
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
                        <input type="text" name="pmv_date" class="form-control datepicker" placeholder="วันที่" value="<?PHP if (!empty($paymentvoucher[0]->pmv_date)) echo $paymentvoucher[0]->pmv_date; ?>">
                        <?php echo form_error('pmv_date', '<font color="error">', '</font>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">เช็คธนาคาร</label>
                    <div class="col-sm-5">
                        <input type="text" name="pmv_check" class="form-control" placeholder="เช็คธนาคาร" value="<?PHP if (!empty($paymentvoucher[0]->pmv_check)) echo $paymentvoucher[0]->pmv_check; ?>">
                    </div>



                    <label class="col-sm-1 control-label">เลขที่เช็ค</label>
                    <div class="col-sm-5">
                        <input type="text" name="pmv_checkno" class="form-control" placeholder="เลขที่เช็ค" value="<?PHP if (!empty($paymentvoucher[0]->pmv_checkno)) echo $paymentvoucher[0]->pmv_checkno; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label">เช็คลงวันที่</label>
                    <div class="col-sm-5">
                        <input type="text" name="pmv_checkdate" class="form-control datepicker" placeholder="เช็คลงวันที่" value="<?PHP if ((!empty($paymentvoucher[0]->pmv_checkdate)) && ($paymentvoucher[0]->pmv_checkdate != 0000 - 00 - 00)) echo $paymentvoucher[0]->pmv_checkdate; ?>">
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
                            if (!empty($pvlist)) {
                                $countlist = count($pvlist);
                                
                                foreach ($pvlist as $pvlist) {
                                    
                                    ?>
                                    <tr>
                                        <td><input type="text" name="pvlist_account[<?PHP $i; ?>]" class="form-control" value="<?PHP echo $pvlist->pvlist_account; ?>"></td>
                                        <td>
                                            <div class="col-lg-5">         
                                                <select class="form-control select2" width="100%" name="pvlist_code[<?PHP $i; ?>]"><option value="">ประเภทของรายการ</option>
                                                    <?php
                                                    foreach ($data_type as $data_type1) {
                                                        $datatype = $data_type1->type_name;
                                                        $dataid = $data_type1->type_id;
                                                        $datatypeid = $data_type1->type_typeid;
                                                        ?> 
                                                        <option value="<?php echo $dataid; ?>" <?php echo ($pvlist->pvlist_code == $dataid) ? "selected=\"selected\"" : ""; ?> ><?php echo $datatypeid . ' ' . $datatype; ?></option>
                                                    <?php } ?>
                                                </select> 
                                            </div><div class="col-lg-7">
                                                <input type="text" name="pvlist_list[<?PHP $i; ?>]" class="form-control" value="<?PHP echo $pvlist->pvlist_list; ?>"></div></td>
                                        <td><input type="text" name="pvlist_vat[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                            if (!empty($pvlist->pvlist_vat)) {
                                                echo $pvlist->pvlist_vat;
                                            }
                                            ?>" onblur="findTotal()"></td>
                                        <td>
                                            <div class="col-lg-12">
                                                <span style="width:5%; foat:left;">
                                                    <input type="checkbox" value="1" name="checktax<?PHP $i; ?>">
                                                </span>
                                                <span style="width:85%; float:right;">
                                                    <input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                                    if (!empty($pvlist->pvlist_tax)) {
                                                        echo $pvlist->pvlist_tax;
                                                    }
                                                    ?>" onblur="findTotal()">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-lg-12">
                                                <span style="width:5%; foat:left;">
                                       
                                                    <input type="checkbox" value="1" name="checktotal<?PHP $i; ?>">
                                                    
                                                </span>
                                                <span style="width:85%; float:right;">
                                                    <input type="text" name="pvlist_total[<?PHP $i; ?>]" class="form-control" value="<?PHP
                                                    if (!empty($pvlist->pvlist_total)) {
                                                        echo $pvlist->pvlist_total;
                                                    }
                                                    ?>" onblur="findTotal()">
                                                </span>
                                            </div>
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
                                    <td><input type="text" name="pvlist_account[<?PHP $i; ?>]" class="form-control"></td>
                                    <td>
                                        <div class="col-lg-5">         
                                            <select class="form-control select2" width="100%" name="pvlist_code[<?PHP $i; ?>]"><option value="">ประเภทของรายการ</option>
                                                <?php
                                                foreach ($data_type as $data_type1) {
                                                    $datatype = $data_type1->type_name;
                                                    $dataid = $data_type1->type_id;
                                                    $datatypeid = $data_type1->type_typeid;
                                                    ?> 
                                                    <option value="<?php echo $dataid; ?>" ><?php echo $datatypeid . ' ' . $datatype; ?></option>
                                                <?php } ?>
                                            </select>   
                                        </div><div class="col-lg-7">
                                            <input type="text" name="pvlist_list[<?PHP $i; ?>]" class="form-control"></div></td>
                                    <td><input type="text" name="pvlist_vat[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td>
                                        <div class="col-lg-12">
                                            <span style="width:5%; foat:left;">
                                                <input type="checkbox" value="1" name="checktax<?PHP echo $i; ?>">
                                            </span>
                                            <span style="width:85%; float:right;">
                                                <input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-lg-12">
                                            <span style="width:5%; foat:left;">
                                                <input type="checkbox" value="1" name="checktotal<?PHP echo $i; ?>">
                                            </span>
                                            <span style="width:85%; float:right;">
                                                <input type="text" name="pvlist_total[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                            </span>
                                        </div>
                                    </td>

                                </tr> 
                                <?PHP
                            }
                        } else {
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <tr>
                                    <td><input type="text" name="pvlist_account[<?PHP $i; ?>]" class="form-control"></td>

                                    <td><div class="col-lg-5">         
                                            <select class="form-control select2" width="100%" name="pvlist_code[<?PHP $i; ?>]"><option value="">ประเภทของรายการ</option>
                                                <?php
                                                foreach ($data_type as $data_type1) {
                                                    $datatype = $data_type1->type_name;
                                                    $dataid = $data_type1->type_id;
                                                    $datatypeid = $data_type1->type_typeid;
                                                    ?> 
                                                    <option value="<?php echo $dataid; ?>" ><?php echo $datatypeid . ' ' . $datatype; ?></option>
                                                <?php } ?>
                                            </select>   
                                        </div><div class="col-lg-7"><input type="text" name="pvlist_list[<?PHP $i; ?>]" class="form-control"></div></td>
                                    <td><input type="text" name="pvlist_vat[<?PHP $i; ?>]" class="form-control" onblur="findTotal()"></td>
                                    <td>
                                                 <div class="col-lg-12">
                                                <span style="width:5%; foat:left;">
                                                        <input type="checkbox" value="1" name="checktax<?PHP echo $i; ?>">
                                                </span>
                                                <span style="width:85%; float:right;">
                                        <input type="text" name="pvlist_tax[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                     </span>
                                            </div>
                                    </td>
                                    <td>
                                                                                    <div class="col-lg-12">
                                                <span style="width:5%; foat:left;">
                                                    <input type="checkbox" value="1" name="checktotal<?PHP echo $i; ?>">
                                                </span>
                                                <span style="width:85%; float:right;">
                                        <input type="text" name="pvlist_total[<?PHP $i; ?>]" class="form-control" onblur="findTotal()">
                                     </span>
                                            </div>
                                    </td>
                                </tr>

                                <?PHP
                            }
                        }
                        ?>


                        <tr>
                            <td colspan="4"></td>
                            <td><input type="text" name="pmv_total" id="pmv_total" class="form-control" value="<?PHP if (!empty($paymentvoucher[0]->pmv_total)) echo $paymentvoucher[0]->pmv_total; ?>"></td>
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