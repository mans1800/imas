
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
                <h3 class="box-title"><b><u><font color="#367fa9">เพิ่มข้อมูล</font></u></b><br><br></h3>

                <?php echo form_open_multipart(base_url() . "admin/company2/create2") ?>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"  >
                    <input  type="text" name="company2_code" class="form-control" placeholder="Code" required=""style="margin-bottom:10px;">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <input type="text" name="company2_subname" class="form-control" placeholder="ชื่อย่อ" required="" style="margin-bottom:10px;">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <input type="text" name="company2_name" class="form-control" placeholder="ชื่อบริษัท" required="" style="margin-bottom:10px;">
                </div>

                <div class="col-sm-12 col-md-1 col-1">
                    <button type="submit" class="btn btn-info pull-right">บันทึก</button>
                    <input type="hidden" name="type_id">
                </div>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
                                <th width="15%"><center>Code</center></th>
                                <th width="15%"><center>ชื่อย่อ</center></th>
							<th width="55%"><center>ชื่อบริษัท</center></th>
							<th width="15%"><center>จัดการข้อมูล</center></th>
						</tr>
					</thead>
					<tbody>
					<?PHP 
						foreach($data_cat as $row){
					?>
						<tr>
                                                
                                                    <td><center><?PHP echo $row->company2_code;?></center></td>
                                <td><?PHP echo $row->company2_subname;?></td>
							<td><?PHP echo $row->company2_name;?></td>
                                                        
							
							<td><center>
								<a href="company2/create/<?PHP echo $row->company2_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"> แก้ไข</i>
								</a>
								|
								<a href="company2/deletes/<?PHP echo $row->company2_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"> ลบ</i>
								</a>
							</center></td>
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