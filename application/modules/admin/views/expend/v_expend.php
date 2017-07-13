<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
                            <h3 class="box-title">
                                                       <a href="<?php echo base_url(); ?>admin/expend/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'เพิ่มข้อมูล';?>
                    </a> 
                                

                                
                                
                                
                            </h3>
			</div>
			<div class="box-body table-responsive">
				<table class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
                                                    <th rowspan="2" colspan="2"><center>วัน/เดือน/ปี</center></th>
							
                                                    <th rowspan="2"><center>PV</center></th>
							
                                                    <th width="10%" rowspan="2" colspan="2"><center>รายการ</center></th>
							
							<th rowspan="2"><center>เลขที่เช็ค</center></th>
							
							<th rowspan="2"></th>
							
                                                        <th rowspan="2" colspan="2"><center>เงินสด</center></th>
							
							<th  rowspan="2" colspan="2"><center>ธนาคาร</center></th>
							
							<th  rowspan="2" colspan="2"><center>เจ้าหนี้ ภงด.หัก ณ ที่จ่าย</center></th>
							
							<th  rowspan="2" colspan="2"><center>เงินยืมทดรองเรือ</center></th>
							
							<th  rowspan="2" colspan="2"><center>เงินยืมทดรอง BL</center></th>
                                                        <th  colspan="4"><center>ต้นทุน</center></th>
                                                        							
                                                        <th rowspan="2" colspan="2"><center>เงินทดรองผ่านท่า</center></th>
							
							<th rowspan="2" colspan="2"><center>เงินทดรองมัดจำตู้</center></th>
							
							<th rowspan="2" colspan="2"><center>ภพ.30</center></th>
							
							<th rowspan="2" colspan="2"><center>ประกันสังคม</center></th>
							
							<th rowspan="2" colspan="2"><center>ภาษีซื้อ</center></th>
							
							<th rowspan="2" colspan="2"><center>ค่าโทรศัพท์</center></th>
							
							<th rowspan="2" colspan="2"><center>ค่าบริการ EDI</center></th>
							
							<th rowspan="2" colspan="2"><center>ค่าไฟฟ้า น้ำประปา</center></th>
							
							<th rowspan="2" colspan="2"><center>เงินเดือน</center></th>
							
							<th rowspan="2" colspan="2"><center>ค่าใช้จ่ายเบ็ดเตล็ด</center></th>
							
							<th rowspan="2"></th>
							
							<th width="7%" rowspan="2"><center>ชื่อบัญชี</center></th>
							
							<th rowspan="2"></th>
							
                                                        <th rowspan="2" colspan="2"><center>จำนวนเงิน</center></th>
							
							<th rowspan="2"><center>Actions</center></th>
						</tr>
					
                                                <tr>
                                                    <th colspan="2">ค่าระวาง</th><th colspan="2">ค่าขนส่ง</th>
                                        </tr>
                                        </thead>
					<tbody>
					<?PHP
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
                                        
						foreach($data_cat as $row){
					?>
						<tr>
						
                                                    
                                                        <td>
                                                        <?PHP 
                                                        $expend_date = explode( "-" , $row->expend_date );
                                                        
                                                         $temp_data1 = $expend_date[0];
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
                                    
                                    $t_data1 = $expend_date[1];
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
                                    
                                    $x_data1 = $expend_date[2];
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
                                                        echo getYearTh($expend_date[0]);}?></div>
                                                        
                                                        <div class="pull-right"><?PHP 
                                                        if ($datashow == 1) {
                                                        echo getmonthTh2($expend_date[1]);}?></div>
                                                           </td>
                                                    <td><center><?PHP 
                                                    if ($dshow == 1) {
                                                    echo (int)($expend_date[2]);}?></center></td>
               
							<td><?PHP echo $row->expend_pv;?></td>
							
							<td><?PHP echo $row->expend_list.' '.$row->expend_list2;?></td>
							<td><?PHP echo $row->expend_list3;?></td>
							<td><?PHP echo $row->expend_check;?></td>
							
							<td><?PHP echo $row->expend_em1;?></td>
							
                                                        
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_cash,2);
                                                        $expend_cash = explode( "." , $word );
                                                        if ($expend_cash[0] != 0) {
                                                        echo $expend_cash[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_cash[0] != 0) {
                                                        if ($expend_cash[1] != 00) {
                                                        echo $expend_cash[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                                        
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_bank,2);
                                                        $expend_bank = explode( "." , $word );
                                                        if ($expend_bank[0] != 0) {
                                                        echo $expend_bank[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_bank[0] != 0) {
                                                        if ($expend_bank[1] != 00) {
                                                        echo $expend_bank[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>

                                                               
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_creditor,2);
                                                        $expend_creditor = explode( "." , $word );
                                                        if ($expend_creditor[0] != 0) {
                                                        echo $expend_creditor[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_creditor[0] != 0) {
                                                        if ($expend_creditor[1] != 00) {
                                                        echo $expend_creditor[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_ship,2);
                                                        $expend_ship = explode( "." , $word );
                                                        if ($expend_ship[0] != 0) {
                                                        echo $expend_ship[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_ship[0] != 0) {
                                                        if ($expend_ship[1] != 00) {
                                                        echo $expend_ship[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_advance,2);
                                                        $expend_advance = explode( "." , $word );
                                                        if ($expend_advance[0] != 0) {
                                                        echo $expend_advance[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_advance[0] != 0) {
                                                        if ($expend_advance[1] != 00) {
                                                        echo $expend_advance[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>

                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_freight,2);
                                                        $expend_freight = explode( "." , $word );
                                                        if ($expend_freight[0] != 0) {
                                                        echo $expend_freight[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_freight[0] != 0) {
                                                        if ($expend_freight[1] != 00) {
                                                        echo $expend_freight[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                			<td align='right'><?PHP 
                                                        $word = number_format($row->expend_carriage,2);
                                                        $expend_carriage = explode( "." , $word );
                                                        if ($expend_carriage[0] != 0) {
                                                        echo $expend_carriage[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_carriage[0] != 0) {
                                                        if ($expend_carriage[1] != 00) {
                                                        echo $expend_carriage[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>			
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_port,2);
                                                        $expend_port = explode( "." , $word );
                                                        if ($expend_port[0] != 0) {
                                                        echo $expend_port[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_port[0] != 0) {
                                                        if ($expend_port[1] != 00) {
                                                        echo $expend_port[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_container,2);
                                                        $expend_container = explode( "." , $word );
                                                        if ($expend_container[0] != 0) {
                                                        echo $expend_container[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_container[0] != 0) {
                                                        if ($expend_container[1] != 00) {
                                                        echo $expend_container[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
				
						        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_pp30,2);
                                                        $expend_pp30 = explode( "." , $word );
                                                        if ($expend_pp30[0] != 0) {
                                                        echo $expend_pp30[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_pp30[0] != 0) {
                                                        if ($expend_pp30[1] != 00) {
                                                        echo $expend_pp30[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
						
							<td align='right'><?PHP 
                                                        $word = number_format($row->expend_insurance,2);
                                                        $expend_insurance = explode( "." , $word );
                                                        if ($expend_insurance[0] != 0) {
                                                        echo $expend_insurance[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_insurance[0] != 0) {
                                                        if ($expend_insurance[1] != 00) {
                                                        echo $expend_insurance[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
						
							<td align='right'><?PHP 
                                                        $word = number_format($row->expend_tax,2);
                                                        $expend_tax = explode( "." , $word );
                                                        if ($expend_tax[0] != 0) {
                                                        echo $expend_tax[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_tax[0] != 0) {
                                                        if ($expend_tax[1] != 00) {
                                                        echo $expend_tax[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
					
							<td align='right'><?PHP 
                                                        $word = number_format($row->expend_phone,2);
                                                        $expend_phone = explode( "." , $word );
                                                        if ($expend_phone[0] != 0) {
                                                        echo $expend_phone[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_phone[0] != 0) {
                                                        if ($expend_phone[1] != 00) {
                                                        echo $expend_phone[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
						
							
							<td align='right'><?PHP 
                                                        $word = number_format($row->expend_edi,2);
                                                        $expend_edi = explode( "." , $word );
                                                        if ($expend_edi[0] != 0) {
                                                        echo $expend_edi[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_edi[0] != 0) {
                                                        if ($expend_edi[1] != 00) {
                                                        echo $expend_edi[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
							
							<td align='right'><?PHP 
                                                        $word = number_format($row->expend_electric,2);
                                                        $expend_electric = explode( "." , $word );
                                                        if ($expend_electric[0] != 0) {
                                                        echo $expend_electric[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_electric[0] != 0) {
                                                        if ($expend_electric[1] != 00) {
                                                        echo $expend_electric[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
							
							<td align='right'><?PHP 
                                                        $word = number_format($row->expend_salary,2);
                                                        $expend_salary = explode( "." , $word );
                                                        if ($expend_salary[0] != 0) {
                                                        echo $expend_salary[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_salary[0] != 0) {
                                                        if ($expend_salary[1] != 00) {
                                                        echo $expend_salary[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
							
							<td align='right'><?PHP 
                                                        $word = number_format($row->expend_expenses,2);
                                                        $expend_expenses = explode( "." , $word );
                                                        if ($expend_expenses[0] != 0) {
                                                        echo $expend_expenses[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_expenses[0] != 0) {
                                                        if ($expend_expenses[1] != 00) {
                                                        echo $expend_expenses[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
							
							<td align="right"><?PHP  if($row->expend_em2 != 0) { echo number_format($row->expend_em2,2);}?></td>
							
							<td><?PHP echo substr($row->expend_account, 5); ?><br><?PHP echo substr($row->expend_account2, 5); ?></td>
							
							<td align="right"><?PHP echo $row->expend_em3;?><?PHP if (!empty($row->expend_em33)) { echo '<br>'.$row->expend_em33; }?></td>
							
                                                        
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->expend_amount,2);
                                                        $expend_amount = explode( "." , $word );
                                                        if ($expend_amount[0] != 0) {
                                                        echo $expend_amount[0]; 
                                                        }
                                                        if ($row->expend_amount2 != null) {
                                                        $word2 = number_format($row->expend_amount2,2);
                                                        $expend_amount2 = explode( "." , $word2 );
                                                        if ($expend_amount2[0] != 0) {
                                                        echo '<br>'.$expend_amount2[0]; 
                                                        }}
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_amount[0] != 0) {
                                                        if ($expend_amount[1] != 00) {
                                                        echo $expend_amount[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        if ($row->expend_amount2 != null) {
                                                        if ($expend_amount2[0] != 0) {
                                                        if ($expend_amount2[1] != 00) {
                                                        echo '<br>'.$expend_amount2[1]; 
                                                        } else { echo '<br>-'; }
                                                        }}
                                                        ?></center></td>
                                                        
                                                                                   
							<td>
								<a href="expend/create/<?PHP echo $row->expend_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true">แก้ไข</i>
								</a>
								|
								<a href="expend/deletes/<?PHP echo $row->expend_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true">ลบ</i>
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