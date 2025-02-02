<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');

        $this->load->model('Blog_model');
        
    }

     public function index()
    {
       
		$data['blogs'] = $this->Blog_model->get_blogs();

        //echo "<pre>";
        //var_dump($data);
        $this->load->view('blog',$data);
    }

    public function detail($url)
    {
      
        $data['blog'] = $this->Blog_model->detail($url);

        // echo "<pre>";
        // var_dump($data);
      
        $this->load->view('blog_detail', $data);
    }

}

?>  