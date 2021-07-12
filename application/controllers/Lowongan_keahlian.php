<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan_keahlian extends CI_Controller {


	
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
		$this->load->model('lowongan_keahlian_model');//load model
		$data['lowongan_keahlian'] = $this->lowongan_keahlian_model->getAll(); //query select all data
		$this->load->view('lowongan_keahlian/index',$data);
	}

	public function view($id){
		
		$this->load->model('lowongan_keahlian_model');
		$data['lowongan_keahlian'] = $this->lowongan_keahlian_model->findById($id);
		$this->load->view('lowongan_keahlian/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('lowongan_keahlian_model');//load model
		$where = array('id' => $id);
		$this->lowongan_keahlian_model->delete($where,'lowongan_keahlian');// query delete(delete from pasien where id = $id)
		redirect('lowongan_keahlian/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('lowongan_keahlian/tambah_lowongan_keahlian');
	}

	public function save(){
	
		$this->load->model('lowongan_keahlian_model');

        $data['keahlian_id'] =$this->input->post('keahlian_id');
        $data['lowongan_id'] =$this->input->post('lowongan_id');
		$this->lowongan_keahlian_model->save($data);
		redirect('lowongan_keahlian/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('lowongan_keahlian_model');
		$data['lowongan_keahlian'] = $this->lowongan_keahlian_model->findById($id);
		$this->load->view('lowongan_keahlian/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('lowongan_keahlian_model');
		$id = $this->input->post('id');

        $data['keahlian_id'] =$this->input->post('keahlian_id');
        $data['lowongan_id'] =$this->input->post('lowongan_id');
		
		$this->lowongan_keahlian_model->update($data,$id);
		redirect('lowongan_keahlian/index');
	}


}
