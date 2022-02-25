<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CarouselAdmin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['carousel'] = $this->mCarousel->getCarousel();
		$data['title'] = 'Carousel';

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/carousel/index',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambahCarousel(){
		$data['title'] = 'Tambah Carousel';
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');
		// panggil fungsi uploadGambar
		$gambar = $this->uploadGambar("gambar", $this->upload->data('file_name'));

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/carousel/tambahCarousel');
			$this->load->view('admin/template/footer');
			
		}
		if (!$this->upload->do_upload('gambar')) {
        	$error =  $this->upload->display_errors();
        }else {
			$fileGambar = $this->upload->data();
        	// compress image
	        $config['image_library']='gd2';
	        $config['source_image'] ='./public/img/carousel/'.$fileGambar['file_name'];
	        $config['quality']      = '50%';
	        $config['width']        = 750;
	        $config['height']       = 500;
	        $config['new_image']    = './public/img/carousel/'.$fileGambar['file_name'];
	        // load library image_lib
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();

			// urutan
			$carousel = $this->db->order_by("urutan", "DESC")->get("carousel")->result();
			$getUrutan = $carousel[0]->urutan; 
			
	        // insert data
        	$data_gambar = $fileGambar['file_name'];
			$this->mCarousel->tambahCarousel($data_gambar, $getUrutan+=1);
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/carousel'));
		}
	}

	public function ubahCarousel($id){
		$data['title'] = 'Ubah Carousel';
		$data['carousel'] = $this->mCarousel->getCarouselById($id);

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');

		// config upload file
		$config['upload_path']   = './public/img/carousel';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['overwrite']  	 = TRUE;
		// initialize library upload
		$this->upload->initialize($config);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/carousel/ubahCarousel',$data);
			$this->load->view('admin/template/footer');
			
		}

		if (!$this->upload->do_upload('gambar')) {
        	$error =  $this->upload->display_errors();
        }else {
			$fileGambar = $this->upload->data();
        	// compress image
	        $config['image_library']='gd2';
	        $config['source_image'] ='./public/img/carousel/'.$fileGambar['file_name'];
	        $config['quality']      = '50%';
	        $config['width']        = 750;
	        $config['height']       = 500;
	        $config['new_image']    = './public/img/carousel/'.$fileGambar['file_name'];
	        // load library image_lib
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();

	        // insert data
        	$data_gambar = $fileGambar['file_name'];
			$this->mCarousel->ubahCarousel($data_gambar);
			$this->session->set_flashdata('alert','Diubah');
			redirect('admin/carousel');
		}
	}

	private function uploadGambar($inputName,$gambarDefault=null){
		$config['upload_path']   = './public/img/carousel/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name']  = TRUE;
		$this->upload->initialize($config);
		// initialize library upload
		if(isset($_FILES[$inputName]) && $_FILES[$inputName]['name'] && $this->upload->do_upload($inputName)){
			if($gambarDefault && $gambarDefault!="default.png" && is_file(FCPATH ."public/img/carousel/". $gambarDefault ) ){
				unlink(FCPATH  ."public/img/carousel/". $gambarDefault); //Delete gambar sebelumnya jika ada gambar baru
			}
			$fileGambar = $this->upload->data();
			return $fileGambar['file_name'];
		}
		return $gambarDefault;
	}

	public function hapusCarousel($id){
		$this->mCarousel->hapusCarousel($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/carousel'));
	}
}