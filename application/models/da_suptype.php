<?php
			class Da_suptype extends MY_Model { 
			public $suptype_id;
                        public $suptype_code;
			public $suptype_supplierid;
			public $suptype_branchtype;
			public $suptype_branchname;
			
			public function inserts() {
				$this->db->set('suptype_id', $this->suptype_id);
                                $this->db->set('suptype_code', $this->suptype_code);
				$this->db->set('suptype_supplierid', $this->suptype_supplierid);
				$this->db->set('suptype_branchtype', $this->suptype_branchtype);
				$this->db->set('suptype_branchname', $this->suptype_branchname);
				
				$this->db->from('tb_suptype');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_suptype');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_suptype', $data, $key);
			}
			public function updates() {
				
			$this->db->set('suptype_id', $this->suptype_id);
                        $this->db->set('suptype_code', $this->suptype_code);
				$this->db->set('suptype_supplierid', $this->suptype_supplierid);
				$this->db->set('suptype_branchtype', $this->suptype_branchtype);
				$this->db->set('suptype_branchname', $this->suptype_branchname);
				
				$this->db->from('tb_suptype');
				$this->db->where('suptype_id', $this->suptype_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_suptype');
				$this->db->where('suptype_id', $this->suptype_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_suptype');
				$this->db->order_by('suptype_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_suptype');
				$this->db->where('suptype_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}