<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Expend extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_expend');
			$this->load->helper('url');
                        $this->load->helper('function');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'ทะเบียนจ่าย';
			$this->mViewData['data_cat'] = $this->mo_expend->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('expend/v_expend');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('expend_date','วันที่', 'required');
				
$this->form_validation->set_rules('expend_bank','ธนาคาร', 'required');
$this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
						
		$this->mViewData['expend'] = '';

		if($id!=NULL || !empty($this->input->post('expend_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['expend'] = $this->mo_expend->get_by_key($id);
			}
			else{
			$this->mo_expend->expend_id = $this->input->post('expend_id');
				$this->mo_expend->expend_date = $this->input->post('expend_date');
				$this->mo_expend->expend_pv = $this->input->post('expend_pv');
				$this->mo_expend->expend_list = $this->input->post('expend_list');
                                $this->mo_expend->expend_list2 = $this->input->post('expend_list2');
                                $this->mo_expend->expend_list3 = $this->input->post('expend_list3');
				$this->mo_expend->expend_check = $this->input->post('expend_check');
				$this->mo_expend->expend_em1 = $this->input->post('expend_em1');
				$this->mo_expend->expend_cash = $this->input->post('expend_cash');
				$this->mo_expend->expend_bank = $this->input->post('expend_bank');
				$this->mo_expend->expend_creditor = $this->input->post('expend_creditor');
				$this->mo_expend->expend_ship = $this->input->post('expend_ship');
				$this->mo_expend->expend_advance = $this->input->post('expend_advance');
				$this->mo_expend->expend_freight = $this->input->post('expend_freight');
				$this->mo_expend->expend_carriage = $this->input->post('expend_carriage');
				$this->mo_expend->expend_port = $this->input->post('expend_port');
				$this->mo_expend->expend_container = $this->input->post('expend_container');
				$this->mo_expend->expend_pp30 = $this->input->post('expend_pp30');
				$this->mo_expend->expend_insurance = $this->input->post('expend_insurance');
				$this->mo_expend->expend_tax = $this->input->post('expend_tax');
				$this->mo_expend->expend_phone = $this->input->post('expend_phone');
				$this->mo_expend->expend_edi = $this->input->post('expend_edi');
				$this->mo_expend->expend_electric = $this->input->post('expend_electric');
				$this->mo_expend->expend_salary = $this->input->post('expend_salary');
				$this->mo_expend->expend_expenses = $this->input->post('expend_expenses');
				$this->mo_expend->expend_em2 = $this->input->post('expend_em2');
				$this->mo_expend->expend_account = $this->input->post('expend_account');
                                $this->mo_expend->expend_account2 = $this->input->post('expend_account2');
				$this->mo_expend->expend_em3 = $this->input->post('expend_em3');
                                $this->mo_expend->expend_em33 = $this->input->post('expend_em33');
				$this->mo_expend->expend_amount = $this->input->post('expend_amount');
                                $this->mo_expend->expend_amount2 = $this->input->post('expend_amount2');

				
				$this->mo_expend->updates();
				redirect('admin/expend/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_expend->expend_id = $this->input->post('expend_id');
				$this->mo_expend->expend_date = $this->input->post('expend_date');
				$this->mo_expend->expend_pv = $this->input->post('expend_pv');
				$this->mo_expend->expend_list = $this->input->post('expend_list');
                                $this->mo_expend->expend_list2 = $this->input->post('expend_list2');
                                $this->mo_expend->expend_list3 = $this->input->post('expend_list3');
				$this->mo_expend->expend_check = $this->input->post('expend_check');
				$this->mo_expend->expend_em1 = $this->input->post('expend_em1');
				$this->mo_expend->expend_cash = $this->input->post('expend_cash');
				$this->mo_expend->expend_bank = $this->input->post('expend_bank');
				$this->mo_expend->expend_creditor = $this->input->post('expend_creditor');
				$this->mo_expend->expend_ship = $this->input->post('expend_ship');
				$this->mo_expend->expend_advance = $this->input->post('expend_advance');
				$this->mo_expend->expend_freight = $this->input->post('expend_freight');
				$this->mo_expend->expend_carriage = $this->input->post('expend_carriage');
				$this->mo_expend->expend_port = $this->input->post('expend_port');
				$this->mo_expend->expend_container = $this->input->post('expend_container');
				$this->mo_expend->expend_pp30 = $this->input->post('expend_pp30');
				$this->mo_expend->expend_insurance = $this->input->post('expend_insurance');
				$this->mo_expend->expend_tax = $this->input->post('expend_tax');
				$this->mo_expend->expend_phone = $this->input->post('expend_phone');
				$this->mo_expend->expend_edi = $this->input->post('expend_edi');
				$this->mo_expend->expend_electric = $this->input->post('expend_electric');
				$this->mo_expend->expend_salary = $this->input->post('expend_salary');
				$this->mo_expend->expend_expenses = $this->input->post('expend_expenses');
				$this->mo_expend->expend_em2 = $this->input->post('expend_em2');
				$this->mo_expend->expend_account = $this->input->post('expend_account');
                                $this->mo_expend->expend_account2 = $this->input->post('expend_account2');
				$this->mo_expend->expend_em3 = $this->input->post('expend_em3');
                                $this->mo_expend->expend_em33 = $this->input->post('expend_em33');
				$this->mo_expend->expend_amount = $this->input->post('expend_amount');
                                $this->mo_expend->expend_amount2 = $this->input->post('expend_amount2');

				
				$this->mo_expend->inserts();
				redirect('admin/expend/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข ทะเบียนจ่าย';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('expend/v_expend_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_expend->expend_id = $id;
			$this->mo_expend->deletes();
		}
		redirect('admin/expend/', 'refresh');
	}

}
						