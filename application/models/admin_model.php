<?php 
	class Admin_model extends CI_model{
		public function can_log_in(){

			// $this->db->select('fullname');
			// $this->db->from('admin');
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password', $this->input->post('password'));

			$query = $this->db->get('admin');
			//echo $query->num_rows();
			
			if($query->num_rows() == 1){
				return true;
			}else{
				return false;
			}
			
		}

		public function profile(){
			$this->db->select('*')->from('admin');
			$query = $this->db->get();
			return $query->result();
		}
	}

	
?>