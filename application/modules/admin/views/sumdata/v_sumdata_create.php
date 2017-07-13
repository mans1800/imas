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
                                          <div class="col-sm-10"></div>
					  <div class="col-sm-2">
						<input type="text" name="sumdata_topic" class="form-control" placeholder="รายวันหน้า " value="<?PHP if(!empty($sumdata[0]->sumdata_sumid)) echo $sumdata[0]->sumdata_sumid;?>">
					  </div>
					</div>
					
					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="" value="ธนาคาร">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.1.2">
					  </div>

					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_em2" class="form-control" placeholder="" value="(111,092.25)">
					  </div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="เดบิต" value="3,076,535.79">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="" value="เงินสด">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย. 1.1">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" style="text-align:right; "name="sumdata_debit" class="form-control" placeholder="เดบิต" value="111,092.25">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="" value="เงินรับมัดจำ">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.2.11">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(3,189,867.00)">
					  </div>
					</div>
                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="" value="เงินยืมทดรองเรือ">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.1.5">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" style="text-align:right;" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(0.01)">
					  </div>
					</div>
                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="" value="ค่าเสื่อมราคา คช">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย 5.7">
					  </div>

					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_em2" class="form-control" placeholder="" value="465.53">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="" value="สำรองราคา คช">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย 1.14">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(465.53)">
					  </div>
					</div>
                            
                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="" value="ภาษีซื้อ">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย 1.7">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(657.93)">
					  </div>
					</div>
                            
                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="ภาษีซื้อค้างรับ">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.1.9">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(187.99)">
					  </div>
					</div>
                            
                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="ค่าธรรมเนียมธนาคาร">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.5.13">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="เดบิต" value="2,238.96">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="ภาษีขาย">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย. 2.9">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="เดบิต" value="10,843.00">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="คชจ.เบ็ดเตล็ด">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.5.14">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="เดบิต" value="141.19">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="ภพ.30">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.1.11">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(9,997.09)">
					  </div>
					</div>
                            
                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="เจ้าหนี้ ภงด. หัก ณ ที่จ่าย">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.2.4">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(141.17)">
					  </div>
					</div>
                            
                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="เจ้าหนี้ค่าระวาง">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย.2.1">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="เดบิต" value="7,700.00">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="ตท.ค่าขนส่ง">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย 3.4">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="เดบิต" value="64,603.24">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
                                                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="เจ้าหนี้ค่าขนส่ง">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย 2.2">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input type="text" name="sumdata_debit" class="form-control" placeholder="" value="">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="เครดิต" value="(64,603.24)">
					  </div>
					</div>
                            
                                                            					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
					  <div class="col-sm-4">
						<input type="text" name="sumdata_name" class="form-control" placeholder="หัวข้อ" value="ตท.ค่าระวาง">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em1" class="form-control" placeholder="" value="ย 3.5">
					  </div>

					  <div class="col-sm-2">
						<input type="text" name="sumdata_em2" class="form-control" placeholder="" value="">
					  </div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="เดบิต" value="(7,700.00)">
					  </div>
				
					  <div class="col-sm-2">
						<input type="text" name="sumdata_credit" class="form-control" placeholder="" value="">
					  </div>
					</div>
                            
                                                                                        					<div class="form-group">
<!--                                            <label class="col-sm-1" align="right"><button type="button" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus"></span></button></label>-->
                                           <div class="col-sm-8"></div>
	
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_debit" class="form-control" placeholder="" value="3,273,619.96">
					  </div>
				
					  <div class="col-sm-2">
						<input style="text-align:right;" type="text" name="sumdata_credit" class="form-control" placeholder="" value="(3,273,619.96)">
					  </div>
					</div>
                            
                            <div class="col-sm-3"></div>
                             <div class="col-sm-2"><input style="text-align:center;" type="text" name="sumdata_credit" class="form-control" placeholder="" value="3,273,619.96"></div>
			<div class="col-sm-7"></div>
					<div class="box-footer">
                                            <button type="submit" disabled="" class="btn btn-info pull-right">บันทึก</button>
						<input type="hidden" name="sumdata_id" value="<?PHP if(!empty($sumdata[0]->sumdata_id)) echo $sumdata[0]->sumdata_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			