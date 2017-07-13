<?php
			class Da_pvinvoice2 extends MY_Model { 
			public $pvinvoice2_id;
			public $pvinvoice2_pvinvoiceid;
			public $pvinvoice2_no;
			public $pvinvoice2_des;
			public $pvinvoice2_amount;
			
			public function inserts() {
				$this->db->set('pvinvoice2_id', $this->pvinvoice2_id);
				$this->db->set('pvinvoice2_pvinvoiceid', $this->pvinvoice2_pvinvoiceid);
				$this->db->set('pvinvoice2_no', $this->pvinvoice2_no);
				$this->db->set('pvinvoice2_des', $this->pvinvoice2_des);
				$this->db->set('pvinvoice2_amount', $this->pvinvoice2_amount);
				
				$this->db->from('tb_pvinvoice2');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_pvinvoice2');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_pvinvoice2', $data, $key);
			}
			public function updates() {
				
			$this->db->set('pvinvoice2_id', $this->pvinvoice2_id);
				$this->db->set('pvinvoice2_pvinvoiceid', $this->pvinvoice2_pvinvoiceid);
				$this->db->set('pvinvoice2_no', $this->pvinvoice2_no);
				$this->db->set('pvinvoice2_des', $this->pvinvoice2_des);
				$this->db->set('pvinvoice2_amount', $this->pvinvoice2_amount);
				
				$this->db->from('tb_pvinvoice2');
				$this->db->where('pvinvoice2_id', $this->pvinvoice2_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_pvinvoice2');
				$this->db->where('pvinvoice2_id', $this->pvinvoice2_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_pvinvoice2');
				$this->db->order_by('pvinvoice2_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_pvinvoice2');
				$this->db->where('pvinvoice2_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}