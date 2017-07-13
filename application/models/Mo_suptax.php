<?php

		include('da_suptax.php');

		class Mo_suptax extends Da_suptax {
			public function get_all2() {
				$this->db->from('tb_suptax');
				$this->db->order_by('suptax_id', 'ASC');
                                $this->db->join('tb_suptype', 'tb_suptax.suptax_officecode = tb_suptype.suptype_id');
				return $this->db->get()->result();
			}
		}
		