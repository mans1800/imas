<?php
			class Da_supdetail extends MY_Model { 
			public $supdetail_id;
			public $supdetail_supid;
			public $supdetail_address;
			public $supdetail_email;
			public $supdetail_phone;
			public $supdetail_taxno;
			public $supdetail_branch;
			public $supdetail_branchname;
			public $supdetail_des;
			public $supdetail_update;
			public $supdetail_save;
			
			public function inserts() {
				$this->db->set('supdetail_id', $this->supdetail_id);
				$this->db->set('supdetail_supid', $this->supdetail_supid);
				$this->db->set('supdetail_address', $this->supdetail_address);
				$this->db->set('supdetail_email', $this->supdetail_email);
				$this->db->set('supdetail_phone', $this->supdetail_phone);
				$this->db->set('supdetail_taxno', $this->supdetail_taxno);
				$this->db->set('supdetail_branch', $this->supdetail_branch);
				$this->db->set('supdetail_branchname', $this->supdetail_branchname);
				$this->db->set('supdetail_des', $this->supdetail_des);
				$this->db->set('supdetail_update', $this->supdetail_update);
				$this->db->set('supdetail_save', $this->supdetail_save);
				
				$this->db->from('tb_supdetail');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_supdetail');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_supdetail', $data, $key);
			}
			public function updates() {
				
			$this->db->set('supdetail_id', $this->supdetail_id);
				$this->db->set('supdetail_supid', $this->supdetail_supid);
				$this->db->set('supdetail_address', $this->supdetail_address);
				$this->db->set('supdetail_email', $this->supdetail_email);
				$this->db->set('supdetail_phone', $this->supdetail_phone);
				$this->db->set('supdetail_taxno', $this->supdetail_taxno);
				$this->db->set('supdetail_branch', $this->supdetail_branch);
				$this->db->set('supdetail_branchname', $this->supdetail_branchname);
				$this->db->set('supdetail_des', $this->supdetail_des);
				$this->db->set('supdetail_update', $this->supdetail_update);
				$this->db->set('supdetail_save', $this->supdetail_save);
				
				$this->db->from('tb_supdetail');
				$this->db->where('supdetail_id', $this->supdetail_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_supdetail');
				$this->db->where('supdetail_id', $this->supdetail_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_supdetail');
				$this->db->order_by('supdetail_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_supdetail');
				$this->db->where('supdetail_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}