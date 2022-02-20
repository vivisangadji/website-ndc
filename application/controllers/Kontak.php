<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller{

	public function index(){
		$data['menu'] 		  = ['',['','','','','',''],['','',''],'','','aktif',''];
		$data['title'] 		  = 'KONTAK';
		$data['alamat'] 	  = $this->mAlamat->getAlamat();
		$data['services']	  = $this->mFooter->getService();
		$data['konsentrasi']  = $this->mFooter->getKonsentrasi();
		$data['divisi']		  = $this->mFooter->getDivisi();
		$data['kontaks']	  = $this->mFooter->getKontak();
		$data['medsos']		  = $this->mFooter->getMedsos();

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