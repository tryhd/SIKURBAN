<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
    //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('id');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    function cek_penyulang()
    {
        $this->db->select('*');
        $this->db->from('penyulang');
        $query = $this->db->get();
        return $query;
    }

    function cek_gardu()
    {
        $this->db->select('*');
        $this->db->from('data_gardu');
        $query = $this->db->get();
        return $query;
    }

    function cek_trafo()
    {
        $this->db->select('*');
        $this->db->from('data_trafo');
        $query = $this->db->get();
        return $query;
    }

    function cek_pengukuran()
    {
        $this->db->select('*');
        $this->db->from('pengukuran');
        $query = $this->db->get();
        return $query;
    }

    function cek_pengukuranR()
    {
        $this->db->select('*');
        $this->db->from('pengukuran');
        $this->db->join('wilayah', 'wilayah.id_rayon = pengukuran.id_rayon');
        $this->db->where('wilayah.id_rayon', $this->session->id_rayon);
        $query = $this->db->get();
        return $query;
    }

    function cek_trafoR()
    {
        $this->db->select('*');
        $this->db->from('data_trafo');
        $this->db->join('data_gardu', 'data_gardu.id_gardu = data_trafo.id_gardu');
        $this->db->join('wilayah', 'wilayah.id_rayon = data_gardu.id_rayon');
        $this->db->where('data_gardu.id_rayon', $this->session->id_rayon);
        $query = $this->db->get();
        return $query;
    }

    function cek_garduR()
    {
        $this->db->select('*');
        $this->db->from('data_gardu');
        $this->db->join('wilayah', 'wilayah.id_rayon = data_gardu.id_rayon');
        $this->db->where('wilayah.id_rayon', $this->session->id_rayon);
        $query = $this->db->get();
        return $query;
    }

}
