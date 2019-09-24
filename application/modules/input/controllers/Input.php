<?php
class Input extends CI_Controller{
    function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
        $this->load->model('m_input');
        $this->load->library('form_validation');
  }
 
  function index(){
    $this->load->view('v_input_task');
  }

  function validasi(){

   
      $todo_judul = $this->input->post('todo_judul');
      $todo_duedate = $this->input->post('todo_duedate');
      $todo_startdate = $this->input->post('todo_startdate');
      $todo_deskripsi = $this->input->post('todo_deskripsi');
      $todo_status = $this->input->post('todo_status');
    
      $data = array(
        'todo_judul' => $todo_judul,
        'todo_duedate' => $todo_duedate,
        'todo_startdate' => $todo_startdate,
        'todo_deskripsi' => $todo_deskripsi,
        'todo_status' => $todo_status
        );
      $this->m_input->input_data($data,'t_todo');
      if($data >= 1) {
        $this->load->view('alert/berhasil_simpan');
       } else {
           $this->session->set_flashdata('message', 'Gagal Disimpan');
           redirect('page');
       } 
    }
 } 

 
 
 