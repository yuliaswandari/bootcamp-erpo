<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('masuk'))
  {
   redirect('page');
  }
  $this->load->library('form_validation');
  $this->load->library('encrypt');
  $this->load->model('m_register');
 }

 function index()
 {
  $this->load->view('v_register');
 }

    function validation()  
 {  
    

//validate input value with form validation class of codeigniter  
    $this->form_validation->set_rules('user_fullname', 'Fullname', 'required');  
    $this->form_validation->set_rules('user_username', 'Username', 'required'); 
    $this->form_validation->set_rules('user_nohp', 'Phone Number', 'required|alpha_numeric');  
    $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[t_user.user_email]');  
    $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[6]|max_length[15]');  
    $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required|matches[password]');  
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
        $this->load->view('v_register');  
      }  
      $this->m_register->reg();
        
        redirect('login');
      }
    }
?>