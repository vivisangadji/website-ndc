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
		$data['galeri'] = $this->mGaleri->getGaleri();

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/galeri/index',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambahGaleri(){
		$data['title']  = 'Tambah Galeri';
		$data['galeri'] = $this->mGaleri->getGaleri();
		$this->form_validation->set_rules('kegiatan', 'Nama kegiatan', 'required');
		$this->form_validation->set_rules('sampul_kegiatan', 'Sampul', 'required');
		// config upload file
		$config['upload_path']   = './public/img/galeri';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name']  = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE) {       	
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/galeri/tambah_galeri');
			$this->load->view('admin/template/footer');
        }
   	
        if (!$this->upload->do_upload('sampul_kegiatan')) {
        	$error =  $this->upload->display_errors();
        }else {
        	$fileGambar = $this->upload->data();
        	// compress image
	        $config['image_library']='gd2';
	        $config['source_image'] ='./public/img/galeri/'.$fileGambar['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio']= FALSE;
	        $config['quality']      = '50%';
	        $config['width']        = 600;
	        $config['height']       = 400;
	        $config['new_image']    = './public/img/galeri/'.$fileGambar['file_name'];
	        // load library image_lib
	        $this->load->library('image_lib', $config);
            $this->image_lib->resize();

	        // insert data
        	$data_gambar = $fileGambar['file_name'];
	        $this->mGaleri->tambahGaleri($data_gambar);
	        $this->session->set_flashdata('alert', 'Ditambahkan');
	        redirect(base_url('admin/galeri'));
        }
	}

	public function ubahGaleri($id){
		$data['title']  = 'Ubah data galeri';
		$data['galeri'] = $this->mGaleri->getGaleriById($id);
		$this->form_validation->set_rules('kegiatan', 'Nama kegiatan', 'required');
		$this->form_validation->set_rules('sampul_kegiatan', 'Sampul', 'required');
		// config upload file
		$config['upload_path']   = './public/img/galeri';
		$config['allowed_types'] = 'jpg|jpeg|png';
		// initialize library upload
		$this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data); 
			$this->load->view('admin/template/navbar'); 
			$this->load->view('admin/galeri/ubah_galeri',$data); 
			$this->load->view('admin/template/footer'); 
		}

		if (!$this->upload->do_upload('sampul_kegiatan')) {
			$eror = $this->upload->display_errors();
		} else {
			$fileGambar = $this->upload->data();
			// compress image
			$config['image_library'] = 'gd2'; 
			$config['source_image']  = './public/img/galeri/'.$fileGambar['file_name']; 
			$config['create_thumb']  = FALSE;
	        $config['maintain_ratio']= FALSE;
	        $config['quality']       = '50%';
	        $config['width']         = 750;
	        $config['height']        = 500;
	        $config['new_image']     = './public/img/galeri/'.$fileGambar['file_name'];
	        // load library image_lib
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();

			// ubah data
			$data_gambar = $fileGambar['file_name'];
        	$this->mGaleri->ubahGaleri($data_gambar);
        	$this->session->set_flashdata('alert', 'Diubah');
        	redirect(base_url('admin/galeri'));
		}   
	}

	public function hapusGaleri($id){
		$this->mGaleri->hapusGaleri($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/galeri'));
	}
// ################ /.CRUD DATA GALERI #####################//





// ################ CRUD DETAIL GALERI #####################//
	public function detailGaleri($id){
		$data['title'] 		   = 'Detail Galeri';
		$data['detail_galeri'] = $this->mGaleri->getDetailGaleri($id);

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/galeri/detail', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambahDetailGaleri($id){
		$data['title']  = 'Tambah Detail Galeri';
		$data['galeri'] = $this->mGaleri->getGaleriById($id);
		$this->form_validation->set_rules('id_galeri', 'Field ini', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');

		// config upload file
		$config['upload_path']    = './public/img/galeri';
        $config['allowed_types']  = 'jpeg|jpg|png';
        $config['encrypt_name']   = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/galeri/tambah_detail_galeri',$data);
			$this->load->view('admin/template/footer');
		}

		if (!$this->upload->do_upload('gambar')){
		    $error = $this->upload->display_errors();
		}else {
			$filename = $this->upload->data();
			// Compress image
			$config['image_library']  = 'gd2';
			$config['source_image']   = './public/img/galeri/'.$filename['file_name'];
			$config['quality']        = '50%';
			$config['create_thumb']   = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width']          = 750;
			$config['height']         = 500;
			$config['new_image']      = './public/img/galeri/'.$filename['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize(); 

			//insert data
			$image = $filename['file_name'];
			$this->mGaleri->tambahDetailGaleri($image);
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/galeri/detail/'.$id ));
		}
	}

	// id_galeri:tabel galeri, id_detail:tabel detail_galeri
	public function ubahDetailGaleri($id_galeri, $id_detail){
		$data['title'] 		     = 'Ubah detail galeri';
		$data['detail_galeri']   = $this->mGaleri->getDetailGaleriById($id_detail);
		$data['galeri'] 	     = $this->mGaleri->getGaleriById($id_galeri);
		$this->form_validation->set_rules('id_galeri', 'Field ini', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');

		// config upload file
		$config['upload_path']   = './public/img/galeri';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['encrypt_name']  = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data); 
			$this->load->view('admin/template/navbar'); 
			$this->load->view('admin/galeri/ubah_detail_galeri', $data); 
			$this->load->view('admin/template/footer'); 
		}

        if (!$this->upload->do_upload('gambar')){
            $error = $this->upload->display_errors();
        }else {
        	$fileGambar = $this->upload->data();
        	// compress image
        	$config['image_library'] = 'gd2';
        	$config['source_image']  = './public/img/galeri'.$fileGambar['file_name'];
        	$config['quality']       = '50%';
        	$config['width']         = 750;
        	$config['height']        = 500;
        	$config['new_image']     = './public/img/galeri'.$fileGambar['file_name'];
        	// load library image_lib
        	$this->load->library('image_lib',$config);
        	$this->image_lib->resize();

        	// ubah data
        	$image = $fileGambar['file_name'];
        	$this->mGaleri->ubahDetailGaleri($image);
        	$this->session->set_flashdata('alert', 'Diubah');
        	redirect(base_url('admin/galeri/detail/'.$id_galeri));
        }

	}

	public function hapusDetailGaleri($id_galeri, $id_detail){
		$this->mGaleri->hapusDetailGaleri($id_detail);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/galeri/detail/'.$id_galeri));
	}
// ################ /.CRUD DATA DETAIL GALERI #####################//

} 	