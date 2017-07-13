<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class company2 extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_company2');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'ชื่อบริษัท [ ลูกหนี้ ]';
			$this->mViewData['data_cat'] = $this->mo_company2->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('company2/v_company2');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
                        $this->form_validation->set_rules('company2_code','Code', 'required');
				$this->form_validation->set_rules('company2_name','ชื่อบริษัท', 'required');
                                $this->form_validation->set_rules('company2_subname','ชื่อย่อ', 'required');
                                
                                $this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
						
		$this->mViewData['company2'] = '';

		if($id!=NULL || !empty($this->input->post('company2_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['company2'] = $this->mo_company2->get_by_key($id);
			}
			else{
			$this->mo_company2->company2_id = $this->input->post('company2_id');
				$this->mo_company2->company2_code = $this->input->post('company2_code');
                            $this->mo_company2->company2_name = $this->input->post('company2_name');
                            $this->mo_company2->company2_subname = $this->input->post('company2_subname');
				
				$this->mo_company2->updates();
				redirect('admin/company2/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_company2->company2_id = $this->input->post('company2_id');
                        $this->mo_company2->company2_code = $this->input->post('company2_code');
				$this->mo_company2->company2_name = $this->input->post('company2_name');
                                $this->mo_company2->company2_subname = $this->input->post('company2_subname');
				
				$this->mo_company2->inserts();
				redirect('admin/company2/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข ชื่อบริษัท [ ลูกหนี้ ]';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('company2/v_company2_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_company2->company2_id = $id;
			$this->mo_company2->deletes();
		}
		redirect('admin/company2/', 'refresh');
	}
        
        public function create2() {

        $this->db->trans_begin();
        $this->mo_company2->company2_id = $this->input->post('company2_id');
        $this->mo_company2->company2_code = $this->input->post('company2_code');
        $this->mo_company2->company2_name = $this->input->post('company2_name');
        $this->mo_company2->company2_subname = $this->input->post('company2_subname');

        $this->mo_company2->inserts();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            redirect('admin/company2/');
        } else {
            $this->db->trans_commit();
            redirect('admin/company2/');
        }
    }
        
}
						