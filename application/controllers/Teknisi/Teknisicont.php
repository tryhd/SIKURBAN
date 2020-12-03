<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisicont extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        // if($this->session->name == "") anu matak bulak balik ka dashboard 
        // {
        //     redirect('login');
        // }
        $this->load->model('TeknisiModel','TeknisiModel');
    }   
	
	
    public function TampilPenyulang()
	{
		$data['getPenyulang'] = $this->TeknisiModel->getPenyulang();	
		
		$this->load->view('Teknisi/tampil_penyulangT',$data);
	}
		
   
	 public function TambahPenyulang()
    {
		if(!empty($_POST))
		{
			$data =  array(	'id_penyulang' => $this->input->post('id_penyulang'),
					'nama_penyulang' => $this->input->post('nama_penyulang'),
					'status' => $this->input->post('status'),

					);
			$this->TeknisiModel->TambahPenyulang($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Penyulang Berhasil!!");
			redirect('tampil-penyulangT');
		}
		else
		{ 
      $data['kodeunik']=$this->TeknisiModel->kode_penyulang();
			$this->load->view('Teknisi/tambah_penyulangT',$data);
		}
    }

	function hapus_data_penyulang($id)
	{ 
    	$this->load->model('TeknisiModel');
    	$this->TeknisiModel->hapus_penyulang($id); 
    	redirect('tampil-penyulangT'); 
 
	}

function edit_Penyulang($id)
	{
		$where = array('id_penyulang' => $id);
		$data['penyulang'] = $this->TeknisiModel->edit_data_penyulang($where,'penyulang')->result();
		$this->load->view('Teknisi/View_Edit_penyulangT',$data);
	
	}

	function update_penyulang() 
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
 
		$this->TeknisiModel->update_data_penyulang($where,$data,'penyulang');
		redirect('tampil-penyulangT');
    }

    //Gardu
    public function TampilGardu()
	{
		$data['getGardu'] = $this->TeknisiModel->getGardu();	
	
		$this->load->view('Teknisi/tampil_garduT',$data);
	}
		
    public function TambahGardu()
    {
		if(!empty($_POST))
		{
			$data = array(	'id_gardu' => $this->input->post('id_gardu'),
					'nama_gardu' => $this->input->post('nama_gardu'),
					'uraian_nama' => $this->input->post('uraian_nama'),
					'alamat' => $this->input->post('alamat'),
					'id_penyulang' => $this->input->post('id_penyulang'),
					'id_jenis' => $this->input->post('id_jenis'),
					'no_gardu' => $this->input->post('no_gardu'),
					'id_rayon' => $this->input->post('id_rayon'),
					'daya' => $this->input->post('daya'),
					);
			$this->TeknisiModel->TambahGardu($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Gardu Berhasil!!");
			redirect('tampil-garduT');
		}
		else
		{
      $data['kodeunik'] =$this->TeknisiModel->kode_gardu();
			$data['getPenyulang'] = $this->TeknisiModel->getPenyulang();
			$data['getjenis'] = $this->TeknisiModel->getjenis();
			$data['getwilayah'] = $this->TeknisiModel->getwilayah();	
			$this->load->view('Teknisi/tambah_garduT',$data);
		}
	}
	
	
	function hapus_data_Gardu($id)
	{ 
    	$this->load->model('TeknisiModel');
    	$this->TeknisiModel->hapus_gardu($id); 
    	redirect('tampil-garduT'); 
 
	}

	function edit_Gardu($id)
	{
		$where = array('id_gardu' => $id);
		$data['data_gardu'] = $this->TeknisiModel->edit_data_gardu($where,'data_gardu')->result();
		$data['getPenyulang'] = $this->TeknisiModel->getPenyulang();
		$data['getjenis'] = $this->TeknisiModel->getjenis();
		$data['getwilayah'] = $this->TeknisiModel->getwilayah();
		$this->load->view('Teknisi/View_Edit_garduT',$data);
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
        $daya = $this->input->post('daya');
        
       
        $data = array(
            'nama_gardu' => $nama_gardu,
            'uraian_nama' => $uraian_nama,
            'alamat'=> $alamat,
            'id_penyulang' => $id_penyulang,
            'id_jenis' => $id_jenis,
            'no_gardu' => $no_gardu,
            'id_rayon' => $id_rayon,
            'daya'=> $daya,
        );
        
        $where = array(
			'id_gardu' => $id_gardu
		);
 
		$this->TeknisiModel->update_data_gardu($where,$data,'data_gardu');
		redirect('tampil-garduT');
    }
	
//Trafo
	public function TampilTrafo()
	{
		$data['getTrafo'] = $this->TeknisiModel->getTrafo();	
		
		$this->load->view('Teknisi/tampil_trafoT',$data);
	}
		
    public function TambahTrafo()
    {
		if(!empty($_POST))
		{
			$data =  array(	'id_trafo' => $this->input->post('id_trafo'),
					'id_gardu' => $this->input->post('id_gardu'),
					'id_merek' => $this->input->post('id_merek'),
					'no_seri' => $this->input->post('no_seri'),
					'tahun' => $this->input->post('tahun'),
					
					);
			$this->TeknisiModel->TambahTrafo($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Trafo Berhasil!!");
			redirect('tampil-trafoT');
		}
		else
		{
      $data['kodeunik'] =$this->TeknisiModel->kode_trafo();
			$data['getGardu'] = $this->TeknisiModel->getGardu();
			$data['getMerek'] = $this->TeknisiModel->getMerek();
			$this->load->view('Teknisi/tambah_trafoT',$data);
		}
    }
    
	function hapus_data_trafo($id)
	{ 
    	$this->load->model('TeknisiModel');
    	$this->TeknisiModel->hapus_trafo($id); 
    	redirect('tampil-trafoT'); 
 
	}

	function edit_trafo($id)
	{
		$where = array('id_trafo' => $id);
		$data['data_trafo'] = $this->TeknisiModel->edit_data_trafo($where,'data_trafo')->result();
		$data['getGardu'] = $this->TeknisiModel->getGardu();
		$data['getMerek'] = $this->TeknisiModel->getMerek();
		$this->load->view('Teknisi/View_Edit_TrafoT',$data);
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
 
		$this->TeknisiModel->update_data_trafo($where,$data,'data_trafo');
		redirect('tampil-trafoT');
    }
    
	//pengukuran
	public function DetailPengukuran($id_pengukuran)
	{
		$data['getPengukuran'] = $this->TeknisiModel->getDetail($id_pengukuran);	
		
		$this->load->view('Teknisi/view_detail_ukurT',$data);
	}

  function hapus_data_ukur($id)
  { 
      $this->load->model('TeknisiModel');
      $this->TeknisiModel->hapus_pengukuran($id); 
      redirect('tampil-ukurT'); 
  }

     public function TampilPengukuran()
	{
		$data['getPengukuran'] = $this->TeknisiModel->getPengukuran();	
		
		$this->load->view('Teknisi/tampil_ukurT',$data);
	}

  public function export_excel(){
           $data['getPengukuran'] =  $this->TeknisiModel->getPengukuran();
           $this->load->view('Teknisi/View_Excel',$data);
      }

	public function RiwayatUkur($idr)
	{
		$data['getriwayt'] = $this->TeknisiModel->getRiwayat($idr);	
		
		$this->load->view('Petugas/tampil_ukurP',$data);
	}		
	function edit_Pengukuran($id)
	{
		$where = array('id_pengukuran' => $id);
		$data['pengukuran'] = $this->TeknisiModel->edit_data_pengukuran($where,'pengukuran')->result();
		$data['getGardu'] = $this->TeknisiModel->getGardu();
		$this->load->view('Teknisi/view_edit_ukurT',$data);
	}
 	function update_pengukuran() 
	{
		$id_pengukuran= $this->input->post('id_pengukuran');
        $id_gardu= $this->input->post('id_gardu');
        $tgl_pengukuran = $this->input->post('tgl_pengukuran');       
       	$n1= $this->input->post('n1');
       	$n2= $this->input->post('n2');
       	$n3= $this->input->post('n3');
       	$n4= $this->input->post('n4');
       	$n5= $this->input->post('n5');
       	$n6= $this->input->post('n6');
       	$n7= $this->input->post('n7');
       	$n8= $this->input->post('n8');
       	$n9= $this->input->post('n9');
       	$n10= $this->input->post('n10');
       	$r1= $this->input->post('r1');
       	$r2= $this->input->post('r2');
       	$r3= $this->input->post('r3');
       	$r4= $this->input->post('r4');
       	$r5= $this->input->post('r5');
       	$r6= $this->input->post('r6');
       	$r7= $this->input->post('r7');
       	$r8= $this->input->post('r8');
       	$r9= $this->input->post('r9');
       	$r10= $this->input->post('r10');
       	$s1= $this->input->post('s1');
       	$s2= $this->input->post('s2');
       	$s3= $this->input->post('s3');
       	$s4= $this->input->post('s4');
       	$s5= $this->input->post('s5');
       	$s6= $this->input->post('s6');
       	$s7= $this->input->post('s7');
       	$s8= $this->input->post('s8');
       	$s9= $this->input->post('s9');
       	$s10= $this->input->post('s10');
       	$t1= $this->input->post('t1');
       	$t2= $this->input->post('t2');
       	$t3= $this->input->post('t3');
       	$t4= $this->input->post('t4');
       	$t5= $this->input->post('t5');
       	$t6= $this->input->post('t6');
       	$t7= $this->input->post('t7');
       	$t8= $this->input->post('t8');
       	$t9= $this->input->post('t9');
       	$t10= $this->input->post('t10');
       	$tegangan_n= $this->input->post('tegangan_n');
       	$tegangan_r= $this->input->post('tegangan_r');
       	$tegangan_s= $this->input->post('tegangan_s');
       	$tegangan_t= $this->input->post('tegangan_t');
       	$beban_terukur= $this->input->post('beban_terukur');
       	$beban_trafo= $this->input->post('beban_trafo');
       	$daya= $this->input->post('daya');
       	$id_rayon= $this->input->post('id_rayon');
       	$nama= $this->input->post('nama');
        $data = array(
            'id_gardu' => $id_gardu,
            'tgl_pengukuran' => $tgl_pengukuran,
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'n4' => $n4,
            'n5' => $n5,
            'n6' => $n6,
            'n7' => $n7,
            'n8' => $n8,
            'n9' => $n9,
            'n10' => $n10,
            'r1' => $r1,
            'r2' => $r2,
            'r3' => $r3,
            'r4' => $r4,
            'r5' => $r5,
            'r6' => $r6,
            'r7' => $r7,
            'r8' => $r8,
            'r9' => $r9,
            'r10' => $r10,
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            's4' => $s4,
            's5' => $s5,
            's6' => $s6,
            's7' => $s7,
            's8' => $s8,
            's9' => $s9,
            's10' => $s10,
            't1' => $t1,
            't2' => $t2,
            't3' => $t3,
            't4' => $t4,
            't5' => $t5,
            't6' => $t6,
            't7' => $t7,
            't8' => $t8,
            't9' => $t9,
            't10' => $t10,
            'tegangan_n' => $tegangan_n,
            'tegangan_r' => $tegangan_r,
            'tegangan_s' => $tegangan_s,
            'tegangan_t' => $tegangan_t,
            'beban_terukur' => $beban_terukur,
            'beban_trafo' => $beban_trafo,
            'daya' => $daya,
            'id_rayon' => $id_rayon,
            'nama' => $nama,
        );
        
        $where = array(
			'id_pengukuran' => $id_pengukuran
		);
 
		$this->TeknisiModel->update_data_pengukuran($where,$data,'pengukuran');
		redirect('tampil-ukurT');
}
}