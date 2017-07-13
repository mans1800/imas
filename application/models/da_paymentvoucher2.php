<?php
			class Da_paymentvoucher2 extends MY_Model { 
			public $pmv2_id;
			public $pmv2_pmvid;
			public $pmv2_to;
			public $pmv2_date;
			public $pmv2_total;
			public $pmv2_update;
			public $pmv2_save;
			
			public function inserts() {
				$this->db->set('pmv2_id', $this->pmv2_id);
				$this->db->set('pmv2_pmvid', $this->pmv2_pmvid);
				$this->db->set('pmv2_to', $this->pmv2_to);
				$this->db->set('pmv2_date', $this->pmv2_date);
				$this->db->set('pmv2_total', $this->pmv2_total);
				$this->db->set('pmv2_update', $this->pmv2_update);
				$this->db->set('pmv2_save', $this->pmv2_save);
				
				$this->db->from('tb_paymentvoucher2');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_paymentvoucher2');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_paymentvoucher2', $data, $key);
			}
			public function updates() {
				
			$this->db->set('pmv2_id', $this->pmv2_id);
				$this->db->set('pmv2_pmvid', $this->pmv2_pmvid);
				$this->db->set('pmv2_to', $this->pmv2_to);
				$this->db->set('pmv2_date', $this->pmv2_date);
				$this->db->set('pmv2_total', $this->pmv2_total);
				$this->db->set('pmv2_update', $this->pmv2_update);
				$this->db->set('pmv2_save', $this->pmv2_save);
				
				$this->db->from('tb_paymentvoucher2');
				$this->db->where('pmv2_id', $this->pmv2_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_paymentvoucher2');
				$this->db->where('pmv2_id', $this->pmv2_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_paymentvoucher2');
				$this->db->order_by('pmv2_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_paymentvoucher2');
				$this->db->where('pmv2_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}