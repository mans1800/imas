<?php
			class Da_sumdata extends MY_Model { 
			public $sumdata_id;
			public $sumdata_sumid;
			public $sumdata_name;
			public $sumdata_em1;
			public $sumdata_em2;
			public $sumdata_debit;
			public $sumdata_credit;
			public $sumdata_update;
			
			public function inserts() {
				$this->db->set('sumdata_id', $this->sumdata_id);
				$this->db->set('sumdata_sumid', $this->sumdata_sumid);
				$this->db->set('sumdata_name', $this->sumdata_name);
				$this->db->set('sumdata_em1', $this->sumdata_em1);
				$this->db->set('sumdata_em2', $this->sumdata_em2);
				$this->db->set('sumdata_debit', $this->sumdata_debit);
				$this->db->set('sumdata_credit', $this->sumdata_credit);
				$this->db->set('sumdata_update', $this->sumdata_update);
				
				$this->db->from('tb_sumdata');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_sumdata');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_sumdata', $data, $key);
			}
			public function updates() {
				
			$this->db->set('sumdata_id', $this->sumdata_id);
				$this->db->set('sumdata_sumid', $this->sumdata_sumid);
				$this->db->set('sumdata_name', $this->sumdata_name);
				$this->db->set('sumdata_em1', $this->sumdata_em1);
				$this->db->set('sumdata_em2', $this->sumdata_em2);
				$this->db->set('sumdata_debit', $this->sumdata_debit);
				$this->db->set('sumdata_credit', $this->sumdata_credit);
				$this->db->set('sumdata_update', $this->sumdata_update);
				
				$this->db->from('tb_sumdata');
				$this->db->where('sumdata_id', $this->sumdata_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_sumdata');
				$this->db->where('sumdata_id', $this->sumdata_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_sumdata');
				$this->db->order_by('sumdata_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_sumdata');
				$this->db->where('sumdata_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}