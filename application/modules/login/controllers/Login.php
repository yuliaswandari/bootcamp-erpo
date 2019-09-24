<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
 
    function index(){
        $this->load->view('v_login');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_user=$this->m_login->auth_user($username,$password);
 
        if($cek_user->num_rows() > 0){ 
                        $data=$cek_user->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['user_level']=='1'){ 
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['user_id']);
                    $this->session->set_userdata('ses_nama',$data['user_username']);
                    redirect('page');
 
                 }else{ 
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_id',$data['user_id']);
                    $this->session->set_userdata('ses_nama',$data['user_username']);
                    redirect('page');
                 }
 
        } 
        }
 
    
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}