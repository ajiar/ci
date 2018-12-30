<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Model extends CI_Model 
{

    public function index()
    {
        return $this->db->get('kategori');
    }
    public function create($data)
    {
        if($this->db->insert('kategori',$data))
        {
            return true;
        }
        else
        {
            return false;
        }

    }
	
	public function delete($data)
    {		
		if($this->db->where('id_kategori',$data))
		{
			if($this->db->delete('kategori'))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
		
    }
	


	

}