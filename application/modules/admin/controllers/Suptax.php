<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Suptax extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_suptax');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Suptax';
			$this->mViewData['data_cat'] = $this->mo_suptax->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('suptax/v_suptax');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('suptax_supplierid','Suptax_supplierid', 'required');
				$this->form_validation->set_rules('suptax_taxnumber','Suptax_taxnumber', 'required');
						
		$this->mViewData['suptax'] = '';

		if($id!=NULL || !empty($this->input->post('suptax_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['suptax'] = $this->mo_suptax->get_by_key($id);
			}
			else{
			$this->mo_suptax->suptax_id = $this->input->post('suptax_id');
				$this->mo_suptax->suptax_supplierid = $this->input->post('suptax_supplierid');
				$this->mo_suptax->suptax_taxnumber = $this->input->post('suptax_taxnumber');
				
				$this->mo_suptax->updates();
				redirect('admin/suptax/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_suptax->suptax_id = $this->input->post('suptax_id');
				$this->mo_suptax->suptax_supplierid = $this->input->post('suptax_supplierid');
				$this->mo_suptax->suptax_taxnumber = $this->input->post('suptax_taxnumber');
				
				$this->mo_suptax->inserts();
				redirect('admin/suptax/', 'refresh');
			}
		}

		$this->mPageTitle = 'Suptax';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('suptax/v_suptax_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_suptax->suptax_id = $id;
			$this->mo_suptax->deletes();
		}
		redirect('admin/suptax/', 'refresh');
	}

}
						