<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class MArtikel extends CI_Model{

	public function getArtikel(){
		return $this->db->get('artikel')->result();
	}

	public function getArtikelById($id){
		return $this->db->get_where('artikel', ['id' => $id])->row();
	}

	public function getDetailArtikel($id){
		$this->db->where('id', $id);
		return $this->db->get('artikel')->row();

	}

	public function getArtikelByKategori($id){
		$this->db->join('kategori', 'kategori.id = artikel.id_kategori');	
		$this->db->select('artikel.*, kategori.nama_kategori');
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get_where('artikel',['id_kategori' => $id],3);
	}

	public function getKategori(){
		return $this->db->get_where('kategori', ['nama_kategori' => 'tutorial']);
	}

	public function getAllKategori(){
		return $this->db->get('kategori')->result();
	}

	public function getSubKategori($id){
		return $this->db->get_where('subkategori', ['id' => $id])->result();
	}
	
	public function getAllSubKategori(){
		return $this->db->get('subkategori')->result();
	}

	// untuk keyword pencarian artikel
	public function cariDataArtikel(){
		$keyword = $this->input->post('keyword');
		$this->db->like('judul', $keyword);
		$this->db->or_like('konten', $keyword);
		$this->db->or_like('tanggal', $keyword);
		return $this->db->get('artikel')->result();
	}

	public function tambahArtikel($sampul, $author_sampul){
		
		$data = [
			'id_kategori' 	 => $this->input->post('id_kategori'),
			'id_subkategori' => implode(",", $this->input->post('id_subkategori')),
			'judul' 		 => htmlspecialchars($this->input->post('judul')),
			'konten' 		 => htmlspecialchars($this->input->post('konten')),
			'sampul' 		 => $sampul,
			'author' 		 => htmlspecialchars($this->input->post('author')),
			'author_sampul'  => $author_sampul
		];

		$this->db->insert('artikel', $data);
	}

	public function getRandomArtikel(){
		$this->db->order_by('tanggal', 'ASC');
		$this->db->limit(4);
		return $this->db->get('artikel')->result();
	}

	public function hapusArtikel($id){
		$this->db->delete('artikel', ['id' => $id]);
	}

}