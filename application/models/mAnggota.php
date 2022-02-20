<?php 

class mAnggota extends CI_Model{
	public function getAnggota(){
		return $this->db->get('anggota')->result();
	}

	public function getAnggotaById($id) {
		return $this->db->get_where('anggota', ['id' => $id])->row();
	}

	public function tambahAnggota($gambar){
		$data = [
			'nama' => $this->input->post('nama'),
			'nra' => $this->input->post('nra'),
			'angkatan_ndc' => $this->input->post('angkatan_ndc'),
			'angkatan_kampus' => $this->input->post('angkatan_kampus'),
			'gambar' => $gambar,
			'jabatan' => $this->input->post('jabatan')
		];

		$this->db->insert('anggota', $data);
	}

	public function ubahAnggota($gambar){
		$data = [
			'nama' => $this->input->post('nama'),
			'nra' => $this->input->post('nra'),
			'angkatan_ndc' => $this->input->post('angkatan_ndc'),
			'angkatan_kampus' => $this->input->post('angkatan_kampus'),
			'gambar' => $gambar,
			'jabatan' => $this->input->post('jabatan')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('anggota', $data);
	}

	public function hapusAnggota($id){
		$this->db->delete('anggota', ['id' => $id]);
	}

	public function cariDataAnggota(){
		$keyword = $this->input->post('keyword');
		$this->db->like('nama', $keyword);
		$this->db->or_like('nra', $keyword);
		$this->db->or_like('angkatan_ndc', $keyword);
		$this->db->or_like('angkatan_kampus', $keyword);
		$this->db->or_like('jabatan', $keyword);
		return $this->db->get('anggota')->result();
	}
}