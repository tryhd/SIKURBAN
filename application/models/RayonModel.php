<?php
class RayonModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
      
	//gardu
	
	public function getGardu()
	{	
		$this->db->select('id_gardu,nama_gardu,uraian_nama, alamat,penyulang.nama_penyulang,daya,jenis.nama_jenis,no_gardu,wilayah.nama_wilayah');    
        $this->db->from('data_gardu');
        $this->db->join('penyulang', 'penyulang.id_penyulang = data_gardu.id_penyulang');
		$this->db->join('jenis', 'jenis.id_jenis = data_gardu.id_jenis');
		$this->db->join('wilayah', 'wilayah.id_rayon = data_gardu.id_rayon');
		$this->db->where('wilayah.id_rayon', $this->session->id_rayon); 
		$query = $this->db->get();
		return $query->result();
	}
	
	function hapus_gardu($id){
	    $this->db->where('id_gardu',$id); 
	    $this->db->delete('data_gardu'); 
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
	public function TambahTrafo($data)
	{
		$this->db->insert('data_trafo',$data);
		return true;
	}
	
	public function getTrafo()
	{	
		$this->db->select('id_trafo,data_gardu.nama_gardu,merek.nama_merek,no_seri,tahun');    
        $this->db->from('data_trafo');
        $this->db->join('data_gardu', 'data_gardu.id_gardu = data_trafo.id_gardu');
		$this->db->join('merek', 'merek.id_merek = data_trafo.id_merek');
		$this->db->join('wilayah', 'wilayah.id_rayon = data_gardu.id_rayon');
		$this->db->where('wilayah.id_rayon', $this->session->id_rayon);
		$query = $this->db->get();
		return $query->result();
	}

	function hapus_trafo($id){ 
	    $this->db->where('id_trafo',$id); 
	    $this->db->delete('data_trafo'); 
    	return;
	}

	function update_data_trafo($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
          $this->db->select('id_gardu,id_merek');
		$this->db->from('data_trafo');
		$this->db->join('data_gardu','data_gardu.id_gardu=data_trafo.id_gardu');
		$this->db->join('merek','merek.id_merek=data_trafo.id_merek');
    }

	function edit_data_trafo($where,$table){       
        return $this->db->get_where($table,$where);
        
          $this->db->select('id_gardu,id_merek');
		$this->db->from('data_trafo');
		$this->db->join('data_gardu','data_gardu.id_gardu=data_trafo.id_gardu');
		$this->db->join('merek','merek.id_merek=data_trafo.id_merek');
    }

    //pengukuran
    public function getPengukuran(){
		$this->db->select('id_pengukuran,data_gardu.nama_gardu,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,tegangan_r,tegangan_s,tegangan_t,tegangan_n,tgl_pengukuran,beban_terukur,data_gardu.daya,beban_trafo,nama');
		$this->db->from('pengukuran');
		$this->db->join('wilayah', 'wilayah.id_rayon = pengukuran.id_rayon');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$this->db->where('wilayah.id_rayon', $this->session->id_rayon); 
		 $query = $this->db->get('');
		 return $query->result();
	}

	public function getDetail($id_pengukuran){
		$this->db->select('id_pengukuran,data_gardu.nama_gardu,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,tegangan_r,tegangan_s,tegangan_t,tegangan_n,tgl_pengukuran,beban_terukur,data_gardu.daya,beban_trafo,nama');
		$this->db->from('pengukuran');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$this->db->where('id_pengukuran',$id_pengukuran);
		$query = $this->db->get();
		return $query->result();
	}
	
	//penyulang
    public function getPenyulang(){
		$query = $this->db->get('penyulang');
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
