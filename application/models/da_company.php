<?php
			class Da_company extends MY_Model { 
			public $company_id;
			public $company_code;
			public $company_name;
			public $company_subname;
			
			public function inserts() {
				$this->db->set('company_id', $this->company_id);
				$this->db->set('company_code', $this->company_code);
				$this->db->set('company_name', $this->company_name);
				$this->db->set('company_subname', $this->company_subname);
				
				$this->db->from('tb_company');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_company');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_company', $data, $key);
			}
			public function updates() {
				
			$this->db->set('company_id', $this->company_id);
				$this->db->set('company_code', $this->company_code);
				$this->db->set('company_name', $this->company_name);
				$this->db->set('company_subname', $this->company_subname);
				
				$this->db->from('tb_company');
				$this->db->where('company_id', $this->company_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_company');
				$this->db->where('company_id', $this->company_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_company');
				$this->db->order_by('company_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_company');
				$this->db->where('company_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}