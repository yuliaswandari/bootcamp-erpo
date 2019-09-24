<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class M_register extends CI_Model  
  {  

   
public function reg()
    {
      date_default_timezone_set('ASIA/JAKARTA');
      $data = array(
        'user_fullname' => $this->input->post('user_fullname'),
        'user_username' => $this->input->post('user_username'),
        'user_email' => $this->input->post('user_email'),
        'user_password' => base64_encode($this->input->post('user_password')),
        'user_nohp' => $this->input->post('user_nohp'),
        'user_createon' => date('Y-m-d H:i:s'),
        'user_level' => '2',
        
        
      );
      return $this->db->insert('t_user', $data);
    }

  
  }  