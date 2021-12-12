<?php

    class Pages_controller extends CI_Controller
    {

        // if none parameter is passed, home page is shown

        public function view ($page = 'home')
        {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                show_404();
            }
            else
            {
                $data['title'] = ucfirst($page);
    
                $this->load->view('templates/header');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');                
            }

        }
    }