<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends MX_Controller
{
    public function index(){
        $this->load->view('v_image');
    }
}