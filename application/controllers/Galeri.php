<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller{

	public function index(){
		$data['menu']   	  = ['',['','','','','',''],['','',''],'','aktif','',''];
		$data['title']  	  = 'GALERI';
		$data['galeri'] 	  = $this->mGaleri->getGaleri();
		$data['services']	  = $this->mFooter->getService();
		$data['konsentrasi']  = $this->mFooter->getKonsentrasi();
		$data['divisi']		  = $this->mFooter->getDivisi();
		$data['kontaks']	  = $this->mFooter->getKontak();
		$data['medsos']		  = $this->mFooter->getMedsos();

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('galeri/index.php', $data);
		$this->load->view('template/footer.php', $data);
	}	

	public function detailGaleri($id){
		$data['menu']   	   = ['',['','','','','',''],['','',''],'','aktif','',''];
		$data['title']  	   = 'DETAIL GALERI';
		$data['detail_galeri'] = $this->mGaleri->getDetailGaleri($id);
		$data['services']	   = $this->mFooter->getService();
		$data['konsentrasi']   = $this->mFooter->getKonsentrasi();
		$data['divisi']		   = $this->mFooter->getDivisi();
		$data['kontaks']	   = $this->mFooter->getKontak();
		$data['medsos']		   = $this->mFooter->getMedsos();
		$data['galeri'] 	   = $this->mGaleri->getGaleriById($id);

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('galeri/detail.php', $data);
		$this->load->view('template/footer.php', $data);
	}
	
}


?>