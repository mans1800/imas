<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
                            <h3 class="box-title">
                                                       <a href="<?php echo base_url(); ?>admin/paymentvoucher/create" class="btn btn-info">
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
                                                        $expend_date = explode( "-" , $row->pmv_date );
                                                        
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
               
							<td><?PHP echo $row->pmv_no;?></td>
							
							<td><?PHP echo $row->pvlist_list;?></td>
							<td><?PHP echo $row->company_name;?></td>
							<td><?PHP echo $row->pmv_checkno;?></td>
							
							<td></td>
							
                                                        
                                                        <td align='right'><?PHP 
                                                        $ex_cash = $this->mo_pvlist->get_type($row->pmv_id,'1');
                                                       if ($ex_cash != null) {
                                                       foreach($ex_cash as $data_cash){
                                                        $word = number_format($data_cash->pvlist_total,2);
                                                        $expend_cash = explode( "." , $word );
                                                        if ($expend_cash[0] != 0) {
                                                        echo $expend_cash[0]; 
                                                       }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_cash != null) {
                                                        if ($expend_cash[0] != 0) {
                                                        if ($expend_cash[1] != 00) {
                                                        echo $expend_cash[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
                                                        
                                                        <td align='right'><?PHP 
                                                        $word = number_format($row->pmv_total,2);
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
                                                        $tax = $this->mo_pvlist->get_tax($row->pmv_id);
                                                         foreach($tax as $ex_tax){
                                                        $word = number_format($ex_tax->pvlist_tax,2);
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
                                                         }}
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                       $ex_ship = $this->mo_pvlist->get_type($row->pmv_id,'5');
                                                       if ($ex_ship != null) {
                                                       foreach($ex_ship as $data_ship){
                                                        $word = number_format($data_ship->pvlist_total,2);
                                                        $expend_ship = explode( "." , $word );
                                                        if ($expend_ship[0] != 0) {
                                                        echo $expend_ship[0]; 
                                                       }}}
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($ex_ship != null) {
                                                        if ($expend_ship[0] != 0) {
                                                        if ($expend_ship[1] != 00) {
                                                        echo $expend_ship[1]; 
                                                        } else { echo '-'; }
                                                       }}
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $ex_ad = $this->mo_pvlist->get_type($row->pmv_id,'6');
                                                        if ($ex_ad != null) {
                                                        foreach($ex_ad as $data_ad){
                                                        $word = number_format($data_ad->pvlist_total,2);
                                                        $expend_advance = explode( "." , $word );
                                                        if ($expend_advance[0] != 0) {
                                                        echo $expend_advance[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($ex_ad != null) {
                                                        if ($expend_advance[0] != 0) {
                                                        if ($expend_advance[1] != 00) {
                                                        echo $expend_advance[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>

                                                        <td align='right'><?PHP 
                                                        $ex_fr = $this->mo_pvlist->get_type($row->pmv_id,'32');
                                                        if ($ex_fr != null) {
                                                        foreach($ex_fr as $data_fr){
                                                        $word = number_format($data_fr->pvlist_total,2);
                                                        $expend_freight = explode( "." , $word );
                                                        if ($expend_freight[0] != 0) {
                                                        echo $expend_freight[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($ex_fr != null) {
                                                        if ($expend_freight[0] != 0) {
                                                        if ($expend_freight[1] != 00) {
                                                        echo $expend_freight[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        
                                                        ?></center></td>
                                
                                			<td align='right'><?PHP 
                                                        $ex_ca = $this->mo_pvlist->get_type($row->pmv_id,'31');
                                                        if ($ex_ca != null) {
                                                            foreach($ex_ca as $data_ca){
                                                        $word = number_format($data_ca->pvlist_total,2);
                                                        $expend_carriage = explode( "." , $word );
                                                        if ($expend_carriage[0] != 0) {
                                                        echo $expend_carriage[0]; 
                                                        }
                                                        }}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_ca != null) {
                                                        if ($expend_carriage[0] != 0) {
                                                        if ($expend_carriage[1] != 00) {
                                                        echo $expend_carriage[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>			
                                
                                                        <td align='right'><?PHP 
                                                        $ex_po = $this->mo_pvlist->get_type($row->pmv_id,'21');
                                                        if ($ex_po != null) {
                                                        foreach($ex_po as $data_po){
                                                        $word = number_format($data_po->pvlist_total,2);
                                                        $expend_port = explode( "." , $word );
                                                        if ($expend_port[0] != 0) {
                                                        echo $expend_port[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_po != null) {
                                                        if ($expend_port[0] != 0) {
                                                        if ($expend_port[1] != 00) {
                                                        echo $expend_port[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
                                
                                                        <td align='right'><?PHP 
                                                        $ex_co = $this->mo_pvlist->get_type($row->pmv_id,'18');
                                                        if ($ex_co != null) {
                                                        foreach($ex_co as $data_co){
                                                        $word = number_format($data_co->pvlist_total,2);
                                                        $expend_container = explode( "." , $word );
                                                        if ($expend_container[0] != 0) {
                                                        echo $expend_container[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_co != null) {
                                                        if ($expend_container[0] != 0) {
                                                        if ($expend_container[1] != 00) {
                                                        echo $expend_container[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
                                
				
						        <td align='right'><?PHP 
                                                        $ex_pp = $this->mo_pvlist->get_type($row->pmv_id,'11');
                                                        if ($ex_pp != null) {
                                                        foreach($ex_pp as $data_pp){
                                                        $word = number_format($data_pp->pvlist_total,2);
                                                        $expend_pp30 = explode( "." , $word );
                                                        if ($expend_pp30[0] != 0) {
                                                        echo $expend_pp30[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_pp != null) {
                                                        if ($expend_pp30[0] != 0) {
                                                        if ($expend_pp30[1] != 00) {
                                                        echo $expend_pp30[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
						
							<td align='right'><?PHP 
                                                        $ex_in = $this->mo_pvlist->get_type($row->pmv_id,'27');
                                                        if ($ex_in != null) {
                                                        foreach($ex_in as $data_in){
                                                        $word = number_format($data_in->pvlist_total,2);
                                                        $expend_insurance = explode( "." , $word );
                                                        if ($expend_insurance[0] != 0) {
                                                        echo $expend_insurance[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_in != null) {
                                                        if ($expend_insurance[0] != 0) {
                                                        if ($expend_insurance[1] != 00) {
                                                        echo $expend_insurance[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
						
							<td align='right'><?PHP 
                                                        $vat = $this->mo_pvlist->get_vat($row->pmv_id);
                                                         foreach($vat as $ex_vat){
                                                        $word = number_format($ex_vat->pvlist_vat,2);
                                                        $expend_tax = explode( "." , $word );
                                                        if ($expend_tax[0] != 0) {
                                                        echo $expend_tax[0]; 
                                                        }}
                                                        ?></td>
                                                        <td><center><?PHP 
                                                        if ($expend_tax[0] != 0) {
                                                        if ($expend_tax[1] != 00) {
                                                        echo $expend_tax[1]; 
                                                        } else { echo '-'; }
                                                        }
                                                        ?></center></td>
					
							<td align='right'><?PHP 
                                                        $ex_ph = $this->mo_pvlist->get_type($row->pmv_id,'45');
                                                        if ($ex_ph != null) {
                                                        foreach($ex_ph as $data_ph){
                                                        $word = number_format($data_ph->pvlist_total,2);
                                                        $expend_phone = explode( "." , $word );
                                                        if ($expend_phone[0] != 0) {
                                                        echo $expend_phone[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_ph != null) {
                                                        if ($expend_phone[0] != 0) {
                                                        if ($expend_phone[1] != 00) {
                                                        echo $expend_phone[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
						
							
							<td align='right'><?PHP 
                                                        $ex_edi = $this->mo_pvlist->get_type($row->pmv_id,'46');
                                                        if ($ex_edi != null) {
                                                        foreach($ex_edi as $data_edi){
                                                        $word = number_format($data_edi->pvlist_total,2);
                                                        $expend_edi = explode( "." , $word );
                                                        if ($expend_edi[0] != 0) {
                                                        echo $expend_edi[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_edi != null) {
                                                        if ($expend_edi[0] != 0) {
                                                        if ($expend_edi[1] != 00) {
                                                        echo $expend_edi[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
							
							<td align='right'><?PHP 
                                                        $ex_el = $this->mo_pvlist->get_type($row->pmv_id,'44');
                                                        if ($ex_el != null) {
                                                        foreach($ex_el as $data_el){
                                                        $word = number_format($data_el->pvlist_total,2);
                                                        $expend_electric = explode( "." , $word );
                                                        if ($expend_electric[0] != 0) {
                                                        echo $expend_electric[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_el != null) {
                                                        if ($expend_electric[0] != 0) {
                                                        if ($expend_electric[1] != 00) {
                                                        echo $expend_electric[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
							
							<td align='right'><?PHP 
                                                        $ex_sa = $this->mo_pvlist->get_type($row->pmv_id,'37');
                                                        if ($ex_sa != null) {
                                                        foreach($ex_sa as $data_sa){
                                                        $word = number_format($data_sa->pvlist_total,2);
                                                        $expend_salary = explode( "." , $word );
                                                        if ($expend_salary[0] != 0) {
                                                        echo $expend_salary[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_sa != null) {
                                                        if ($expend_salary[0] != 0) {
                                                        if ($expend_salary[1] != 00) {
                                                        echo $expend_salary[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
							
							<td align='right'><?PHP 
                                                        $ex_exp = $this->mo_pvlist->get_type($row->pmv_id,'50');
                                                        if ($ex_exp != null) {
                                                        foreach($ex_exp as $data_exp){
                                                        $word = number_format($data_exp->pvlist_total,2);
                                                        $expend_expenses = explode( "." , $word );
                                                        if ($expend_expenses[0] != 0) {
                                                        echo $expend_expenses[0]; 
                                                        }}}
                                                        ?></td>
                                                        <td><center><?PHP if ($ex_exp != null) {
                                                        if ($expend_expenses[0] != 0) {
                                                        if ($expend_expenses[1] != 00) {
                                                        echo $expend_expenses[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        ?></center></td>
                                
							
							<td align="right"></td>
							
							<td><?PHP 
                                                        
                                                        $ex_sub = $this->mo_paymentvoucher2->getsub($row->pmv_id);
                                                        foreach($ex_sub as $data_sub){
                                                       
                                                        echo $data_sub->pvlist2_list;
                                                        echo '<br>';
                                                        
                                                        
                                                        } ?></td>
							
                                                        <td align="right"></td>
							
                                                        
                                                        <td align='right'><?PHP 
                                                        $ex_sub2 = $this->mo_paymentvoucher2->getsub($row->pmv_id);
                                                         foreach($ex_sub2 as $data_sub2){          
                                                        $word = number_format($data_sub2->pvlist2_total,2);
                                                        $expend_amount = explode( "." , $word );
                                                        if ($expend_amount[0] != 0) {
                                                        echo $expend_amount[0]; 
                                                        echo '<br>';
                                                        } else {
                                                        echo '<br>';
                                                        }
                                                        }
                                                        
                                                        ?></td>
                                                        <td><center><?PHP
                                                         $ex_sub2 = $this->mo_paymentvoucher2->getsub($row->pmv_id);
                                                         foreach($ex_sub2 as $data_sub2){          
                                                        $word = number_format($data_sub2->pvlist2_total,2);
                                                        $expend_amount = explode( "." , $word );
                                                        
                                                        
                                                        
                                                        if ($ex_sub2 != null) {
                                                        if ($expend_amount[0] != 0) {
                                                        if ($expend_amount[1] != 00) {
                                                        echo $expend_amount[1]; 
                                                        } else { echo '-'; }
                                                        }}
                                                        echo '<br>';
                                                         }
                                                        ?></center></td>
                                                        
                                                                                   
							<td>
								<a href="paymentvoucher/create/<?PHP echo $row->pmv_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true">แก้ไข</i>
								</a>
								|
								<a href="paymentvoucher/deletes/<?PHP echo $row->pmv_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true">ลบ</i>
								</a>|
                                                                <?php echo form_open_multipart(base_url() . "admin/paymentvoucher2/create/") ?>
                                                                <input type="hidden" name="pmv_id2" value="<?PHP echo $row->pmv_id;?>">
                                                                <button type="submit" class="btn btn-link"><i class="fa fa-plus-circle" aria-hidden="true">เพิ่ม</i></button>

                                                                <?php echo form_close(); ?>
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

