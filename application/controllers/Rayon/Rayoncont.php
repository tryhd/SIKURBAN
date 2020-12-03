<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rayoncont extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        // if($this->session->name == "") anu matak bulak balik ka dashboard 
        // {
        //     redirect('login');
        // }
        $this->load->model('RayonModel','RayonModel');
    }   
   
   public function TampilGardu()
	{
		$data['getGardu'] = $this->RayonModel->getGardu();	
		$this->load->view('Rayon/tampil_garduR',$data);
	}
		
	function hapus_data_Gardu($id)
	{ 
    	$this->load->model('RayonModel');
    	$this->RayonModel->hapus_gardu($id); 
    	redirect('tampil-garduR'); 
	}

	function edit_Gardu($id)
	{
		$where = array('id_gardu' => $id);
		$data['data_gardu'] = $this->RayonModel->edit_data_gardu($where,'data_gardu')->result();
		$data['getPenyulang'] = $this->RayonModel->getPenyulang();
		$data['getjenis'] = $this->RayonModel->getjenis();
		$data['getwilayah'] = $this->RayonModel->getwilayah();
		$this->load->view('Rayon/View_Edit_garduR',$data);
		
	}

	function update_gardu() 
	{
		$id_gardu= $this->input->post('id_gardu');
        $nama_gardu= $this->input->post('nama_gardu');
        $uraian_nama = $this->input->post('uraian_nama');
        $alamat = $this->input->post('alamat');
        $id_penyulang = $this->input->post('id_penyulang');
        $id_jenis = $this->input->post('id_jenis');
        $no_gardu = $this->input->post('no_gardu');
        $id_rayon = $this->input->post('id_rayon');
        
       
        $data = array(
            'nama_gardu' => $nama_gardu,
            'uraian_nama' => $uraian_nama,
            'alamat'=> $alamat,
            'id_penyulang' => $id_penyulang,
            'id_jenis' => $id_jenis,
            'no_gardu' => $no_gardu,
            'id_rayon' => $id_rayon,
        );
        
        $where = array(
			'id_gardu' => $id_gardu
		);
 
		$this->RayonModel->update_data_gardu($where,$data,'data_gardu');
		redirect('tampil-garduR');
    }

	public function TampilTrafo()
	{
		$data['getTrafo'] = $this->RayonModel->getTrafo();	
		$this->load->view('Rayon/tampil_trafoR',$data);
	}
	
	function hapus_data_trafo($id)
	{ 
    	$this->load->model('RayonModel');
    	$this->RayonModel->hapus_trafo($id); 
    	redirect('tampil-trafoR'); 
 
	}

	function edit_trafo($id)
	{
		$where = array('id_trafo' => $id);
		$data['data_trafo'] = $this->RayonModel->edit_data_trafo($where,'data_trafo')->result();
		$data['getGardu'] = $this->RayonModel->getGardu();
		$data['getMerek'] = $this->RayonModel->getMerek();
		$this->load->view('Rayon/View_Edit_TrafoR',$data);
	}

	function update_trafo() 
	{
		$id_trafo= $this->input->post('id_trafo');
        $id_gardu= $this->input->post('id_gardu');
        $id_merek = $this->input->post('id_merek');
        $no_seri = $this->input->post('no_seri');
        $tahun = ($this->input->post('tahun'));
        
       
        $data = array(
            'id_gardu' => $id_gardu,
            'id_merek'=> $id_merek,
            'no_seri' => $no_seri,
            'tahun' => $tahun,
        );
        
        $where = array(
			'id_trafo' => $id_trafo
		);
 
		$this->RayonModel->update_data_trafo($where,$data,'data_trafo');
		redirect('tampil-trafoR');
    }

    //pengukuran
    public function export_excel(){
           $data['getPengukuran'] =  $this->RayonModel->getPengukuran();
           $this->load->view('Rayon/View_Excel',$data);
      }

    public function DetailPengukuran($id_pengukuran)
	{
		$data['getPengukuran'] = $this->RayonModel->getDetail($id_pengukuran);	
		$this->load->view('Rayon/view_detail_ukurR',$data);
	}

     public function TampilPengukuran()
	{
		$data['getPengukuran'] = $this->RayonModel->getPengukuran();	
		$this->load->view('Rayon/tampil_ukurR',$data);
	}
}