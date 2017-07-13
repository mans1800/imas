<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typeaccount extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_builder');
        $this->load->library('form_validation');
        $this->load->model('mo_typeaccount');
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->helper('function_helper');
    }

    public function index() {

        $this->load->library('form_validation');
        $this->mPageTitle = 'ประเภทของบัญชี';
        $this->mViewData['data_cat'] = $this->mo_typeaccount->get_all();
        $form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->render('typeaccount/v_typeaccount');
    }

    public function create($id = NULL) {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('typeaccount_code', 'Code', 'required');
        $this->form_validation->set_rules('typeaccount_name', 'ชื่อ', 'required');

        $this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");

        $this->mViewData['typeaccount'] = '';

        if ($id != NULL || !empty($this->input->post('typeaccount_id'))) {
            if ($this->form_validation->run() == FALSE) {
                $this->mViewData['typeaccount'] = $this->mo_typeaccount->get_by_key($id);
            } else {
                $this->db->trans_begin();
                $this->mo_typeaccount->typeaccount_id = $this->input->post('typeaccount_id');
                $this->mo_typeaccount->typeaccount_code = $this->input->post('typeaccount_code');
                $this->mo_typeaccount->typeaccount_type = $this->input->post('typeaccount_type');
                $this->mo_typeaccount->typeaccount_name = $this->input->post('typeaccount_name');

                $this->mo_typeaccount->updates();

                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    redirect('admin/typeaccount/');
                } else {
                    $this->db->trans_commit();
                    redirect('admin/typeaccount/');
                }
            }
        } else {
            if ($this->form_validation->run() == FALSE) {
                
            } else {
                $this->db->trans_begin();
                $this->mo_typeaccount->typeaccount_id = $this->input->post('typeaccount_id');
                $this->mo_typeaccount->typeaccount_code = $this->input->post('typeaccount_code');
                $this->mo_typeaccount->typeaccount_type = $this->input->post('typeaccount_type');
                $this->mo_typeaccount->typeaccount_name = $this->input->post('typeaccount_name');

                $this->mo_typeaccount->inserts();

                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    redirect('admin/typeaccount/');
                } else {
                    $this->db->trans_commit();
                    redirect('admin/typeaccount/');
                }
            }
        }

        $this->mPageTitle = 'แก้ไข ประเภทของบัญชี';

        $form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->render('typeaccount/v_typeaccount_create');
    }

    public function deletes($id = NULL) {
        if ($id != NULL) {
            $this->mo_typeaccount->typeaccount_id = $id;
            $this->mo_typeaccount->deletes();
        }
        redirect('admin/typeaccount/', 'refresh');
    }

    public function create2() {

        $this->db->trans_begin();
        $this->mo_typeaccount->typeaccount_id = $this->input->post('typeaccount_id');
        $this->mo_typeaccount->typeaccount_code = $this->input->post('typeaccount_code');
        $this->mo_typeaccount->typeaccount_type = $this->input->post('typeaccount_type');
        $this->mo_typeaccount->typeaccount_name = $this->input->post('typeaccount_name');

        $this->mo_typeaccount->inserts();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            redirect('admin/typeaccount/');
        } else {
            $this->db->trans_commit();
            redirect('admin/typeaccount/');
        }
    }

}
