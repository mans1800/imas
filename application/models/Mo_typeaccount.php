<?php

		include('da_typeaccount.php');

		class Mo_typeaccount extends Da_typeaccount {
			public function get_type($key) {
				$this->db->select('*');
				$this->db->from('tb_typeaccount');
				$this->db->where('typeaccount_type', $key);
				$query = $this->db->get()->result();
				return $query;
			}
		}
		