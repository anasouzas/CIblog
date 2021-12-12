<?php

    class Post_model extends CI_Model
    {
        public function __construct()
        {   
            $this->load->database();
        }

        public function get_posts($slug = FALSE)
        {
            if ($slug === FALSE)
            {
                $query = $this->db->get('tp_posts');

                return $query->result_array();
            }
            else
            {
                $query = $this->db->get_where('tp_posts', array('tp_slug' => $slug));

                return $query->row_array();
            }
        }
    }