<?php

		include('da_pvlist.php');

		class Mo_pvlist extends Da_pvlist {
                    
			public function get_by_key2($key) {
				$this->db->select('*');
				$this->db->from('tb_pvlist');
				$this->db->where('pvlist_pmvid', $key);
				$query = $this->db->get()->result();
				return $query;
			}
                        
                        //หน้า view ใบสำคัญจ่าย
                        public function getall_join($key) {
				$this->db->from('tb_pvlist');
                                $this->db->select('pvlist_list');
				$this->db->order_by('pvlist_id', 'ASC');
                                $this->db->join('tb_paymentvoucher', 'tb_pvlist.pvlist_pmvid = tb_paymentvoucher.pmv_id');
                                $this->db->where('pvlist_pmvid', $key);
                                $this->db->limit('1');
				return $this->db->get()->result();
			}
                        //แบบไม่ limit
                        public function getall_join2($key) {
				$this->db->from('tb_pvlist');
                                $this->db->select('pvlist_list');
				$this->db->order_by('pvlist_id', 'ASC');
                                $this->db->join('tb_paymentvoucher', 'tb_pvlist.pvlist_pmvid = tb_paymentvoucher.pmv_id');
                                $this->db->where('pvlist_pmvid', $key);
				return $this->db->get()->num_rows();
			}
                        
                                public function get_type($key1,$key2) {
				$this->db->from('tb_pvlist');
                                $this->db->where('pvlist_pmvid', $key1);
                                $this->db->where('pvlist_code', $key2);                                
				return $this->db->get()->result();
			}
                        
                                public function get_tax($key1) {
                                $this->db->select_sum('pvlist_tax');    
				$this->db->from('tb_pvlist');
                                $this->db->where('pvlist_pmvid', $key1);                            
				return $this->db->get()->result();
			}
                        
                                public function get_vat($key1) {
                                $this->db->select_sum('pvlist_vat');    
				$this->db->from('tb_pvlist');
                                $this->db->where('pvlist_pmvid', $key1);                            
				return $this->db->get()->result();
			}
                        
		}
		