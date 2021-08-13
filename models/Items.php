<?php

class Items extends CI_Model {

    function get_live_items($search_data) {

        $this->db->select("title,description,product_id");

        $this->db->from('product');
        $this->db->group_start();
        $this->db->like('title', $search_data);
      
        $this->db->group_end();

        $this->db->limit(6);
        $query = $this->db->get();

        return $query->result();
    }
 function get_live_items1($search_data) {

        $this->db->select("vendor_id,name,display_name");

        $this->db->from('vendor');
        $this->db->group_start();
        $this->db->like('name', $search_data);
      
        $this->db->group_end();

        $this->db->limit(6);
        $query = $this->db->get();

        return $query->result();
    }

}

