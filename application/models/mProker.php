<?php 

class mProker extends CI_Model {

	public function getProker(){
		return $this->db->get('proker')->result();
	}

	public function tambahProker(){
		$data = [
			'proker' => $this->input->post('proker'),
			'penanggung_jawab' => $this->input->post('pjawab'),
			'sasaran' => $this->input->post('sasaran'),
			'tujuan' => $this->input->post('tujuan')
		];

		$this->db->insert('proker', $data);
	}

	public function getProkerById($id) {
		return $this->db->get_where('proker', ['id' => $id])->row();
	}

	public function ubahProker(){
		$data = [
			'proker' => $this->input->post('proker'),
			'penanggung_jawab' => $this->input->post('pjawab'),
			'sasaran' => $this->input->post('sasaran'),
			'tujuan' => $this->input->post('tujuan')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('proker', $data);
	}

	public function hapusProker($id){
		$this->db->delete('proker', ['id' => $id]);
	}

}