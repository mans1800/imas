<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Sumdata extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_sumdata');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'สรุป';
			$this->mViewData['data_cat'] = $this->mo_sumdata->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('sumdata/v_sumdata');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('sumdata_sumid','Sumdata_sumid', 'required');
				$this->form_validation->set_rules('sumdata_name','Sumdata_name', 'required');
				$this->form_validation->set_rules('sumdata_em1','Sumdata_em1', 'required');
				$this->form_validation->set_rules('sumdata_em2','Sumdata_em2', 'required');
				$this->form_validation->set_rules('sumdata_debit','Sumdata_debit', 'required');
				$this->form_validation->set_rules('sumdata_credit','Sumdata_credit', 'required');

						
		$this->mViewData['sumdata'] = '';

		if($id!=NULL || !empty($this->input->post('sumdata_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['sumdata'] = $this->mo_sumdata->get_by_key($id);
			}
			else{
			$this->mo_sumdata->sumdata_id = $this->input->post('sumdata_id');
				$this->mo_sumdata->sumdata_sumid = $this->input->post('sumdata_sumid');
				$this->mo_sumdata->sumdata_name = $this->input->post('sumdata_name');
				$this->mo_sumdata->sumdata_em1 = $this->input->post('sumdata_em1');
				$this->mo_sumdata->sumdata_em2 = $this->input->post('sumdata_em2');
				$this->mo_sumdata->sumdata_debit = $this->input->post('sumdata_debit');
				$this->mo_sumdata->sumdata_credit = $this->input->post('sumdata_credit');

				
				$this->mo_sumdata->updates();
				redirect('admin/sumdata/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_sumdata->sumdata_id = $this->input->post('sumdata_id');
				$this->mo_sumdata->sumdata_sumid = $this->input->post('sumdata_sumid');
				$this->mo_sumdata->sumdata_name = $this->input->post('sumdata_name');
				$this->mo_sumdata->sumdata_em1 = $this->input->post('sumdata_em1');
				$this->mo_sumdata->sumdata_em2 = $this->input->post('sumdata_em2');
				$this->mo_sumdata->sumdata_debit = $this->input->post('sumdata_debit');
				$this->mo_sumdata->sumdata_credit = $this->input->post('sumdata_credit');
				$this->mo_sumdata->sumdata_update = $this->input->post('sumdata_update');
				
				$this->mo_sumdata->inserts();
				redirect('admin/sumdata/', 'refresh');
			}
		}

		$this->mPageTitle = 'เพิ่ม/แก้ไข สรุป';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('sumdata/v_sumdata_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_sumdata->sumdata_id = $id;
			$this->mo_sumdata->deletes();
		}
		redirect('admin/sumdata/', 'refresh');
	}

}
						