<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_provinsi');
        
    }

    public function Index() 
    {
        $data['provinsi'] = $this->m_provinsi->tampil_data()->result();

        $data['title'] = "CRUD CodeIgniter";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/provinsi');
        $this->load->view('templates/footer');
        
    }

    public function provinsi() 
    {

        $data['provinsi'] = $this->m_provinsi->tampil_data()->result();
        
        $data['title'] = "CRUD CodeIgniter";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/provinsi');
        $this->load->view('templates/footer');   
        
    }

    public function input() 
    {
        $data['title'] = "CRUD CodeIgniter";
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/createprovinsi');
            $this->load->view('templates/footer');
        
        }else {

        $name = $this->input->post('name');
    
        $data = array(
                'name' => $name
                
            );

        $this->m_provinsi->input_data($data, 'province');
        redirect('provinsi');

        }

    }

    public function update($id) 
    {
        $where = array('id' => $id);
        $data['provinsi'] = $this->m_provinsi->edit_data($where, 'province')->result();
        $data['title'] = "CRUD CodeIgniter";
     
        $this->load->view('templates/header', $data);
        $this->load->view('pages/updateprovinsi');
        $this->load->view('templates/footer');  
    }

    public function hasil_update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        
        

        $data = array(
            'name' => $name
            
        );

        $where = array(
            'id' => $id
        );

        $this->m_provinsi->update_data($where, $data, 'province');
        redirect('provinsi');
    }

    public function hapus($id) 
    {
        $where = array('id' => $id);
        $this->m_provinsi->hapus_data($where, 'province');

        redirect('provinsi');
    

    }


}