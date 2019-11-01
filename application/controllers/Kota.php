<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Kota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_kota');
    }

    public function Index() 
    {
        $data['kota'] = $this->m_kota->tampil_data()->result();
        $data['title'] = "CRUD Codeigniter";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/kota');
        $this->load->view('templates/footer');
        
    }

    public function input() 
    {
        $data['title'] = "CRUD CodeIgniter";
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('idprovinsi', 'Idprovinsi', 'trim|required');
        
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/createkota');
            $this->load->view('templates/footer');
        
        }else {

        $name = $this->input->post('name');
        $idprovinsi = $this->input->post('idprovinsi');
    
        $data = array(
                'name' => $name,
                'province_id' => $idprovinsi
                
            );

        $this->m_kota->input_data($data, 'city');
        redirect('kota');

        }

    }

    public function update($id) 
    {
        $where = array('id' => $id);
        $data['kota'] = $this->m_kota->edit_data($where, 'city')->result();
        $data['title'] = "CRUD CodeIgniter";
     
        $this->load->view('templates/header', $data);
        $this->load->view('pages/updatekota');
        $this->load->view('templates/footer');  
    }

    public function hasil_update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $idprovinsi = $this->input->post('idprovinsi');
        
        

        $data = array(
            'name' => $name,
            'province_id' => $idprovinsi
            
        );

        $where = array(
            'id' => $id
        );

        $this->m_kota->update_data($where, $data, 'city');
        redirect('kota');
    }

    public function hapus($id) 
    {
        $where = array('id' => $id);
        $this->m_kota->hapus_data($where, 'city');

        redirect('kota');
    

    }




 }