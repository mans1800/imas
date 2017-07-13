<?php
			class Da_pv extends MY_Model { 
			public $pv_id;
			public $pv_hotelid;
			public $pv_supid;
			public $pv_ref;
			public $pv_checkdate;
			public $pv_checkno;
                        public $pv_period;
                        public $pv_trandate;
			public $pv_total;
			public $pv_listid;
                        public $pv_status;
			public $pv_update;
			public $pv_save;
			
			public function inserts() {
				$this->db->set('pv_id', $this->pv_id);
				$this->db->set('pv_hotelid', $this->pv_hotelid);
				$this->db->set('pv_supid', $this->pv_supid);
				$this->db->set('pv_ref', $this->pv_ref);
				$this->db->set('pv_checkdate', $this->pv_checkdate);
				$this->db->set('pv_checkno', $this->pv_checkno);
                                $this->db->set('pv_period', $this->pv_period);
                                $this->db->set('pv_trandate', $this->pv_trandate);
				$this->db->set('pv_total', $this->pv_total);
				$this->db->set('pv_listid', $this->pv_listid);
                                $this->db->set('pv_status', $this->pv_status);
				$this->db->set('pv_update', $this->pv_update);
				$this->db->set('pv_save', $this->pv_save);
				
				$this->db->from('tb_pv');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_pv');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_pv', $data, $key);
			}
			public function updates() {
				
			$this->db->set('pv_id', $this->pv_id);
				$this->db->set('pv_hotelid', $this->pv_hotelid);
				$this->db->set('pv_supid', $this->pv_supid);
				$this->db->set('pv_ref', $this->pv_ref);
				$this->db->set('pv_checkdate', $this->pv_checkdate);
				$this->db->set('pv_checkno', $this->pv_checkno);
                                $this->db->set('pv_period', $this->pv_period);
                                $this->db->set('pv_trandate', $this->pv_trandate);
				$this->db->set('pv_total', $this->pv_total);
				$this->db->set('pv_listid', $this->pv_listid);
                                $this->db->set('pv_status', $this->pv_status);
				$this->db->set('pv_update', $this->pv_update);
				$this->db->set('pv_save', $this->pv_save);
				
				$this->db->from('tb_pv');
				$this->db->where('pv_id', $this->pv_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_pv');
				$this->db->where('pv_id', $this->pv_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_pv');
				$this->db->order_by('pv_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_pv');
				$this->db->where('pv_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}