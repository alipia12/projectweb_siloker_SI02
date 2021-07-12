<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function lowongan()
	{
		$this->load->view('front/lowongan_baru');
	}

	public function loker()
	{
		$this->load->view('front/isi_loker');
	}

	public function mitra()
	{
		$this->load->view('front/daftar_mitra');
	}

	public function berita()
	{
		$this->load->view('front/berita');
	}

	public function about()
	{
		$this->load->view('front/about');
	}

	public function berita1()
	{
		$this->load->view('front/berita_1');
	}

	public function berita2()
	{
		$this->load->view('front/berita_2');
	}

	public function berita3()
	{
		$this->load->view('front/berita_3');
	}

	public function berita4()
	{
		$this->load->view('front/berita_4');
	}

	public function daftarmitra()
	{
		$this->load->view('front/daftar_menjadi_mitra');
	}

	public function detail1()
	{
		$this->load->view('front/detail1');
	}

	public function detail2()
	{
		$this->load->view('front/detail2');
	}

	public function kategori1()
	{
		$this->load->view('front/kategori1');
	}

	public function kategori2()
	{
		$this->load->view('front/kategori2');
	}

	public function kategori3()
	{
		$this->load->view('front/kategori3');
	}

	public function kategori4()
	{
		$this->load->view('front/kategori4');
	}

	


 }
