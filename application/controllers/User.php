<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	
	public function get()
    {
        return $this->db->get('buku')->result();
    }

	public function row($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('buku')->row();
    }

	// fungsi model 


	public function index()
	{		
		$data['ambil_data'] = $this->get();
		$this->load->view('home',$data);
	}
	public function cetak()
	{		
		$data['ambil_data'] = $this->get();
		$this->load->view('cetak',$data);
	}
	public function input()
	{		
		$this->load->view('input');
	}	
	public function edit($id)
	{		
		$data['get'] = $this->row($id);
		$this->load->view('edit',$data);
	}
	public function f_simpan()
	{		
		$data = array(
			"nama_buku" => $this->input->post('nama_buku'),
			"tahun_penerbit" => $this->input->post('tahun_penerbit'),
			"pengarang" => $this->input->post('pengarang'),
		);

		$this->db->insert('buku', $data);
		redirect('user');
	}
	public function f_edit($id)
	{		
		$data = array(
			"nama_buku" => $this->input->post('nama_buku'),
			"tahun_penerbit" => $this->input->post('tahun_penerbit'),
			"pengarang" => $this->input->post('pengarang'),
		);
$this->db->where('id',$id);
		$this->db->update('buku', $data);
		redirect('user');
	}
	public function hapus($id)
	{		
		
$this->db->where('id',$id);
		$this->db->delete('buku');
		redirect('user');
	}


	
}   

/* End of file User.php */
