<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Agenda extends CI_Controller{

	public function index(){
		$data['menu'] 		  = ['',['','','','','',''],['','',''],'aktif','','',''];
		$data['agendas'] 	  = $this->MAgenda->getAgenda();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();
		$data['title'] 		  = 'AGENDA';

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('agenda/index.php', $data);
		$this->load->view('template/footer.php', $data);
	}

}


?>