<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
                            <h3 class="box-title">
                       <a href="<?php echo base_url(); ?>admin/revenue/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'เพิ่มข้อมูล';?>
                    </a> 
                                
            
                            </h3>
			</div>
			<div class="box-body table-responsive">
				<table class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
                                                        <th colspan="2">วัน/เดือน/ปี</th>
                                                       
							<th>รายการ</th>
                                                        <th></th>
                                                        <th colspan="2">ธนาคาร</th>
							
							<th colspan="2">ตั๋วเงินรับ</th>
							
							<th colspan="2">ลูกหนี้ ภงด.หัก ณ ที่จ่าย</th>
							
							<th colspan="2">เงินสด</th>
							
							<th colspan="2">ลูกหนี้การค้า</th>
							
							<th colspan="2">รายได้ค่าระวาง</th>
							
							<th colspan="2">ภาษีขาย</th>
							
							<th colspan="2">เงินทดรอง BL</th>
							
							<th colspan="2">ค่าใช้จ่ายเบ็ดเตล็ด</th>
							
							<th colspan="2">เจ้าหนี้อื่น</th>
							
							<th colspan="2">ภาษีขาย จ่ายล่วงหน้า</th>
							
							<th>ชื่อบัญชี</th>
                                                        <th></th>
							<th colspan="2">จำนวนเงิน</th>
							
							<th>จัดการข้อมูล</th>
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
                                                        $revenue_date = explode( "-" , $row->revenue_date );
                                                        
                                                         $temp_data1 = $revenue_date[0];
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
                                    
                                    $t_data1 = $revenue_date[1];
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
                                    
                                    $x_data1 = $revenue_date[2];
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
                                                        echo getYearTh($revenue_date[0]); }?></div>
                                                        
                                                        <div class="pull-right"><?PHP 
                                                        if ($datashow == 1) {
                                                        echo getmonthTh2($revenue_date[1]);}?></div>
                                                           </td>
                                                    <td><center><?PHP
                                                    if ($dshow == 1) {
                                                    echo (int)($revenue_date[2]);}?></center></td>
							<td><?PHP echo $row->revenue_list;?></td>
                                                        
                                                        <td><?PHP echo $row->revenue_em1;?></td>
 
                                                        
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_bank,2);
                                                        $revenue_bank = explode( "." , $word );
                                                        if ($revenue_bank[0] != 0) {
                                                        echo $revenue_bank[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_bank[0] != 0) {
                                                        if ($revenue_bank[1] != 00) {
                                                        echo $revenue_bank[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_note,2);
                                                        $revenue_note = explode( "." , $word );
                                                        if ($revenue_note[0] != 0) {
                                                        echo $revenue_note[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_note[0] != 0) {
                                                        if ($revenue_note[1] != 00) {
                                                        echo $revenue_note[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_debtor,2);
                                                        $revenue_debtor = explode( "." , $word );
                                                        if ($revenue_debtor[0] != 0) {
                                                        echo $revenue_debtor[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_debtor[0] != 0) {
                                                        if ($revenue_debtor[1] != 00) {
                                                        echo $revenue_debtor[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>

                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_cash,2);
                                                        $revenue_cash = explode( "." , $word );
                                                        if ($revenue_cash[0] != 0) {
                                                        echo $revenue_cash[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_cash[0] != 0) {
                                                        if ($revenue_cash[1] != 00) {
                                                        echo $revenue_cash[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_trade,2);
                                                        $revenue_trade = explode( "." , $word );
                                                        if ($revenue_trade[0] != 0) {
                                                        echo $revenue_trade[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_trade[0] != 0) {
                                                        if ($revenue_trade[1] != 00) {
                                                        echo $revenue_trade[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_freight,2);
                                                        $revenue_freight = explode( "." , $word );
                                                        if ($revenue_freight[0] != 0) {
                                                        echo $revenue_freight[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_freight[0] != 0) {
                                                        if ($revenue_freight[1] != 00) {
                                                        echo $revenue_freight[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
 
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_tax,2);
                                                        $revenue_tax = explode( "." , $word );
                                                        if ($revenue_tax[0] != 0) {
                                                        echo $revenue_tax[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_tax[0] != 0) {
                                                        if ($revenue_tax[1] != 00) {
                                                        echo $revenue_tax[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_advance,2);
                                                        $revenue_advance = explode( "." , $word );
                                                        if ($revenue_advance[0] != 0) {
                                                        echo $revenue_advance[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_advance[0] != 0) {
                                                        if ($revenue_advance[1] != 00) {
                                                        echo $revenue_advance[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>

                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_expenses,2);
                                                        $revenue_expenses = explode( "." , $word );
                                                        if ($revenue_expenses[0] != 0) {
                                                        echo $revenue_expenses[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_expenses[0] != 0) {
                                                        if ($revenue_expenses[1] != 00) {
                                                        echo $revenue_expenses[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_payable,2);
                                                        $revenue_payable = explode( "." , $word );
                                                        if ($revenue_payable[0] != 0) {
                                                        echo $revenue_payable[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_payable[0] != 0) {
                                                        if ($revenue_payable[1] != 00) {
                                                        echo $revenue_payable[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_taxfuture,2);
                                                        $revenue_taxfuture = explode( "." , $word );
                                                        if ($revenue_taxfuture[0] != 0) {
                                                        echo $revenue_taxfuture[0]; 
                                                        }
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_taxfuture[0] != 0) {
                                                        if ($revenue_taxfuture[1] != 00) {
                                                        echo $revenue_taxfuture[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>

                                                        <td><?PHP echo substr($row->revenue_account, 5); ?><br><?PHP echo substr($row->revenue_account2, 5); ?></td>
							<td><?PHP echo $row->revenue_em2;?><?PHP if (!empty($row->revenue_em22)) { echo '<br>'.$row->revenue_em22; }?></td>
                                                        
                                                        
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->revenue_amount,2);
                                                        $revenue_amount = explode( "." , $word );
                                                        if ($revenue_amount[0] != 0) {
                                                        echo $revenue_amount[0]; 
                                                        }
                                                        if ($row->revenue_amount2 != null) {
                                                        $word2 = number_format($row->revenue_amount2,2);
                                                        $revenue_amount2 = explode( "." , $word2 );
                                                        if ($revenue_amount2[0] != 0) {
                                                        echo '<br>'.$revenue_amount2[0]; 
                                                        }}
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($revenue_amount[0] != 0) {
                                                        if ($revenue_amount[1] != 00) {
                                                        echo $revenue_amount[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        if ($row->revenue_amount2 != null) {
                                                        if ($revenue_amount2[0] != 0) {
                                                        if ($revenue_amount2[1] != 00) {
                                                        echo $revenue_amount2[1]; 
                                                        } else { echo '<br>-'; }
                                                        }}
                                                        ?></center></td>

                        
                                                        
							<td>
								<a href="revenue/create/<?PHP echo $row->revenue_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true">แก้ไข</i>
								</a>
								|
								<a href="revenue/deletes/<?PHP echo $row->revenue_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true">ลบ</i>
								</a>
							</td>
						</tr>
                                                
                                                
                                                
                                                
					<?PHP 
						} 
					?>
                                               
				

                        
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td align="right"><b>1,241,792</b></td>
                                                    <td><center><b>65</b></center></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td align="right"><b>10,046</b></td>
                                                    <td><center><b>50</b></center></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td align="right"><b>824,181</b></td>
                                                    <td><center><b>31</b></center></td>
                                                    <td align="right"><b>35,281</b></td>
                                                    <td><center><b>25</b></center></td>
                                                    <td align="right"><b>10,493</b></td>
                                                    <td>-</td>
                                                    <td align="right"><b>372,083</b></td>
                                                    <td><center><b>59</b></center></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td align="right"><b>9,800</b></td>
                                                    <td>-</td>
                                                    <td></td> 
                                               
                                                </tr>
                                                </tbody></table>
			</div>
		</div>
	</div>
</div>