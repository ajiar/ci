<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_Model');
	}
	
	public function index()
	{
		$data =
		[
			'title' => 'Dashboard',
			'sub_title' => 'Kategori',
            'content' => 'kategori/index',
            'show'		=> $this->Kategori_Model->index()->result()
			
		];
		$this->load->view('template/my_template',$data);
	}
	
		/* fungsi add untuk memanggil form input data buku */
	public function add()
	{
		$data =
		[
			'title' 	=> 'Kategori',
			'sub_title' => 'Tambah BKategori',
			'content' 	=> 'kategori/add',
			'show_kategori' => $this->Kategori_Model->index()->result()
				
		];
		$this->load->view('template/my_template',$data);
	}
	

	
	
	

	public function create()
	{
		$nama_kategori = $this->input->post('nama_kategori');

		$data = array
		(
			'nama_kategori' => $nama_kategori,
		);
		
		$create = $this->Kategori_Model->create($data);
		if($create)
		{
			$this->session->set_flashdata('pesan_create','<div class="ahai elementToFadeInAndOut"><div class="ahao elementToFadeInAndOut"><b>Success</b></div></div>');
			redirect('kategori');
		}
		else
		{
			$this->session->set_flashdata('pesan_crete',false);
			redirect('kategori');
		}
			
	}
	
	public function delete()
	{
		$id = $this->input->get('id');
			
		if($this->Kategori_Model->delete($id))
		{
			$this->session->set_flashdata('pesan_create','<div class="ahai elementToFadeInAndOut"><div class="ahao elementToFadeInAndOut"><b>Success</b></div></div>');
			redirect('kategori');
				
		}
		else
		{
			$this->session->set_flashdata('pesan_crete',false);
			redirect('kategori');
		}
			
	}
	

	
}