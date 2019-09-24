<?php 
 
class M_page extends CI_Model{	
	   
        function tampil_user(){
            return $this->db->query("SELECT * FROM t_user WHERE user_level ='2'");
        }

        function hapus_data($where,$t_user){
            $this->db->where($where);
            $this->db->delete($t_user);
        }

        function report_data(){
            $query=$this->db->query("SELECT * FROM t_todo ORDER BY todo_id DESC");
        return $query;
        }

        function todo_today(){
            $query = $this->db->query("SELECT * FROM t_todo WHERE todo_startdate = CURDATE()");
            return $query;
        }
        
    }
 