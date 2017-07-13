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
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open("",$attributes); 
				?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">วัน/เดือน/ปี<font color="red">*</font></label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_date" id='dateStart' class="form-control datepicker" placeholder="วัน/เดือน/ปี" value="<?PHP if(!empty($revenue[0]->revenue_date)) echo $revenue[0]->revenue_date;?>">
                                                <input type="hidden" name="revenue_list" class="form-control" placeholder="" value="<?PHP if(!empty($revenue[0]->revenue_list)) echo $revenue[0]->revenue_list;?>">
                                                <input type="hidden" name="revenue_em1" class="form-control" placeholder="" value="<?PHP if(!empty($revenue[0]->revenue_em1)) echo $revenue[0]->revenue_em1;?>">
                                                <?php echo form_error('revenue_date', '<font color="error">', '</font>'); ?>
					  </div>
                                         <label class="col-sm-2 control-label">ธนาคาร<font color="red">*</font></label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_bank" class="form-control" placeholder="ธนาคาร" value="<?PHP if(!empty($revenue[0]->revenue_bank)) echo $revenue[0]->revenue_bank;?>">
                                                <?php echo form_error('revenue_bank', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ตั๋วเงินรับ</label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_note" class="form-control" placeholder="ตั๋วเงินรับ" value="<?PHP if(!empty($revenue[0]->revenue_note)) echo $revenue[0]->revenue_note;?>">
					  </div>
					
					  <label class="col-sm-2 control-label">ลูกหนี้ ภงด.หัก ณ ที่จ่าย<font color="red">*</font></label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_debtor" class="form-control" placeholder="ลูกหนี้ ภงด.หัก ณ ที่จ่าย" value="<?PHP if(!empty($revenue[0]->revenue_debtor)) echo $revenue[0]->revenue_debtor;?>">
                                                <?php echo form_error('revenue_debtor', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินสด</label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_cash" class="form-control" placeholder="เงินสด" value="<?PHP if(!empty($revenue[0]->revenue_cash)) echo $revenue[0]->revenue_cash;?>">
					  </div>
					
					  <label class="col-sm-2 control-label">ลูกหนี้การค้า<font color="red">*</font></label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_trade" class="form-control" placeholder="ลูกหนี้การค้า" value="<?PHP if(!empty($revenue[0]->revenue_trade)) echo $revenue[0]->revenue_trade;?>">
                                                <?php echo form_error('revenue_trade', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รายได้ค่าระวาง</label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_freight" class="form-control" placeholder="รายได้ค่าระวาง" value="<?PHP if(!empty($revenue[0]->revenue_freight)) echo $revenue[0]->revenue_freight;?>">
					  </div>
				
					  <label class="col-sm-2 control-label">ภาษีขาย<font color="red">*</font></label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_tax" class="form-control" placeholder="ภาษีขาย" value="<?PHP if(!empty($revenue[0]->revenue_tax)) echo $revenue[0]->revenue_tax;?>">
                                                <?php echo form_error('revenue_tax', '<font color="error">', '</font>'); ?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินทดรอง BL<font color="red">*</font></label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_advance" class="form-control" placeholder="เงินทดรองจ่าย" value="<?PHP if(!empty($revenue[0]->revenue_advance)) echo $revenue[0]->revenue_advance;?>">
                                                <?php echo form_error('revenue_advance', '<font color="error">', '</font>'); ?>
					  </div>
					
					  <label class="col-sm-2 control-label">ค่าใช้จ่ายเบ็ดเตล็ด</label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_expenses" class="form-control" placeholder="ค่าใช้จ่ายเบ็ดเตล็ด" value="<?PHP if(!empty($revenue[0]->revenue_expenses)) echo $revenue[0]->revenue_expenses;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เจ้าหนี้อื่น</label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_payable" class="form-control" placeholder="เจ้าหนี้อื่น" value="<?PHP if(!empty($revenue[0]->revenue_payable)) echo $revenue[0]->revenue_payable;?>">
					  </div>
					
					  <label class="col-sm-2 control-label">ภาษีขาย จ่ายล่วงหน้า</label>
					  <div class="col-sm-4">
						<input type="text" name="revenue_taxfuture" class="form-control" placeholder="ภาษีขาย จ่ายล่วงหน้า" value="<?PHP if(!empty($revenue[0]->revenue_taxfuture)) echo $revenue[0]->revenue_taxfuture;?>">
					  </div>
					</div>
					
                            		<div class="form-group">
					  <label class="col-sm-2 control-label">ชื่อบัญชี</label>
					  <div class="col-sm-4">
                                          <select class="form-control data_list" width="100%" name="revenue_account"></select>
                                                <input type="hidden" name="revenue_em2" class="form-control" placeholder="" value="<?PHP if(!empty($revenue[0]->revenue_em2)) echo $revenue[0]->revenue_em2;?>">
					  </div>

					  <label class="col-sm-2 control-label">จำนวนเงิน</label>
						
                                                
                                          
					  <div class="col-sm-4">
						<input type="text" name="revenue_amount" class="form-control" placeholder="จำนวนเงิน" value="<?PHP if(!empty($revenue[0]->revenue_amount)) echo $revenue[0]->revenue_amount;?>">
					  </div>
					</div>  
                            
                            		<div class="form-group">
					  <label class="col-sm-2 control-label"></label>
					  <div class="col-sm-4">
                                              <select class="form-control data_list" width="100%" name="revenue_account2"></select>
					  </div>

					  <div class="col-sm-2">
						<input type="hidden" name="revenue_em22" class="form-control" placeholder="" value="<?PHP if(!empty($revenue[0]->revenue_em22)) echo $revenue[0]->revenue_em22;?>">
                                                 </div>	
                                          
					  <div class="col-sm-4">
						<input type="text" name="revenue_amount2" class="form-control" placeholder="จำนวนเงิน" value="<?PHP if(!empty($revenue[0]->revenue_amount2)) echo $revenue[0]->revenue_amount2;?>">
					  </div>
					</div>
									
					
                            
                            
                            
                            
					<div class="box-footer"><div align="right">
                                                <a href="javascript:history.back();"><input type="button" class="btn btn-primary" value="ยกเลิก"></a>
                                                  <input type="button" class="btn btn-info" value="บันทึกและทำรายการต่อ">
                                                <button type="submit" class="btn btn-info">บันทึก</button>
                                             </div>
                                                
						<input type="hidden" name="revenue_id" value="<?PHP if(!empty($revenue[0]->revenue_id)) echo $revenue[0]->revenue_id;?>">
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