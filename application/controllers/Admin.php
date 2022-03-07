<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['title'] = 'ADMIN NDC';

		if ($this->session->userdata('status') != 'login') {
			redirect(base_url('admin/login'));
		}else {
			if ($this->session->userdata("roles") != "admin") {
				redirect(base_url("admin/login"));
			}else {
				$this->load->view('admin/template/header',$data);
				$this->load->view('admin/template/navbar', $data);
				$this->load->view('admin/index', $data);
				$this->load->view('admin/template/footer');
			}
			
		}

	}

	public function loginAdmin(){
		$this->form_validation->set_rules('username','Username', 'trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login';
			$this->load->view('admin/login', $data);
		}else {
			$cek = $this->MAdmin->cekLogin(); // cek di model apa username dan pass yg diisi sesuai dengan yg di database
			
			if ($cek) {
				$this->session->set_userdata('status', 'login');
				$this->session->set_userdata('roles', $cek->role);
				if ($cek->role == "admin") {
					redirect(base_url('admin'));
				} elseif($cek->role == "admin-pendaftaran") {
					redirect(base_url('admin-lk1/data-pendaftar'));
				}
				
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function komentar(){
		$data['title']    = 'Komentar';
		$data['komentar'] = $this->MAdmin->getAllKomentar();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/komentar/index', $data);
		$this->load->view('admin/template/footer');
	}


	// pendaftaran
	public function getAllPendaftar(){
		$data['title']	= 'Data Pendaftaran';
		$data['pendaftars']	= $this->MPendaftaran->getDataPendaftar();

		if ($this->session->userdata("roles") != "admin-pendaftaran") {
			redirect(base_url("admin/login"));
		} else {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/pendaftaran/index', $data);
		}
		
	}

	public function tambahPendaftar(){
		$data['title'] 		  = 'Tambah Pendaftar';
		$data['jurusan']	  = $this->MPendaftaran->getJurusan();

		// form_validation
		$this->form_validation->set_rules('stb', 'STB', 'required|is_unique[calon_anggota.stb]');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[calon_anggota.email]');
		$this->form_validation->set_rules('kampus', 'Nama Kampus', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('alasan', 'Alasan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/pendaftaran/tambah', $data);
		} else {
			$this->MPendaftaran->addPendaftaran();
			$this->session->set_flashdata('alert', 'Ditambahkan');
			redirect(base_url('admin/data-pendaftar'));
		}

	}

	public function cetakData($stb){
		$data['title'] = 'Detail Data Pendaftar';
		$data['detail'] = $this->db->get_where('calon_anggota', ['stb'=>$stb])->row();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pendaftaran/cetak', $data);
	}

	public function editData($stb){
		$data['title'] 	 = 'Edit Data Pendaftar';
		$data['edit'] 	 = $this->db->get_where('calon_anggota', ['stb'=>$stb])->row();
		$data['jurusan'] = $this->MPendaftaran->getJurusan();

		// form_validation
		$this->form_validation->set_rules('stb', 'STB', 'required');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('kampus', 'Nama Kampus', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('alasan', 'Alasan', 'required');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/pendaftaran/edit', $data);
		} else {
			$stb = $this->input->post('stb');
			$this->MPendaftaran->editPendaftaran($stb);
			$this->session->set_flashdata('alert', 'diedit');
			redirect(base_url('admin-lk1/data-pendaftar'));
		}
	}
	
}