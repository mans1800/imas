
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
					  <label class="col-sm-2 control-label"></label>
					  <div class="col-sm-5">
                                              <b>เดบิต</b>
					  </div>
                                          <div class="col-sm-5">
                                              <b>เครดิต</b>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินสด</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_1" class="form-control" placeholder="เงินสด" value="<?PHP if(!empty($trial[0]->trial_1)) echo $trial[0]->trial_1;?>">
					  </div>
                                          <div class="col-sm-5">
						<input type="text" name="trial_1" class="form-control" placeholder="เงินสด" value="<?PHP if(!empty($trial[0]->trial_1)) echo $trial[0]->trial_1;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินฝากธนาคาร (ธ.ไทยพาณิชย์)</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_2" class="form-control" placeholder="เงินฝากธนาคาร (ธ.ไทยพาณิชย์)" value="<?PHP if(!empty($trial[0]->trial_2)) echo $trial[0]->trial_2;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_2" class="form-control" placeholder="เงินฝากธนาคาร (ธ.ไทยพาณิชย์)" value="<?PHP if(!empty($trial[0]->trial_2)) echo $trial[0]->trial_2;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ลูกหนี้การค้า</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_3" class="form-control" placeholder="ลูกหนี้การค้า" value="<?PHP if(!empty($trial[0]->trial_3)) echo $trial[0]->trial_3;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_3" class="form-control" placeholder="ลูกหนี้การค้า" value="<?PHP if(!empty($trial[0]->trial_3)) echo $trial[0]->trial_3;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ลูกหนี้อื่นๆ</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_4" class="form-control" placeholder="ลูกหนี้อื่นๆ" value="<?PHP if(!empty($trial[0]->trial_4)) echo $trial[0]->trial_4;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_4" class="form-control" placeholder="ลูกหนี้อื่นๆ" value="<?PHP if(!empty($trial[0]->trial_4)) echo $trial[0]->trial_4;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินยืมทดรองจ่าย</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_5" class="form-control" placeholder="เงินยืมทดรองจ่าย" value="<?PHP if(!empty($trial[0]->trial_5)) echo $trial[0]->trial_5;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_5" class="form-control" placeholder="เงินยืมทดรองจ่าย" value="<?PHP if(!empty($trial[0]->trial_5)) echo $trial[0]->trial_5;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ทรัพย์สิน</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_6" class="form-control" placeholder="ทรัพย์สิน" value="<?PHP if(!empty($trial[0]->trial_6)) echo $trial[0]->trial_6;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_6" class="form-control" placeholder="ทรัพย์สิน" value="<?PHP if(!empty($trial[0]->trial_6)) echo $trial[0]->trial_6;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าเสื่อมราคาสะสม</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_7" class="form-control" placeholder="ค่าเสื่อมราคาสะสม" value="<?PHP if(!empty($trial[0]->trial_7)) echo $trial[0]->trial_7;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_7" class="form-control" placeholder="ค่าเสื่อมราคาสะสม" value="<?PHP if(!empty($trial[0]->trial_7)) echo $trial[0]->trial_7;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ภาษีเงินได้หัก ณ ที่จ่าย</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_8" class="form-control" placeholder="ภาษีเงินได้หัก ณ ที่จ่าย" value="<?PHP if(!empty($trial[0]->trial_8)) echo $trial[0]->trial_8;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_8" class="form-control" placeholder="ภาษีเงินได้หัก ณ ที่จ่าย" value="<?PHP if(!empty($trial[0]->trial_8)) echo $trial[0]->trial_8;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าใช้จ่ายค้างจ่าย</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_9" class="form-control" placeholder="ค่าใช้จ่ายค้างจ่าย" value="<?PHP if(!empty($trial[0]->trial_9)) echo $trial[0]->trial_9;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_9" class="form-control" placeholder="ค่าใช้จ่ายค้างจ่าย" value="<?PHP if(!empty($trial[0]->trial_9)) echo $trial[0]->trial_9;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เจ้าหนี้กรมสรรพากร (ภ.พ.30)</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_10" class="form-control" placeholder="เจ้าหนี้กรมสรรพากร (ภ.พ.30)" value="<?PHP if(!empty($trial[0]->trial_10)) echo $trial[0]->trial_10;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_10" class="form-control" placeholder="เจ้าหนี้กรมสรรพากร (ภ.พ.30)" value="<?PHP if(!empty($trial[0]->trial_10)) echo $trial[0]->trial_10;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เจ้าหนี้ค่าขนส่ง</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_11" class="form-control" placeholder="เจ้าหนี้ค่าขนส่ง" value="<?PHP if(!empty($trial[0]->trial_11)) echo $trial[0]->trial_11;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_11" class="form-control" placeholder="เจ้าหนี้ค่าขนส่ง" value="<?PHP if(!empty($trial[0]->trial_11)) echo $trial[0]->trial_11;?>">
					  </div>
					</div>
					
                            		<div class="form-group">
					  <label class="col-sm-2 control-label">เจ้าหน้าที่ค่าระวาง</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_38" class="form-control" placeholder="เจ้าหน้าที่ค่าระวาง" value="<?PHP if(!empty($trial[0]->trial_38)) echo $trial[0]->trial_38;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_38" class="form-control" placeholder="เจ้าหน้าที่ค่าระวาง" value="<?PHP if(!empty($trial[0]->trial_38)) echo $trial[0]->trial_38;?>">
					  </div>
					</div>
                            
					<div class="form-group">
					  <label class="col-sm-2 control-label">เจ้าหนี้อื่นๆ</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_12" class="form-control" placeholder="เจ้าหนี้อื่นๆ" value="<?PHP if(!empty($trial[0]->trial_12)) echo $trial[0]->trial_12;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_12" class="form-control" placeholder="เจ้าหนี้อื่นๆ" value="<?PHP if(!empty($trial[0]->trial_12)) echo $trial[0]->trial_12;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินรับมัดจำ</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_13" class="form-control" placeholder="เงินรับมัดจำ" value="<?PHP if(!empty($trial[0]->trial_13)) echo $trial[0]->trial_13;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_13" class="form-control" placeholder="เงินรับมัดจำ" value="<?PHP if(!empty($trial[0]->trial_13)) echo $trial[0]->trial_13;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ทุน</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_14" class="form-control" placeholder="ทุน" value="<?PHP if(!empty($trial[0]->trial_14)) echo $trial[0]->trial_14;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_14" class="form-control" placeholder="ทุน" value="<?PHP if(!empty($trial[0]->trial_14)) echo $trial[0]->trial_14;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">กำไรสะสมที่ยังไม่ได้จัดสรร</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_15" class="form-control" placeholder="กำไรสะสมที่ยังไม่ได้จัดสรร" value="<?PHP if(!empty($trial[0]->trial_15)) echo $trial[0]->trial_15;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_15" class="form-control" placeholder="กำไรสะสมที่ยังไม่ได้จัดสรร" value="<?PHP if(!empty($trial[0]->trial_15)) echo $trial[0]->trial_15;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รายได้จากค่าบริการ</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_16" class="form-control" placeholder="รายได้จากค่าบริการ" value="<?PHP if(!empty($trial[0]->trial_16)) echo $trial[0]->trial_16;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_16" class="form-control" placeholder="รายได้จากค่าบริการ" value="<?PHP if(!empty($trial[0]->trial_16)) echo $trial[0]->trial_16;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รายได้จากค่าขนส่ง</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_17" class="form-control" placeholder="รายได้จากค่าขนส่ง" value="<?PHP if(!empty($trial[0]->trial_17)) echo $trial[0]->trial_17;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_17" class="form-control" placeholder="รายได้จากค่าขนส่ง" value="<?PHP if(!empty($trial[0]->trial_17)) echo $trial[0]->trial_17;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รายได้ค่าระวาง</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_18" class="form-control" placeholder="รายได้ค่าระวาง" value="<?PHP if(!empty($trial[0]->trial_18)) echo $trial[0]->trial_18;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_18" class="form-control" placeholder="รายได้ค่าระวาง" value="<?PHP if(!empty($trial[0]->trial_18)) echo $trial[0]->trial_18;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ต้นทุนค่าขนส่ง</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_19" class="form-control" placeholder="ต้นทุนค่าขนส่ง" value="<?PHP if(!empty($trial[0]->trial_19)) echo $trial[0]->trial_19;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_19" class="form-control" placeholder="ต้นทุนค่าขนส่ง" value="<?PHP if(!empty($trial[0]->trial_19)) echo $trial[0]->trial_19;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ต้นทุนค่าระวาง</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_20" class="form-control" placeholder="ต้นทุนค่าระวาง" value="<?PHP if(!empty($trial[0]->trial_20)) echo $trial[0]->trial_20;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_20" class="form-control" placeholder="ต้นทุนค่าระวาง" value="<?PHP if(!empty($trial[0]->trial_20)) echo $trial[0]->trial_20;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ต้นทุนค่าใช้จ่ายพิธีการนำเข้า / ส่งออก</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_21" class="form-control" placeholder="ต้นทุนค่าใช้จ่ายพิธีการนำเข้า / ส่งออก" value="<?PHP if(!empty($trial[0]->trial_21)) echo $trial[0]->trial_21;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_21" class="form-control" placeholder="ต้นทุนค่าใช้จ่ายพิธีการนำเข้า / ส่งออก" value="<?PHP if(!empty($trial[0]->trial_21)) echo $trial[0]->trial_21;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินเดือนและโบนัส</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_22" class="form-control" placeholder="เงินเดือนและโบนัส" value="<?PHP if(!empty($trial[0]->trial_22)) echo $trial[0]->trial_22;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_22" class="form-control" placeholder="เงินเดือนและโบนัส" value="<?PHP if(!empty($trial[0]->trial_22)) echo $trial[0]->trial_22;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าตอบแทนกรรมการ</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_23" class="form-control" placeholder="ค่าตอบแทนกรรมการ" value="<?PHP if(!empty($trial[0]->trial_23)) echo $trial[0]->trial_23;?>">
					  </div>
                                          				  <div class="col-sm-5">
						<input type="text" name="trial_23" class="form-control" placeholder="ค่าตอบแทนกรรมการ" value="<?PHP if(!empty($trial[0]->trial_23)) echo $trial[0]->trial_23;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าไฟฟ้า น้ำประปา</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_24" class="form-control" placeholder="ค่าไฟฟ้า น้ำประปา" value="<?PHP if(!empty($trial[0]->trial_24)) echo $trial[0]->trial_24;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_24" class="form-control" placeholder="ค่าไฟฟ้า น้ำประปา" value="<?PHP if(!empty($trial[0]->trial_24)) echo $trial[0]->trial_24;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าการสื่อสาร EDI + ค่าโทรศัพท์</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_25" class="form-control" placeholder="ค่าการสื่อสาร EDI + ค่าโทรศัพท์" value="<?PHP if(!empty($trial[0]->trial_25)) echo $trial[0]->trial_25;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_25" class="form-control" placeholder="ค่าการสื่อสาร EDI + ค่าโทรศัพท์" value="<?PHP if(!empty($trial[0]->trial_25)) echo $trial[0]->trial_25;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าพาหนะ</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_26" class="form-control" placeholder="ค่าพาหนะ" value="<?PHP if(!empty($trial[0]->trial_26)) echo $trial[0]->trial_26;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_26" class="form-control" placeholder="ค่าพาหนะ" value="<?PHP if(!empty($trial[0]->trial_26)) echo $trial[0]->trial_26;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าสอบบัญชี</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_27" class="form-control" placeholder="ค่าสอบบัญชี" value="<?PHP if(!empty($trial[0]->trial_27)) echo $trial[0]->trial_27;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_27" class="form-control" placeholder="ค่าสอบบัญชี" value="<?PHP if(!empty($trial[0]->trial_27)) echo $trial[0]->trial_27;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าธรรมเนียมธนาคาร</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_28" class="form-control" placeholder="ค่าธรรมเนียมธนาคาร" value="<?PHP if(!empty($trial[0]->trial_28)) echo $trial[0]->trial_28;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_28" class="form-control" placeholder="ค่าธรรมเนียมธนาคาร" value="<?PHP if(!empty($trial[0]->trial_28)) echo $trial[0]->trial_28;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าเสื่อมราคาทรัพย์สิน</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_29" class="form-control" placeholder="ค่าเสื่อมราคาทรัพย์สิน" value="<?PHP if(!empty($trial[0]->trial_29)) echo $trial[0]->trial_29;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_29" class="form-control" placeholder="ค่าเสื่อมราคาทรัพย์สิน" value="<?PHP if(!empty($trial[0]->trial_29)) echo $trial[0]->trial_29;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินสมทบกองทุน</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_30" class="form-control" placeholder="เงินสมทบกองทุน" value="<?PHP if(!empty($trial[0]->trial_30)) echo $trial[0]->trial_30;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_30" class="form-control" placeholder="เงินสมทบกองทุน" value="<?PHP if(!empty($trial[0]->trial_30)) echo $trial[0]->trial_30;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เงินประกันสังคม</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_31" class="form-control" placeholder="เงินประกันสังคม" value="<?PHP if(!empty($trial[0]->trial_31)) echo $trial[0]->trial_31;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_31" class="form-control" placeholder="เงินประกันสังคม" value="<?PHP if(!empty($trial[0]->trial_31)) echo $trial[0]->trial_31;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าเครื่องเขียนแบบพิมพ์</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_32" class="form-control" placeholder="ค่าเครื่องเขียนแบบพิมพ์" value="<?PHP if(!empty($trial[0]->trial_32)) echo $trial[0]->trial_32;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_32" class="form-control" placeholder="ค่าเครื่องเขียนแบบพิมพ์" value="<?PHP if(!empty($trial[0]->trial_32)) echo $trial[0]->trial_32;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าสื่อโฆษณา</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_33" class="form-control" placeholder="ค่าสื่อโฆษณา" value="<?PHP if(!empty($trial[0]->trial_33)) echo $trial[0]->trial_33;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_33" class="form-control" placeholder="ค่าสื่อโฆษณา" value="<?PHP if(!empty($trial[0]->trial_33)) echo $trial[0]->trial_33;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าสมาชิกวารสารและอบรม</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_34" class="form-control" placeholder="ค่าสมาชิกวารสารและอบรม" value="<?PHP if(!empty($trial[0]->trial_34)) echo $trial[0]->trial_34;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_34" class="form-control" placeholder="ค่าสมาชิกวารสารและอบรม" value="<?PHP if(!empty($trial[0]->trial_34)) echo $trial[0]->trial_34;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าใช้จ่ายเบ็ดเตล็ด</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_35" class="form-control" placeholder="ค่าใช้จ่ายเบ็ดเตล็ด" value="<?PHP if(!empty($trial[0]->trial_35)) echo $trial[0]->trial_35;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_35" class="form-control" placeholder="ค่าใช้จ่ายเบ็ดเตล็ด" value="<?PHP if(!empty($trial[0]->trial_35)) echo $trial[0]->trial_35;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าสวัสดิการพนักงาน</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_36" class="form-control" placeholder="ค่าสวัสดิการพนักงาน" value="<?PHP if(!empty($trial[0]->trial_36)) echo $trial[0]->trial_36;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_36" class="form-control" placeholder="ค่าสวัสดิการพนักงาน" value="<?PHP if(!empty($trial[0]->trial_36)) echo $trial[0]->trial_36;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ค่าชดเชย พนักงานบริษัทฯเกษียณ</label>
					  <div class="col-sm-5">
						<input type="text" name="trial_37" class="form-control" placeholder="ค่าชดเชย พนักงานบริษัทฯเกษียณ" value="<?PHP if(!empty($trial[0]->trial_37)) echo $trial[0]->trial_37;?>">
					  </div>
                                          					  <div class="col-sm-5">
						<input type="text" name="trial_37" class="form-control" placeholder="ค่าชดเชย พนักงานบริษัทฯเกษียณ" value="<?PHP if(!empty($trial[0]->trial_37)) echo $trial[0]->trial_37;?>">
					  </div>
					</div>
					

					
					<div class="box-footer">
                                            <button type="submit" disabled="" class="btn btn-info pull-right">บันทึก</button>
						<input type="hidden" name="trial_id"  value="<?PHP if(!empty($trial[0]->trial_id)) echo $trial[0]->trial_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			