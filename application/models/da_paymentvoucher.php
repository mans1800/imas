<?php
			class Da_paymentvoucher extends MY_Model { 
			public $pmv_id;
			public $pmv_no;
			public $pmv_to;
			public $pmv_date;
			public $pmv_check;
			public $pmv_checkno;
			public $pmv_checkdate;
			public $pmv_total;
			public $pmv_update;
			public $pmv_save;
			
			public function inserts() {
				$this->db->set('pmv_id', $this->pmv_id);
				$this->db->set('pmv_no', $this->pmv_no);
				$this->db->set('pmv_to', $this->pmv_to);
				$this->db->set('pmv_date', $this->pmv_date);
				$this->db->set('pmv_check', $this->pmv_check);
				$this->db->set('pmv_checkno', $this->pmv_checkno);
				$this->db->set('pmv_checkdate', $this->pmv_checkdate);
				$this->db->set('pmv_total', $this->pmv_total);
				$this->db->set('pmv_update', $this->pmv_update);
				$this->db->set('pmv_save', $this->pmv_save);
				
				$this->db->from('tb_paymentvoucher');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_paymentvoucher');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_paymentvoucher', $data, $key);
			}
			public function updates() {
				
			$this->db->set('pmv_id', $this->pmv_id);
				$this->db->set('pmv_no', $this->pmv_no);
				$this->db->set('pmv_to', $this->pmv_to);
				$this->db->set('pmv_date', $this->pmv_date);
				$this->db->set('pmv_check', $this->pmv_check);
				$this->db->set('pmv_checkno', $this->pmv_checkno);
				$this->db->set('pmv_checkdate', $this->pmv_checkdate);
				$this->db->set('pmv_total', $this->pmv_total);
				$this->db->set('pmv_update', $this->pmv_update);
				$this->db->set('pmv_save', $this->pmv_save);
				
				$this->db->from('tb_paymentvoucher');
				$this->db->where('pmv_id', $this->pmv_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_paymentvoucher');
				$this->db->where('pmv_id', $this->pmv_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_paymentvoucher');
				$this->db->order_by('pmv_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_paymentvoucher');
				$this->db->where('pmv_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}