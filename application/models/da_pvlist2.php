<?php
			class Da_pvlist2 extends MY_Model { 
			public $pvlist2_id;
                        public $pvlist2_pmvid1;
			public $pvlist2_pmvid2;
			public $pvlist2_account;
			public $pvlist2_code;
			public $pvlist2_list;
			public $pvlist2_vat;
			public $pvlist2_tax;
			public $pvlist2_total;
			
			public function inserts() {
				$this->db->set('pvlist2_id', $this->pvlist2_id);
                                $this->db->set('pvlist2_pmvid1', $this->pvlist2_pmvid1);
				$this->db->set('pvlist2_pmvid2', $this->pvlist2_pmvid2);
				$this->db->set('pvlist2_account', $this->pvlist2_account);
				$this->db->set('pvlist2_code', $this->pvlist2_code);
				$this->db->set('pvlist2_list', $this->pvlist2_list);
				$this->db->set('pvlist2_vat', $this->pvlist2_vat);
				$this->db->set('pvlist2_tax', $this->pvlist2_tax);
				$this->db->set('pvlist2_total', $this->pvlist2_total);
				
				$this->db->from('tb_pvlist2');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_pvlist2');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_pvlist2', $data, $key);
			}
			public function updates() {
				
			$this->db->set('pvlist2_id', $this->pvlist2_id);
				$this->db->set('pvlist2_pmvid2', $this->pvlist2_pmvid2);
                                $this->db->set('pvlist2_pmvid1', $this->pvlist2_pmvid1);
				$this->db->set('pvlist2_account', $this->pvlist2_account);
				$this->db->set('pvlist2_code', $this->pvlist2_code);
				$this->db->set('pvlist2_list', $this->pvlist2_list);
				$this->db->set('pvlist2_vat', $this->pvlist2_vat);
				$this->db->set('pvlist2_tax', $this->pvlist2_tax);
				$this->db->set('pvlist2_total', $this->pvlist2_total);
				
				$this->db->from('tb_pvlist2');
				$this->db->where('pvlist2_id', $this->pvlist2_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_pvlist2');
				$this->db->where('pvlist2_id', $this->pvlist2_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_pvlist2');
				$this->db->order_by('pvlist2_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_pvlist2');
				$this->db->where('pvlist2_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}