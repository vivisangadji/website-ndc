<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{ 

	public function index(){
		$nav['menu']          = ['aktif',['','','','','',''],['','',''],'','','',''];
		$data['carousel']     = $this->mCarousel->getCarousel();
		$data['artInfo']  	  = $this->mArtikel->getArtikelByKategori(1)->result();
		$data['artTutorial']  = $this->mArtikel->getArtikelByKategori(2)->result();
		$data['services']	  = $this->mFooter->getService();
		$data['konsentrasi']  = $this->mFooter->getKonsentrasi();
		$data['divisi']		  = $this->mFooter->getDivisi();
		$data['kontaks']	  = $this->mFooter->getKontak();
		$data['medsos']		  = $this->mFooter->getMedsos();

		// $data['artInfoit'] = $this->mArtikel->getArtikelByKategori(2)->result();
		// $data['kategori'] = $this->mArtikel->getKategori()->row();
		
		$data['title'] = 'BERANDA';
		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php',$nav);
		$this->load->view('home/index.php',$data);
		$this->load->view('template/footer.php', $data);
	}
	
}


?>