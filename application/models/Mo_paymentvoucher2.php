<?php

include('da_paymentvoucher2.php');

class Mo_paymentvoucher2 extends Da_paymentvoucher2 {

    //หาจำนวนแถวของเดือนและปีที่เลือก เพื่อคำนวณค่า PV ในใบสำคัญจ่าย
    public function get_pvdate($key) {
        $this->db->from('tb_paymentvoucher2');
        $this->db->where("DATE_FORMAT(pmv2_date,'%Y/%m') =", $key);
        return $this->db->get()->num_rows();
    }

    public function getall_join() {
        $this->db->from('tb_paymentvoucher2');
        $this->db->order_by('pmv2_id', 'ASC');
        $this->db->join('tb_company', 'tb_paymentvoucher2.pmv2_to = tb_company.company_id');
        $this->db->join('tb_pvlist2', 'tb_paymentvoucher2.pmv2_id = tb_pvlist2.pvlist2_pmvid');
        $this->db->group_by('tb_paymentvoucher2.pmv2_id');
        return $this->db->get()->result();
    }

    public function getsub($key) {
        $this->db->from('tb_paymentvoucher2');
        $this->db->join('tb_paymentvoucher', 'tb_paymentvoucher2.pmv2_pmvid = tb_paymentvoucher.pmv_id');
        $this->db->join('tb_pvlist2', 'tb_paymentvoucher2.pmv2_id = tb_pvlist2.pvlist2_pmvid2');
        $this->db->where('pvlist2_pmvid1', $key);
        return $this->db->get()->result();
    }

}
