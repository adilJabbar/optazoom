<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Livesearch extends CI_Controller {

    function __Construct() {
        parent::__Construct();

        $this->load->model('Items');
    }

    public function index() {
        $this->load->view('livesearch');
    }

    public function search() {
        

        $search_data = $_POST['search_data'];

        $query = $this->Items->get_live_items($search_data);
        foreach ($query as $row):
            // echo "<li><a href='https://project8.solutionsplayers.com/home/product_view/$row->product_id'> <img src='https://project8.solutionsplayers.com/uploads/product_image/product_".$row->product_id."_1_thumb.jpg' alt='Girl in a jacket' width='50' height='80'> " . $row->title ."</a></li>";
            echo "<p style='margin:0px; padding:10px 30px;'>
                <a href='https://project8.solutionsplayers.com/home/product_view/$row->product_id'>
                    <img src='https://project8.solutionsplayers.com/uploads/product_image/product_".$row->product_id."_1_thumb.jpg'  height='55px' width='100px'>
                    <span style='color: #515b6f !important; font-size:20px; padding-left: 40px; '>" . $row->title ."</span>
                </a>
            </p>";

        endforeach;
    }
     public function search1() {
        

        $search_data = $_POST['search_data'];

        $query = $this->Items->get_live_items1($search_data);
        foreach ($query as $row):
            // echo "<li><a href='https://project8.solutionsplayers.com/home/product_view/$row->product_id'> <img src='https://project8.solutionsplayers.com/uploads/product_image/product_".$row->product_id."_1_thumb.jpg' alt='Girl in a jacket' width='50' height='80'> " . $row->title ."</a></li>";
            echo "<p style='margin:0px; padding:10px 30px;'>
                <a href='https://project8.solutionsplayers.com/home/vendor_profile/".$row->vendor_id."/'>
                    <img src='https://project8.solutionsplayers.com/uploads/vendor_logo_image/logo_".$row->vendor_id.".png'  height='55px' width='100px'>
                    <span style='color: #515b6f !important; font-size:20px; padding-left: 40px; '>" . $row->display_name ."</span>
                </a>
            </p>";

        endforeach;
    }

}
