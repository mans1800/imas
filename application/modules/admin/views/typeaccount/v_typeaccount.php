<style>
    tr {
        width: 100%;
        display: inline-table;
    }

    table{
        height:150px; 
    }
    tbody{
        overflow-y: scroll;
        height: 110px;
        width: 100%;
        position: absolute;
    }


</style>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><b><u><font color="#367fa9">เพิ่มข้อมูล</font></u></b><br><br></h3>

                <?php echo form_open_multipart(base_url() . "admin/typeaccount/create2") ?>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"  >
                    <input  type="text" name="typeaccount_code" class="form-control" placeholder="Code" required=""style="margin-bottom:10px;">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <select class="form-control" name="typeaccount_type" required style="margin-bottom:10px;">
                        <option selected disabled="" value="">เลือกประเภทของบัญชี</option>
                        <option value="1">สินทรัพย์</option>
                        <option value="2">หนี้สิน</option>
                        <option value="3">ทุน</option>
                        <option value="4">รายได้</option>
                        <option value="5">ค่าใช้จ่าย</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <input type="text" name="typeaccount_name"   class="form-control" placeholder="ชื่อ" required="" style="margin-bottom:10px;">
                    <div class="hidden-xs hidden-sm"><br></div>
                </div>

                <div class="col-sm-12 col-md-1 col-1">
                    <button type="submit" class="btn btn-info pull-right">บันทึก</button>
                    <input type="hidden" name="typeaccount_id">
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">


    <?PHP
    $i = 1;
    for ($i = 1; $i < 6; $i++) {
        $data_type = $this->mo_typeaccount->get_type($i);
        if ($i == 1) {
            $type = 'สินทรัพย์';
        }
        if ($i == 2) {
            $type = 'หนี้สิน';
        }
        if ($i == 3) {
            $type = 'ทุน';
        }
        if ($i == 4) {
            $type = 'รายได้';
        }
        if ($i == 5) {
            $type = 'ค่าใช้จ่าย';
        }
        ?>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body table-responsive"><h4><center><b><u><font color="#367fa9"><?PHP echo $type; ?></font></u></b></center></h4>
                    <table class="table table-striped  table-autosort" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="15%">Code</th>

                                <th width="25%">ประเภทบัญชี</th>

                                <th width="40%">ชื่อ</th>

                                <th width="20%">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?PHP
                            foreach ($data_type as $row_type) {
                                ?>
                                <tr>

                                    <td width="15%"><?PHP echo $row_type->typeaccount_code; ?></td>

                                    <td width="25%"><?PHP echo $type; ?></td>

                                    <td width="40%"><?PHP echo $row_type->typeaccount_name; ?></td>

                                    <td width="20%">
                                        <a href="typeaccount/create/<?PHP echo $row_type->typeaccount_id; ?>">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"> แก้ไข</i>
                                        </a>
                                        |
                                        <a href="typeaccount/deletes/<?PHP echo $row_type->typeaccount_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            <i class="fa fa-times-circle" aria-hidden="true"> ลบ</i>
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


    <?PHP } ?>

</div>





