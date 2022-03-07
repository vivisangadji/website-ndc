<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

	public function visiMisi(){
		$data['menu'] 	   = ['',['aktif','aktif','','','',''],['','',''],'','','',''];
		$data['title'] 	   	  = 'VISI & MISI';
		$data['visi_misi'] 	  = $this->MVisiMisi->getVisiMisi();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();

		$this->load->view('template/header.php',$data);
		$this->load->view('template/navbar.php',$data);
		$this->load->view('profil/visimisi.php',$data);
		$this->load->view('template/footer.php', $data);
	}

	public function anggota(){
		$data['menu'] 	 = ['',['aktif','','aktif','','',''],['','',''],'','','',''];
		$data['title'] 	  	  = 'ANGGOTA';
		$data['anggota'] 	  = $this->MAnggota->getAnggota();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();

		if ($this->input->post('keyword')) {
			$data['anggota'] = $this->MAnggota->cariDataAnggota();
		}
		$this->load->view('template/header.php',$data);
		$this->load->view('template/navbar.php',$data);
		$this->load->view('profil/anggota.php',$data);
		$this->load->view('template/footer.php', $data);
	}

	public function sejarah(){
		$data['menu'] 	 	= ['',['aktif','','','aktif','',''],['','',''],'','','',''];
		$data['sejarah'] 	  = $this->MSejarah->getSejarah();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();
		$data['title'] 	 	  = 'SEJARAH';

		$this->load->view('template/header.php',$data);
		$this->load->view('template/navbar.php',$data);
		$this->load->view('profil/sejarah.php',$data);
		$this->load->view('template/footer.php', $data);
	}	

	public function strukturOrganisasi(){
		$data['menu']  = ['',['aktif','','','','aktif',''],['','',''],'','','',''];
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();
		$data['struktur']	  = $this->db->get('struktur')->row();
		$data['title'] 		  = 'STRUKTUR';

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('profil/struktur.php', $data);
		$this->load->view('template/footer.php', $data);
	}

	public function proker(){
		$data['menu'] 	= ['',['aktif','','','','','aktif'],['','',''],'','','',''];
		$data['proker'] 	  = $this->MProker->getProker();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();
		$data['title']  	  = 'PROKER';

		$this->load->view('template/header.php',$data);
		$this->load->view('template/navbar.php',$data);
		$this->load->view('profil/proker.php',$data);
		$this->load->view('template/footer.php', $data);
	}


}


?>