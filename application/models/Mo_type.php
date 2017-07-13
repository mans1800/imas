<?php

		include('da_type.php');

		class Mo_type extends Da_type {
                    
                    //เรียงลำดับ type_typeid
			public function get_all() {
				$this->db->from('tb_type');
				$this->db->order_by('type_typeid', 'ASC');
				return $this->db->get()->result();
			}
		}
		