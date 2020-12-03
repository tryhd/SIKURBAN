<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->admin->check_login('user', array('username' => $username), array('password' => $password));

               //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $apps_data['id'] = $apps->id;
                        $apps_data['username'] = $apps->username;
                        $apps_data['level'] = $apps->level;
                        $apps_data['id_rayon'] = $apps->id_rayon;
                        $apps_data['nama'] = $apps->nama;
                        $this->session->set_userdata($apps_data);
                     }
                       if ($this->session->userdata('level')=='Admin') {
                            redirect('dashboard/');
                        }   elseif ($this->session->userdata('level')=='Rayon') {
                                redirect('Rayon/dashboardRayon');
                            }
                            elseif ($this->session->userdata('level')=='Teknisi') {
                                redirect('Teknisi/dashboardTeknisi');
                            }
                            elseif ($this->session->userdata('level')=='Petugas') {
                                redirect('Petugas/dashboardPetugas');
                            }
                }else{
                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                $this->load->view('login');
            }

        }

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
