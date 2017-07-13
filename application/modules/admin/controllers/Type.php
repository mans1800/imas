<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Type extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_type');
                        $this->load->model('mo_bigtype');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'ประเภท';
			$this->mViewData['data_cat'] = $this->mo_type->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('type/v_type');
		}

		public function create($id=NULL) {
                    $this->mViewData['data_bigtype'] = $this->mo_bigtype->get_all();
			$this->load->library('form_validation');
				$this->form_validation->set_rules('type_bigtypeid','Type_bigtypeid', 'required');
				$this->form_validation->set_rules('type_name','Type_name', 'required');
						
		$this->mViewData['type'] = '';

		if($id!=NULL || !empty($this->input->post('type_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['type'] = $this->mo_type->get_by_key($id);
			}
			else{
			$this->mo_type->type_id = $this->input->post('type_id');
				$this->mo_type->type_bigtypeid = $this->input->post('type_bigtypeid');
				$this->mo_type->type_name = $this->input->post('type_name');
				
				$this->mo_type->updates();
				redirect('admin/type/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_type->type_id = $this->input->post('type_id');
				$this->mo_type->type_bigtypeid = $this->input->post('type_bigtypeid');
				$this->mo_type->type_name = $this->input->post('type_name');
				
				$this->mo_type->inserts();
				redirect('admin/type/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข ประเภท';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('type/v_type_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_type->type_id = $id;
			$this->mo_type->deletes();
		}
		redirect('admin/type/', 'refresh');
	}

}
						