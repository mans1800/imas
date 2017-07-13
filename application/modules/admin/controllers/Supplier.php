<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Supplier extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_supplier');
                        $this->load->model('mo_suptype');
                        $this->load->model('mo_suptax');
                        $this->load->model('mo_supadd');
			$this->load->helper('url');
                        $this->load->helper('text');
                        $this->load->helper('function_helper');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Supplier';
			$this->mViewData['data_cat'] = $this->mo_supplier->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('supplier/v_supplier');
		}

		public function create($id=NULL) {

                        $this->mViewData['data_branch'] = $this->mo_suptype->get_all();
                        $this->mViewData['data_suptax'] = $this->mo_suptax->get_all2();
                        $this->mViewData['data_supadd'] = $this->mo_supadd->get_all2();
			$this->load->library('form_validation');
				$this->form_validation->set_rules('supplier_accountid','Supplier_accountid', 'required');
				$this->form_validation->set_rules('supplier_code','Supplier_code', 'required');
				$this->form_validation->set_rules('supplier_lookupcode','Supplier_lookupcode', 'required');
				$this->form_validation->set_rules('supplier_name','Supplier_name', 'required');
				$this->form_validation->set_rules('supplier_status','Supplier_status', 'required');
				$this->form_validation->set_rules('supplier_update','Supplier_update', 'required');
				$this->form_validation->set_rules('supplier_save','Supplier_save', 'required');
						
		$this->mViewData['supplier'] = '';

		if($id!=NULL || !empty($this->input->post('supplier_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['supplier'] = $this->mo_supplier->get_by_key($id);
			}
			else{
			$this->mo_supplier->supplier_id = $this->input->post('supplier_id');
				$this->mo_supplier->supplier_accountid = $this->input->post('supplier_accountid');
				$this->mo_supplier->supplier_code = $this->input->post('supplier_code');
				$this->mo_supplier->supplier_lookupcode = $this->input->post('supplier_lookupcode');
				$this->mo_supplier->supplier_name = $this->input->post('supplier_name');
				$this->mo_supplier->supplier_status = $this->input->post('supplier_status');
				$this->mo_supplier->supplier_update = $this->input->post('supplier_update');
				$this->mo_supplier->supplier_save = $this->input->post('supplier_save');
				
				$this->mo_supplier->updates();
				redirect('admin/supplier/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_supplier->supplier_id = $this->input->post('supplier_id');
				$this->mo_supplier->supplier_accountid = $this->input->post('supplier_accountid');
				$this->mo_supplier->supplier_code = $this->input->post('supplier_code');
				$this->mo_supplier->supplier_lookupcode = $this->input->post('supplier_lookupcode');
				$this->mo_supplier->supplier_name = $this->input->post('supplier_name');
				$this->mo_supplier->supplier_status = $this->input->post('supplier_status');
				$this->mo_supplier->supplier_update = $this->input->post('supplier_update');
				$this->mo_supplier->supplier_save = $this->input->post('supplier_save');
				
				$this->mo_supplier->inserts();
				redirect('admin/supplier/', 'refresh');
			}
		}

		$this->mPageTitle = 'Supplier';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('supplier/v_supplier_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_supplier->supplier_id = $id;
			$this->mo_supplier->deletes();
		}
		redirect('admin/supplier/', 'refresh');
	}

}
						