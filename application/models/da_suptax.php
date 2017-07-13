<?php
			class Da_suptax extends MY_Model { 
			public $suptax_id;
			public $suptax_supplierid;
			public $suptax_taxnumber;
			
			public function inserts() {
				$this->db->set('suptax_id', $this->suptax_id);
				$this->db->set('suptax_supplierid', $this->suptax_supplierid);
				$this->db->set('suptax_taxnumber', $this->suptax_taxnumber);
				
				$this->db->from('tb_suptax');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_suptax');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_suptax', $data, $key);
			}
			public function updates() {
				
			$this->db->set('suptax_id', $this->suptax_id);
				$this->db->set('suptax_supplierid', $this->suptax_supplierid);
				$this->db->set('suptax_taxnumber', $this->suptax_taxnumber);
				
				$this->db->from('tb_suptax');
				$this->db->where('suptax_id', $this->suptax_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_suptax');
				$this->db->where('suptax_id', $this->suptax_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_suptax');
				$this->db->order_by('suptax_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_suptax');
				$this->db->where('suptax_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}