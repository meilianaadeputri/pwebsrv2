<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 *
 */
class resep extends CI_Controller
{

  public function list()
  {
    $this->load->view('resep/list.php');
  }

  public function palbas()
  {
    $this->load->view('resep/pallubasa.php');
  }
}
?>
