<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincont extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
         if($this->session->nama == "") 
         {
             redirect('login');
         }
        $this->load->model('AdminModel','AdminModel');
    }   
	
	
	public function TampilUser()
	{
		$data['message'] ="";
		$data['getUser'] = $this->AdminModel->getUser();	
		// echo "ini test yhaa bgsd";
		$this->load->view('tampil_user',$data);
	}
		
    public function TambahUser()
    
    {
		if(!empty($_POST))
		{
			$cek_user=$this->AdminModel->cek_tambah_user($this->input->post('username'));
				if($cek_user->num_rows()>0){
					$this->session->set_flashdata('FAILEDMSG', "Username sudah digunakan");
						redirect('tambah-user');
				} else{
			$data =  array(	
				// 'id' => $this->input->post('id'),
					'nama' => $this->input->post('nama'),
					'level' => $this->input->post('level'),
					'id_rayon' => $this->input->post('id_rayon'),
					'username' => $this->input->post('username'),
					'password' =>MD5($this->input->post('password')),
					
					);
			$this->AdminModel->TambahUser($data);
			}
			$this->session->set_flashdata('SUCCESSMSG', "Tambah User Berhasil!!");
			redirect('tampil-user');
		}
		else
		{
			$data['getWilayah'] = $this->AdminModel -> getWilayah();
			$this->load->view('tambah_user',$data);
		}

    }
    
	
	function hapus_data_user($id)
	{ 
    	$this->load->model('AdminModel');
    	$this->AdminModel->hapus_user($id); 
    	redirect('tampil-user'); 
 
	}

	function edit_user($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->AdminModel->edit_data_user($where,'user')->result();
		$data['getWilayah'] = $this->AdminModel-> getWilayah();
		$this->load->view('View_Edit_user',$data);
	}

	function update_user() 
	{
		$id= $this->input->post('id');
        $nama= $this->input->post('nama');
        $level = $this->input->post('level');
        $id_rayon = $this->input->post('id_rayon');
        $username = $this->input->post('username');
        $password = MD5 ($this->input->post('password'));
        
       
        $data = array(
            'nama' => $nama,
            'level' => $level,
            'id_rayon'=> $id_rayon,
            'username' => $username,
            'password' => $password,
        );
        
        $where = array(
			'id' => $id
		);
 
		$this->AdminModel->update_data_user($where,$data,'user');
		redirect('tampil-user');
    }
    public function TampilPenyulang()
	{
		$data['getPenyulang'] = $this->AdminModel->getPenyulang();	
		// echo "ini test yhaa bgsd";
		$this->load->view('tampil_penyulang',$data);
	}
		
   
	 public function TambahPenyulang()
    {
		if(!empty($_POST))
		{
			$data =  array('id_penyulang' => $this->input->post('id_penyulang'),	
					'nama_penyulang' => $this->input->post('nama_penyulang'),
					'status' => $this->input->post('status'),
					);
			$this->AdminModel->TambahPenyulang($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Penyulang Berhasil!!");
			redirect('tampil-penyulang');
		}
		else
		{	
			$data['kodeasu']=$this->AdminModel->kode_penyulang();
			$this->load->view('tambah_penyulang',$data);
		}
    }

	function hapus_data_penyulang($idp)
	{ 
    	$this->load->model('AdminModel');
    	$this->AdminModel->hapus_penyulang($idp); 
    	redirect('tampil-penyulang'); 
 
	}

function edit_Penyulang($id)
	{
		$where = array('id_penyulang' => $id);
		$data['penyulang'] = $this->AdminModel->edit_data_penyulang($where,'penyulang')->result();
		$this->load->view('View_Edit_penyulang',$data);
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
 
		$this->AdminModel->update_data_penyulang($where,$data,'penyulang');
		redirect('tampil-penyulang');
    }
    public function TampilGardu()
	{
		$data['getGardu'] = $this->AdminModel->getGardu();	
		
		$this->load->view('tampil_gardu',$data);
	}
		
    public function TambahGardu()
    {
		if(!empty($_POST))
		{
			$data = array('id_gardu' => $this->input->post('id_gardu'),
					'nama_gardu' => $this->input->post('nama_gardu'),
					'uraian_nama' => $this->input->post('uraian_nama'),
					'alamat' => $this->input->post('alamat'),
					'id_penyulang' => $this->input->post('id_penyulang'),
					'id_jenis' => $this->input->post('id_jenis'),
					'no_gardu' => $this->input->post('no_gardu'),
					'id_rayon' => $this->input->post('id_rayon'),
					'daya' => $this->input->post('daya'),
					);
			$this->AdminModel->TambahGardu($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Gardu Berhasil!!");
			redirect('tampil-gardu');
		}
		else
		{	
			$data['kodeunik'] =$this->AdminModel->kode_gardu();
			$data['getPenyulang'] = $this->AdminModel->getPenyulang();
			$data['getjenis'] = $this->AdminModel->getjenis();
			$data['getwilayah'] = $this->AdminModel->getwilayah();	
			$this->load->view('tambah_gardu',$data);
		}
	}
	
	
	function hapus_data_Gardu($id)
	{ 
    	$this->load->model('AdminModel');
    	$this->AdminModel->hapus_gardu($id); 
    	redirect('tampil-gardu'); 
 
	}

	function edit_Gardu($id)
	{
		$where = array('id_gardu' => $id);
		$data['data_gardu'] = $this->AdminModel->edit_data_gardu($where,'data_gardu')->result();
		$data['getPenyulang'] = $this->AdminModel->getPenyulang();
		$data['getjenis'] = $this->AdminModel->getjenis();
		$data['getwilayah'] = $this->AdminModel->getwilayah();
		$this->load->view('View_Edit_gardu',$data);
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
 
		$this->AdminModel->update_data_gardu($where,$data,'data_gardu');
		redirect('tampil-gardu');
    }
	public function TampilTrafo()
	{
		$data['getTrafo'] = $this->AdminModel->getTrafo();	
		// echo "ini test yhaa bgsd";
		$this->load->view('tampil_trafo',$data);
	}
		
    public function TambahTrafo()
    {
		if(!empty($_POST))
		{
			$data =  array('id_trafo' => $this->input->post('id_trafo'),
					'id_gardu' => $this->input->post('id_gardu'),
					'id_merek' => $this->input->post('id_merek'),
					'no_seri' => $this->input->post('no_seri'),
					'tahun' => $this->input->post('tahun'),
					
					);
			$this->AdminModel->TambahTrafo($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Trafo Berhasil!!");
			redirect('tampil-trafo');
		}
		else
		{
			$data['kodeunik'] =$this->AdminModel->kode_trafo();
			$data['getGardu'] = $this->AdminModel->getGardu();
			$data['getMerek'] = $this->AdminModel->getMerek();
			$this->load->view('tambah_trafo',$data);
		}
    }
    
	function hapus_data_trafo($id)

	{ 
    	$this->load->model('AdminModel');
    	$this->AdminModel->hapus_trafo($id); 
    	redirect('tampil-trafo'); 
 
	}
	
	function edit_trafo($id)
	{
		$where = array('id_trafo' => $id);
		$data['data_trafo'] = $this->AdminModel->edit_data_trafo($where,'data_trafo')->result();
		$data['getGardu'] = $this->AdminModel->getGardu();
		$data['getMerek'] = $this->AdminModel->getMerek();
		$this->load->view('View_Edit_Trafo',$data);
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
 
		$this->AdminModel->update_data_trafo($where,$data,'data_trafo');
		redirect('tampil-trafo');
    }

    public function TampilGarduUkur()
	{
		$data['getGardu'] = $this->AdminModel->getGardu();	
		$this->load->view('tampil_gardu_Ukur',$data);
	}
		
     public function TampilPengukuran()
	{
		$data['getPengukuran'] = $this->AdminModel->getPengukuran();	
		
		$this->load->view('tampil_pengukuran',$data);
	}
	
	 public function DetailPengukuran($id_pengukuran){
		$data['getPengukuran'] = $this->AdminModel->getDetail($id_pengukuran);	
		$this->load->view('view_detail_ukur',$data);
	}	
	
   public function RiwayatUkur($idr)
	{
		$data['getPengukuran'] = $this->AdminModel->getRiwayat($idr);	
		$this->load->view('tampil_pengukuran',$data);
	}

	public function export_excel(){
           $data['getPengukuran'] =  $this->AdminModel->getPengukuran();
           $this->load->view('View_Excel',$data);
      }

	 public function TambahPengukuran($idgrd)
    {
		if(!empty($_POST))
		{
			$data =  array('id_pengukuran' => $this->input->post('id_pengukuran'),	
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
			$this->AdminModel->TambahPengukuran($data);
			$this->session->set_flashdata('SUCCESSMSG', "Tambah Pengukuran Berhasil!!");
			redirect('tambah-pengukuran');
		}
		else
		{	
			$data['kodeunik'] =$this->AdminModel->kode_pengukuran();
			$data['getGardu'] = $this->AdminModel->getGarduUkur($idgrd);
			$this->load->view('Tambah_pengukuran',$data);
		}
    }


	function hapus_data_pengukuran($id)
	{ 
    	$this->load->model('AdminModel');
    	$this->AdminModel->hapus_pengukuran($id); 
    	redirect('tampil-pengukuran'); 
 
	}

function edit_Pengukuran($id)
	{
		$where = array('id_pengukuran' => $id);
		$data['pengukuran'] = $this->AdminModel->edit_data_pengukuran($where,'pengukuran')->result();
		$data['getGardu'] = $this->AdminModel->getGardu();
		$this->load->view('view_edit_ukur',$data);
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
 
		$this->AdminModel->update_data_pengukuran($where,$data,'pengukuran');
		redirect('tampil-pengukuran');
}
}