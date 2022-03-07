<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProkerAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['title'] = 'Proker';
		$data['proker'] = $this->MProker->getProker();

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/proker/index');
		$this->load->view('admin/template/footer');
	}

	public function tambahProker(){
		$data['title'] = 'Tambah Proker';
		$this->form_validation->set_rules('proker', 'Proker', 'required');
		$this->form_validation->set_rules('pjawab', 'Penanggung Jawab', 'required');
		$this->form_validation->set_rules('sasaran', 'Sasaran', 'required');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/proker/tambahProker');
			$this->load->view('admin/template/footer');
		}else {
			$this->MProker->tambahProker();
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/proker'));
		}
	}

	public function ubahProker($id){
		$data['title'] = 'Ubah Proker';
		$data['proker'] = $this->MProker->getProkerById($id);
		$this->form_validation->set_rules('proker', 'Proker', 'required');
		$this->form_validation->set_rules('pjawab', 'Penanggung Jawab', 'required');
		$this->form_validation->set_rules('sasaran', 'Sasaran', 'required');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/proker/ubahProker',$data);
			$this->load->view('admin/template/footer');
		}else {
			$this->MProker->ubahProker();
			$this->session->set_flashdata('alert','Diubah');
			redirect(base_url('admin/proker'));
		}
	}

	public function hapusProker($id){
		$this->MProker->hapusProker($id);
		$this->session->set_flashdata('alert', 'Dihapus');
		redirect(base_url('admin/proker'));
	}


}
