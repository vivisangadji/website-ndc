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
		
		// fungsi upload gambar
		$gambar_anggota = $this->uploadGambar("gambar", $this->upload->data("file_name"));
		if (!$gambar_anggota) {
			return $error = $this->upload->display_errors();
		} else {
			$this->mAnggota->tambahAnggota($gambar_anggota);
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/anggota' ));
		}
	}

	public function ubahAnggota($id){
		$data['title']   = 'Ubah Data Anggota';
		$data['anggota'] = $this->mAnggota->getAnggotaById($id);

		if ($this->input->method() == "post") {
			$this->updateAnggota($id);
		} 
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/anggota/ubahAnggota',$data);
		$this->load->view('admin/template/footer');
	}
	
	public function updateAnggota($id) {
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nra', 'NRA', 'required');
		$this->form_validation->set_rules('angkatan_ndc', 'Field ini', 'required');
		$this->form_validation->set_rules('angkatan_kampus', 'Field ini', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		
		$anggota = $this->db->get_where("anggota", ["id" => $id])->row();
		$data_gambar = $this->uploadGambar("gambar", $anggota->gambar);
		$this->mAnggota->ubahAnggota($data_gambar);
		$this->session->set_flashdata('alert','Diubah');
		redirect(base_url('admin/anggota' ));
	}
	
	private function uploadGambar($inputName,$gambarDefault=null){
		$config['upload_path']   = './public/img/anggota/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name']  = TRUE;
		$this->upload->initialize($config);
		// initialize library upload
		if(isset($_FILES[$inputName]) && $_FILES[$inputName]['name'] && $this->upload->do_upload($inputName)){
			if($gambarDefault && $gambarDefault!="default.png" && is_file(FCPATH ."public/img/anggota/". $gambarDefault ) ){
				unlink(FCPATH  ."public/img/anggota/". $gambarDefault); //Delete gambar sebelumnya jika ada gambar baru
			}
			$gambarDefault = $this->upload->data();
			return $gambarDefault['file_name'];
		}
		return $gambarDefault;
	}

	public function hapusAnggota($id){
		$item = $this->db->get_where("anggota", ["id" => $id])->row();
		if ($item->gambar != null) {
			$target_file = "./public/img/anggota/". $item->gambar;
			unlink($target_file);
		}
		$this->mAnggota->hapusAnggota($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/anggota'));
	}

}