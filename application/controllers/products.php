<?php

	class Products extends CI_Controller {

		public function add_cart($id){
			$this->output->enable_profiler(TRUE);

			if(!$this->session->userdata('cart'))
			{
				$this->session->set_userdata('cart',array());
			}

			$this->load->model('Product');
			$product = $this->Product->display_by_id($id);
			$list_cart=$this->session->userdata('cart');
			// var_dump($product);
			$list_cart[]= array(
					'product_name'=>$product['name'], 'product_price'=>$product['price'], 'product_quan'=>$this->input->post('quantity')
				);
			$this->session->set_userdata('cart',$list_cart);
			// var_dump($this->session->all_userdata());
			var_dump($list_cart);
		}

	}

?>