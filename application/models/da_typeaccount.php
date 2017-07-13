<?php
			class Da_typeaccount extends MY_Model { 
			public $typeaccount_id;
			public $typeaccount_code;
			public $typeaccount_type;
			public $typeaccount_name;
			
			public function inserts() {
				$this->db->set('typeaccount_id', $this->typeaccount_id);
				$this->db->set('typeaccount_code', $this->typeaccount_code);
				$this->db->set('typeaccount_type', $this->typeaccount_type);
				$this->db->set('typeaccount_name', $this->typeaccount_name);
				
				$this->db->from('tb_typeaccount');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_typeaccount');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_typeaccount', $data, $key);
			}
			public function updates() {
				
			$this->db->set('typeaccount_id', $this->typeaccount_id);
				$this->db->set('typeaccount_code', $this->typeaccount_code);
				$this->db->set('typeaccount_type', $this->typeaccount_type);
				$this->db->set('typeaccount_name', $this->typeaccount_name);
				
				$this->db->from('tb_typeaccount');
				$this->db->where('typeaccount_id', $this->typeaccount_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_typeaccount');
				$this->db->where('typeaccount_id', $this->typeaccount_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_typeaccount');
				$this->db->order_by('typeaccount_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_typeaccount');
				$this->db->where('typeaccount_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}