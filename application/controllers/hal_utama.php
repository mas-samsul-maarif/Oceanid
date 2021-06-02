<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelku');
	}

	public function index(){
		
		$dataIkan = $this->modelku->getData("ikan");
		$data = array(
			'data' => $dataIkan
		);
		$this->load->view('header');
		$this->load->view('home', $data);
		
	}

	public function main(){
		$this->load->view('header');
		$this->load->view('main');
	}

	public function baca_form(){
		$this->load->view('header');
		$this->load->view('form_isi');
	}
	
	public function tambah_data(){
		
		$datainputan = array(
			'umum' => $this->input->post('umum'),
			'ilmiah' => $this->input->post('ilmiah'),
			'kedalaman' => $this->input->post('kedalaman'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->modelku->masukkan('pending', $datainputan);
		redirect(base_url(), 'refresh');
	}

	public function form_login(){
		$this->load->view('header');
		$this->load->view('form_login');
	}

	public function aksi_login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$datapenunjuk = array(
			'user' => $user,
			'pass' => $pass,
		);
		$cek = count($this->modelku->getPK('admin',$datapenunjuk));

		if ($cek > 0 ){
			$data_session = array(
				'nama' => $user,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url()."index.php/hal_admin/admin");
		}
		else{
			redirect(base_url()."index.php/hal_utama/form_login");
		};
	}

}