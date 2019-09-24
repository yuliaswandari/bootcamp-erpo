<?php 
 
class M_todo extends CI_Model{	
	   

        function todo_new(){
            $query=$this->db->query("SELECT * FROM t_todo WHERE todo_status = 'New'");
        return $query;
        }

        function todo_progres(){
            $query=$this->db->query("SELECT * FROM t_todo WHERE todo_status = 'Progress'");
        return $query;
        }

        function todo_done(){
            $query=$this->db->query("SELECT * FROM t_todo WHERE todo_status = 'Done'");
        return $query;
        }

        function edit_todo($where,$table){		
            return $this->db->get_where($table,$where);
        }

        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }	

        function todo_hapus($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }	
    }