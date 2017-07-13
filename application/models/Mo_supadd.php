<?php

		include('da_supadd.php');

		class Mo_supadd extends Da_supadd {
			public function get_all2() {
				$this->db->from('tb_supadd');
				$this->db->order_by('supadd_id', 'ASC');
                                $this->db->join('tb_suptype', 'tb_supadd.supadd_officecode = tb_suptype.suptype_id');
				return $this->db->get()->result();
			}
		}
		