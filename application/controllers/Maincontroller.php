<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontroller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        $this->load->view('based/sites/head.php');
        $this->load->view('based/sites/nav.php');
        $this->load->view('pages/sites/main.php');
        $this->load->view('based/sites/footer.php');
        $this->load->view('based/sites/script.php');
        
    }

}

/* End of file Controllername.php */
