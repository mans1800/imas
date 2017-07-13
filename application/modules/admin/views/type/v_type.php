
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ประเภท</th>
							
							<th>ชื่อ</th>
							
							<th>จัดการข้อมูล</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->type_bigtypeid;?></td>
							
							<td><?PHP echo $row->type_name;?></td>
							
							<td>
								<a href="type/create/<?PHP echo $row->type_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"> แก้ไข</i>
								</a>
								|
								<a href="type/deletes/<?PHP echo $row->type_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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
</div>