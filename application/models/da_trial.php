<?php
			class Da_trial extends MY_Model { 
			public $trial_id;
			public $trial_1;
			public $trial_2;
			public $trial_3;
			public $trial_4;
			public $trial_5;
			public $trial_6;
			public $trial_7;
			public $trial_8;
			public $trial_9;
			public $trial_10;
			public $trial_11;
			public $trial_12;
			public $trial_13;
			public $trial_14;
			public $trial_15;
			public $trial_16;
			public $trial_17;
			public $trial_18;
			public $trial_19;
			public $trial_20;
			public $trial_21;
			public $trial_22;
			public $trial_23;
			public $trial_24;
			public $trial_25;
			public $trial_26;
			public $trial_27;
			public $trial_28;
			public $trial_29;
			public $trial_30;
			public $trial_31;
			public $trial_32;
			public $trial_33;
			public $trial_34;
			public $trial_35;
			public $trial_36;
			public $trial_37;
			public $trial_38;
			
			public function inserts() {
				$this->db->set('trial_id', $this->trial_id);
				$this->db->set('trial_1', $this->trial_1);
				$this->db->set('trial_2', $this->trial_2);
				$this->db->set('trial_3', $this->trial_3);
				$this->db->set('trial_4', $this->trial_4);
				$this->db->set('trial_5', $this->trial_5);
				$this->db->set('trial_6', $this->trial_6);
				$this->db->set('trial_7', $this->trial_7);
				$this->db->set('trial_8', $this->trial_8);
				$this->db->set('trial_9', $this->trial_9);
				$this->db->set('trial_10', $this->trial_10);
				$this->db->set('trial_11', $this->trial_11);
				$this->db->set('trial_12', $this->trial_12);
				$this->db->set('trial_13', $this->trial_13);
				$this->db->set('trial_14', $this->trial_14);
				$this->db->set('trial_15', $this->trial_15);
				$this->db->set('trial_16', $this->trial_16);
				$this->db->set('trial_17', $this->trial_17);
				$this->db->set('trial_18', $this->trial_18);
				$this->db->set('trial_19', $this->trial_19);
				$this->db->set('trial_20', $this->trial_20);
				$this->db->set('trial_21', $this->trial_21);
				$this->db->set('trial_22', $this->trial_22);
				$this->db->set('trial_23', $this->trial_23);
				$this->db->set('trial_24', $this->trial_24);
				$this->db->set('trial_25', $this->trial_25);
				$this->db->set('trial_26', $this->trial_26);
				$this->db->set('trial_27', $this->trial_27);
				$this->db->set('trial_28', $this->trial_28);
				$this->db->set('trial_29', $this->trial_29);
				$this->db->set('trial_30', $this->trial_30);
				$this->db->set('trial_31', $this->trial_31);
				$this->db->set('trial_32', $this->trial_32);
				$this->db->set('trial_33', $this->trial_33);
				$this->db->set('trial_34', $this->trial_34);
				$this->db->set('trial_35', $this->trial_35);
				$this->db->set('trial_36', $this->trial_36);
				$this->db->set('trial_37', $this->trial_37);
				$this->db->set('trial_38', $this->trial_38);
				
				$this->db->from('tb_trial');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_trial');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_trial', $data, $key);
			}
			public function updates() {
				
			$this->db->set('trial_id', $this->trial_id);
				$this->db->set('trial_1', $this->trial_1);
				$this->db->set('trial_2', $this->trial_2);
				$this->db->set('trial_3', $this->trial_3);
				$this->db->set('trial_4', $this->trial_4);
				$this->db->set('trial_5', $this->trial_5);
				$this->db->set('trial_6', $this->trial_6);
				$this->db->set('trial_7', $this->trial_7);
				$this->db->set('trial_8', $this->trial_8);
				$this->db->set('trial_9', $this->trial_9);
				$this->db->set('trial_10', $this->trial_10);
				$this->db->set('trial_11', $this->trial_11);
				$this->db->set('trial_12', $this->trial_12);
				$this->db->set('trial_13', $this->trial_13);
				$this->db->set('trial_14', $this->trial_14);
				$this->db->set('trial_15', $this->trial_15);
				$this->db->set('trial_16', $this->trial_16);
				$this->db->set('trial_17', $this->trial_17);
				$this->db->set('trial_18', $this->trial_18);
				$this->db->set('trial_19', $this->trial_19);
				$this->db->set('trial_20', $this->trial_20);
				$this->db->set('trial_21', $this->trial_21);
				$this->db->set('trial_22', $this->trial_22);
				$this->db->set('trial_23', $this->trial_23);
				$this->db->set('trial_24', $this->trial_24);
				$this->db->set('trial_25', $this->trial_25);
				$this->db->set('trial_26', $this->trial_26);
				$this->db->set('trial_27', $this->trial_27);
				$this->db->set('trial_28', $this->trial_28);
				$this->db->set('trial_29', $this->trial_29);
				$this->db->set('trial_30', $this->trial_30);
				$this->db->set('trial_31', $this->trial_31);
				$this->db->set('trial_32', $this->trial_32);
				$this->db->set('trial_33', $this->trial_33);
				$this->db->set('trial_34', $this->trial_34);
				$this->db->set('trial_35', $this->trial_35);
				$this->db->set('trial_36', $this->trial_36);
				$this->db->set('trial_37', $this->trial_37);
				$this->db->set('trial_38', $this->trial_38);
				
				$this->db->from('tb_trial');
				$this->db->where('trial_id', $this->trial_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_trial');
				$this->db->where('trial_id', $this->trial_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_trial');
				$this->db->order_by('trial_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_trial');
				$this->db->where('trial_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}