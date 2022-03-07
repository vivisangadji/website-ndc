<?php 
/*
fungsi getDetailGaleri untuk menampilkan data di views galeri/detail atau halaman punlic. 
fungsi getAllDetailGaleri untuk menampilkan data di views admin/galeri/detail
*/

class MGaleri extends CI_Model {
	public function getGaleri(){
		return $this->db->get('galeri')->result();
	}

	public function getGaleriById($id){
		return $this->db->get_where('galeri', ['id' => $id])->row_array();
	}

	public function tambahGaleri($gambar){
		$data = [
			'kegiatan'  => $this->input->post('kegiatan'),
			'sampul'    => $gambar
		];

		$this->db->insert('galeri', $data);
	}

	public function ubahGaleri($gambar){
		$data = [
			'kegiatan' => $this->input->post('kegiatan'),
			'sampul'    => $gambar
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('galeri', $data);
	}

	public function hapusGaleri($id){
		$this->db->delete('galeri', ['id' => $id]);
	}



//##################### CRUD DATA DETAIL GALERI ############################//
	public function getDetailGaleri($id){
		$this->db->select('galeri.*, detail_galeri.*');
		$this->db->join('galeri', 'galeri.id = detail_galeri.id_galeri');
		return $this->db->get_where('detail_galeri', ['id_galeri' => $id])->result();
	}
  
	public function getDetailGaleriById($id){
		return $this->db->get_where('detail_galeri', ['id' => $id])->row();
	}

	public function tambahDetailGaleri($image){
		$data = [
			'id_galeri' => $this->input->post('id_galeri'),
			'gambar'	=> $image
		];

		$this->db->insert('detail_galeri', $data);
	}

	public function ubahDetailGaleri($gambar){
		$data = [
			'id_galeri' => $this->input->post('id_galeri'),
			'gambar'    => $gambar
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('detail_galeri', $data);
	}

	public function hapusDetailGaleri($id){
		$this->db->delete('detail_galeri', ['id' => $id]);
	}

}