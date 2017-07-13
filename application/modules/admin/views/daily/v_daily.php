<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">
                 
             
                    <a href="<?php echo base_url(); ?>admin/daily/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'เพิ่มข้อมูล'; ?>
                    </a>         
                 
<span class="dropdown">
  <button class="dropdown btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i  class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>สรุปรายเดือน
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#" data-toggle="modal" data-target="#pop-up-2<?PHP echo '1'; ?>">มกราคม</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">กุมภาพันธ์</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">มีนาคม</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">เมษายน</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">พฤษภาคม</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">มิถุนายน</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">กรกฎาคม</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">สิงหาคม</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">กันยายน</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">ตุลาคม</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">พฤศจิกายน</a></li>
    <li><a href="<?php echo base_url(); ?>admin/daily/">ธันวาคม</a></li>
  </ul>
</span>
                                
                    
                </h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th colspan="2" width="10%"><center>วัน/เดือน/ปี</center></th>


                    <th width="50%"><center>รายการ</center></th>

                    <th width="10%"><center>No</center></th>

                    <th colspan="2" width="10%"><center>เดบิต</center></th>

                    <th colspan="2"  width="10%"><center>เครดิต</center></th>


                    <th width="10%"><center>จัดการข้อมูล</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        //ปี
                        $temp_data1 = null;
                        $temp_data2 = null;
                        $data_show = 1;
                        //เดือน
                        $t_data1 = null;
                        $t_data2 = null;
                        $datashow = 1;
                        //วัน
                        $x_data1 = null;
                        $x_data2 = null;
                        $dshow = 1;

                        foreach ($data_cat as $row) {
                            ?>
                            <tr>

                                <td><?PHP
                                    $daily_date = explode("-", $row->daily_date);
                                    $temp_data1 = $daily_date[0];
                                    if ($temp_data2 == null) {
                                        $temp_data2 = $temp_data1;
                                        $data_show = 1;
                                    } else {
                                        if ($temp_data1 == $temp_data2) {
                                            $data_show = 0;
                                            $temp_data2 = $temp_data1;
                                        } else {
                                            $temp_data2 = $temp_data1;
                                            $data_show = 1;
                                        }
                                    }
                                    
                                    $t_data1 = $daily_date[1];
                                    if ($t_data2 == null) {
                                        $t_data2 = $t_data1;
                                        $datashow = 1;
                                    } else {
                                        if ($t_data1 == $t_data2) {
                                            $datashow = 0;
                                            $t_data2 = $t_data1;
                                        } else {
                                            $t_data2 = $t_data1;
                                            $datashow = 1;
                                        }
                                    }
                                    
                                    $x_data1 = $daily_date[2];
                                    if ($x_data2 == null) {
                                        $x_data2 = $x_data1;
                                        $dshow = 1;
                                    } else {
                                        if ($x_data1 == $x_data2) {
                                            $dshow = 0;
                                            $x_data2 = $x_data1;
                                        } else {
                                            $x_data2 = $x_data1;
                                            $dshow = 1;
                                        }
                                    }
                                    ?>
                                    
                                    <div class="pull-left"><?PHP 
                                    if ($data_show == 1) {
                                    echo getYearTh($daily_date[0]); 
                                    }
                                    ?></div>
                                    <div class="pull-right"><?PHP 
                                    if ($datashow == 1) {
                                    echo getmonthTh2($daily_date[1]); 
                                    }
                                    ?></div>
    <?PHP
    ?></td>
                                <td><center><?PHP
                                if ($dshow == 1) {
                                echo (int) ($daily_date[2]); }
                                ?></center></td>
                <td><?PHP echo substr($row->daily_list, 5); ?><br><p style="text-indent: 2.5em;"><?PHP echo substr($row->daily_list2, 5); ?><br><?PHP echo $row->daily_list3; ?></td>

                        <td><center><?PHP echo $row->daily_no; ?></center></td>

                        <td align="right"><?PHP
                                if ($row->daily_debit != '0') {
                                    $word = number_format($row->daily_debit, 2);
                                    $daily_debit = explode(".", $word);
                                    if ($daily_debit[0] != '0') {
                                        echo $daily_debit[0];
                                    }
                                }
    ?></td>
                        <td><center><?PHP
                            if (!empty($daily_debit[1])) {
                                if ($daily_debit[1] != '00') {
                                    echo $daily_debit[1];
                                } else {
                                    echo '-';
                                }
                            }
                            ?></center></td>
                        <td align="right"><br><?PHP
                            if ($row->daily_credit != '0') {
                                $word = number_format($row->daily_credit, 2);
                                $daily_credit = explode(".", $word);
                                if ($daily_credit[0] != '0') {
                                    echo $daily_credit[0];
                                }
                            }
                            ?></td>
                        <td><center><br><?PHP
                            if (!empty($daily_credit[1])) {
                                if ($daily_credit[1] != '00') {
                                    echo $daily_credit[1];
                                } else {
                                    echo '-';
                                }
                            }
                            ?></center></td>
                        <td><center>
                            <a href="daily/create/<?PHP echo $row->daily_id; ?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true">แก้ไข</i>
                            </a>
                            |
                            <a href="daily/deletes/<?PHP echo $row->daily_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="fa fa-times-circle" aria-hidden="true">ลบ</i>
                            </a>
                        </center></td>
                        </tr>
                        <?PHP
                    }
                    ?>
                    </tbody>
                </table>
                
                    <?PHP foreach($data_cat as $row){ ?>        
                    <div class="modal fade pop-up-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true" id="pop-up-2<?PHP echo '1'; ?>">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">

                            <div class="modal-header" align="right">
                                

                                
                    <a href="" class="btn btn-info" data-dismiss="modal">
                        <i  class="fa fa-print" aria-hidden="true"></i> <?php echo 'พิมพ์'; ?>
                    </a>   
                                
                 <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">ปิด</button>         
                                
    
                                
<!--                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">ปิด</button>-->
                                <h4 class="modal-title" id="myLargeModalLabel-2"></h4>
                            </div>
                            
                            <div class="modal-body">

                               <center><font size="4"></b>สรุปรายวันทั่วไป
                               <br>
                               ประจำเดือน มกราคม 2560</b></font></center><br>
                                
                                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							
							<th></th>
							
							<th></th>
							
							<th></th>
							
                                                        <th><center>เดบิต</center></th>
							
							<th><center>เครดิต</center></th>
							
						
						</tr>
					</thead>
					<tbody>
					<?PHP
						//foreach($data_cat as $row){
					?>
						<tr>
						
							
                                                    <td>ธนาคาร</td>
                                                    <td>ย.1.2</td>
                                                    <td><center>(111,092.25)</center></td>
                                                    <td><center>3,076,535.79</center></td>
                                                    <td></td>
                                                    </tr><tr>
                                                    <td>เงินสด</td>
                                                    <td>ย.1.1</td>
                                                    <td></td>
                                                    <td><center>111,092.25</center></td>
                                                    <td></td>
                                                    </tr><tr>
                                                    <td>เงินรับมัดจำ</td>
                                                    <td>ย.2.11</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(3,189,867.00)</center></td>
                                                    </tr><tr>
                                                    <td>เงินยืมทดรองเรือ</td>
                                                    <td>ย.1.5</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(0.01)</center></td>
                                                    </tr><tr>
                                                    <td>ค่าเสื่อมราคา คช</td>
                                                    <td>ย.5.7</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>465.53</center></td>
                                                    </tr><tr>
                                                    <td>สำรองราคา คช</td>
                                                    <td>ย 1.14</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(465.53)</center></td>
                                                    </tr><tr>
                                                    <td>ภาษีซื้อ</td>
                                                    <td>ย 1.7</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(657.93)</center></td>
                                                    </tr><tr>
                                                    <td>ภาษีซื้อค้างรับ</td>
                                                    <td>ย.1.9</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(187.99)</center></td>
                                                    </tr><tr>
                                                    <td>ค่าธรรมเนียมธนาคาร</td>
                                                    <td>ย.5.13</td>
                                                    <td></td>
                                                    <td><center>2,238.96</center></td>
                                                    <td></td>
                                                    </tr><tr>
                                                    <td>ภาษีขาย</td>
                                                    <td>ย.2.9</td>
                                                    <td></td>
                                                    <td><center>10,843.00</center></td>
                                                    <td></td>
                                                    </tr><tr>
                                                    <td>คชจ.เบ็ดเตล็ด</td>
                                                    <td>ย.5.14</td>
                                                    <td></td>
                                                    <td><center>141.19</center></td>
                                                    <td></td>
                                                    </tr><tr>
                                                    <td>ภพ.30</td>
                                                    <td>ย.1.11</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(9,997.09)</center></td>
							</tr><tr>
                                                    <td>เจ้าหนี้ ภงด. หัก ณ ที่จ่าย</td>
                                                    <td>ย.2.4</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(141.17)</center></td>
                                                    </tr><tr>
                                                    <td>เจ้าหนี้ค่าระวาง</td>
                                                    <td>ย.2.1</td>
                                                    <td><center>7,700.00</center></td>
                                                    <td></td>
                                                    <td></td>
                                                    </tr><tr>
                                                    <td>ตท.ค่าขนส่ง</td>
                                                    <td>ย 3.4</td>
                                                    <td></td>
                                                    <td><center>64,603.24</center></td>
                                                    <td></td>
                                                    </tr><tr>
                                                    <td>เจ้าหนี้ค่าขนส่ง</td>
                                                    <td>ย.2.2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(64,603.24)</center></td>
                                                    </tr><tr>
                                                    <td>ตท.ค่าระวาง</td>
                                                    <td>ย.3.5</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><center>(7,700.00)</center></td>
                                                   </tr>
                                                   <tr><td></td><td></td><td></td><td><center><b>3,273,619.96</b></center></td><td><center><b>(3,273,619.96)</b></center></td></tr>
		
						
					<?PHP 
						//} 
					?>
					</tbody>
				</table>
                                
                                
                                
                                
                                
                    
                                
                                
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal mixer image -->
                <?PHP } ?>
                
            </div>
        </div>
    </div>
</div>