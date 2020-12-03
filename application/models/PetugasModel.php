<?php
class PetugasModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
      
	//gardu
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
	
	public function getGardu($idgardu)
	{
		$this->db->where('id_gardu', $idgardu); 
		 $query = $this->db->get('data_gardu');
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

	public function getRiwayat($idr)
	{
		$this->db->select('id_pengukuran,data_gardu.nama_gardu,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,tegangan_r,tegangan_s,tegangan_t,tegangan_n,tgl_pengukuran,beban_terukur,data_gardu.daya,beban_trafo,nama');
		$this->db->from('pengukuran');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$this->db->where('data_gardu.nama_gardu', $idr); 
		 $query = $this->db->get();
		 return $query->result();
	}
	
	public function getGarduUkur()
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

	public function getPengukuran(){
		$this->db->select('id_pengukuran,data_gardu.nama_gardu,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,tegangan_r,tegangan_s,tegangan_t,tegangan_n,tgl_pengukuran,beban_terukur,data_gardu.daya,beban_trafo,nama');
		$this->db->from('pengukuran');
		$this->db->join('wilayah', 'wilayah.id_rayon = pengukuran.id_rayon');
		$this->db->join('data_gardu','data_gardu.id_gardu=pengukuran.id_gardu');
		$this->db->where('wilayah.id_rayon', $this->session->id_rayon); 
		 $query = $this->db->get('');
		 return $query->result();
	}
}