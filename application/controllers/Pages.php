<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function reservation() {
        $data['title'] = 'Reservation';
        $data['content'] = $this->load->view('content/reservation', [], true);
        $this->load->view('layouts/template', $data);
    }

	public function testimonial() {
        $data['title'] = 'Testimonial';
        $data['content'] = $this->load->view('content/testimonial', [], true);
        $this->load->view('layouts/template', $data);
    }
}
