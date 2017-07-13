<?php
			class Da_type extends MY_Model { 
			public $type_id;
			public $type_bigtypeid;
			public $type_name;
			
			public function inserts() {
				$this->db->set('type_id', $this->type_id);
				$this->db->set('type_bigtypeid', $this->type_bigtypeid);
				$this->db->set('type_name', $this->type_name);
				
				$this->db->from('tb_type');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_type');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_type', $data, $key);
			}
			public function updates() {
				
			$this->db->set('type_id', $this->type_id);
				$this->db->set('type_bigtypeid', $this->type_bigtypeid);
				$this->db->set('type_name', $this->type_name);
				
				$this->db->from('tb_type');
				$this->db->where('type_id', $this->type_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_type');
				$this->db->where('type_id', $this->type_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_type');
				$this->db->order_by('type_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_type');
				$this->db->where('type_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}