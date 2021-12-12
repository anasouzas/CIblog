<?php

    class Posts_controller extends CI_Controller
    {

        public function index ()
        {            
            $this->load->model('post_model', 'post');

            $data['posts'] = $this->post->get_posts();
            $data['title'] = 'Latest Posts';

            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');  
        }

        public function view($slug = NULL)
        {
            $this->load->model('post_model', 'post');

            $data['post'] = $this->post->get_posts($slug);

            if (empty($data['post']))
            {
                show_404();
            }

            $data['title'] = $data['post']['tp_title'];

            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }
    }