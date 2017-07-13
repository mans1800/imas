<?php

		include('da_paymentvoucher.php');

		class Mo_paymentvoucher extends Da_paymentvoucher {
    //หาจำนวนแถวของเดือนและปีที่เลือก เพื่อคำนวณค่า PV ในใบสำคัญจ่าย
    public function get_pvdate($key) {
        $this->db->from('tb_paymentvoucher');
        $this->db->where("DATE_FORMAT(pmv_date,'%Y/%m') =",$key);
        return $this->db->get()->num_rows();
       
    }
    
    			public function getall_join() {
				$this->db->from('tb_paymentvoucher');
				$this->db->order_by('pmv_id', 'ASC');
                                $this->db->join('tb_company', 'tb_paymentvoucher.pmv_to = tb_company.company_id');
                                $this->db->join('tb_pvlist', 'tb_paymentvoucher.pmv_id = tb_pvlist.pvlist_pmvid');
                                $this->db->group_by('tb_paymentvoucher.pmv_id');
				return $this->db->get()->result();
			}



		}
		