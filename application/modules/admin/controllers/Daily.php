<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Daily extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_daily');
			$this->load->helper('url');
                        $this->load->helper('function');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'รายวันทั่วไป';
			$this->mViewData['data_cat'] = $this->mo_daily->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('daily/v_daily');
		}

		public function create($id=NULL) {
                    
                
           			$this->load->library('form_validation');
				$this->form_validation->set_rules('daily_date','วันที่', 'required');
				
				$this->form_validation->set_rules('daily_debit','เดบิต', 'required');
                                $this->form_validation->set_rules('daily_credit','เครดิต', 'required');
                                
                                $this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
		$this->mViewData['daily'] = '';

		if($id!=NULL || !empty($this->input->post('daily_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['daily'] = $this->mo_daily->get_by_key($id);
			}
			else{
			$this->mo_daily->daily_id = $this->input->post('daily_id');
				$this->mo_daily->daily_date = $this->input->post('daily_date');
				$this->mo_daily->daily_list = $this->input->post('daily_list');
                                $this->mo_daily->daily_list2 = $this->input->post('daily_list2');
                                $this->mo_daily->daily_list3 = $this->input->post('daily_list3');
                                $this->mo_daily->daily_no = $this->input->post('daily_no');
				$this->mo_daily->daily_debit = $this->input->post('daily_debit');
				$this->mo_daily->daily_credit = $this->input->post('daily_credit');
				
				$this->mo_daily->updates();
				redirect('admin/daily/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_daily->daily_id = $this->input->post('daily_id');
				$this->mo_daily->daily_date = $this->input->post('daily_date');
				$this->mo_daily->daily_list = $this->input->post('daily_list');
                                $this->mo_daily->daily_list2 = $this->input->post('daily_list2');
                                $this->mo_daily->daily_list3 = $this->input->post('daily_list3');
				$this->mo_daily->daily_no = $this->input->post('daily_no');
				$this->mo_daily->daily_debit = $this->input->post('daily_debit');
				$this->mo_daily->daily_credit = $this->input->post('daily_credit');
				
				$this->mo_daily->inserts();
				redirect('admin/daily/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข รายวันทั่วไป';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('daily/v_daily_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_daily->daily_id = $id;
			$this->mo_daily->deletes();
		}
		redirect('admin/daily/', 'refresh');
	}

}
						