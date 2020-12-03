<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {
            $data = array(
                    'penyulang' => $this->admin->cek_penyulang()->result(),
                    'gardu' => $this->admin->cek_gardu()->result(),
                    'trafo' => $this->admin->cek_trafo()->result(),
                    'pengukuran' => $this->admin->cek_pengukuran()->result(),

            );
            $this->load->view("dashboard", $data);         

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
