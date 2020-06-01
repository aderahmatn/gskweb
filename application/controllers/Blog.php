<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function index()
  {
    $this->template->load('_layout/main', 'pages/view_blog');	
    
  }

}

/* End of file Blog.php */
