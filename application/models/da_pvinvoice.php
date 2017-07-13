<?php
			class Da_pvinvoice extends MY_Model { 
			public $pvinvoice_id;
			public $pvinvoice_supplierid;
			public $pvinvoice_suptaxid;
			public $pvinvoice_suptypeid;
			public $pvinvoice_subaddid;
			public $pvinvoice_no;
			public $pvinvoice_date;
			public $pvinvoice_crterm;
			public $pvinvoice_vat;
			public $pvinvoice_nonvat;
			public $pvinvoice_total;
			public $pvinvoice_status;
			public $pvinvoice_des;
			public $pvinvoice_update;
			public $pvinvoice_save;
			
			public function inserts() {
				$this->db->set('pvinvoice_id', $this->pvinvoice_id);
				$this->db->set('pvinvoice_supplierid', $this->pvinvoice_supplierid);
				$this->db->set('pvinvoice_suptaxid', $this->pvinvoice_suptaxid);
				$this->db->set('pvinvoice_suptypeid', $this->pvinvoice_suptypeid);
				$this->db->set('pvinvoice_subaddid', $this->pvinvoice_subaddid);
				$this->db->set('pvinvoice_no', $this->pvinvoice_no);
				$this->db->set('pvinvoice_date', $this->pvinvoice_date);
				$this->db->set('pvinvoice_crterm', $this->pvinvoice_crterm);
				$this->db->set('pvinvoice_vat', $this->pvinvoice_vat);
				$this->db->set('pvinvoice_nonvat', $this->pvinvoice_nonvat);
				$this->db->set('pvinvoice_total', $this->pvinvoice_total);
				$this->db->set('pvinvoice_status', $this->pvinvoice_status);
				$this->db->set('pvinvoice_des', $this->pvinvoice_des);
				$this->db->set('pvinvoice_update', $this->pvinvoice_update);
				$this->db->set('pvinvoice_save', $this->pvinvoice_save);
				
				$this->db->from('tb_pvinvoice');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_pvinvoice');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_pvinvoice', $data, $key);
			}
			public function updates() {
				
			$this->db->set('pvinvoice_id', $this->pvinvoice_id);
				$this->db->set('pvinvoice_supplierid', $this->pvinvoice_supplierid);
				$this->db->set('pvinvoice_suptaxid', $this->pvinvoice_suptaxid);
				$this->db->set('pvinvoice_suptypeid', $this->pvinvoice_suptypeid);
				$this->db->set('pvinvoice_subaddid', $this->pvinvoice_subaddid);
				$this->db->set('pvinvoice_no', $this->pvinvoice_no);
				$this->db->set('pvinvoice_date', $this->pvinvoice_date);
				$this->db->set('pvinvoice_crterm', $this->pvinvoice_crterm);
				$this->db->set('pvinvoice_vat', $this->pvinvoice_vat);
				$this->db->set('pvinvoice_nonvat', $this->pvinvoice_nonvat);
				$this->db->set('pvinvoice_total', $this->pvinvoice_total);
				$this->db->set('pvinvoice_status', $this->pvinvoice_status);
				$this->db->set('pvinvoice_des', $this->pvinvoice_des);
				$this->db->set('pvinvoice_update', $this->pvinvoice_update);
				$this->db->set('pvinvoice_save', $this->pvinvoice_save);
				
				$this->db->from('tb_pvinvoice');
				$this->db->where('pvinvoice_id', $this->pvinvoice_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_pvinvoice');
				$this->db->where('pvinvoice_id', $this->pvinvoice_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_pvinvoice');
				$this->db->order_by('pvinvoice_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_pvinvoice');
				$this->db->where('pvinvoice_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}