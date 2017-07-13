<?php
			class Da_expend extends MY_Model { 
			public $expend_id;
			public $expend_date;
			public $expend_pv;
			public $expend_list;
                        public $expend_list2;
                        public $expend_list3;
			public $expend_check;
			public $expend_em1;
			public $expend_cash;
			public $expend_bank;
			public $expend_creditor;
			public $expend_ship;
			public $expend_advance;
			public $expend_freight;
			public $expend_carriage;
			public $expend_port;
			public $expend_container;
			public $expend_pp30;
			public $expend_insurance;
			public $expend_tax;
			public $expend_phone;
			public $expend_edi;
			public $expend_electric;
			public $expend_salary;
			public $expend_expenses;
			public $expend_em2;
			public $expend_account;
                        public $expend_account2;
			public $expend_em3;
                        public $expend_em33;
			public $expend_amount;
                        public $expend_amount2;
			public $expend_update;
			public $expend_save;
			
			public function inserts() {
				$this->db->set('expend_id', $this->expend_id);
				$this->db->set('expend_date', $this->expend_date);
				$this->db->set('expend_pv', $this->expend_pv);
				$this->db->set('expend_list', $this->expend_list);
                                $this->db->set('expend_list2', $this->expend_list2);
                                $this->db->set('expend_list3', $this->expend_list3);
				$this->db->set('expend_check', $this->expend_check);
				$this->db->set('expend_em1', $this->expend_em1);
				$this->db->set('expend_cash', $this->expend_cash);
				$this->db->set('expend_bank', $this->expend_bank);
				$this->db->set('expend_creditor', $this->expend_creditor);
				$this->db->set('expend_ship', $this->expend_ship);
				$this->db->set('expend_advance', $this->expend_advance);
				$this->db->set('expend_freight', $this->expend_freight);
				$this->db->set('expend_carriage', $this->expend_carriage);
				$this->db->set('expend_port', $this->expend_port);
				$this->db->set('expend_container', $this->expend_container);
				$this->db->set('expend_pp30', $this->expend_pp30);
				$this->db->set('expend_insurance', $this->expend_insurance);
				$this->db->set('expend_tax', $this->expend_tax);
				$this->db->set('expend_phone', $this->expend_phone);
				$this->db->set('expend_edi', $this->expend_edi);
				$this->db->set('expend_electric', $this->expend_electric);
				$this->db->set('expend_salary', $this->expend_salary);
				$this->db->set('expend_expenses', $this->expend_expenses);
				$this->db->set('expend_em2', $this->expend_em2);
				$this->db->set('expend_account', $this->expend_account);
                                $this->db->set('expend_account2', $this->expend_account2);
				$this->db->set('expend_em3', $this->expend_em3);
                                $this->db->set('expend_em33', $this->expend_em33);
				$this->db->set('expend_amount', $this->expend_amount);
                                $this->db->set('expend_amount2', $this->expend_amount2);
				$this->db->set('expend_update', $this->expend_update);
				$this->db->set('expend_save', $this->expend_save);
				
				$this->db->from('tb_expend');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_expend');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_expend', $data, $key);
			}
			public function updates() {
				
			$this->db->set('expend_id', $this->expend_id);
				$this->db->set('expend_date', $this->expend_date);
				$this->db->set('expend_pv', $this->expend_pv);
				$this->db->set('expend_list', $this->expend_list);
                                $this->db->set('expend_list2', $this->expend_list2);
                                $this->db->set('expend_list3', $this->expend_list3);
				$this->db->set('expend_check', $this->expend_check);
				$this->db->set('expend_em1', $this->expend_em1);
				$this->db->set('expend_cash', $this->expend_cash);
				$this->db->set('expend_bank', $this->expend_bank);
				$this->db->set('expend_creditor', $this->expend_creditor);
				$this->db->set('expend_ship', $this->expend_ship);
				$this->db->set('expend_advance', $this->expend_advance);
				$this->db->set('expend_freight', $this->expend_freight);
				$this->db->set('expend_carriage', $this->expend_carriage);
				$this->db->set('expend_port', $this->expend_port);
				$this->db->set('expend_container', $this->expend_container);
				$this->db->set('expend_pp30', $this->expend_pp30);
				$this->db->set('expend_insurance', $this->expend_insurance);
				$this->db->set('expend_tax', $this->expend_tax);
				$this->db->set('expend_phone', $this->expend_phone);
				$this->db->set('expend_edi', $this->expend_edi);
				$this->db->set('expend_electric', $this->expend_electric);
				$this->db->set('expend_salary', $this->expend_salary);
				$this->db->set('expend_expenses', $this->expend_expenses);
				$this->db->set('expend_em2', $this->expend_em2);
				$this->db->set('expend_account', $this->expend_account);
                                $this->db->set('expend_account2', $this->expend_account2);
				$this->db->set('expend_em3', $this->expend_em3);
                                $this->db->set('expend_em33', $this->expend_em33);
				$this->db->set('expend_amount', $this->expend_amount);
                                $this->db->set('expend_amount2', $this->expend_amount2);
				$this->db->set('expend_update', $this->expend_update);
				$this->db->set('expend_save', $this->expend_save);
				
				$this->db->from('tb_expend');
				$this->db->where('expend_id', $this->expend_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_expend');
				$this->db->where('expend_id', $this->expend_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_expend');
				$this->db->order_by('expend_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_expend');
				$this->db->where('expend_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}