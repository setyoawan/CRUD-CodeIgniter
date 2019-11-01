<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function Index() 
    {
        $data['title'] = "CRUD CodeIgniter";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
        
    }

}


