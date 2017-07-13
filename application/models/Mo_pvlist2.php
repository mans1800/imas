<?php

		include('da_pvlist2.php');

		class Mo_pvlist2 extends Da_pvlist2 {
                    public function get_by_key2($key) {
				$this->db->select('*');
				$this->db->from('tb_pvlist2');
				$this->db->where('pvlist2_pmvid2', $key);
				$query = $this->db->get()->result();
				return $query;
			}
                        
                        //หน้า view ใบสำคัญจ่าย
                        public function getall_join($key) {
				$this->db->from('tb_pvlist2');
                                $this->db->select('pvlist2_list');
				$this->db->order_by('pvlist2_id', 'ASC');
                                $this->db->join('tb_paymentvoucher2', 'tb_pvlist2.pvlist2_pmvid2 = tb_paymentvoucher2.pmv2_id');
                                $this->db->where('pvlist2_pmvid2', $key);
                                $this->db->limit('1');
				return $this->db->get()->result();
			}
                        //แบบไม่ limit
                        public function getall_join2($key) {
				$this->db->from('tb_pvlist2');
                                $this->db->select('pvlist2_list');
				$this->db->order_by('pvlist2_id', 'ASC');
                                $this->db->join('tb_paymentvoucher2', 'tb_pvlist2.pvlist2_pmvid2 = tb_paymentvoucher2.pmv2_id');
                                $this->db->where('pvlist2_pmvid2', $key);
				return $this->db->get()->num_rows();
			}
                        
                                public function get_type($key1,$key2) {
				$this->db->from('tb_pvlist2');
                                $this->db->where('pvlist2_pmvid2', $key1);
                                $this->db->where('pvlist2_code', $key2);                                
				return $this->db->get()->result();
			}
                        
                                public function get_tax($key1) {
                                $this->db->select_sum('pvlist2_tax');    
				$this->db->from('tb_pvlist2');
                                $this->db->where('pvlist2_pmvid2', $key1);                            
				return $this->db->get()->result();
			}
                        
                                public function get_vat($key1) {
                                $this->db->select_sum('pvlist2_vat');    
				$this->db->from('tb_pvlist2');
                                $this->db->where('pvlist2_pmvid2', $key1);                            
				return $this->db->get()->result();
			}
		}
		