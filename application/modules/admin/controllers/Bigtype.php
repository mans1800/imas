<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Bigtype extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_bigtype');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Bigtype';
			$this->mViewData['data_cat'] = $this->mo_bigtype->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('bigtype/v_bigtype');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('bigtype_name','Bigtype_name', 'required');
						
		$this->mViewData['bigtype'] = '';

		if($id!=NULL || !empty($this->input->post('bigtype_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['bigtype'] = $this->mo_bigtype->get_by_key($id);
			}
			else{
			$this->mo_bigtype->bigtype_id = $this->input->post('bigtype_id');
				$this->mo_bigtype->bigtype_name = $this->input->post('bigtype_name');
				
				$this->mo_bigtype->updates();
				redirect('admin/bigtype/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_bigtype->bigtype_id = $this->input->post('bigtype_id');
				$this->mo_bigtype->bigtype_name = $this->input->post('bigtype_name');
				
				$this->mo_bigtype->inserts();
				redirect('admin/bigtype/', 'refresh');
			}
		}

		$this->mPageTitle = 'Create bigtype';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('bigtype/v_bigtype_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_bigtype->bigtype_id = $id;
			$this->mo_bigtype->deletes();
		}
		redirect('admin/bigtype/', 'refresh');
	}

}
						