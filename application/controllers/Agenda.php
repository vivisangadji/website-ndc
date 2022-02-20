<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Agenda extends CI_Controller{

	public function index(){
		$data['menu'] 		  = ['',['','','','','',''],['','',''],'aktif','','',''];
		$data['agendas'] 	  = $this->mAgenda->getAgenda();
		$data['services']	  = $this->mFooter->getService();
		$data['konsentrasi']  = $this->mFooter->getKonsentrasi();
		$data['divisi']		  = $this->mFooter->getDivisi();
		$data['kontaks']	  = $this->mFooter->getKontak();
		$data['medsos']		  = $this->mFooter->getMedsos();
		$data['title'] 		  = 'AGENDA';

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('agenda/index.php', $data);
		$this->load->view('template/footer.php', $data);
	}

}


?>