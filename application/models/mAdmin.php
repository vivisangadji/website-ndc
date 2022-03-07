<?php 

class MAdmin extends CI_Model{

	public function cekLogin(){
		$data = [
			'username' => $this->input->post('username', true),
			'password' => md5($this->input->post('password', true))
		];

		return $this->db->get_where('admin', $data)->row();
	}

	public function getAllKomentar(){
		return $this->db->get('hubungi_kami')->result();
	}

	public function saveKomentar(){
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'pesan' => htmlspecialchars($this->input->post('pesan', true))
		];

		$this->db->insert('hubungi_kami', $data);
	}
}