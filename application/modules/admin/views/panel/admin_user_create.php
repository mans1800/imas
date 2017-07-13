<?php echo $form->messages(); ?>

<div class="row">

    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
<!--                <h3 class="box-title"></h3>-->
            </div>
            <div class="box-body">
                <?php echo $form->open(); ?>

                <?php echo $form->bs3_text('ID เข้าสู่ระบบ', 'username'); ?>
                <?php echo $form->bs3_text('ชื่อ', 'first_name'); ?>
                <?php echo $form->bs3_text('นามสกุล', 'last_name'); ?>
                <?php echo $form->bs3_password('รหัสผ่าน', 'password'); ?>
                <?php echo $form->bs3_password('ยืนยันรหัสผ่าน', 'retype_password'); ?>

                <?php if (!empty($groups)): ?>
                    <div class="form-group">
                        <label for="groups">สถานะ</label>
                        <div>
                            <?php foreach ($groups as $group): ?>
                                <label class="checkbox-inline">
                                    <input type="radio" name="groups[]" value="<?PHP echo $group->id; ?>"> <?php echo $group->name; ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php echo $form->bs3_submit(); ?>

                <?php echo $form->close(); ?>
            </div>
        </div>
    </div>

</div>