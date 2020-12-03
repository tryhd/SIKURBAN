<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugascont extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        // if($this->session->name == "") anu matak bulak balik ka dashboard 
        // {
        //     redirect('login');
        // }
        $this->load->model('PetugasModel','PetugasModel');
    }   
	
	
    public function TampilGarduUkur()
	{
		$data['getGardu'] = $this->PetugasModel->getGarduUkur();	
		
		$this->load->view('petugas/tampil_gardu_Ukur',$data);
	}


	public function DetailPengukuran($id_pengukuran){
		$data['getPengukuran'] = $this->PetugasModel->getDetail($id_pengukuran);
		$this->load->view('Petugas/view_detail_ukurP',$data);
	}

     public function TampilPengukuran()
	{
		$data['getPengukuran'] = $this->PetugasModel->getPengukuran();	
		
		$this->load->view('Petugas/tampil_ukurP',$data);
	}
	public function RiwayatUkur($idr)
	{
		$data['getPengukuran'] = $this->PetugasModel->getRiwayat($idr);
		$this->load->view('Petugas/tampil_ukurP',$data);
	}
	 public function TambahPengukuran($idgrd)
    {
		if(!empty($_POST))
		{
			$data =  array(	'id_pengukuran' => $this->input->post('id_pengukuran'),
					'id_gardu' => $this->input->post('id_gardu'),
					'tgl_pengukuran' => $this->input->post('tgl_pengukuran'),
					'n1' => $this->input->post('n1'),
					'n2' => $this->input->post('n2'),
					'n3' => $this->input->post('n3'),
					'n4' => $this->input->post('n4'),
					'n5' => $this->input->post('n5'),
					'n6' => $this->input->post('n6'),
					'n7' => $this->input->post('n7'),
					'n8' => $this->input->post('n8'),
					'n9' => $this->input->post('n9'),
					'n10' => $this->input->post('n10'),
					'r1' => $this->input->post('r1'),
					'r2' => $this->input->post('r2'),
					'r3' => $this->input->post('r3'),
					'r4' => $this->input->post('r4'),
					'r5' => $this->input->post('r5'),
					'r6' => $this->input->post('r6'),
					'r7' => $this->input->post('r7'),
					'r8' => $this->input->post('r8'),
					'r9' => $this->input->post('r9'),
					'r10' => $this->input->post('r10'),
					's1' => $this->input->post('s1'),
					's2' => $this->input->post('s2'),
					's3' => $this->input->post('s3'),
					's4' => $this->input->post('s4'),
					's5' => $this->input->post('s5'),
					's6' => $this->input->post('s6'),
					's7' => $this->input->post('s7'),
					's8' => $this->input->post('s8'),
					's9' => $this->input->post('s9'),
					's10' => $this->input->post('s10'),
					't1' => $this->input->post('t1'),
					't2' => $this->input->post('t2'),
					't3' => $this->input->post('t3'),
					't4' => $this->input->post('t4'),
					't5' => $this->input->post('t5'),
					't6' => $this->input->post('t6'),
					't7' => $this->input->post('t7'),
					't8' => $this->input->post('t8'),
					't9' => $this->input->post('t9'),
					't10' => $this->input->post('t10'),
					'tegangan_r' => $this->input->post('tegangan_r'),
					'tegangan_s' => $this->input->post('tegangan_s'),
					'tegangan_t' => $this->input->post('tegangan_t'),
					'beban_terukur' => $this->input->post('beban_terukur'),
					'daya' => $this->input->post('daya'),
					'id_rayon' => $this->input->post('id_rayon'),
					'beban_trafo' => $this->input->post('beban_trafo'),
					'nama' => $this->input->post('nama'),
					);
			$this->PetugasModel->TambahPengukuran($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Pengukuran Berhasil!!");
			redirect('tambah-ukurp');
		}
		else
		{
			$data['kodeunik'] =$this->PetugasModel->kode_pengukuran();
			$data['getGardu'] = $this->PetugasModel->getGardu($idgrd);
			$this->load->view('Petugas/Tambah_ukurP',$data);
		}
    }


	function hapus_data_pengukuran($id)
	{ 
    	$this->load->model('PetugasModel');
    	$this->PetugasModel->hapus_penyulang($id); 
    	redirect('Petugas/tampil_ukurP'); 
 
	}

function edit_Pengukuran($id)
	{
		$where = array('id_penyulang' => $id);
		$data['penyulang'] = $this->PetugasModel->edit_data_penyulang($where,'penyulang')->result();
		$this->load->view('view_edit_ukurP',$data);
	}

	function update_pengukuran() 
	{
		$id_penyulang= $this->input->post('id_penyulang');
        $nama_penyulang= $this->input->post('nama_penyulang');
        $status = $this->input->post('status');       
       
        $data = array(
            'nama_penyulang' => $nama_penyulang,
            'status' => $status,
            
        );
        
        $where = array(
			'id_penyulang' => $id_penyulang
		);
 
		$this->PetugasModel->update_data_penyulang($where,$data,'penyulang');
		redirect('Petugas/tampil_ukurP');
}
}

