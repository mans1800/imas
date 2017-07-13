<?php
			class Da_company2 extends MY_Model { 
			public $company2_id;
			public $company2_code;
			public $company2_name;
			public $company2_subname;
			
			public function inserts() {
				$this->db->set('company2_id', $this->company2_id);
				$this->db->set('company2_code', $this->company2_code);
				$this->db->set('company2_name', $this->company2_name);
				$this->db->set('company2_subname', $this->company2_subname);
				
				$this->db->from('tb_company2');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_company2');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_company2', $data, $key);
			}
			public function updates() {
				
			$this->db->set('company2_id', $this->company2_id);
				$this->db->set('company2_code', $this->company2_code);
				$this->db->set('company2_name', $this->company2_name);
				$this->db->set('company2_subname', $this->company2_subname);
				
				$this->db->from('tb_company2');
				$this->db->where('company2_id', $this->company2_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_company2');
				$this->db->where('company2_id', $this->company2_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_company2');
				$this->db->order_by('company2_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_company2');
				$this->db->where('company2_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}