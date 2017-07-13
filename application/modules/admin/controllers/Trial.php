<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Trial extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_trial');
			$this->load->helper('url');
                        $this->load->helper('function');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'งบทดลองจ่าย';
			$this->mViewData['data_cat'] = $this->mo_trial->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('trial/v_trial');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('trial_1','Trial_1', 'required');

				$this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");		
		$this->mViewData['trial'] = '';

		if($id!=NULL || !empty($this->input->post('trial_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['trial'] = $this->mo_trial->get_by_key($id);
			}
			else{
			$this->mo_trial->trial_id = $this->input->post('trial_id');
				$this->mo_trial->trial_1 = $this->input->post('trial_1');
				$this->mo_trial->trial_2 = $this->input->post('trial_2');
				$this->mo_trial->trial_3 = $this->input->post('trial_3');
				$this->mo_trial->trial_4 = $this->input->post('trial_4');
				$this->mo_trial->trial_5 = $this->input->post('trial_5');
				$this->mo_trial->trial_6 = $this->input->post('trial_6');
				$this->mo_trial->trial_7 = $this->input->post('trial_7');
				$this->mo_trial->trial_8 = $this->input->post('trial_8');
				$this->mo_trial->trial_9 = $this->input->post('trial_9');
				$this->mo_trial->trial_10 = $this->input->post('trial_10');
				$this->mo_trial->trial_11 = $this->input->post('trial_11');
				$this->mo_trial->trial_12 = $this->input->post('trial_12');
				$this->mo_trial->trial_13 = $this->input->post('trial_13');
				$this->mo_trial->trial_14 = $this->input->post('trial_14');
				$this->mo_trial->trial_15 = $this->input->post('trial_15');
				$this->mo_trial->trial_16 = $this->input->post('trial_16');
				$this->mo_trial->trial_17 = $this->input->post('trial_17');
				$this->mo_trial->trial_18 = $this->input->post('trial_18');
				$this->mo_trial->trial_19 = $this->input->post('trial_19');
				$this->mo_trial->trial_20 = $this->input->post('trial_20');
				$this->mo_trial->trial_21 = $this->input->post('trial_21');
				$this->mo_trial->trial_22 = $this->input->post('trial_22');
				$this->mo_trial->trial_23 = $this->input->post('trial_23');
				$this->mo_trial->trial_24 = $this->input->post('trial_24');
				$this->mo_trial->trial_25 = $this->input->post('trial_25');
				$this->mo_trial->trial_26 = $this->input->post('trial_26');
				$this->mo_trial->trial_27 = $this->input->post('trial_27');
				$this->mo_trial->trial_28 = $this->input->post('trial_28');
				$this->mo_trial->trial_29 = $this->input->post('trial_29');
				$this->mo_trial->trial_30 = $this->input->post('trial_30');
				$this->mo_trial->trial_31 = $this->input->post('trial_31');
				$this->mo_trial->trial_32 = $this->input->post('trial_32');
				$this->mo_trial->trial_33 = $this->input->post('trial_33');
				$this->mo_trial->trial_34 = $this->input->post('trial_34');
				$this->mo_trial->trial_35 = $this->input->post('trial_35');
				$this->mo_trial->trial_36 = $this->input->post('trial_36');
				$this->mo_trial->trial_37 = $this->input->post('trial_37');
				$this->mo_trial->trial_38 = $this->input->post('trial_38');
				
				$this->mo_trial->updates();
				redirect('admin/trial/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_trial->trial_id = $this->input->post('trial_id');
				$this->mo_trial->trial_1 = $this->input->post('trial_1');
				$this->mo_trial->trial_2 = $this->input->post('trial_2');
				$this->mo_trial->trial_3 = $this->input->post('trial_3');
				$this->mo_trial->trial_4 = $this->input->post('trial_4');
				$this->mo_trial->trial_5 = $this->input->post('trial_5');
				$this->mo_trial->trial_6 = $this->input->post('trial_6');
				$this->mo_trial->trial_7 = $this->input->post('trial_7');
				$this->mo_trial->trial_8 = $this->input->post('trial_8');
				$this->mo_trial->trial_9 = $this->input->post('trial_9');
				$this->mo_trial->trial_10 = $this->input->post('trial_10');
				$this->mo_trial->trial_11 = $this->input->post('trial_11');
				$this->mo_trial->trial_12 = $this->input->post('trial_12');
				$this->mo_trial->trial_13 = $this->input->post('trial_13');
				$this->mo_trial->trial_14 = $this->input->post('trial_14');
				$this->mo_trial->trial_15 = $this->input->post('trial_15');
				$this->mo_trial->trial_16 = $this->input->post('trial_16');
				$this->mo_trial->trial_17 = $this->input->post('trial_17');
				$this->mo_trial->trial_18 = $this->input->post('trial_18');
				$this->mo_trial->trial_19 = $this->input->post('trial_19');
				$this->mo_trial->trial_20 = $this->input->post('trial_20');
				$this->mo_trial->trial_21 = $this->input->post('trial_21');
				$this->mo_trial->trial_22 = $this->input->post('trial_22');
				$this->mo_trial->trial_23 = $this->input->post('trial_23');
				$this->mo_trial->trial_24 = $this->input->post('trial_24');
				$this->mo_trial->trial_25 = $this->input->post('trial_25');
				$this->mo_trial->trial_26 = $this->input->post('trial_26');
				$this->mo_trial->trial_27 = $this->input->post('trial_27');
				$this->mo_trial->trial_28 = $this->input->post('trial_28');
				$this->mo_trial->trial_29 = $this->input->post('trial_29');
				$this->mo_trial->trial_30 = $this->input->post('trial_30');
				$this->mo_trial->trial_31 = $this->input->post('trial_31');
				$this->mo_trial->trial_32 = $this->input->post('trial_32');
				$this->mo_trial->trial_33 = $this->input->post('trial_33');
				$this->mo_trial->trial_34 = $this->input->post('trial_34');
				$this->mo_trial->trial_35 = $this->input->post('trial_35');
				$this->mo_trial->trial_36 = $this->input->post('trial_36');
				$this->mo_trial->trial_37 = $this->input->post('trial_37');
				$this->mo_trial->trial_38 = $this->input->post('trial_38');
				
				$this->mo_trial->inserts();
				redirect('admin/trial/', 'refresh');
			}
		}

		$this->mPageTitle = 'แก้ไข/เพิ่ม งบทดลองจ่าย';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('trial/v_trial_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_trial->trial_id = $id;
			$this->mo_trial->deletes();
		}
		redirect('admin/trial/', 'refresh');
	}

}
						