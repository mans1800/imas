<?php
			class Da_daily extends MY_Model { 
			public $daily_id;
			public $daily_date;
			public $daily_list;
                        public $daily_list2;
                        public $daily_list3;
			public $daily_no;
			public $daily_debit;
			public $daily_credit;
			public $daily_update;
			public $daily_save;
			
			public function inserts() {
				$this->db->set('daily_id', $this->daily_id);
				$this->db->set('daily_date', $this->daily_date);
				$this->db->set('daily_list', $this->daily_list);
                                $this->db->set('daily_list2', $this->daily_list2);
                                $this->db->set('daily_list3', $this->daily_list3);
				$this->db->set('daily_no', $this->daily_no);
				$this->db->set('daily_debit', $this->daily_debit);
				$this->db->set('daily_credit', $this->daily_credit);
				$this->db->set('daily_update', $this->daily_update);
				$this->db->set('daily_save', $this->daily_save);
				
				$this->db->from('tb_daily');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_daily');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_daily', $data, $key);
			}
			public function updates() {
				
			$this->db->set('daily_id', $this->daily_id);
				$this->db->set('daily_date', $this->daily_date);
				$this->db->set('daily_list', $this->daily_list);
                                $this->db->set('daily_list2', $this->daily_list2);
                                $this->db->set('daily_list3', $this->daily_list3);
				$this->db->set('daily_no', $this->daily_no);
				$this->db->set('daily_debit', $this->daily_debit);
				$this->db->set('daily_credit', $this->daily_credit);
				$this->db->set('daily_update', $this->daily_update);
				$this->db->set('daily_save', $this->daily_save);
				
				$this->db->from('tb_daily');
				$this->db->where('daily_id', $this->daily_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_daily');
				$this->db->where('daily_id', $this->daily_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_daily');
				$this->db->order_by('daily_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_daily');
				$this->db->where('daily_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}