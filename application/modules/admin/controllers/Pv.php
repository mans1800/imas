<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Pv extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_pv');
                        $this->load->model('mo_supplier');
                        $this->load->model('mo_account');
                        $this->load->model('mo_typeaccount');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Payment Voucher';
			$this->mViewData['data_cat'] = $this->mo_pv->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('pv/v_pv');
		}

		public function create($id=NULL) {
                        $this->mViewData['data_supplier'] = $this->mo_supplier->get_all();
                        $this->mViewData['data_account'] = $this->mo_account->get_all();
                        $this->mViewData['data_type'] = $this->mo_typeaccount->get_all();

			$this->load->library('form_validation');
				$this->form_validation->set_rules('pv_hotelid','Pv_hotelid', 'required');

						
		$this->mViewData['pv'] = '';

		if($id!=NULL || !empty($this->input->post('pv_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['pv'] = $this->mo_pv->get_by_key($id);
			}
			else{
			$this->mo_pv->pv_id = $this->input->post('pv_id');
				$this->mo_pv->pv_hotelid = $this->input->post('pv_hotelid');
				$this->mo_pv->pv_supid = $this->input->post('pv_supid');
				$this->mo_pv->pv_ref = $this->input->post('pv_ref');
				$this->mo_pv->pv_checkdate = $this->input->post('pv_checkdate');
				$this->mo_pv->pv_checkno = $this->input->post('pv_checkno');
                                $this->mo_pv->pv_period = $this->input->post('pv_period');
                                $this->mo_pv->pv_trandate = $this->input->post('pv_trandate');
				$this->mo_pv->pv_total = $this->input->post('pv_total');
				$this->mo_pv->pv_listid = $this->input->post('pv_listid');
                                $this->mo_pv->pv_status = $this->input->post('pv_status');
 				$this->mo_pv->pv_save = $this->input->post('pv_save');
				
				$this->mo_pv->updates();
				redirect('admin/pv/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_pv->pv_id = $this->input->post('pv_id');
				$this->mo_pv->pv_hotelid = $this->input->post('pv_hotelid');
				$this->mo_pv->pv_supid = $this->input->post('pv_supid');
				$this->mo_pv->pv_ref = $this->input->post('pv_ref');
				$this->mo_pv->pv_checkdate = $this->input->post('pv_checkdate');
				$this->mo_pv->pv_checkno = $this->input->post('pv_checkno');
                                $this->mo_pv->pv_period = $this->input->post('pv_period');
                                $this->mo_pv->pv_trandate = $this->input->post('pv_trandate');
				$this->mo_pv->pv_total = $this->input->post('pv_total');
				$this->mo_pv->pv_listid = $this->input->post('pv_listid');
                                $this->mo_pv->pv_status = $this->input->post('pv_status');
        			$this->mo_pv->pv_save = $this->input->post('pv_save');
				
				$this->mo_pv->inserts();
				redirect('admin/pv/', 'refresh');
			}
		}

		$this->mPageTitle = 'Payment Voucher';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('pv/v_pv_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_pv->pv_id = $id;
			$this->mo_pv->deletes();
		}
		redirect('admin/pv/', 'refresh');
	}

}
						