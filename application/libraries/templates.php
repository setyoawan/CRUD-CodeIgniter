<?php
    class Templates{
        protected $_ci;
        
        function __construct()
        {
            $this->_ci = &get_instance();
        }
        
        function coba($content, $data = NULL)
        {
            $data['headernya'] = $this->_ci->load->view('templates/header', $data, TRUE);
            $data['contentnya'] = $this->_ci->load->view($content, $data, TRUE);
            $data['footernya'] = $this->_ci->load->view('templates/footer', $data, TRUE);
            
            $this->_ci->load->view('templates/index', $data);
        }
}