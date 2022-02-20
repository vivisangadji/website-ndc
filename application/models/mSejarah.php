<?php 

class mSejarah extends CI_Model {

	public function getSejarah(){
		return $this->db->get('sejarah')->row();
	}

	public function tambahSejarah(){
		$data = [
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('sejarah')
		];

		$this->db->insert('sejarah', $data);
	}

	public function getSejarahById($id) {
		return $this->db->get_where('sejarah', ['id' => $id])->row();
	}

	public function ubahSejarah(){
		$data = [
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('sejarah')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('sejarah', $data);
	}

	public function hapusSejarah($id){
		$this->db->delete('sejarah', ['id' => $id]);
	}
}