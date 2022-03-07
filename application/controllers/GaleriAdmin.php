<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriAdmin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('upload');
	}


// ################ CRUD DATA GALERI #####################//
	public function index(){
		$data['title']  = 'Galeri';
		$data['galeri'] = $this->MGaleri->getGaleri();

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/galeri/index',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambahGaleri(){
		$data['title']  = 'Tambah Galeri';
		$data['galeri'] = $this->MGaleri->getGaleri();
		$this->form_validation->set_rules('kegiatan', 'Nama kegiatan', 'required');
		$this->form_validation->set_rules('sampul_kegiatan', 'Sampul', 'required');
		// fungsi upload gambar
		$galeri_img = $this->uploadGambar("sampul_kegiatan", $this->upload->data('file_name'));
		
        if ($this->form_validation->run() == FALSE) {       	
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/galeri/tambah_galeri');
			$this->load->view('admin/template/footer');
        }
   	
        if (!$galeri_img) {
        	$error =  $this->upload->display_errors();
        }else {
	        $this->MGaleri->tambahGaleri($galeri_img);
	        $this->session->set_flashdata('alert', 'Ditambahkan');
	        redirect(base_url('admin/galeri'));
        }
	}

	public function ubahGaleri($id){
		$data['title']  = 'Ubah data galeri';
		$data['galeri'] = $this->MGaleri->getGaleriById($id);
		
		if ($this->input->method() == "post") {
			$this->updateGaleri($id);
		}
		$this->load->view('admin/template/header',$data); 
		$this->load->view('admin/template/navbar'); 
		$this->load->view('admin/galeri/ubah_galeri',$data); 
		$this->load->view('admin/template/footer'); 
	}

	public function updateGaleri($id){
		$this->form_validation->set_rules('kegiatan', 'Nama kegiatan', 'required');
		if(!$this->form_validation->run()) return false;

		$galeri = $this->db->get_where("galeri", ["id" => $id])->row();
		$galeri_img = $this->uploadGambar("sampul_kegiatan", $galeri->sampul);
		$this->MGaleri->ubahGaleri($galeri_img);
		$this->session->set_flashdata('alert', 'Diubah');
		redirect(base_url('admin/galeri'));
	}

	private function uploadGambar($inputName,$gambarDefault=null){
		$config['upload_path']   = './public/img/galeri/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name']  = TRUE;
		$this->upload->initialize($config);
		// initialize library upload
		if(isset($_FILES[$inputName]) && $_FILES[$inputName]['name'] && $this->upload->do_upload($inputName)){
			if($gambarDefault && $gambarDefault!="default.png" && is_file(FCPATH ."public/img/galeri/". $gambarDefault ) ){
				unlink(FCPATH  ."public/img/galeri/". $gambarDefault); //Delete gambar sebelumnya jika ada gambar baru
			}
			$gambarDefault = $this->upload->data();
			return $gambarDefault['file_name'];
		}
		return $gambarDefault;
	}

	public function hapusGaleri($id){
		$item = $this->db->get_where("galeri", ["id" => $id])->row();
		if ($item->sampul != null) {
			$target_file = "./public/img/galeri/". $item->sampul;
			unlink($target_file);
		}
		$this->MGaleri->hapusGaleri($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/galeri'));
	}
// ################ /.CRUD DATA GALERI #####################//





// ################ CRUD DETAIL GALERI #####################//
	public function detailGaleri($id){
		$data['title'] 		   = 'Detail Galeri';
		$data['detail_galeri'] = $this->MGaleri->getDetailGaleri($id);
		$data['id_galeri'] 	   = $this->uri->segment('3'); // mengambil parameter id_galeri dari url

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/galeri/detail', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambahDetailGaleri($id){
		$data['title']  = 'Tambah Detail Galeri';
		$data['galeri'] = $this->MGaleri->getGaleriById($id);
		$this->form_validation->set_rules('id_galeri', 'Field ini', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');
		// fungsi upload gambar
		$data_gambar = $this->uploadGambar("gambar", $this->upload->data('file_name'));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/galeri/tambah_detail_galeri',$data);
			$this->load->view('admin/template/footer');
		}

		if (!$data_gambar){
		    $error = $this->upload->display_errors();
		}else {
			$this->MGaleri->tambahDetailGaleri($data_gambar);
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/detail-galeri/'.$id ));
		}
	}

	// id_galeri:tabel galeri, id_detail:tabel detail_galeri
	public function ubahDetailGaleri($id_detail, $id_kegiatan){
		$data['title'] 		     = 'Ubah detail galeri';
		$data['detail_galeri']   = $this->MGaleri->getDetailGaleriById($id_detail);
		$data['kegiatan']		 = $this->db->get("galeri")->result();
		$data['galeri'] = $this->MGaleri->getGaleriById($id_kegiatan);
		
		if ($this->input->method() == "post") {
			$this->updateDetailGaleri($id_detail);
		}
		$this->load->view('admin/template/header',$data); 
		$this->load->view('admin/template/navbar'); 
		$this->load->view('admin/galeri/ubah_detail_galeri', $data); 
		$this->load->view('admin/template/footer'); 		
	}
	
	public function updateDetailGaleri($id_detail) {
		$this->form_validation->set_rules('id_galeri', 'Field ini', 'required');
		if(!$this->form_validation->run()) return false;
		
		$id_galeri = $this->input->post("id_galeri");
		$detail_galeri = $this->db->get_where("detail_galeri", ["id" => $id_detail])->row();
		$image = $this->uploadGambar("gambar", $detail_galeri->gambar);
		$this->MGaleri->ubahDetailGaleri($image);
		$this->session->set_flashdata('alert', 'Diubah');
		redirect(base_url('admin/detail-galeri/'.$id_galeri));
	}

	public function hapusDetailGaleri($id_galeri, $id_detail){
		$item = $this->db->get_where("detail_galeri", ["id" => $id_detail])->row();
		if ($item->gambar != null) {
			$target_file = "./public/img/galeri/". $item->gambar;
			unlink($target_file);
		}
		$this->MGaleri->hapusDetailGaleri($id_detail);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/detail-galeri/'.$id_galeri));
	}
// ################ /.CRUD DATA DETAIL GALERI #####################//

} 	