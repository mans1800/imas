<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('function');
        $this->load->helper('function_helper');
	$this->load->library('form_builder');
	$this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('text');
                      
    }

    public function index() {

        $this->views('index');
    }

}