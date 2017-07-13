<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Supadd extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_supadd');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Supadd';
			$this->mViewData['data_cat'] = $this->mo_supadd->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('supadd/v_supadd');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('supadd_supplierid','Supadd_supplierid', 'required');
				$this->form_validation->set_rules('supadd_address','Supadd_address', 'required');
				$this->form_validation->set_rules('supadd_tel','Supadd_tel', 'required');
				$this->form_validation->set_rules('supadd_email','Supadd_email', 'required');
				$this->form_validation->set_rules('supadd_fax','Supadd_fax', 'required');
				$this->form_validation->set_rules('supadd_country','Supadd_country', 'required');
				$this->form_validation->set_rules('supadd_web','Supadd_web', 'required');
				$this->form_validation->set_rules('supadd_contactname','Supadd_contactname', 'required');
				$this->form_validation->set_rules('supadd_des','Supadd_des', 'required');
						
		$this->mViewData['supadd'] = '';

		if($id!=NULL || !empty($this->input->post('supadd_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['supadd'] = $this->mo_supadd->get_by_key($id);
			}
			else{
			$this->mo_supadd->supadd_id = $this->input->post('supadd_id');
				$this->mo_supadd->supadd_supplierid = $this->input->post('supadd_supplierid');
				$this->mo_supadd->supadd_address = $this->input->post('supadd_address');
				$this->mo_supadd->supadd_tel = $this->input->post('supadd_tel');
				$this->mo_supadd->supadd_email = $this->input->post('supadd_email');
				$this->mo_supadd->supadd_fax = $this->input->post('supadd_fax');
				$this->mo_supadd->supadd_country = $this->input->post('supadd_country');
				$this->mo_supadd->supadd_web = $this->input->post('supadd_web');
				$this->mo_supadd->supadd_contactname = $this->input->post('supadd_contactname');
				$this->mo_supadd->supadd_des = $this->input->post('supadd_des');
				
				$this->mo_supadd->updates();
				redirect('admin/supadd/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_supadd->supadd_id = $this->input->post('supadd_id');
				$this->mo_supadd->supadd_supplierid = $this->input->post('supadd_supplierid');
				$this->mo_supadd->supadd_address = $this->input->post('supadd_address');
				$this->mo_supadd->supadd_tel = $this->input->post('supadd_tel');
				$this->mo_supadd->supadd_email = $this->input->post('supadd_email');
				$this->mo_supadd->supadd_fax = $this->input->post('supadd_fax');
				$this->mo_supadd->supadd_country = $this->input->post('supadd_country');
				$this->mo_supadd->supadd_web = $this->input->post('supadd_web');
				$this->mo_supadd->supadd_contactname = $this->input->post('supadd_contactname');
				$this->mo_supadd->supadd_des = $this->input->post('supadd_des');
				
				$this->mo_supadd->inserts();
				redirect('admin/supadd/', 'refresh');
			}
		}

		$this->mPageTitle = 'Supadd';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('supadd/v_supadd_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_supadd->supadd_id = $id;
			$this->mo_supadd->deletes();
		}
		redirect('admin/supadd/', 'refresh');
	}

}
						