<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Suptype extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_suptype');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Suptype';
			$this->mViewData['data_cat'] = $this->mo_suptype->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('suptype/v_suptype');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('suptype_supplierid','Suptype_supplierid', 'required');
				$this->form_validation->set_rules('suptype_branchtype','Suptype_branchtype', 'required');
				$this->form_validation->set_rules('suptype_branchname','Suptype_branchname', 'required');
						
		$this->mViewData['suptype'] = '';

		if($id!=NULL || !empty($this->input->post('suptype_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['suptype'] = $this->mo_suptype->get_by_key($id);
			}
			else{
			$this->mo_suptype->suptype_id = $this->input->post('suptype_id');
                        $this->mo_suptype->suptype_code = $this->input->post('suptype_code');
				$this->mo_suptype->suptype_supplierid = $this->input->post('suptype_supplierid');
				$this->mo_suptype->suptype_branchtype = $this->input->post('suptype_branchtype');
				$this->mo_suptype->suptype_branchname = $this->input->post('suptype_branchname');
				
				$this->mo_suptype->updates();
				redirect('admin/suptype/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_suptype->suptype_id = $this->input->post('suptype_id');
                         $this->mo_suptype->suptype_code = $this->input->post('suptype_code');
				$this->mo_suptype->suptype_supplierid = $this->input->post('suptype_supplierid');
				$this->mo_suptype->suptype_branchtype = $this->input->post('suptype_branchtype');
				$this->mo_suptype->suptype_branchname = $this->input->post('suptype_branchname');
				
				$this->mo_suptype->inserts();
				redirect('admin/suptype/', 'refresh');
			}
		}

		$this->mPageTitle = 'Suptype';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('suptype/v_suptype_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_suptype->suptype_id = $id;
			$this->mo_suptype->deletes();
		}
		redirect('admin/suptype/', 'refresh');
	}

}
						