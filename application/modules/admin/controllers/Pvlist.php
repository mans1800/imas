<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Pvlist extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_pvlist');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Pvlist';
			$this->mViewData['data_cat'] = $this->mo_pvlist->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('pvlist/v_pvlist');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('pvlist_pmvid','Pvlist_pmvid', 'required');

						
		$this->mViewData['pvlist'] = '';

		if($id!=NULL || !empty($this->input->post('pvlist_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['pvlist'] = $this->mo_pvlist->get_by_key($id);
			}
			else{
			$this->mo_pvlist->pvlist_id = $this->input->post('pvlist_id');
				$this->mo_pvlist->pvlist_pmvid = $this->input->post('pvlist_pmvid');
				$this->mo_pvlist->pvlist_account = $this->input->post('pvlist_account');
                                $this->mo_pvlist->pvlist_code = $this->input->post('pvlist_code');
				$this->mo_pvlist->pvlist_list = $this->input->post('pvlist_list');
				$this->mo_pvlist->pvlist_vat = $this->input->post('pvlist_vat');
				$this->mo_pvlist->pvlist_tax = $this->input->post('pvlist_tax');
				$this->mo_pvlist->pvlist_total = $this->input->post('pvlist_total');
				
				$this->mo_pvlist->updates();
				redirect('admin/pvlist/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_pvlist->pvlist_id = $this->input->post('pvlist_id');
				$this->mo_pvlist->pvlist_pmvid = $this->input->post('pvlist_pmvid');
				$this->mo_pvlist->pvlist_account = $this->input->post('pvlist_account');
                                $this->mo_pvlist->pvlist_code = $this->input->post('pvlist_code');
				$this->mo_pvlist->pvlist_list = $this->input->post('pvlist_list');
				$this->mo_pvlist->pvlist_vat = $this->input->post('pvlist_vat');
				$this->mo_pvlist->pvlist_tax = $this->input->post('pvlist_tax');
				$this->mo_pvlist->pvlist_total = $this->input->post('pvlist_total');
				
				$this->mo_pvlist->inserts();
				redirect('admin/pvlist/', 'refresh');
			}
		}

		$this->mPageTitle = 'Create pvlist';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('pvlist/v_pvlist_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_pvlist->pvlist_id = $id;
			$this->mo_pvlist->deletes();
		}
		redirect('admin/pvlist/', 'refresh');
	}

}
						