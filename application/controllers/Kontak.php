<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller{

	public function index(){
		$data['menu'] 		  = ['',['','','','','',''],['','',''],'','','aktif',''];
		$data['title'] 		  = 'KONTAK';
		$data['alamat'] 	  = $this->MAlamat->getAlamat();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('kontak/index.php', $data);
		$this->load->view('template/footer.php', $data);
	}

	public function saveKomentar(){ // diproses di model mAdmin
		$data['title'] = 'KONTAK';
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header.php', $data);
			$this->load->view('template/navbar.php');
			$this->load->view('kontak/index.php');
			$this->load->view('template/footer.php');
		}else {
			$this->mAdmin->saveKomentar();
			$this->session->set_flashdata('alert', 'Dikirim');
			redirect(base_url('kontak'));
		}
	}
	
}


?>