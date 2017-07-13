<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Account extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_account');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Account';
			$this->mViewData['data_cat'] = $this->mo_account->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('account/v_account');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('account_code','รหัสบัญชี', 'required');
				$this->form_validation->set_rules('account_name','ชื่อบัญชี', 'required');
                                $this->form_validation->set_rules('account_year','ปี', 'required');
                                
                                $this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
						
		$this->mViewData['account'] = '';

		if($id!=NULL || !empty($this->input->post('account_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['account'] = $this->mo_account->get_by_key($id);
			}
			else{
			$this->mo_account->account_id = $this->input->post('account_id');
				$this->mo_account->account_code = $this->input->post('account_code');
				$this->mo_account->account_name = $this->input->post('account_name');
				$this->mo_account->account_year = $this->input->post('account_year');
				
				$this->mo_account->updates();
				redirect('admin/account/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_account->account_id = $this->input->post('account_id');
				$this->mo_account->account_code = $this->input->post('account_code');
				$this->mo_account->account_name = $this->input->post('account_name');
				$this->mo_account->account_year = $this->input->post('account_year');
				
				$this->mo_account->inserts();
				redirect('admin/account/', 'refresh');
			}
		}

		$this->mPageTitle = 'Create Account';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('account/v_account_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_account->account_id = $id;
			$this->mo_account->deletes();
		}
		redirect('admin/account/', 'refresh');
	}

}
						