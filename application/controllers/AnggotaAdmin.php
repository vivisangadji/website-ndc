<?php 

class AnggotaAdmin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['title']   = 'Anggota';
		$data['anggota'] = $this->mAnggota->getAnggota();

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/anggota/index',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambahAnggota(){
		$data['title'] = 'Tambah Anggota';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nra', 'NRA', 'required');
		$this->form_validation->set_rules('angkatan_ndc', 'Field ini', 'required');
		$this->form_validation->set_rules('angkatan_kampus', 'Field ini', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/anggota/tambahAnggota');
			$this->load->view('admin/template/footer');
		}

		// config upload file
		$config['upload_path']   = './public/img/anggota';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['encrypt_name']  = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gambar')) {
        	$error =  $this->upload->display_errors();
        } else {
			$fileGambar = $this->upload->data();
			// compress image
			$config['image_library'] = 'gd2';
			$config['source_image'] = './public/img/anggota/'.$fileGambar['file_name'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 750;
			$config['height']       = 500;
			$config['new_image']    = './public/img/anggota/'.$fileGambar['file_name'];

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			// insert data
        	$data_gambar = $fileGambar['file_name'];
			$this->mAnggota->tambahAnggota($data_gambar);
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/anggota' ));
		}
	}

	public function ubahAnggota($id){
		$data['title']   = 'Ubah Data Anggota';
		$data['anggota'] = $this->mAnggota->getAnggotaById($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nra', 'NRA', 'required');
		$this->form_validation->set_rules('angkatan_ndc', 'Field ini', 'required');
		$this->form_validation->set_rules('angkatan_kampus', 'Field ini', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');
		// config upload file
		$config['upload_path']   = './public/img/anggota';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['encrypt_name']  = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/anggota/ubahAnggota',$data);
			$this->load->view('admin/template/footer');
		} 
		
		if (!$this->upload->do_upload('gambar')) {
        	$error =  $this->upload->display_errors();
        }else {
			$fileGambar = $this->upload->data();
        	// compress image
	        $config['image_library']='gd2';
	        $config['source_image'] ='./public/img/anggota/'.$fileGambar['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio']= TRUE;
	        $config['quality']      = '50%';
	        $config['width']        = 750;
	        $config['height']       = 500;
	        $config['new_image']    = './public/img/anggota/'.$fileGambar['file_name'];
	        // load library image_lib
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize(200, 100, true, 'height');

	        // insert data
        	$data_gambar = $fileGambar['file_name'];
            // print_r($fileGambar);
	        $this->mAnggota->ubahAnggota($data_gambar);
			$this->session->set_flashdata('alert','Diubah');
			redirect(base_url('admin/anggota' ));
		}
	}
	

	public function hapusAnggota($id){
		$this->mAnggota->hapusAnggota($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/anggota'));
	}

}