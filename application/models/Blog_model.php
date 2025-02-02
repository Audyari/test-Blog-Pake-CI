<?php

class Blog_model extends CI_Model
{
  
    public function get_blogs()
    {
        $query = $this->db->get('blog');
        return $query->result_array();
    }

    public function detail($url)
    {
        $query = $this->db->get_where('blog', array('url' => $url));
        return $query->row_array();
    }


   
}
