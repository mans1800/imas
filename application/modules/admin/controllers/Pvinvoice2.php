<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Pvinvoice2 extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_pvinvoice2');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Pvinvoice2';
			$this->mViewData['data_cat'] = $this->mo_pvinvoice2->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('pvinvoice2/v_pvinvoice2');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('pvinvoice2_pvinvoiceid','Pvinvoice2_pvinvoiceid', 'required');
				$this->form_validation->set_rules('pvinvoice2_no','Pvinvoice2_no', 'required');
				$this->form_validation->set_rules('pvinvoice2_des','Pvinvoice2_des', 'required');
				$this->form_validation->set_rules('pvinvoice2_amount','Pvinvoice2_amount', 'required');
						
		$this->mViewData['pvinvoice2'] = '';

		if($id!=NULL || !empty($this->input->post('pvinvoice2_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['pvinvoice2'] = $this->mo_pvinvoice2->get_by_key($id);
			}
			else{
			$this->mo_pvinvoice2->pvinvoice2_id = $this->input->post('pvinvoice2_id');
				$this->mo_pvinvoice2->pvinvoice2_pvinvoiceid = $this->input->post('pvinvoice2_pvinvoiceid');
				$this->mo_pvinvoice2->pvinvoice2_no = $this->input->post('pvinvoice2_no');
				$this->mo_pvinvoice2->pvinvoice2_des = $this->input->post('pvinvoice2_des');
				$this->mo_pvinvoice2->pvinvoice2_amount = $this->input->post('pvinvoice2_amount');
				
				$this->mo_pvinvoice2->updates();
				redirect('admin/pvinvoice2/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_pvinvoice2->pvinvoice2_id = $this->input->post('pvinvoice2_id');
				$this->mo_pvinvoice2->pvinvoice2_pvinvoiceid = $this->input->post('pvinvoice2_pvinvoiceid');
				$this->mo_pvinvoice2->pvinvoice2_no = $this->input->post('pvinvoice2_no');
				$this->mo_pvinvoice2->pvinvoice2_des = $this->input->post('pvinvoice2_des');
				$this->mo_pvinvoice2->pvinvoice2_amount = $this->input->post('pvinvoice2_amount');
				
				$this->mo_pvinvoice2->inserts();
				redirect('admin/pvinvoice2/', 'refresh');
			}
		}

		$this->mPageTitle = 'Create pvinvoice2';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('pvinvoice2/v_pvinvoice2_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_pvinvoice2->pvinvoice2_id = $id;
			$this->mo_pvinvoice2->deletes();
		}
		redirect('admin/pvinvoice2/', 'refresh');
	}

}
						