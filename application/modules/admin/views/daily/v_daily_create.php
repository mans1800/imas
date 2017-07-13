<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
	<div class="row">
	<div class="col-md-8">
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
                                            <label class="col-sm-2 control-label">วัน/เดือน/ปี<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input id="dateStart" type="text" name="daily_date" class="form-control datepicker" placeholder="วัน/เดือน/ปี" value="<?PHP if(!empty($daily[0]->daily_date)) echo $daily[0]->daily_date;?>">
                                                <?php echo form_error('daily_date', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					

					
                <div class="form-group">
                    <label class="col-sm-2 control-label">รายการ</label>
                    <div class="col-sm-10">
                        <select class="form-control data_list" width="100%" name="daily_list">
                            <!-- Dropdown List Option --> 
                        </select>
                     
                    </div>
                </div>
                            
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select class="form-control data_list" width="100%" name="daily_list2">
                            <!-- Dropdown List Option --> 
                        </select>
                    </div>
                </div>            
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                       <input type="text" name="daily_list3" class="form-control" placeholder="รายการ" value="<?PHP if(!empty($daily[0]->daily_list3)) echo $daily[0]->daily_list3;?>">
                    </div>
                </div>          
                            
					<div class="form-group">
					  <label class="col-sm-2 control-label">เดบิต<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="daily_debit" class="form-control" placeholder="เดบิต" value="<?PHP if(!empty($daily[0]->daily_debit)) echo $daily[0]->daily_debit;?>">
                                                <?php echo form_error('daily_debit', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เครดิต<font color="red">*</font></label>
					  <div class="col-sm-10">
						<input type="text" name="daily_credit" class="form-control" placeholder="เครดิต" value="<?PHP if(!empty($daily[0]->daily_credit)) echo $daily[0]->daily_credit;?>">
                                                <?php echo form_error('daily_credit', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
									
                            <div class="box-footer"><div align="right">
                                                <a href="javascript:history.back();"><input type="button" class="btn btn-primary" value="ยกเลิก"></a>
                                                  <input type="button" class="btn btn-info" value="บันทึกและทำรายการต่อ">
                                                <button type="submit" class="btn btn-info">บันทึก</button>
                                             </div>
						<input type="hidden" name="daily_id" value="<?PHP if(!empty($daily[0]->daily_id)) echo $daily[0]->daily_id;?>">
                                                <input type="hidden" name="daily_no" class="form-control" placeholder="No" value="<?PHP if(!empty($daily[0]->daily_no)) echo $daily[0]->daily_no;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	




			<script type="text/javascript">
    $(document).ready(function () {
        var data_list = ["1001 เงินสด", "1002 เงินฝากธนาคาร", "1003 ตั๋วเงินรับ", "1004 ลูกหนี้การค้า", "1005 เงินยืมทดรองเรือ", "1006 เงินยืมทดรองเรือ BL", "1007 ภาษีซื้อ", "1008 ภาษีซื้อรับล่วงหน้า","1009 ภาษีซื้อค้างรับ","1010 ภาษีขายจ่ายล่วงหน้า","1011 ภพ.30","1012 ลูกหนี้ ภงด.หัก ณ ที่จ่าย","1013 อุปกรณ์เครื่องใช้สำนักงาน","1014 สำรองค่าเสื่อมราคา - อุปกรณ์เครื่องใช้สำนักงาน","1015 ภาษีเงินได้นิติบุคคล","1016 ภาษีเงินได้นิติบุคคลจ่ายล่วงหน้า","1017 ลูกหนี้อื่น","1018 เงินทดรองมัดจำตู้",
        "2001 เจ้าหนี้การค้า","2002 เจ้าหนี้ค่าขนส่ง","2003 เงินทดรองค่าผ่านท่า","2004 ภาษีเงินได้หัก ณ ที่จ่าย","2005 ภาษีขาย","2006 เงินรับมัดจำ","2007 ค่าใช้จ่ายค้างจ่าย","2008 เจ้าหนี้อื่น","2009 ประกันสังคมค้างจ่าย","3001 ทุน","3002 กำไร (ขาดทุน) สุทธิ","3003 กำไร (ขาดทุน) สะสม","3004 ต้นทุนค่าขนส่ง","3005 ต้นทุนค่าระวาง","4001 รายได้ค่าบริการ - เรือ","4002 รายได้ค่าบริการ - ค่าขนส่ง","4003 รายได้ค่าระวาง","4004 รายได้อื่นๆ","5001 เงินเดือน","5002 ค่าสวัสดิการพนักงาน - เงินสมทบประกันสังคม",
    "5003 ค่าสวัสดิการพนักงาน - เงินกองทุนทดแทน","5004 ค่าสวัสดิการพนักงานอื่นๆ","5005 ค่าซ่อมแซมอุปกรณ์เครื่องใช้สำนักงาน","5006 ค่าซ่อมแซมอาคารสำนักงาน","5007 ค่าเสื่อมราคา - เครื่องใช้สำนักงาน","5008 ค่าไฟฟ้า + ค่าน้ำประปา","5009 ค่าโทรศัพท์","5010 ค่าการสื่อสาร EDI","5011 ค่าเครื่องเขียนแบบพิมพ์","5012 ค่าใช้จ่ายผ่านพิธีการนำเข้า-ส่งออก","5013 ค่าธรรมเนียมธนาคาร","5014 ค่าใช้จ่ายเบ็ดเตล็ด","5015 ค่าสอบบัญชี","5016 ค่าสมาชิกวารสารและอบรม","5017 ค่าใช้จ่ายพาหนะ","5018 โบนส","5019 ดอกเบี้ยเงินเบิกเกินบัญชี",
    "5020 ค่าใช้จ่ายต้องห้าม","5021 ค่าชดเชยสินค้าชำรุด","5022 ค่าใช้จ่ายภาษีอากร","5023 ค่าใช้จ่ายบริหารงานกรรมการ","5024 ค่าสื่อโฆษณา","5025 เงินชดเชยเกษียณอายุงาน"];
        $(".data_list").select2({
            data: data_list
        });
    });

  

</script>