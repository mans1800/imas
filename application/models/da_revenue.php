<?php
			class Da_revenue extends MY_Model { 
			public $revenue_id;
			public $revenue_date;
			public $revenue_list;
                        public $revenue_em1;
			public $revenue_bank;
			public $revenue_note;
			public $revenue_debtor;
			public $revenue_cash;
			public $revenue_trade;
			public $revenue_freight;
			public $revenue_tax;
			public $revenue_advance;
			public $revenue_expenses;
			public $revenue_payable;
			public $revenue_taxfuture;
			public $revenue_account;
                        public $revenue_account2;
                        public $revenue_em2;
                        public $revenue_em22;
			public $revenue_amount;
                        public $revenue_amount2;
			public $revenue_update;
			public $revenue_save;
			
			public function inserts() {
				$this->db->set('revenue_id', $this->revenue_id);
				$this->db->set('revenue_date', $this->revenue_date);
				$this->db->set('revenue_list', $this->revenue_list);
                                $this->db->set('revenue_em1', $this->revenue_em1);
				$this->db->set('revenue_bank', $this->revenue_bank);
				$this->db->set('revenue_note', $this->revenue_note);
				$this->db->set('revenue_debtor', $this->revenue_debtor);
				$this->db->set('revenue_cash', $this->revenue_cash);
				$this->db->set('revenue_trade', $this->revenue_trade);
				$this->db->set('revenue_Freight', $this->revenue_freight);
				$this->db->set('revenue_tax', $this->revenue_tax);
				$this->db->set('revenue_advance', $this->revenue_advance);
				$this->db->set('revenue_expenses', $this->revenue_expenses);
				$this->db->set('revenue_payable', $this->revenue_payable);
				$this->db->set('revenue_taxfuture', $this->revenue_taxfuture);
				$this->db->set('revenue_account', $this->revenue_account);
                                $this->db->set('revenue_account2', $this->revenue_account2);
                                $this->db->set('revenue_em2', $this->revenue_em2);
                                $this->db->set('revenue_em22', $this->revenue_em22);
				$this->db->set('revenue_amount', $this->revenue_amount);
                                $this->db->set('revenue_amount2', $this->revenue_amount2);
				$this->db->set('revenue_update', $this->revenue_update);
				$this->db->set('revenue_save', $this->revenue_save);
				
				$this->db->from('tb_revenue');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tb_revenue');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tb_revenue', $data, $key);
			}
			public function updates() {
				
			$this->db->set('revenue_id', $this->revenue_id);
				$this->db->set('revenue_date', $this->revenue_date);
				$this->db->set('revenue_list', $this->revenue_list);
                                $this->db->set('revenue_em1', $this->revenue_em1);
				$this->db->set('revenue_bank', $this->revenue_bank);
				$this->db->set('revenue_note', $this->revenue_note);
				$this->db->set('revenue_debtor', $this->revenue_debtor);
				$this->db->set('revenue_cash', $this->revenue_cash);
				$this->db->set('revenue_trade', $this->revenue_trade);
				$this->db->set('revenue_Freight', $this->revenue_freight);
				$this->db->set('revenue_tax', $this->revenue_tax);
				$this->db->set('revenue_advance', $this->revenue_advance);
				$this->db->set('revenue_expenses', $this->revenue_expenses);
				$this->db->set('revenue_payable', $this->revenue_payable);
				$this->db->set('revenue_taxfuture', $this->revenue_taxfuture);
				$this->db->set('revenue_account', $this->revenue_account);
                                $this->db->set('revenue_account2', $this->revenue_account2);
                                $this->db->set('revenue_em2', $this->revenue_em2);
                                $this->db->set('revenue_em22', $this->revenue_em22);
				$this->db->set('revenue_amount', $this->revenue_amount);
                                $this->db->set('revenue_amount2', $this->revenue_amount2);
				$this->db->set('revenue_update', $this->revenue_update);
				$this->db->set('revenue_save', $this->revenue_save);
				
				$this->db->from('tb_revenue');
				$this->db->where('revenue_id', $this->revenue_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tb_revenue');
				$this->db->where('revenue_id', $this->revenue_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tb_revenue');
				$this->db->order_by('revenue_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tb_revenue');
				$this->db->where('revenue_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}