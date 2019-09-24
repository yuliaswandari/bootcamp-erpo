<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {
	
        function __construct(){
            parent::__construct();
            //validasi jika user belum login
            if($this->session->userdata('masuk') != TRUE){
                    $url=base_url();
                    redirect($url);
                }
            $this->load->helper('url');
            $this->load->model('m_todo');
            
    }

    function index(){
        $data['t_todo'] = $this->m_todo->todo_new()->result();
        $this->load->view('v_todonew', $data);
    }

    function progres(){
        $data['t_todo'] = $this->m_todo->todo_progres()->result();
        $this->load->view('v_todoprogres', $data);
    }

    function done(){
        $data['t_todo'] = $this->m_todo->todo_done()->result();
        $this->load->view('v_tododone', $data);
    }

    function edit($todo_id){
        $where = array('todo_id' => $todo_id);
        $data['t_todo'] = $this->m_todo->edit_todo($where,'t_todo')->result();
        $this->load->view('v_edit_todo',$data);
        
    }

    function hapus($todo_id){
    
        $todo_status = "Archive";
     
        $data = array(
          
            'todo_status' => $todo_status
        );
     
        $where = array(
            'todo_id' => $todo_id
        );
     
        $this->m_todo->todo_hapus($where,$data,'t_todo');
        redirect('page');
    }

    function update(){
        $todo_id = $this->input->post('todo_id');
        $todo_judul = $this->input->post('todo_judul');
        $todo_startdate = $this->input->post('todo_startdate');
        $todo_duedate = $this->input->post('todo_duedate');
        $todo_deskripsi = $this->input->post('todo_deskripsi');
        $todo_status = $this->input->post('todo_status');
     
        $data = array(
            'todo_judul' => $todo_judul,
            'todo_startdate' => $todo_startdate,
            'todo_duedate' => $todo_duedate,
            'todo_deskripsi' => $todo_deskripsi,
            'todo_status' => $todo_status
        );
     
        $where = array(
            'todo_id' => $todo_id
        );
     
        $this->m_todo->update_data($where,$data,'t_todo');
        redirect('page');
    }
    

    
}