<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Revenue extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_revenue');
			$this->load->helper('url');
                        $this->load->helper('function');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'ทะเบียนรับ';
			$this->mViewData['data_cat'] = $this->mo_revenue->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('revenue/v_revenue');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('revenue_date','วันที่', 'required');
				$this->form_validation->set_rules('revenue_bank','ธนาคาร', 'required');
                                $this->form_validation->set_rules('revenue_debtor','ลูกหนี้ ภงด.หัก ณ ที่จ่าย', 'required');
                                $this->form_validation->set_rules('revenue_trade','ลูกหนี้การค้า', 'required');
                                $this->form_validation->set_rules('revenue_tax','ภาษีขาย', 'required');
                                $this->form_validation->set_rules('revenue_advance','เงินทดรอง BL', 'required');
                                
                                $this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
						
		$this->mViewData['revenue'] = '';

		if($id!=NULL || !empty($this->input->post('revenue_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['revenue'] = $this->mo_revenue->get_by_key($id);
			}
			else{
			$this->mo_revenue->revenue_id = $this->input->post('revenue_id');
				$this->mo_revenue->revenue_date = $this->input->post('revenue_date');
				$this->mo_revenue->revenue_list = $this->input->post('revenue_list');
                                $this->mo_revenue->revenue_em1 = $this->input->post('revenue_em1');
				$this->mo_revenue->revenue_bank = $this->input->post('revenue_bank');
				$this->mo_revenue->revenue_note = $this->input->post('revenue_note');
				$this->mo_revenue->revenue_debtor = $this->input->post('revenue_debtor');
				$this->mo_revenue->revenue_cash = $this->input->post('revenue_cash');
				$this->mo_revenue->revenue_trade = $this->input->post('revenue_trade');
				$this->mo_revenue->revenue_Freight = $this->input->post('revenue_freight');
				$this->mo_revenue->revenue_tax = $this->input->post('revenue_tax');
				$this->mo_revenue->revenue_advance = $this->input->post('revenue_advance');
				$this->mo_revenue->revenue_expenses = $this->input->post('revenue_expenses');
				$this->mo_revenue->revenue_payable = $this->input->post('revenue_payable');
				$this->mo_revenue->revenue_taxfuture = $this->input->post('revenue_taxfuture');
				$this->mo_revenue->revenue_account = $this->input->post('revenue_account');
                                $this->mo_revenue->revenue_account2 = $this->input->post('revenue_account2');
                                $this->mo_revenue->revenue_em2 = $this->input->post('revenue_em2');
                                $this->mo_revenue->revenue_em22 = $this->input->post('revenue_em22');
				$this->mo_revenue->revenue_amount = $this->input->post('revenue_amount');
                                $this->mo_revenue->revenue_amount2 = $this->input->post('revenue_amount2');
				
				$this->mo_revenue->updates();
				redirect('admin/revenue/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_revenue->revenue_id = $this->input->post('revenue_id');
				$this->mo_revenue->revenue_date = $this->input->post('revenue_date');
				$this->mo_revenue->revenue_list = $this->input->post('revenue_list');
                                $this->mo_revenue->revenue_em1 = $this->input->post('revenue_em1');
				$this->mo_revenue->revenue_bank = $this->input->post('revenue_bank');
				$this->mo_revenue->revenue_note = $this->input->post('revenue_note');
				$this->mo_revenue->revenue_debtor = $this->input->post('revenue_debtor');
				$this->mo_revenue->revenue_cash = $this->input->post('revenue_cash');
				$this->mo_revenue->revenue_trade = $this->input->post('revenue_trade');
				$this->mo_revenue->revenue_freight = $this->input->post('revenue_freight');
				$this->mo_revenue->revenue_tax = $this->input->post('revenue_tax');
				$this->mo_revenue->revenue_advance = $this->input->post('revenue_advance');
				$this->mo_revenue->revenue_expenses = $this->input->post('revenue_expenses');
				$this->mo_revenue->revenue_payable = $this->input->post('revenue_payable');
				$this->mo_revenue->revenue_taxfuture = $this->input->post('revenue_taxfuture');
				$this->mo_revenue->revenue_account = $this->input->post('revenue_account');
                                $this->mo_revenue->revenue_account2 = $this->input->post('revenue_account2');
                                $this->mo_revenue->revenue_em2 = $this->input->post('revenue_em2');
                                $this->mo_revenue->revenue_em22 = $this->input->post('revenue_em22');
				$this->mo_revenue->revenue_amount = $this->input->post('revenue_amount');
                                $this->mo_revenue->revenue_amount2 = $this->input->post('revenue_amount2');
				
				$this->mo_revenue->inserts();
				redirect('admin/revenue/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข ทะเบียนรับ';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('revenue/v_revenue_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_revenue->revenue_id = $id;
			$this->mo_revenue->deletes();
		}
		redirect('admin/revenue/', 'refresh');
	}

}
						