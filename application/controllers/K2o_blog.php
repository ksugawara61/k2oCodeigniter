<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K2o_blog extends CI_Controller {

    public function index() {
        $this->load->view('index');
    }

}
