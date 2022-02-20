<?php 


class Pendaftaran extends CI_Controller {

	public function index()
	{
		$data['title'] 		  = 'Pendaftaran';
		$data['status']		  = $this->MPendaftaran->getStatusPendaftaran(); //status pendaftaran
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
			$this->load->view('template/header', $data);
			$this->load->view('pendaftaran/index', $data);
		} else {
			$this->MPendaftaran->addPendaftaran();
			redirect(base_url(''));
		}
		
	}
	
}