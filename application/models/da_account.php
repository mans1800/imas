<?php
			class Da_account extends MY_Model { 
			public $account_id;
			public $account_code;
			public $account_name;
                        public $account_year;
			
			public function inserts() {
				$this->db->set('account_id', $this->account_id);
				$this->db->set('account_code', $this->account_code);
				$this->db->set('account_name', $this->account_name);
                                $this->db->set('account_year', $this->account_year);
				
				$this->db->from('tb_account');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_account');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_account', $data, $key);
			}
			public function updates() {
				
			$this->db->set('account_id', $this->account_id);
				$this->db->set('account_code', $this->account_code);
				$this->db->set('account_name', $this->account_name);
                                $this->db->set('account_year', $this->account_year);
				
				$this->db->from('tb_account');
				$this->db->where('account_id', $this->account_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_account');
				$this->db->where('account_id', $this->account_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_account');
				$this->db->order_by('account_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_account');
				$this->db->where('account_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}