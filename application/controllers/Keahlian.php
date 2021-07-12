<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
    //menampilkan data program studi
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('keahlian_model');//load model
		$data['keahlian'] = $this->keahlian_model->getAll(); //query select all data
		$this->load->view('keahlian/index',$data);
	}

	public function view($id){
		
		$this->load->model('keahlian_model');
		$data['keahlian'] = $this->keahlian_model->findById($id);
		$this->load->view('keahlian/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('keahlian_model');//load model
		$where = array('id' => $id);
		$this->keahlian_model->delete($where,'keahlian');// query delete(delete from pasien where id = $id)
		redirect('keahlian/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('keahlian/tambah_keahlian');
	}

	public function save(){
	
		$this->load->model('keahlian_model');
		$data['nama'] =$this->input->post('nama');
		$this->keahlian_model->save($data);
		redirect('keahlian/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('keahlian_model');
		$data['keahlian'] = $this->keahlian_model->findById($id);
		$this->load->view('keahlian/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('keahlian_model');
		$id = $this->input->post('id');
		$data['nama'] =$this->input->post('nama');
		
		$this->keahlian_model->update($data,$id);
		redirect('keahlian/index');
	}


}
