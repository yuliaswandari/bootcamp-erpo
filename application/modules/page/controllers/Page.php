<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
    $this->load->helper('url');
    $this->load->model('m_page');
  }
 
  function index(){
    if($this->session->userdata('akses')=='1'){
      
      $this->load->view('v_dashboardadmin');
        
      }else{
        $data['t_todo'] = $this->m_page->todo_today()->result();
        $this->load->view('v_dashboard',$data);
      }
   
    }
 
  function data_user(){ 
    // function ini hanya boleh diakses oleh admin
    if($this->session->userdata('akses')=='1'){
    $data['t_user'] = $this->m_page->tampil_user()->result();
    $this->load->view('v_user',$data);
      
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
  function input_task(){
    // function ini hanya boleh diakses oleh user
    if($this->session->userdata('akses')=='2'){
      $this->load->view('v_input_task');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function report(){
    // function ini hanya boleh diakses oleh admin
    if($this->session->userdata('akses')=='1'){
      $where = array('todo_id' => 1);
		$data['t_todo'] = $this->m_page->report_data($where,'t_todo')->result();
      $this->load->view('todo/v_report_task',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function hapus_user($user_id){
    // function ini hanya boleh diakses oleh admin
    if($this->session->userdata('akses')=='1'){
      $where = array('user_id' => $user_id);
		  $this->m_page->hapus_data($where,'t_user');
		  redirect('page/data_user');
    }
    else{
    echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}