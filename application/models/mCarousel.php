<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class mCarousel extends CI_Model{

	public function getCarousel(){
		$this->db->order_by('urutan','ASC');
		return $this->db->get('carousel')->result();
	}

	public function getCarouselById($id){
		return $this->db->get_where('carousel', ['id' => $id])->row();
	}

	public function tambahCarousel($gambar, $urutan){
		$data = [
			'img' => $gambar,
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi'),
			'urutan' => $urutan
		];

		$this->db->insert('carousel', $data);
	}

	public function hapusCarousel($id){
		$this->db->where('id', $id);
		$this->db->delete('carousel');
	}

	public function ubahCarousel($gambar){
		$data = [
			'img' => $gambar,
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('carousel', $data);
		
	}
	
}

