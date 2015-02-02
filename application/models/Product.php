<?php
	class Product extends CI_Model {
		public function display(){

			return $this->db->query("SELECT * FROM products")->result_array();
		}

		public function display_by_id($product_id){
			return $this->db->query("SELECT * FROM products WHERE id =?", array($product_id))->row_array();

		}

		public function add_to_cart($session,$quantity,$product){
			$query = "INSERT INTO ecomm2.cart (session_id, quantity, products_ID) VALUES (?, ?, ?);";
			$values = array($session['session_id'],$quantity['quantity'],$product['product_id']);

		}

		public function display_cart($session_id) {
			return $this->db->query
			("SELECT * FROM products
			LEFT JOIN cart on products.id = cart.products_id
			WHERE cart.session_id =?", array($session_id))->row_array();
		}
		

	}

?>