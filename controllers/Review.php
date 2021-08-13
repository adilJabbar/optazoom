<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Review extends CI_Controller {

    

    function __construct() {

        parent::__construct();

        $this->load->helper('form');

        $this->load->library('form_validation');

    }
    public function index(){

     $this->load->view('front/shopping_cart/review/index.php');

    }

    

    

}