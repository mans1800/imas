<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Paymentvoucher2 extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_paymentvoucher');
                        $this->load->model('mo_paymentvoucher2');
                        $this->load->model('mo_company');
                        $this->load->model('mo_pvlist');
                        $this->load->model('mo_pvlist2');
                        $this->load->model('mo_type');
			$this->load->helper('url');
                        $this->load->helper('function_helper');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Paymentvoucher2';
			$this->mViewData['data_cat'] = $this->mo_paymentvoucher2->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('paymentvoucher2/v_paymentvoucher2');
		}

		public function create($id=NULL) {

                           $this->mViewData['pmv2_pmvid'] =  $this->input->post('pmv_id2');
                                 //หาเลขที่ PV 2017-05-12
//                                $xxx = substr(($this->input->post('pmv2_date')), 0, 7);
//                                $xxy1 = substr(($this->input->post('pmv2_date')), 5,1);
//                                $xxy2 = substr(($this->input->post('pmv2_date')), 6,1);                                                               
//                                
//                                if ($xxy1 != 0) {
//                                    $xxy3 = $xxy1.$xxy2;
//                                } else {
//                                    $xxy3 = $xxy2;
//                                }
//                                   
//                                $data_numpv = $this->mo_paymentvoucher->get_pvdate($xxx);
//                                $xxy4 = $data_numpv+1;
                    
                        $this->mViewData['data_companyx'] = $this->mo_company->get_all();
                        $this->mViewData['data_company'] = $this->mo_company->get_all();
                        
                      
                        $this->mViewData['data_type'] = $this->mo_type->get_all();
             
                        
			$this->load->library('form_validation');
				$this->form_validation->set_rules('pmv2_date','วันที่', 'required');
                                
				$this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
		$this->mViewData['paymentvoucher2'] = '';

		if($id!=NULL || !empty($this->input->post('pmv2_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['paymentvoucher2'] = $this->mo_paymentvoucher2->get_by_key($id);
                            
                                $this->mViewData['pvlist'] = $this->mo_pvlist2->get_by_key2($id);
                                
			}
			else{
                                $this->db->trans_begin(); 
                                //$this->mo_paymentvoucher2->pmv2_pmvid = $this->input->post('pmv_id2');
                                $countlist = $this->mo_pvlist2->getall_join2($id);
                                for ($i=$countlist; $i<8; $i++) {
                                if ((($this->input->post('pvlist2_account')[$i]) != null) || (($this->input->post('pvlist2_list')[$i]) != null)||(($this->input->post('pvlist2_vat')[$i]) != null)||(($this->input->post('pvlist2_tax')[$i]) != null)||(($this->input->post('pvlist2_total')[$i]) != null)) {
                                $this->mo_pvlist2->pvlist2_pmvid1 = $this->input->post('pmv2_pmvid');
                                $this->mo_pvlist2->pvlist2_pmvid2 = $id;
                                $this->mo_pvlist2->pvlist2_account = $this->input->post('pvlist2_account')[$i];
                                $this->mo_pvlist2->pvlist2_code = $this->input->post('pvlist2_code')[$i];
				$this->mo_pvlist2->pvlist2_list = $this->input->post('pvlist2_list')[$i];
				$this->mo_pvlist2->pvlist2_vat = $this->input->post('pvlist2_vat')[$i];
				$this->mo_pvlist2->pvlist2_tax = $this->input->post('pvlist2_tax')[$i];
                                $this->mo_pvlist2->pvlist2_total = $this->input->post('pvlist2_total')[$i];
                                
                                $this->mo_pvlist2->inserts();
                                     }
                                }

                                $this->mo_paymentvoucher2->pmv2_id = $this->input->post('pmv2_id');
				$this->mo_paymentvoucher2->pmv2_pmvid = $this->input->post('pmv2_pmvid');
				$this->mo_paymentvoucher2->pmv2_to = $this->input->post('pmv2_to');
				$this->mo_paymentvoucher2->pmv2_date = $this->input->post('pmv2_date');
				$this->mo_paymentvoucher2->pmv2_total = $this->input->post('pmv2_total');
				$this->mo_paymentvoucher2->pmv2_save = $this->input->post('pmv2_save');
                                  
				$this->mo_paymentvoucher2->updates();

                                 for ($i=0; $i<$countlist; $i++) {
                                    
                                $this->mo_pvlist2->pvlist2_id = $this->input->post('pvlist2_id')[$i];
                                $this->mo_pvlist2->pvlist2_pmvid1 = $this->input->post('pmv2_pmvid');
                                $this->mo_pvlist2->pvlist2_pmvid2 = $this->input->post('pmv2_id');
                                $this->mo_pvlist2->pvlist2_account = $this->input->post('pvlist2_account')[$i];
                                $this->mo_pvlist2->pvlist2_code = $this->input->post('pvlist2_code')[$i];
				$this->mo_pvlist2->pvlist2_list = $this->input->post('pvlist2_list')[$i];
				$this->mo_pvlist2->pvlist2_vat = $this->input->post('pvlist2_vat')[$i];
				$this->mo_pvlist2->pvlist2_tax = $this->input->post('pvlist2_tax')[$i];
                                $this->mo_pvlist2->pvlist2_total = $this->input->post('pvlist2_total')[$i];
                                
                                $this->mo_pvlist2->updates();

                                 } 
                                

                                
                                
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                redirect('admin/paymentvoucher/');
            } else {
                $this->db->trans_commit();
                redirect('admin/paymentvoucher/');
            }

				
				redirect('admin/paymentvoucher/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
                                $this->db->trans_begin(); 
                                
                                $this->mo_paymentvoucher2->pmv2_id = $this->input->post('pmv2_id');
				$this->mo_paymentvoucher2->pmv2_pmvid = $this->input->post('pmv2_pmvid');
				$this->mo_paymentvoucher2->pmv2_to = $this->input->post('pmv2_to');
				$this->mo_paymentvoucher2->pmv2_date = $this->input->post('pmv2_date');
				$this->mo_paymentvoucher2->pmv2_total = $this->input->post('pmv2_total');
				$this->mo_paymentvoucher2->pmv2_save = $this->input->post('pmv2_save');
                                  
				$this->mo_paymentvoucher2->inserts();
                                $last_id = $this->db->insert_id();

                                 for ($i=0; $i<8; $i++) {
                                if ((($this->input->post('pvlist2_account')[$i]) != null) || (($this->input->post('pvlist2_list')[$i]) != null)||(($this->input->post('pvlist2_vat')[$i]) != null)||(($this->input->post('pvlist2_tax')[$i]) != null)||(($this->input->post('pvlist2_total')[$i]) != null)) {
                                $this->mo_pvlist2->pvlist2_id = $this->input->post('pvlist2_id');
                                $this->mo_pvlist2->pvlist2_pmvid1 = $this->input->post('pmv2_pmvid');
                                $this->mo_pvlist2->pvlist2_pmvid2 = $last_id;
                                $this->mo_pvlist2->pvlist2_account = $this->input->post('pvlist2_account')[$i];
                                $this->mo_pvlist2->pvlist2_code = $this->input->post('pvlist2_code')[$i];
				$this->mo_pvlist2->pvlist2_list = $this->input->post('pvlist2_list')[$i];
				$this->mo_pvlist2->pvlist2_vat = $this->input->post('pvlist2_vat')[$i];
				$this->mo_pvlist2->pvlist2_tax = $this->input->post('pvlist2_tax')[$i];
                                $this->mo_pvlist2->pvlist2_total = $this->input->post('pvlist2_total')[$i];
                                
                                $this->mo_pvlist2->inserts();
                                     }
                                }
                                
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                redirect('admin/paymentvoucher/');
            } else {
                $this->db->trans_commit();
                redirect('admin/paymentvoucher/');
            }
 
		redirect('admin/paymentvoucher/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข ใบสำคัญจ่าย';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('paymentvoucher2/v_paymentvoucher2_create');
	}   
    

}
						