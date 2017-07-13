<?php
			class Da_pvlist extends MY_Model { 
			public $pvlist_id;
			public $pvlist_pmvid;
			public $pvlist_account;
                        public $pvlist_code;
			public $pvlist_list;
			public $pvlist_vat;
			public $pvlist_tax;
                        public $pvlist_checktax;
			public $pvlist_total;
                        public $pvlist_checktotal;
			
			public function inserts() {
				$this->db->set('pvlist_id', $this->pvlist_id);
				$this->db->set('pvlist_pmvid', $this->pvlist_pmvid);
				$this->db->set('pvlist_account', $this->pvlist_account);
                                $this->db->set('pvlist_code', $this->pvlist_code);
				$this->db->set('pvlist_list', $this->pvlist_list);
				$this->db->set('pvlist_vat', $this->pvlist_vat);
				$this->db->set('pvlist_tax', $this->pvlist_tax);
                                $this->db->set('pvlist_checktax', $this->pvlist_checktax);
				$this->db->set('pvlist_total', $this->pvlist_total);
                                $this->db->set('pvlist_checktotal', $this->pvlist_checktotal);
				
				$this->db->from('tb_pvlist');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_pvlist');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_pvlist', $data, $key);
			}
			public function updates() {
				
			$this->db->set('pvlist_id', $this->pvlist_id);
				$this->db->set('pvlist_pmvid', $this->pvlist_pmvid);
				$this->db->set('pvlist_account', $this->pvlist_account);
                                $this->db->set('pvlist_code', $this->pvlist_code);
				$this->db->set('pvlist_list', $this->pvlist_list);
				$this->db->set('pvlist_vat', $this->pvlist_vat);
				$this->db->set('pvlist_tax', $this->pvlist_tax);
                                $this->db->set('pvlist_checktax', $this->pvlist_checktax);
				$this->db->set('pvlist_total', $this->pvlist_total);
				$this->db->set('pvlist_checktotal', $this->pvlist_checktotal);
                                
				$this->db->from('tb_pvlist');
				$this->db->where('pvlist_id', $this->pvlist_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_pvlist');
				$this->db->where('pvlist_id', $this->pvlist_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_pvlist');
				$this->db->order_by('pvlist_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_pvlist');
				$this->db->where('pvlist_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}