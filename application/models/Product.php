<?php
	class Product extends CI_Model {
		public function display(){

			return $this->db->query("SELECT * FROM products")->result_array();
		}
	}

?>