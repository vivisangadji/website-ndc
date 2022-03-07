<?php 

class VisiMisiAdmin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['title'] = 'Visi Misi';
		$data['visi_misi'] = $this->MVisiMisi->getVisiMisi();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/visimisi/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambahVisiMisi(){
		$data['title'] = 'Tambah Visi Misi';
		$this->form_validation->set_rules('visi', 'Visi', 'required');
		$this->form_validation->set_rules('misi', 'Misi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/visimisi/tambahVisiMisi');
			$this->load->view('admin/template/footer');
		} else {
			$this->MVisiMisi->tambahVisiMisi();
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/visimisi' ));
		}
		
	}

	public function ubahVisiMisi($id){
		$data['title'] = 'Ubah Visi Misi';
		$data['visi_misi'] = $this->MVisiMisi->getVisiMisiById($id);
		$this->form_validation->set_rules('visi', 'Visi', 'required');
		$this->form_validation->set_rules('misi', 'Misi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/visimisi/ubahVisiMisi',$data);
			$this->load->view('admin/template/footer');
		} else {
			$this->MVisiMisi->ubahVisiMisi();
			$this->session->set_flashdata('alert','Diubah');
			redirect(base_url('admin/visimisi' ));
		}
	}

	public function hapusVisiMisi($id){
		$this->MVisiMisi->hapusVisiMisi($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/visimisi'));
	}


}