<?php
class AdminModel extends CI_Model
{
	function __construct() {
		parent::__construct();

	}
      
	//gardu
	public function kode_gardu(){
            $this->db->select('Right(data_gardu.id_gardu,4) as kode',false);
            $this->db->order_by('id_gardu', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('data_gardu');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
            $kodegardu  = "G".$kodemax;
            return $kodegardu;
        }


	public function TambahGardu($data){
		$this->db->insert('data_gardu',$data);
		$this->db->select('*');
		$this->db->from('data_gardu');
		$this->db->join('penyulang','penyulang.id_penyulang=data_gardu.id_penyulang');
		$this->db->join('wilayah', 'wilayah.id_rayon = data_gardu.id_rayon');
		$query =$this->db->get();
		return true;
	}
	
	public function getGardu()
	{
		// $query = $this->db->get('data_gardu');
		$this->db->select('id_gardu,nama_gardu,uraian_nama, alamat,penyulang.nama_penyulang,daya,jenis.nama_jenis,no_gardu,wilayah.nama_wilayah');    
        $this->db->from('data_gardu');
        $this->db->join('penyulang', 'penyulang.id_penyulang = data_gardu.id_penyulang');
		$this->db->join('jenis', 'jenis.id_jenis = data_gardu.id_jenis');
		$this->db->join('wilayah', 'wilayah.id_rayon = data_gardu.id_rayon');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getGarduUkur($idbangsad)
	{
		$this->db->where('id_gardu', $idbangsad); 
		 $query = $this->db->get('data_gardu');
		 return $query->result();
		 
	}
	function hapus_gardu($id){ //fungsi delete berdasarkan id
	    $this->db->where('id_gardu',$id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
	    $this->db->delete('data_gardu'); //eksekusi
    	return;
	}

	function update_data_gardu($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
        $this->db->select('id_penyulang');
		$this->db->from('data_gardu');
		$this->db->join('penyulang','penyulang.id_penyulang=data_gardu.id_penyulang');
    }

	function edit_data_gardu($where,$table){       
        return $this->db->get_where($table,$where);
        $this->db->select('id_penyulang');
		$this->db->from('data_gardu');
		$this->db->join('penyulang','penyulang.id_penyulang=data_gardu.id_penyulang');
    }
	
	//trafo
    public function kode_trafo(){
            $this->db->select('Right(data_trafo.id_trafo,4) as kode',false);
            $this->db->order_by('id_trafo', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('data_trafo');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
            $kodetrafo  = "TR".$kodemax;
            return $kodetrafo;
        }

	public function TambahTrafo($data)
	{
		$this->db->insert('data_trafo',$data);
		$this->db->join('merek','merek.id_merek=data_trafo.id_merek');
		return true;
	}
	
	public function getTrafo()
	{
		$this->db->select('id_trafo,data_gardu.nama_gardu,merek.nama_merek,no_seri,tahun');    
        $this->db->from('data_trafo');
        $this->db->join('data_gardu', 'data_gardu.id_gardu = data_trafo.id_gardu');
		$this->db->join('merek', 'merek.id_merek = data_trafo.id_merek');
		$query = $this->db->get();
		return $query->result();
	}
	function hapus_trafo($id){ //fungsi delete berdasarkan id
	    $this->db->where('id_trafo',$id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
	    $this->db->delete('data_trafo'); //eksekusi
    	return;
	}

	function update_data_trafo($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

	function edit_data_trafo($where,$table){       
        return $this->db->get_where($table,$where);
    }
	
	//penyulang
    public function kode_penyulang(){
            $this->db->select('Right(penyulang.id_penyulang,4) as kode',false);
            $this->db->order_by('id_penyulang', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('penyulang');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;
            }
            $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
            $kodepenyulang  = "P".$kodemax;
            return $kodepenyulang;
        }

	public function TambahPenyulang($data)
	{
		$this->db->insert('penyulang',$data);
		return true;
	}
	
	public function getPenyulang(){
		$query = $this->db->get('penyulang');
		return $query->result();
	}
	function hapus_penyulang($idp){ //fungsi delete berdasarkan id
	    $this->db->where('id_penyulang',$idp); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
	    $this->db->delete('penyulang'); //eksekusi
    	return;
	}

	function update_data_penyulang($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

	function edit_data_penyulang($where,$table){       
        return $this->db->get_where($table,$where);
    }

	//user
	public function TambahUser($data){
		$this->db->insert('user',$data);
		return true;
	}
	
	public function getUser(){
		$this->db->select('id,nama,wilayah.nama_wilayah,level,username,password');    
        $this->db->from('user');
        $this->db->join('wilayah', 'wilayah.id_rayon = user.id_rayon');
		$query = $this->db->get();
		return $query->result();
	}
	
	function hapus_user($id){ //fungsi delete berdasarkan id
	    $this->db->where('id',$id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
	    $this->db->delete('user'); //eksekusi
    	return;
	}

	function update_data_user($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

	function edit_data_user($where,$table){       
        return $this->db->get_where($table,$where);
    }

     function cek_tambah_user($username){
        
        $this->db->where('username',$username);
        $query=$this->db->get('user');
        
        return $query;
    }
	

	function edit_data($where,$table){       
        return $this->db->get_where($table,$where);
    }

    //pengukuran
    public function kode_pengukuran(){
            $this->db->select('Right(pengukuran.id_pengukuran,4) as kode',false);
            $this->db->order_by('id_pengukuran', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('pengukuran');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
            $kodepengukuran  = "U".$kodemax;
            return $kodepengukuran;
        }

   public function TambahPengukuran($data){
		$this->db->insert('pengukuran',$data);
		$this->db->select('*');
		$this->db->from('pengukuran');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$query =$this->db->get();
		return true;
	}
	
	public function getDetail($id_pengukuran){
		$this->db->select('id_pengukuran,data_gardu.nama_gardu,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,tegangan_r,tegangan_s,tegangan_t,tegangan_n,tgl_pengukuran,beban_terukur,data_gardu.daya,beban_trafo,nama');
		$this->db->where('id_pengukuran',$id_pengukuran);
		$this->db->from('pengukuran');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$query = $this->db->get();
		return $query->result();
	}

	public function getPengukuran(){
		$this->db->select('id_pengukuran,data_gardu.nama_gardu,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,tegangan_r,tegangan_s,tegangan_t,tegangan_n,tgl_pengukuran,beban_terukur,data_gardu.daya,beban_trafo,nama');
		$this->db->from('pengukuran');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$query = $this->db->get();
		return $query->result();	
	}
	
	function hapus_Pengukuran($id){ //fungsi delete berdasarkan id
	    $this->db->where('id_pengukuran',$id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
	    $this->db->delete('pengukuran'); //eksekusi
    	return;
	}

	function update_data_pengukuran($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

	function edit_data_pengukuran($where,$table){       
        return $this->db->get_where($table,$where);
    }
    
    public function getRiwayat($idr)
	{	
		$this->db->select('id_pengukuran,data_gardu.nama_gardu,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,tegangan_r,tegangan_s,tegangan_t,tegangan_n,tgl_pengukuran,beban_terukur,data_gardu.daya,beban_trafo,nama');
		$this->db->from('pengukuran');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$this->db->where('data_gardu.id_gardu', $idr); 
		 $query = $this->db->get('');
		 return $query->result();
	}
    //jenis
    public function getjenis(){
		$query = $this->db->get('jenis');
		return $query->result();
	}
	//Rayon
	public function getwilayah(){
		$query = $this->db->get('wilayah');
		return $query->result();
	}
	//merek
	public function getMerek()
	{
		$query = $this->db->get('merek');
		return $query->result();
	}
}