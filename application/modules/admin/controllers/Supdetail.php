<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Supdetail extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_supdetail');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Supdetail';
			$this->mViewData['data_cat'] = $this->mo_supdetail->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('supdetail/v_supdetail');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('supdetail_supid','Supdetail_supid', 'required');
				$this->form_validation->set_rules('supdetail_address','Supdetail_address', 'required');
				$this->form_validation->set_rules('supdetail_email','Supdetail_email', 'required');
				$this->form_validation->set_rules('supdetail_phone','Supdetail_phone', 'required');
				$this->form_validation->set_rules('supdetail_taxno','Supdetail_taxno', 'required');
				$this->form_validation->set_rules('supdetail_branch','Supdetail_branch', 'required');
				$this->form_validation->set_rules('supdetail_branchname','Supdetail_branchname', 'required');
				$this->form_validation->set_rules('supdetail_des','Supdetail_des', 'required');
				$this->form_validation->set_rules('supdetail_update','Supdetail_update', 'required');
				$this->form_validation->set_rules('supdetail_save','Supdetail_save', 'required');
						
		$this->mViewData['supdetail'] = '';

		if($id!=NULL || !empty($this->input->post('supdetail_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['supdetail'] = $this->mo_supdetail->get_by_key($id);
			}
			else{
			$this->mo_supdetail->supdetail_id = $this->input->post('supdetail_id');
				$this->mo_supdetail->supdetail_supid = $this->input->post('supdetail_supid');
				$this->mo_supdetail->supdetail_address = $this->input->post('supdetail_address');
				$this->mo_supdetail->supdetail_email = $this->input->post('supdetail_email');
				$this->mo_supdetail->supdetail_phone = $this->input->post('supdetail_phone');
				$this->mo_supdetail->supdetail_taxno = $this->input->post('supdetail_taxno');
				$this->mo_supdetail->supdetail_branch = $this->input->post('supdetail_branch');
				$this->mo_supdetail->supdetail_branchname = $this->input->post('supdetail_branchname');
				$this->mo_supdetail->supdetail_des = $this->input->post('supdetail_des');
				$this->mo_supdetail->supdetail_update = $this->input->post('supdetail_update');
				$this->mo_supdetail->supdetail_save = $this->input->post('supdetail_save');
				
				$this->mo_supdetail->updates();
				redirect('admin/supdetail/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_supdetail->supdetail_id = $this->input->post('supdetail_id');
				$this->mo_supdetail->supdetail_supid = $this->input->post('supdetail_supid');
				$this->mo_supdetail->supdetail_address = $this->input->post('supdetail_address');
				$this->mo_supdetail->supdetail_email = $this->input->post('supdetail_email');
				$this->mo_supdetail->supdetail_phone = $this->input->post('supdetail_phone');
				$this->mo_supdetail->supdetail_taxno = $this->input->post('supdetail_taxno');
				$this->mo_supdetail->supdetail_branch = $this->input->post('supdetail_branch');
				$this->mo_supdetail->supdetail_branchname = $this->input->post('supdetail_branchname');
				$this->mo_supdetail->supdetail_des = $this->input->post('supdetail_des');
				$this->mo_supdetail->supdetail_update = $this->input->post('supdetail_update');
				$this->mo_supdetail->supdetail_save = $this->input->post('supdetail_save');
				
				$this->mo_supdetail->inserts();
				redirect('admin/supdetail/', 'refresh');
			}
		}

		$this->mPageTitle = 'Create supdetail';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('supdetail/v_supdetail_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_supdetail->supdetail_id = $id;
			$this->mo_supdetail->deletes();
		}
		redirect('admin/supdetail/', 'refresh');
	}

}
						