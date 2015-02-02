<?php
	class Product extends CI_Model {
		public function display(){

			return $this->db->query("SELECT * FROM products")->result_array();
		}

		public function display_by_id($product_id){
			return $this->db->query("SELECT * FROM products WHERE id =?", array($product_id))->row_array();

		}

	}

?>