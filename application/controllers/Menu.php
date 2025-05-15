<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function index() {
        $data['title'] = 'Menu';
        $data['content'] = $this->load->view('content/menu', [], true);
        $this->load->view('layouts/template', $data);
    }
}
