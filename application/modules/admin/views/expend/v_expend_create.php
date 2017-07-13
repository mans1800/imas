<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<div class="row">
    <div class="col-md-10">
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
                    <label class="col-sm-2 control-label">วัน/เดือน/ปี<font color="red">*</font></label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_date" id='dateStart' class="form-control datepicker" placeholder="วัน/เดือน/ปี" value="<?PHP if (!empty($expend[0]->expend_date)) echo $expend[0]->expend_date; ?>">
                        <input type="hidden" name="expend_pv" class="form-control" placeholder="PV" value="<?PHP if (!empty($expend[0]->expend_pv)) echo $expend[0]->expend_pv; ?>">
                        <?php echo form_error('expend_date', '<font color="error">', '</font>'); ?>
                    </div>
                        
                    <label class="col-sm-2 control-label">รายการ</label>
                    <div class="col-sm-4">
                        <select class="form-control expend_list" width="100%" name="expend_list">
                            <!-- Dropdown List Option --> 
                        </select>
                    </div>
                </div>


                
                   <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
<input type="text" name="expend_list2" class="form-control" placeholder="รายการ" value="<?PHP if (!empty($expend[0]->expend_list2)) echo $expend[0]->expend_list2; ?>">
                    </div>
           
                
                             
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <select class="form-control expend_list3" width="100%" name="expend_list3">
                            <!-- Dropdown List Option --> 
                        </select>
                    </div>
                </div>
                
               

                <div class="form-group">
                    <label class="col-sm-2 control-label">เลขที่เช็ค</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_check" class="form-control" placeholder="เลขที่เช็ค" value="<?PHP if (!empty($expend[0]->expend_check)) echo $expend[0]->expend_check; ?>">
                    </div>

                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_em1" class="form-control" placeholder="" value="<?PHP if (!empty($expend[0]->expend_em1)) echo $expend[0]->expend_em1; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">เงินสด</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_cash" class="form-control" placeholder="เงินสด" value="<?PHP if (!empty($expend[0]->expend_cash)) echo $expend[0]->expend_cash; ?>">
                    </div>

                    <label class="col-sm-2 control-label">ธนาคาร<font color="red">*</font></label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_bank" class="form-control" placeholder="ธนาคาร" value="<?PHP if (!empty($expend[0]->expend_bank)) echo $expend[0]->expend_bank; ?>">
                        <?php echo form_error('expend_bank', '<font color="error">', '</font>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">เจ้าหนี้ ภงด.หัก ณ ที่จ่าย</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_creditor" class="form-control" placeholder="เจ้าหนี้ ภงด.หัก ณ ที่จ่าย" value="<?PHP if (!empty($expend[0]->expend_creditor)) echo $expend[0]->expend_creditor; ?>">
                     
                    </div>

                    <label class="col-sm-2 control-label">เงินยืมทดรองเรือ</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_ship" class="form-control" placeholder="เงินยืมทดรองเรือ" value="<?PHP if (!empty($expend[0]->expend_ship)) echo $expend[0]->expend_ship; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">เงินยืมทดรอง BL</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_advance" class="form-control" placeholder="เงินยืมทดรองจ่าย" value="<?PHP if (!empty($expend[0]->expend_advance)) echo $expend[0]->expend_advance; ?>">
                    </div>

                    <label class="col-sm-2 control-label">ค่าระวาง</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_freight" class="form-control" placeholder="ค่าระวาง" value="<?PHP if (!empty($expend[0]->expend_freight)) echo $expend[0]->expend_freight; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">ค่าขนส่ง</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_carriage" class="form-control" placeholder="ค่าขนส่ง" value="<?PHP if (!empty($expend[0]->expend_carriage)) echo $expend[0]->expend_carriage; ?>">
                      
                    </div>

                    <label class="col-sm-2 control-label">เงินทดรองผ่านท่า</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_port" class="form-control" placeholder="เงินทดรองผ่านท่า" value="<?PHP if (!empty($expend[0]->expend_port)) echo $expend[0]->expend_port; ?>">
              
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">เงินทดรองมัดจำตู้</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_container" class="form-control" placeholder="เงินทดรองมัดจำตู้" value="<?PHP if (!empty($expend[0]->expend_container)) echo $expend[0]->expend_container; ?>">
                    </div>

                    <label class="col-sm-2 control-label">ภพ.30</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_pp30" class="form-control" placeholder="ภพ.30" value="<?PHP if (!empty($expend[0]->expend_pp30)) echo $expend[0]->expend_pp30; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">ประกันสังคม</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_insurance" class="form-control" placeholder="ประกันสังคม" value="<?PHP if (!empty($expend[0]->expend_insurance)) echo $expend[0]->expend_insurance; ?>">
                    </div>

                    <label class="col-sm-2 control-label">ภาษีซื้อ</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_tax" class="form-control" placeholder="ภาษีซื้อ" value="<?PHP if (!empty($expend[0]->expend_tax)) echo $expend[0]->expend_tax; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">ค่าโทรศัพท์</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_phone" class="form-control" placeholder="ค่าโทรศัพท์" value="<?PHP if (!empty($expend[0]->expend_phone)) echo $expend[0]->expend_phone; ?>">
                    </div>

                    <label class="col-sm-2 control-label">ค่าบริการ EDI</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_edi" class="form-control" placeholder="ค่าบริการ EDI" value="<?PHP if (!empty($expend[0]->expend_edi)) echo $expend[0]->expend_edi; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">ค่าไฟฟ้า น้ำประปา</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_electric" class="form-control" placeholder="ค่าไฟฟ้า น้ำประปา" value="<?PHP if (!empty($expend[0]->expend_electric)) echo $expend[0]->expend_electric; ?>">
                    </div>

                    <label class="col-sm-2 control-label">เงินเดือน</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_salary" class="form-control" placeholder="เงินเดือน" value="<?PHP if (!empty($expend[0]->expend_salary)) echo $expend[0]->expend_salary; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">ค่าใช้จ่ายเบ็ดเตล็ด</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_expenses" class="form-control" placeholder="ค่าใช้จ่ายเบ็ดเตล็ด" value="<?PHP if (!empty($expend[0]->expend_expenses)) echo $expend[0]->expend_expenses; ?>">
                    </div>

                    <label class="col-sm-2 control-label">ค่าเครื่องเขียน</label>
                    <div class="col-sm-4">
                        <input type="text" name="expend_em2" class="form-control" placeholder="ค่าเครื่องเขียน" value="<?PHP if (!empty($expend[0]->expend_em2)) echo $expend[0]->expend_em2; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">ชื่อบัญชี</label>
                    <div class="col-sm-4">
                  <select class="form-control expend_account" width="100%" name="expend_account"></select>
                   <input type="hidden" name="expend_em3" class="form-control" placeholder="" value="<?PHP if (!empty($expend[0]->expend_em3)) echo $expend[0]->expend_em3; ?>">
                    </div>

<label class="col-sm-2 control-label">จำนวนเงิน</label>

                    <div class="col-sm-4">
                        <input type="text" name="expend_amount" class="form-control" placeholder="จำนวนเงิน" value="<?PHP if (!empty($expend[0]->expend_amount)) echo $expend[0]->expend_amount; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <select class="form-control expend_account" width="100%" name="expend_account2"></select>
                         <input type="hidden" name="expend_em33" class="form-control" placeholder="" value="<?PHP if (!empty($expend[0]->expend_em33)) echo $expend[0]->expend_em33; ?>">
                    </div>

                  <label class="col-sm-2 control-label">จำนวนเงิน</label>
                       
                   

                    <div class="col-sm-4">
                        <input type="text" name="expend_amount2" class="form-control" placeholder="จำนวนเงิน" value="<?PHP if (!empty($expend[0]->expend_amount2)) echo $expend[0]->expend_amount2; ?>">
                    </div>
                </div>



                <div class="box-footer"><div align="right">
                        <a href="javascript:history.back();"><input type="button" class="btn btn-primary" value="ยกเลิก"></a>
                        <input type="button" class="btn btn-info" value="บันทึกและทำรายการต่อ">
                        <button type="submit" class="btn btn-info">บันทึก</button>


                    </div>
                    <input type="hidden" name="expend_id" value="<?PHP if (!empty($expend[0]->expend_id)) echo $expend[0]->expend_id; ?>">
                </div>
                <?php echo form_close(); ?>	
            </div>
        </div>
    </div>
</div>	
<script type="text/javascript">
    $(document).ready(function () {
         var expend_account = ["1001 เงินสด", "1002 เงินฝากธนาคาร", "1003 ตั๋วเงินรับ", "1004 ลูกหนี้การค้า", "1005 เงินยืมทดรองเรือ", "1006 เงินยืมทดรองเรือ BL", "1007 ภาษีซื้อ", "1008 ภาษีซื้อรับล่วงหน้า","1009 ภาษีซื้อค้างรับ","1010 ภาษีขายจ่ายล่วงหน้า","1011 ภพ.30","1012 ลูกหนี้ ภงด.หัก ณ ที่จ่าย","1013 อุปกรณ์เครื่องใช้สำนักงาน","1014 สำรองค่าเสื่อมราคา - อุปกรณ์เครื่องใช้สำนักงาน","1015 ภาษีเงินได้นิติบุคคล","1016 ภาษีเงินได้นิติบุคคลจ่ายล่วงหน้า","1017 ลูกหนี้อื่น","1018 เงินทดรองมัดจำตู้",
        "2001 เจ้าหนี้การค้า","2002 เจ้าหนี้ค่าขนส่ง","2003 เงินทดรองค่าผ่านท่า","2004 ภาษีเงินได้หัก ณ ที่จ่าย","2005 ภาษีขาย","2006 เงินรับมัดจำ","2007 ค่าใช้จ่ายค้างจ่าย","2008 เจ้าหนี้อื่น","2009 ประกันสังคมค้างจ่าย","3001 ทุน","3002 กำไร (ขาดทุน) สุทธิ","3003 กำไร (ขาดทุน) สะสม","3004 ต้นทุนค่าขนส่ง","3005 ต้นทุนค่าระวาง","4001 รายได้ค่าบริการ - เรือ","4002 รายได้ค่าบริการ - ค่าขนส่ง","4003 รายได้ค่าระวาง","4004 รายได้อื่นๆ","5001 เงินเดือน","5002 ค่าสวัสดิการพนักงาน - เงินสมทบประกันสังคม",
    "5003 ค่าสวัสดิการพนักงาน - เงินกองทุนทดแทน","5004 ค่าสวัสดิการพนักงานอื่นๆ","5005 ค่าซ่อมแซมอุปกรณ์เครื่องใช้สำนักงาน","5006 ค่าซ่อมแซมอาคารสำนักงาน","5007 ค่าเสื่อมราคา - เครื่องใช้สำนักงาน","5008 ค่าไฟฟ้า + ค่าน้ำประปา","5009 ค่าโทรศัพท์","5010 ค่าการสื่อสาร EDI","5011 ค่าเครื่องเขียนแบบพิมพ์","5012 ค่าใช้จ่ายผ่านพิธีการนำเข้า-ส่งออก","5013 ค่าธรรมเนียมธนาคาร","5014 ค่าใช้จ่ายเบ็ดเตล็ด","5015 ค่าสอบบัญชี","5016 ค่าสมาชิกวารสารและอบรม","5017 ค่าใช้จ่ายพาหนะ","5018 โบนส","5019 ดอกเบี้ยเงินเบิกเกินบัญชี",
    "5020 ค่าใช้จ่ายต้องห้าม","5021 ค่าชดเชยสินค้าชำรุด","5022 ค่าใช้จ่ายภาษีอากร","5023 ค่าใช้จ่ายบริหารงานกรรมการ","5024 ค่าสื่อโฆษณา","5025 เงินชดเชยเกษียณอายุงาน"];
        $(".expend_account").select2({
            data: expend_account
        });
        
        var expend_list = ["ชำระค่าภาษี","รับ D/O","ชำระค่าขนส่งตามใบวางบิล","ชำระค่า ภงด. หักภาษี ณ ที่จ่าย","ชำระค่าภาษีมูลค่าเพิ่ม","ชำระเงินประกันสังคม","ชำระค่าบริการ","ชำระค่าขนส่ง","รับ BL","ชำระค่าใช้จ่ายต่างๆ","จ่ายเงินเดือนพนักงาน","จ่ายโบนัสพนักงาน"];
        $(".expend_list").select2({
            data: expend_list
        });
        
        var expend_list3 = ["บริษัท A","บริษัท B","บริษัท C","บริษัท D","บริษัท E","บริษัท F"];
        $(".expend_list3").select2({
            data: expend_list3
        });
        
        
    }); 
</script>


<select class="js-example-data-array"></select>

<select class="js-example-data-array-selected">
  <option value="2" selected="selected">duplicate</option>
</select>



<script type="text/javascript">
var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];

$(".js-example-data-array").select2({
  data: data
})

$(".js-example-data-array-selected").select2({
  data: data
})
</script>
