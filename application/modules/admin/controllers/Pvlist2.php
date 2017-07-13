<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Pvlist2 extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_pvlist2');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Pvlist2';
			$this->mViewData['data_cat'] = $this->mo_pvlist2->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('pvlist2/v_pvlist2');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('pvlist2_pmvid','Pvlist2_pmvid', 'required');
				$this->form_validation->set_rules('pvlist2_account','Pvlist2_account', 'required');
				$this->form_validation->set_rules('pvlist2_code','Pvlist2_code', 'required');
				$this->form_validation->set_rules('pvlist2_list','Pvlist2_list', 'required');
				$this->form_validation->set_rules('pvlist2_vat','Pvlist2_vat', 'required');
				$this->form_validation->set_rules('pvlist2_tax','Pvlist2_tax', 'required');
				$this->form_validation->set_rules('pvlist2_total','Pvlist2_total', 'required');
				$this->form_validation->set_rules('pvlist2_num','Pvlist2_num', 'required');
						
		$this->mViewData['pvlist2'] = '';

		if($id!=NULL || !empty($this->input->post('pvlist2_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['pvlist2'] = $this->mo_pvlist2->get_by_key($id);
			}
			else{
			$this->mo_pvlist2->pvlist2_id = $this->input->post('pvlist2_id');
				$this->mo_pvlist2->pvlist2_pmvid = $this->input->post('pvlist2_pmvid');
				$this->mo_pvlist2->pvlist2_account = $this->input->post('pvlist2_account');
				$this->mo_pvlist2->pvlist2_code = $this->input->post('pvlist2_code');
				$this->mo_pvlist2->pvlist2_list = $this->input->post('pvlist2_list');
				$this->mo_pvlist2->pvlist2_vat = $this->input->post('pvlist2_vat');
				$this->mo_pvlist2->pvlist2_tax = $this->input->post('pvlist2_tax');
				$this->mo_pvlist2->pvlist2_total = $this->input->post('pvlist2_total');
				$this->mo_pvlist2->pvlist2_num = $this->input->post('pvlist2_num');
				
				$this->mo_pvlist2->updates();
				redirect('admin/pvlist2/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_pvlist2->pvlist2_id = $this->input->post('pvlist2_id');
				$this->mo_pvlist2->pvlist2_pmvid = $this->input->post('pvlist2_pmvid');
				$this->mo_pvlist2->pvlist2_account = $this->input->post('pvlist2_account');
				$this->mo_pvlist2->pvlist2_code = $this->input->post('pvlist2_code');
				$this->mo_pvlist2->pvlist2_list = $this->input->post('pvlist2_list');
				$this->mo_pvlist2->pvlist2_vat = $this->input->post('pvlist2_vat');
				$this->mo_pvlist2->pvlist2_tax = $this->input->post('pvlist2_tax');
				$this->mo_pvlist2->pvlist2_total = $this->input->post('pvlist2_total');
				$this->mo_pvlist2->pvlist2_num = $this->input->post('pvlist2_num');
				
				$this->mo_pvlist2->inserts();
				redirect('admin/pvlist2/', 'refresh');
			}
		}

		$this->mPageTitle = 'Create pvlist2';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('pvlist2/v_pvlist2_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_pvlist2->pvlist2_id = $id;
			$this->mo_pvlist2->deletes();
		}
		redirect('admin/pvlist2/', 'refresh');
	}

}
						