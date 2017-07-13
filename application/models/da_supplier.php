<?php
			class Da_supplier extends MY_Model { 
			public $supplier_id;
			public $supplier_accountid;
			public $supplier_code;
			public $supplier_lookupcode;
			public $supplier_name;
			public $supplier_status;
			public $supplier_update;
			public $supplier_save;
			
			public function inserts() {
				$this->db->set('supplier_id', $this->supplier_id);
				$this->db->set('supplier_accountid', $this->supplier_accountid);
				$this->db->set('supplier_code', $this->supplier_code);
				$this->db->set('supplier_lookupcode', $this->supplier_lookupcode);
				$this->db->set('supplier_name', $this->supplier_name);
				$this->db->set('supplier_status', $this->supplier_status);
				$this->db->set('supplier_update', $this->supplier_update);
				$this->db->set('supplier_save', $this->supplier_save);
				
				$this->db->from('tb_supplier');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_supplier');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_supplier', $data, $key);
			}
			public function updates() {
				
			$this->db->set('supplier_id', $this->supplier_id);
				$this->db->set('supplier_accountid', $this->supplier_accountid);
				$this->db->set('supplier_code', $this->supplier_code);
				$this->db->set('supplier_lookupcode', $this->supplier_lookupcode);
				$this->db->set('supplier_name', $this->supplier_name);
				$this->db->set('supplier_status', $this->supplier_status);
				$this->db->set('supplier_update', $this->supplier_update);
				$this->db->set('supplier_save', $this->supplier_save);
				
				$this->db->from('tb_supplier');
				$this->db->where('supplier_id', $this->supplier_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_supplier');
				$this->db->where('supplier_id', $this->supplier_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_supplier');
				$this->db->order_by('supplier_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_supplier');
				$this->db->where('supplier_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}