<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Company extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_company');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'ชื่อบริษัท [ เจ้าหนี้ ]';
			$this->mViewData['data_cat'] = $this->mo_company->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('company/v_company');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
                        $this->form_validation->set_rules('company_code','Code', 'required');
				$this->form_validation->set_rules('company_name','ชื่อบริษัท', 'required');
                                $this->form_validation->set_rules('company_subname','ชื่อย่อ', 'required');
                                
                                $this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
						
		$this->mViewData['company'] = '';

		if($id!=NULL || !empty($this->input->post('company_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['company'] = $this->mo_company->get_by_key($id);
			}
			else{
			$this->mo_company->company_id = $this->input->post('company_id');
				$this->mo_company->company_code = $this->input->post('company_code');
                            $this->mo_company->company_name = $this->input->post('company_name');
                            $this->mo_company->company_subname = $this->input->post('company_subname');
				
				$this->mo_company->updates();
				redirect('admin/company/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_company->company_id = $this->input->post('company_id');
                        $this->mo_company->company_code = $this->input->post('company_code');
				$this->mo_company->company_name = $this->input->post('company_name');
                                $this->mo_company->company_subname = $this->input->post('company_subname');
				
				$this->mo_company->inserts();
				redirect('admin/company/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข ชื่อบริษัท [ เจ้าหนี้ ]';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('company/v_company_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_company->company_id = $id;
			$this->mo_company->deletes();
		}
		redirect('admin/company/', 'refresh');
	}
        
        public function create2() {

        $this->db->trans_begin();
        $this->mo_company->company_id = $this->input->post('company_id');
        $this->mo_company->company_code = $this->input->post('company_code');
        $this->mo_company->company_name = $this->input->post('company_name');
        $this->mo_company->company_subname = $this->input->post('company_subname');

        $this->mo_company->inserts();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            redirect('admin/company/');
        } else {
            $this->db->trans_commit();
            redirect('admin/company/');
        }
    }
}