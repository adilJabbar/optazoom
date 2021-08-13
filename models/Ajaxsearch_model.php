<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("product");
		$this->db->limit(4, 2);
		if($query != '')
		{
			$this->db->like('product_id', $query);
			$this->db->or_like('title', $query);
			$this->db->or_like('category', $query);
			$this->db->or_like('description', $query);
			$this->db->or_like('sub_category', $query);
		}
		$this->db->order_by('product_id', 'DESC');
		return $this->db->get();
		
	}
    function fetch_data1($query)
	{
		$this->db->select("*");
		$this->db->from("product");
		$this->db->limit(4, 2);
		if($query != '')
		{
			$this->db->like('product_id', $query);
			$this->db->or_like('title', $query);
			$this->db->or_like('category', $query);
			$this->db->or_like('description', $query);
			$this->db->or_like('sub_category', $query);
		}
		$this->db->order_by('product_id', 'DESC');
		return $this->db->get();
		
	}
}
?>