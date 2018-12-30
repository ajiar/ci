<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_Model');
		$this->load->model('Kategori_Model');
		
	}
	
	public function index()
	{
		$id = $this->input->get('id');
		$data =
		[
			'title' 	=> 'Dashboard',
			'sub_title' => 'Buku',
			'content' 	=> 'buku/index',
			'show'		=> $this->Buku_Model->index()->result()
			
		];
		$this->load->view('template/my_template',$data);
	}
	/* fungsi add untuk memanggil form input data buku */
	public function add()
	{
		$data =
		[
			'title' 	=> 'Buku',
			'sub_title' => 'Tambah Buku',
			'content' 	=> 'buku/add',
			'show_kategori' => $this->Kategori_Model->index()->result()
			
		];
		$this->load->view('template/my_template',$data);
	}
	
	
	public function create()
	{
		$judul_buku = $this->input->post('judul_buku');
		$id_kategori = $this->input->post('id_kategori');
		$pengarang = $this->input->post('pengarang');
		
		$thn_terbit=strtotime($_POST['thn_terbit']);
		$thn_terbit=date('Y-m-d', $thn_terbit);

		$penerbit = $this->input->post('penerbit');
		$isbn = $this->input->post('isbn');
		$jumlah_buku = $this->input->post('jumlah_buku');
		$lokasi = $this->input->post('lokasi');


		$data = array
		(
			'judul_buku' => $judul_buku,
			'id_kategori' => $id_kategori,
			'pengarang' => $pengarang,
			'thn_terbit' => $thn_terbit,
			'penerbit' => $penerbit,
			'isbn' => $isbn,
			'jumlah_buku' => $jumlah_buku,
			'lokasi' => $lokasi
		);

		$create = $this->Buku_Model->create($data);
		if($create)
		{
			$this->session->set_flashdata('pesan_create','<div class="ahai elementToFadeInAndOut"><div class="ahao elementToFadeInAndOut"><b>Success</b></div></div>');
			redirect('buku');
		}
		else
		{
			$this->session->set_flashdata('pesan_crete',false);
			redirect('buku');
		}
			
	}
	
			public function delete($id)
	{
			$data = array(
				'deleted_at' => date('Y-m-d H:i:s', time())
			);
			
			$delete = $this->Buku_Model->delete($data, $id);
			
			if($delete)
			{
				$this->session->set_flashdata('pesan_hapus',True);
				redirect('buku');
				
			}
			else
			{
				$this->session->set_flashdata('pesan_hapus',false);
				redirect('buku');
			}
			
	}
			
	
}