<?php
			class Da_supadd extends MY_Model { 
			public $supadd_id;
			public $supadd_supplierid;
			public $supadd_address;
			public $supadd_tel;
			public $supadd_email;
			public $supadd_fax;
			public $supadd_country;
			public $supadd_web;
			public $supadd_contactname;
			public $supadd_des;
			
			public function inserts() {
				$this->db->set('supadd_id', $this->supadd_id);
				$this->db->set('supadd_supplierid', $this->supadd_supplierid);
				$this->db->set('supadd_address', $this->supadd_address);
				$this->db->set('supadd_tel', $this->supadd_tel);
				$this->db->set('supadd_email', $this->supadd_email);
				$this->db->set('supadd_fax', $this->supadd_fax);
				$this->db->set('supadd_country', $this->supadd_country);
				$this->db->set('supadd_web', $this->supadd_web);
				$this->db->set('supadd_contactname', $this->supadd_contactname);
				$this->db->set('supadd_des', $this->supadd_des);
				
				$this->db->from('tb_supadd');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_supadd');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_supadd', $data, $key);
			}
			public function updates() {
				
			$this->db->set('supadd_id', $this->supadd_id);
				$this->db->set('supadd_supplierid', $this->supadd_supplierid);
				$this->db->set('supadd_address', $this->supadd_address);
				$this->db->set('supadd_tel', $this->supadd_tel);
				$this->db->set('supadd_email', $this->supadd_email);
				$this->db->set('supadd_fax', $this->supadd_fax);
				$this->db->set('supadd_country', $this->supadd_country);
				$this->db->set('supadd_web', $this->supadd_web);
				$this->db->set('supadd_contactname', $this->supadd_contactname);
				$this->db->set('supadd_des', $this->supadd_des);
				
				$this->db->from('tb_supadd');
				$this->db->where('supadd_id', $this->supadd_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_supadd');
				$this->db->where('supadd_id', $this->supadd_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_supadd');
				$this->db->order_by('supadd_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_supadd');
				$this->db->where('supadd_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}