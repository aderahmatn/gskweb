<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Landing_m');
  }


  public function index()
  {
    $this->template->load('_layout/main', 'pages/view_landing');
  }

  public function submit()
  {

    $this->form_validation->set_message('required', '%s tidak boleh kosong!');
    $landing = $this->Landing_m;
    $validation = $this->form_validation;
    $validation->set_rules($landing->rules());
    if ($validation->run() == FALSE) {
      $this->session->set_flashdata('error', 'Silahkan isi formulir terlebih dahulu!');
      redirect('landing', 'refresh');
    } else {
      $post = $this->input->post(null, TRUE);
      $landing->add($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data berhasil dikirim!');
        redirect('landing', 'refresh');
      }
    }
  }
}

/* End of file Landing.php */
