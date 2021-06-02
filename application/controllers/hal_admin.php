<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelku');
        if($this->session->userdata("status") !="login") {
            redirect(base_url());
	    }
    }

    public function index(){
        $this->load->view('header_admin');
    }

	public function simple(){
		
		$dataIkan = $this->modelku->getData("ikan");
		$data = array(
			'data' => $dataIkan
		);
		$this->load->view('header_admin');
		$this->load->view('home', $data);
		
	}

    public function pending(){
		
		$dataIkan = $this->modelku->getData("pending");
		$data = array(
			'data' => $dataIkan
		);
		$this->load->view('header_admin');
		$this->load->view('pending', $data);
		
	}

	public function main(){
		$this->load->view('header_admin');
		$this->load->view('main');
	}


	public function baca_form(){
		$this->load->view('header_admin');
		$this->load->view('form_tambah');
	}
	
	public function tambah_data(){
		
		$datainputan = array(
			'umum' => $this->input->post('umum'),
			'ilmiah' => $this->input->post('ilmiah'),
			'kedalaman' => $this->input->post('kedalaman'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->modelku->masukkan('ikan', $datainputan);
		redirect(base_url()."index.php/hal_admin/main");
	}

	public function hapus_data($penunjuk){
		$datapenunjuk = array(
			'nomer' => $penunjuk
		);
		
		$this->modelku->hapus('ikan', $datapenunjuk );
		redirect(base_url()."index.php/hal_admin/admin");
	}

	public function ambil_data($penunjuk){
		$datapenunjuk = array(
			'nomer' => $penunjuk
		);
		
		$dataikan = $this->modelku->getPK('ikan', $datapenunjuk);
		$data = array(
			"datanya" => $dataikan
		);
		$this->load->view("header_admin");
		$this->load->view("form_edit", $data);
	}

	public function update_data(){
		$datainputan = array(
			'umum' => $this->input->post('umum'),
			'ilmiah' => $this->input->post('ilmiah'),
			'kedalaman' => $this->input->post('kedalaman'),
			'keterangan' => $this->input->post('keterangan')
		);
		$datapenunjuk = array(
			'nomer' => $this->input->post('nomer')
		);
		
		$dataikan = $this->modelku->perbarui("ikan", $datainputan, $datapenunjuk);		
		redirect(base_url()."index.php/hal_admin/admin");
	}

	public function admin(){
		if($this->session->userdata("status")=="login"){
			$dataIkan = $this->modelku->getData("ikan");

			$data = array(
				'data' => $dataIkan
			);

			$this->load->view('header_admin');
			$this->load->view('admin',$data);
		}
		else{
			redirect(base_url()."index.php/hal_utama/form_login");
		}

	}

    public function hapus_pending($penunjuk){
		$datapenunjuk = array(
			'nomer' => $penunjuk
		);
		
		$this->modelku->hapus('pending', $datapenunjuk );
		redirect(base_url()."index.php/hal_admin/pending");
	}

    public function ambil_pending($penunjuk){
		$datapenunjuk = array(
			'nomer' => $penunjuk
		);
		
		$dataikan = $this->modelku->getPK('pending', $datapenunjuk);
		$data = array(
			"datanya" => $dataikan
		);
		$this->load->view("header_admin");
		$this->load->view("form_pending", $data);
	}

    public function update_pending(){
		$datainputan = array(
			'umum' => $this->input->post('umum'),
			'ilmiah' => $this->input->post('ilmiah'),
			'kedalaman' => $this->input->post('kedalaman'),
			'keterangan' => $this->input->post('keterangan')
		);
		$datapenunjuk = array(
			'nomer' => $this->input->post('nomer')
		);
		
		$dataikan = $this->modelku->perbarui("pending", $datainputan, $datapenunjuk);		
		redirect(base_url()."index.php/hal_admin/pending");
	}
    public function kirim_pending($penunjuk){
        $datapenunjuk = array(
			'nomer' => $penunjuk
		);
		
		$dataikan = $this->modelku->getPK('pending', $datapenunjuk);
		$data = array(
			"datanya" => $dataikan
		);
		$this->load->view("header_admin");
		$this->load->view("form_kirim", $data);
	}
}