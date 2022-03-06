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
		$data_gambar = $this->uploadGambar("gambar", $this->upload->data('file_name'));

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/carousel/tambahCarousel');
			$this->load->view('admin/template/footer');
			
		}
		if (!$data_gambar) {
        	$error =  $this->upload->display_errors();
        }else {
			// urutan
			$carousel = $this->db->order_by("urutan", "DESC")->get("carousel")->result();
			$getUrutan = $carousel[0]->urutan; 
			
			$this->mCarousel->tambahCarousel($data_gambar, $getUrutan+=1);
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/carousel'));
		}
	}

	public function ubahCarousel($id){
		$data['title'] = 'Ubah Carousel';
		$data['carousel'] = $this->mCarousel->getCarouselById($id);

		if ($this->input->method() == "post") {
			$this->updateCarousel($id);
		}
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/carousel/ubahCarousel',$data);
		$this->load->view('admin/template/footer');

	}

	public function updateCarousel($id) {
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		if(!$this->form_validation->run()) return false;

		$carousel = $this->db->get_where("carousel", ["id" => $id])->row();
		$carousel_img = $this->uploadGambar("gambar", $carousel->img);
		$this->mCarousel->ubahCarousel($carousel_img);
		$this->session->set_flashdata("alert", "diubah");
		redirect(base_url("admin/carousel"));
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
			$gambarDefault = $this->upload->data();
			return $gambarDefault['file_name'];
		}
		return $gambarDefault;
	}

	public function hapusCarousel($id){
		$item = $this->db->get_where("carousel", ["id" => $id])->row();
		if ($item->img != null) {
			$target_file = "./public/img/carousel/". $item->img;
			unlink($target_file);
		}
		$this->mCarousel->hapusCarousel($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/carousel'));
	}
}