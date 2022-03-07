<?php 

class MAgenda extends CI_Model{
	public function getAgenda(){
		$this->db->order_by('waktu','DESC');
		return $this->db->get('agenda')->result();
	}

	public function tambahAgenda($gambar){
		$data = [
			'nama'		=> $this->input->post('nama'),
			'img'		=> $gambar,
			'deskripsi'	=> $this->input->post('deskripsi'),
			'waktu'		=> $this->input->post('waktu'),
			'lokasi'	=> $this->input->post('lokasi')
		];

		$this->db->insert('agenda', $data);
	}

	public function ubahAgenda($gambar){
		$data = [
			'nama'		=> $this->input->post('nama'),
			'img'		=> $gambar,
			'deskripsi'	=> $this->input->post('deskripsi'),
			'waktu'		=> $this->input->post('waktu'),
			'lokasi'	=> $this->input->post('lokasi')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('agenda', $data);
	}

	public function hapusAgenda($id){
		$this->db->delete('agenda', ['id' => $id]);
	}
}