<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelAdmin extends CI_Controller {

	public function index(){
		$data['title']   	= 'Artikel';
		$data['artikels']	= $this->mArtikel->getArtikel();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/artikel/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambahArtikel(){
		$data['title']  	 = 'Tambah Artikel';
		$data['kategoris'] 	 = $this->mArtikel->getAllKategori();
		$data['subKategoris'] = $this->mArtikel->getAllSubKategori();
		/* set rules form input */
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('konten', 'Konten', 'required');
		$this->form_validation->set_rules('sampul', 'Sampul artikel', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('author_sampul', 'Gambar author', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('id_subkategori[]', 'Sub Kategori', 'required');
		// config upload file
		$config['upload_path']   = './public/img/artikel';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['encrypt_name']  = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/artikel/tambahArtikel', $data);
			$this->load->view('admin/template/footer');
		}
		
		if (!$this->upload->do_upload('sampul')) {
        	$error =  $this->upload->display_errors();
        }else {
			$fileGambar = $this->upload->data();
        	// compress image
	        $config['image_library']='gd2';
	        $config['source_image'] ='./public/img/artikel/'.$fileGambar['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio']= FALSE;
	        $config['quality']      = '50%';
	        $config['width']        = 750;
	        $config['height']       = 500;
	        $config['new_image']    = './public/img/artikel/'.$fileGambar['file_name'];
	        // load library image_lib
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();

			// script upload file samppul
			$this->upload->do_upload('sampul');
			$file1 = $this->upload->data();
			$sampul = $file1['file_name'];
			
			// script uplaod file author sampul
			$this->upload->do_upload('author_sampul');
			$file2 = $this->upload->data();
			$author_sampul = $file2['file_name'];

	        // insert data
			$this->mArtikel->tambahArtikel($sampul, $author_sampul);
			$this->session->set_flashdata('alert', 'Ditambahkan');
			redirect(base_url('admin/artikel'));
		}
	}

	public function ubahArtikel($id){
		$data['title']	 	  = 'Ubah Artikel';
		$data['artikel'] 	  = $this->mArtikel->getArtikelById($id);
		$data['kategoris'] 	  = $this->mArtikel->getAllKategori();
		$data['subKategoris'] = $this->mArtikel->getAllSubKategori();
		$id_sub = explode(",", $data['artikel']->id_subkategori);
		$data['id_subkategori'] = $id_sub;

		if($this->input->method()=="post"){
			$this->updateArtikel($id);
		}
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/artikel/ubahArtikel', $data);
		$this->load->view('admin/template/footer');

	}

	private function updateArtikel($id){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('konten', 'Konten', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('id_subkategori[]', 'Sub Kategori', 'required');
		if(!$this->form_validation->run()) return false;

		$artikel = $this->db->where("id",$id)->get('artikel')->row();
		$sampul  = $this->uploadGambar("sampul",$artikel->sampul);
		$author_sampul = $this->uploadGambar("author_sampul",$artikel->author_sampul);
		$this->db->where("id", $id)->update("artikel",[
			"judul" => $this->input->post("judul"),
			"konten" => $this->input->post("konten"),
			"author" => $this->input->post("author"),
			"sampul"=> $sampul,
			"author_sampul"=> $author_sampul,
			"id_kategori" => $this->input->post("id_kategori"),
			"id_subkategori" => implode(",", $this->input->post('id_subkategori'))
		]);
		$this->session->set_flashdata("alert","Diubah");
		return redirect(base_url("admin/artikel"));
	}

	private function uploadGambar($inputName,$gambarDefault=null){
		$config['upload_path']   = './public/img/artikel/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['encrypt_name']  = TRUE;
		$this->upload->initialize($config);
		// initialize library upload
		if(isset($_FILES[$inputName]) && $_FILES[$inputName]['name'] && $this->upload->do_upload($inputName)){
			if($gambarDefault && $gambarDefault!="default.png" && is_file(FCPATH ."public/img/artikel/". $gambarDefault ) ){
				unlink(FCPATH  ."public/img/artikel/". $gambarDefault); //Delete gambar sebelumnya jika ada gambar baru
			}

			$fileGambar = $this->upload->data();
			// compress image
			$config['image_library']	='gd2';
			$config['source_image'] 	='./public/img/artikel/'.$fileGambar['file_name'];
			$config['create_thumb'] 	= FALSE;
			$config['maintain_ratio']	= FALSE;
			$config['quality']      	= '50%';
			$config['width']        	= 750;
			$config['height']       	= 500;
			$config['new_image']    	= './public/img/artikel/'.$fileGambar['file_name'];
			// load library image_lib
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			return $fileGambar['file_name'];
		}
		return $gambarDefault;
	}

	public function hapusArtikel($id){
		$this->mArtikel->hapusArtikel($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/artikel'));
	}

}