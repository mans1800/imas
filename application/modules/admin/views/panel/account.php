<?php echo $form1->messages(); ?>

<div class="row">

	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">ข้อมูลส่วนตัว</h3>
			</div>
			<div class="box-body">
				<?php echo $form1->open(); ?>
					<?php echo $form1->bs3_text('ชื่อ', 'first_name', $user->first_name); ?>
					<?php echo $form1->bs3_text('นามสกุล', 'last_name', $user->last_name); ?>
					<?php echo $form1->bs3_submit('Submit'); ?>
				<?php echo $form1->close(); ?>
			</div>
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">แก้ไขรหัสผ่าน</h3>
			</div>
			<div class="box-body">
				<?php echo $form2->open(); ?>
					<?php echo $form2->bs3_password('รหัสผ่านใหม่', 'new_password'); ?>
					<?php echo $form2->bs3_password('ยืนยันรหัสผ่านใหม่', 'retype_password'); ?>
					<?php echo $form2->bs3_submit(); ?>
				<?php echo $form2->close(); ?>
			</div>
		</div>
	</div>
	
</div>

