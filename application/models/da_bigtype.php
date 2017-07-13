<?php
			class Da_bigtype extends MY_Model { 
			public $bigtype_id;
			public $bigtype_name;
			
			public function inserts() {
				$this->db->set('bigtype_id', $this->bigtype_id);
				$this->db->set('bigtype_name', $this->bigtype_name);
				
				$this->db->from('tb_bigtype');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_bigtype');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_bigtype', $data, $key);
			}
			public function updates() {
				
			$this->db->set('bigtype_id', $this->bigtype_id);
				$this->db->set('bigtype_name', $this->bigtype_name);
				
				$this->db->from('tb_bigtype');
				$this->db->where('bigtype_id', $this->bigtype_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_bigtype');
				$this->db->where('bigtype_id', $this->bigtype_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_bigtype');
				$this->db->order_by('bigtype_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_bigtype');
				$this->db->where('bigtype_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}