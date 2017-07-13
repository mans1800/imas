
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"> <a href="<?php echo base_url(); ?>admin/trial/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'เพิ่มข้อมูล';?>
                    </a> </h3>
			</div>
			<div class="box-body table-responsive">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>เงินสด</th>
							
							<th>เงินฝากธนาคาร (ธ.ไทยพาณิชย์)</th>
							
							<th>ลูกหนี้การค้า</th>
							
							<th>ลูกหนี้อื่นๆ</th>
							
							<th>เงินยืมทดรองจ่าย</th>
							
							<th>ทรัพย์สิน</th>
							
							<th>ค่าเสื่อมราคาสะสม</th>
							
							<th>ภาษีเงินได้หัก ณ ที่จ่าย</th>
							
							<th>ค่าใช้จ่ายค้างจ่าย</th>
							
							<th>เจ้าหนี้กรมสรรพากร (ภ.พ.30)</th>
							
							<th>เจ้าหนี้ค่าขนส่ง</th>
							
							<th>เจ้าหน้าที่ค่าระวาง</th>
							
							<th>เจ้าหนี้อื่นๆ</th>
							
							<th>เงินรับมัดจำ</th>
							
							<th>ทุน</th>
							
							<th>กำไรสะสมที่ยังไม่ได้จัดสรร</th>
							
							<th>รายได้จากค่าบริการ</th>
							
							<th>รายได้จากค่าขนส่ง</th>
							
							<th>รายได้ค่าระวาง</th>
							
							<th>ต้นทุนค่าขนส่ง</th>
							
							<th>ต้นทุนค่าระวาง</th>
							
							<th>ต้นทุนค่าใช้จ่ายพิธีการนำเข้า / ส่งออก</th>
							
							<th>เงินเดือนและโบนัส</th>
							
							<th>ค่าตอบแทนกรรมการ</th>
							
							<th>ค่าไฟฟ้า น้ำประปา</th>
							
							<th>ค่าการสื่อสาร EDI + ค่าโทรศัพท์</th>
							
							<th>ค่าพาหนะ</th>
							
							<th>ค่าสอบบัญชี</th>
							
							<th>ค่าธรรมเนียมธนาคาร</th>
							
							<th>ค่าเสื่อมราคาทรัพย์สิน</th>
							
							<th>เงินสมทบกองทุน</th>
							
							<th>เงินประกันสังคม</th>
							
							<th>ค่าเครื่องเขียนแบบพิมพ์</th>
							
							<th>ค่าสื่อโฆษณา</th>
							
							<th>ค่าสมาชิกวารสารและอบรม</th>
							
							<th>ค่าใช้จ่ายเบ็ดเตล็ด</th>
							
							<th>ค่าสวัสดิการพนักงาน</th>
							
							<th>ค่าชดเชย พนักงานบริษัทฯเกษียณ</th>
							
							<th>จัดการข้อมูล</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->trial_1;?></td>
							
							<td><?PHP echo $row->trial_2;?></td>
							
							<td><?PHP echo $row->trial_3;?></td>
							
							<td><?PHP echo $row->trial_4;?></td>
							
							<td><?PHP echo $row->trial_5;?></td>
							
							<td><?PHP echo $row->trial_6;?></td>
							
							<td><?PHP echo $row->trial_7;?></td>
							
							<td><?PHP echo $row->trial_8;?></td>
							
							<td><?PHP echo $row->trial_9;?></td>
							
							<td><?PHP echo $row->trial_10;?></td>
							
							<td><?PHP echo $row->trial_11;?></td>
							
							<td><?PHP echo $row->trial_12;?></td>
							
							<td><?PHP echo $row->trial_13;?></td>
							
							<td><?PHP echo $row->trial_14;?></td>
							
							<td><?PHP echo $row->trial_15;?></td>
							
							<td><?PHP echo $row->trial_16;?></td>
							
							<td><?PHP echo $row->trial_17;?></td>
							
							<td><?PHP echo $row->trial_18;?></td>
							
							<td><?PHP echo $row->trial_19;?></td>
							
							<td><?PHP echo $row->trial_20;?></td>
							
							<td><?PHP echo $row->trial_21;?></td>
							
							<td><?PHP echo $row->trial_22;?></td>
							
							<td><?PHP echo $row->trial_23;?></td>
							
							<td><?PHP echo $row->trial_24;?></td>
							
							<td><?PHP echo $row->trial_25;?></td>
							
							<td><?PHP echo $row->trial_26;?></td>
							
							<td><?PHP echo $row->trial_27;?></td>
							
							<td><?PHP echo $row->trial_28;?></td>
							
							<td><?PHP echo $row->trial_29;?></td>
							
							<td><?PHP echo $row->trial_30;?></td>
							
							<td><?PHP echo $row->trial_31;?></td>
							
							<td><?PHP echo $row->trial_32;?></td>
							
							<td><?PHP echo $row->trial_33;?></td>
							
							<td><?PHP echo $row->trial_34;?></td>
							
							<td><?PHP echo $row->trial_35;?></td>
							
							<td><?PHP echo $row->trial_36;?></td>
							
							<td><?PHP echo $row->trial_37;?></td>
							
							<td><?PHP echo $row->trial_38;?></td>
							
							<td>
								<a href="trial/create/<?PHP echo $row->trial_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="trial/deletes/<?PHP echo $row->trial_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
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