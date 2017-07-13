<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paymentvoucher extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_builder');
        $this->load->library('form_validation');
        $this->load->model('mo_paymentvoucher');
        $this->load->model('mo_paymentvoucher2');
        $this->load->model('mo_company');
        $this->load->model('mo_pvlist');
        $this->load->model('mo_pvlist2');
        $this->load->model('mo_type');
        $this->load->helper('url');
        $this->load->helper('function_helper');
    }

    public function index() {
        $this->load->library('form_validation');
        $this->mPageTitle = 'ใบสำคัญจ่าย';
        $this->mViewData['data_cat'] = $this->mo_paymentvoucher->getall_join();

        $form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->render('paymentvoucher/v_paymentvoucher');
    }

    public function create($id = NULL) {

        //หาเลขที่ PV 2017-05-12
        $xxx = substr(($this->input->post('pmv_date')), 0, 7);
        $xxy1 = substr(($this->input->post('pmv_date')), 5, 1);
        $xxy2 = substr(($this->input->post('pmv_date')), 6, 1);

        if ($xxy1 != 0) {
            $xxy3 = $xxy1 . $xxy2;
        } else {
            $xxy3 = $xxy2;
        }

        $data_numpv = $this->mo_paymentvoucher->get_pvdate($xxx);
        $xxy4 = $data_numpv + 1;

        $this->mViewData['data_companyx'] = $this->mo_company->get_all();
        $this->mViewData['data_company'] = $this->mo_company->get_all();


        $this->mViewData['data_type'] = $this->mo_type->get_all();


        $this->load->library('form_validation');
        $this->form_validation->set_rules('pmv_date', 'วันที่', 'required');

        $this->form_validation->set_message("required", "กรุณากรอกข้อมูล %s");
        $this->mViewData['paymentvoucher'] = '';

        if ($id != NULL || !empty($this->input->post('pmv_id'))) {
            if ($this->form_validation->run() == FALSE) {
                $this->mViewData['paymentvoucher'] = $this->mo_paymentvoucher->get_by_key($id);

                $this->mViewData['pvlist'] = $this->mo_pvlist->get_by_key2($id);
            } else {
                $this->db->trans_begin();

                $countlist = $this->mo_pvlist->getall_join2($id);
                for ($i = $countlist; $i < 8; $i++) {
                    if ((($this->input->post('pvlist_account')[$i]) != null) || (($this->input->post('pvlist_list')[$i]) != null) || (($this->input->post('pvlist_vat')[$i]) != null) || (($this->input->post('pvlist_tax')[$i]) != null) || (($this->input->post('pvlist_total')[$i]) != null)) {
                        $this->mo_pvlist->pvlist_pmvid = $id;
                        $this->mo_pvlist->pvlist_account = $this->input->post('pvlist_account')[$i];
                        $this->mo_pvlist->pvlist_code = $this->input->post('pvlist_code')[$i];
                        $this->mo_pvlist->pvlist_list = $this->input->post('pvlist_list')[$i];
                        $this->mo_pvlist->pvlist_vat = $this->input->post('pvlist_vat')[$i];
                        $this->mo_pvlist->pvlist_tax = $this->input->post('pvlist_tax')[$i];
                        
                        if (!empty($this->input->post('checktax' . $i))) {
                            $this->mo_pvlist->pvlist_checktax = '1';
                        } else {
                            $this->mo_pvlist->pvlist_checktax = '0';
                        }

                        $this->mo_pvlist->pvlist_total = $this->input->post('pvlist_total')[$i];

                        if (!empty($this->input->post('checktotal' . $i))) {
                            $this->mo_pvlist->pvlist_checktotal = '1';
                        } else {
                            $this->mo_pvlist->pvlist_checktotal = '0';
                        }
                        
                        $this->mo_pvlist->inserts();
                    }
                }

                $this->mo_paymentvoucher->pmv_id = $this->input->post('pmv_id');
                $this->mo_paymentvoucher->pmv_no = $this->input->post('pmv_no');
                $this->mo_paymentvoucher->pmv_to = $this->input->post('pmv_to');
                $this->mo_paymentvoucher->pmv_date = $this->input->post('pmv_date');
                $this->mo_paymentvoucher->pmv_check = $this->input->post('pmv_check');
                $this->mo_paymentvoucher->pmv_checkno = $this->input->post('pmv_checkno');
                $this->mo_paymentvoucher->pmv_checkdate = $this->input->post('pmv_checkdate');
                $this->mo_paymentvoucher->pmv_total = $this->input->post('pmv_total');
                $this->mo_paymentvoucher->pmv_save = $this->input->post('pmv_save');

                $this->mo_paymentvoucher->updates();

                for ($i = 0; $i < $countlist; $i++) {

                    $this->mo_pvlist->pvlist_id = $this->input->post('pvlist_id')[$i];
                    $this->mo_pvlist->pvlist_pmvid = $this->input->post('pvlist_pmvid')[$i];
                    $this->mo_pvlist->pvlist_account = $this->input->post('pvlist_account')[$i];
                    $this->mo_pvlist->pvlist_code = $this->input->post('pvlist_code')[$i];
                    $this->mo_pvlist->pvlist_list = $this->input->post('pvlist_list')[$i];
                    $this->mo_pvlist->pvlist_vat = $this->input->post('pvlist_vat')[$i];
                    $this->mo_pvlist->pvlist_tax = $this->input->post('pvlist_tax')[$i];

                        if (!empty($this->input->post('checktax' . $i))) {
                            $this->mo_pvlist->pvlist_checktax = '1';
                        } else {
                            $this->mo_pvlist->pvlist_checktax = '0';
                        }
                    
                    $this->mo_pvlist->pvlist_total = $this->input->post('pvlist_total')[$i];

                       if (!empty($this->input->post('checktotal' . $i))) {
                            $this->mo_pvlist->pvlist_checktotal = '1';
                        } else {
                            $this->mo_pvlist->pvlist_checktotal = '0';
                        }
                    
                    $this->mo_pvlist->updates();
                }




                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    redirect('admin/paymentvoucher/');
                } else {
                    $this->db->trans_commit();
                    redirect('admin/paymentvoucher/');
                }


                redirect('admin/paymentvoucher/', 'refresh');
            }
        } else {
            if ($this->form_validation->run() == FALSE) {
                
            } else {
                $this->db->trans_begin();

                $this->mo_paymentvoucher->pmv_id = $this->input->post('pmv_id');
                $this->mo_paymentvoucher->pmv_no = $xxy4 . '/' . $xxy3;
                $this->mo_paymentvoucher->pmv_to = $this->input->post('pmv_to');
                $this->mo_paymentvoucher->pmv_date = $this->input->post('pmv_date');
                $this->mo_paymentvoucher->pmv_check = $this->input->post('pmv_check');
                $this->mo_paymentvoucher->pmv_checkno = $this->input->post('pmv_checkno');
                $this->mo_paymentvoucher->pmv_checkdate = $this->input->post('pmv_checkdate');
                $this->mo_paymentvoucher->pmv_total = $this->input->post('pmv_total');
                $this->mo_paymentvoucher->pmv_save = $this->input->post('pmv_save');

                $this->mo_paymentvoucher->inserts();
                $last_id = $this->db->insert_id();



                for ($i = 0; $i < 8; $i++) {
                    if ((($this->input->post('pvlist_account')[$i]) != null) || (($this->input->post('pvlist_list')[$i]) != null) || (($this->input->post('pvlist_vat')[$i]) != null) || (($this->input->post('pvlist_tax')[$i]) != null) || (($this->input->post('pvlist_total')[$i]) != null)) {
                        $this->mo_pvlist->pvlist_id = $this->input->post('pvlist_id');
                        $this->mo_pvlist->pvlist_pmvid = $last_id;
                        $this->mo_pvlist->pvlist_account = $this->input->post('pvlist_account')[$i];
                        $this->mo_pvlist->pvlist_code = $this->input->post('pvlist_code')[$i];
                        $this->mo_pvlist->pvlist_list = $this->input->post('pvlist_list')[$i];
                        $this->mo_pvlist->pvlist_vat = $this->input->post('pvlist_vat')[$i];
                        $this->mo_pvlist->pvlist_tax = $this->input->post('pvlist_tax')[$i];


                        if (!empty($this->input->post('checktax' . $i))) {
                            $this->mo_pvlist->pvlist_checktax = '1';
                        } else {
                            $this->mo_pvlist->pvlist_checktax = '0';
                        }

                        $this->mo_pvlist->pvlist_total = $this->input->post('pvlist_total')[$i];

                        if (!empty($this->input->post('checktotal' . $i))) {
                            $this->mo_pvlist->pvlist_checktotal = '1';
                        } else {
                            $this->mo_pvlist->pvlist_checktotal = '0';
                        }
                        
                        $this->mo_pvlist->inserts();
                    }
                }

                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    redirect('admin/paymentvoucher/');
                } else {
                    $this->db->trans_commit();
                    redirect('admin/paymentvoucher/');
                }

                redirect('admin/paymentvoucher/', 'refresh');
            }
        }

        $this->mPageTitle = 'เพิ่ม/แก้ไข ใบสำคัญจ่าย';

        $form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->render('paymentvoucher/v_paymentvoucher_create');
    }

    public function deletes($id = NULL) {
        if ($id != NULL) {
            $this->mo_paymentvoucher->pmv_id = $id;
            $this->mo_paymentvoucher->deletes();
        }
        redirect('admin/paymentvoucher/', 'refresh');
    }

    public function expend() {
        $this->load->library('form_validation');
        $this->mPageTitle = 'ทะเบียนจ่าย';
        $this->mViewData['data_cat'] = $this->mo_paymentvoucher->getall_join();

        $form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->render('paymentvoucher/v_expend');
    }

}
