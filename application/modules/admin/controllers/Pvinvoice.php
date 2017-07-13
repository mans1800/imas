<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Pvinvoice extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_pvinvoice');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'INVOICE';
			$this->mViewData['data_cat'] = $this->mo_pvinvoice->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('pvinvoice/v_pvinvoice');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('pvinvoice_supplierid','Pvinvoice_supplierid', 'required');
				$this->form_validation->set_rules('pvinvoice_suptaxid','Pvinvoice_suptaxid', 'required');
				$this->form_validation->set_rules('pvinvoice_suptypeid','Pvinvoice_suptypeid', 'required');
				$this->form_validation->set_rules('pvinvoice_subaddid','Pvinvoice_subaddid', 'required');
				$this->form_validation->set_rules('pvinvoice_no','Pvinvoice_no', 'required');
				$this->form_validation->set_rules('pvinvoice_date','Pvinvoice_date', 'required');
				$this->form_validation->set_rules('pvinvoice_crterm','Pvinvoice_crterm', 'required');
				$this->form_validation->set_rules('pvinvoice_vat','Pvinvoice_vat', 'required');
				$this->form_validation->set_rules('pvinvoice_nonvat','Pvinvoice_nonvat', 'required');
				$this->form_validation->set_rules('pvinvoice_total','Pvinvoice_total', 'required');
				$this->form_validation->set_rules('pvinvoice_status','Pvinvoice_status', 'required');
				$this->form_validation->set_rules('pvinvoice_des','Pvinvoice_des', 'required');
				$this->form_validation->set_rules('pvinvoice_update','Pvinvoice_update', 'required');
				$this->form_validation->set_rules('pvinvoice_save','Pvinvoice_save', 'required');
						
		$this->mViewData['pvinvoice'] = '';

		if($id!=NULL || !empty($this->input->post('pvinvoice_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['pvinvoice'] = $this->mo_pvinvoice->get_by_key($id);
			}
			else{
			$this->mo_pvinvoice->pvinvoice_id = $this->input->post('pvinvoice_id');
				$this->mo_pvinvoice->pvinvoice_supplierid = $this->input->post('pvinvoice_supplierid');
				$this->mo_pvinvoice->pvinvoice_suptaxid = $this->input->post('pvinvoice_suptaxid');
				$this->mo_pvinvoice->pvinvoice_suptypeid = $this->input->post('pvinvoice_suptypeid');
				$this->mo_pvinvoice->pvinvoice_subaddid = $this->input->post('pvinvoice_subaddid');
				$this->mo_pvinvoice->pvinvoice_no = $this->input->post('pvinvoice_no');
				$this->mo_pvinvoice->pvinvoice_date = $this->input->post('pvinvoice_date');
				$this->mo_pvinvoice->pvinvoice_crterm = $this->input->post('pvinvoice_crterm');
				$this->mo_pvinvoice->pvinvoice_vat = $this->input->post('pvinvoice_vat');
				$this->mo_pvinvoice->pvinvoice_nonvat = $this->input->post('pvinvoice_nonvat');
				$this->mo_pvinvoice->pvinvoice_total = $this->input->post('pvinvoice_total');
				$this->mo_pvinvoice->pvinvoice_status = $this->input->post('pvinvoice_status');
				$this->mo_pvinvoice->pvinvoice_des = $this->input->post('pvinvoice_des');
				$this->mo_pvinvoice->pvinvoice_update = $this->input->post('pvinvoice_update');
				$this->mo_pvinvoice->pvinvoice_save = $this->input->post('pvinvoice_save');
				
				$this->mo_pvinvoice->updates();
				redirect('admin/pvinvoice/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_pvinvoice->pvinvoice_id = $this->input->post('pvinvoice_id');
				$this->mo_pvinvoice->pvinvoice_supplierid = $this->input->post('pvinvoice_supplierid');
				$this->mo_pvinvoice->pvinvoice_suptaxid = $this->input->post('pvinvoice_suptaxid');
				$this->mo_pvinvoice->pvinvoice_suptypeid = $this->input->post('pvinvoice_suptypeid');
				$this->mo_pvinvoice->pvinvoice_subaddid = $this->input->post('pvinvoice_subaddid');
				$this->mo_pvinvoice->pvinvoice_no = $this->input->post('pvinvoice_no');
				$this->mo_pvinvoice->pvinvoice_date = $this->input->post('pvinvoice_date');
				$this->mo_pvinvoice->pvinvoice_crterm = $this->input->post('pvinvoice_crterm');
				$this->mo_pvinvoice->pvinvoice_vat = $this->input->post('pvinvoice_vat');
				$this->mo_pvinvoice->pvinvoice_nonvat = $this->input->post('pvinvoice_nonvat');
				$this->mo_pvinvoice->pvinvoice_total = $this->input->post('pvinvoice_total');
				$this->mo_pvinvoice->pvinvoice_status = $this->input->post('pvinvoice_status');
				$this->mo_pvinvoice->pvinvoice_des = $this->input->post('pvinvoice_des');
				$this->mo_pvinvoice->pvinvoice_update = $this->input->post('pvinvoice_update');
				$this->mo_pvinvoice->pvinvoice_save = $this->input->post('pvinvoice_save');
				
				$this->mo_pvinvoice->inserts();
				redirect('admin/pvinvoice/', 'refresh');
			}
		}

		$this->mPageTitle = 'INVOICE';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('pvinvoice/v_pvinvoice_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_pvinvoice->pvinvoice_id = $id;
			$this->mo_pvinvoice->deletes();
		}
		redirect('admin/pvinvoice/', 'refresh');
	}

}
						