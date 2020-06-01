<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_m extends CI_Model
{

  private $_table = "visitor";

  public $IdVisitor;
  public $Name;
  public $Email;
  public $Message;
  public $Date;

  public function rules()
  {
    return [

      [
        'field' => 'Name',
        'label' => 'Nama Lengkap',
        'rules' => 'required'
      ],

      [
        'field' => 'Email',
        'label' => 'Email',
        'rules' => 'required'
      ],

      [
        'field' => 'Message',
        'label' => 'Pesan ',
        'rules' => 'required'
      ],
    ];
  }
  public function add()
  {
    $post = $this->input->post();
    $this->IdVisitor = uniqid('VST');
    $this->Name = $post['Name'];
    $this->Email = $post['Email'];
    $this->Message = $post['Message'];
    $this->Date = date('d / M / y');
    $this->db->insert($this->_table, $this);
  }
}

/* End of file Landing_m.php */
