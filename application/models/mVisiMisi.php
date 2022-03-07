<?php 

class MVisiMisi extends CI_Model{
	public function getVisiMisi(){
		return $this->db->get('visi_misi')->row();
	}

	public function getVisiMisiById($id) {
		return $this->db->get_where('visi_misi', ['id' => $id])->row();
	}

	public function tambahVisiMisi(){
		$data = [
			'visi' => $this->input->post('visi'),
			'misi' => $this->input->post('misi')
		];

		$this->db->insert('visi_misi', $data);
	}

	public function ubahVisiMisi(){
		$data = [
			'visi' => $this->input->post('visi'),
			'misi' => $this->input->post('misi')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('visi_misi', $data);
	}

	public function hapusVisiMisi($id){
		$this->db->delete('visi_misi', ['id' => $id]);
	}
}