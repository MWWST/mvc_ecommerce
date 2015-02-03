<?php

	class Products extends CI_Controller {

		public function add_cart($id){
			// $this->session->sess_destroy();
			// die();
			$this->output->enable_profiler(TRUE);

			if(!$this->session->userdata('cart'))
			{
				$this->session->set_userdata('cart',array());
			}

			$this->load->model('Product');
			$product = $this->Product->display_by_id($id);
			$list_cart=$this->session->userdata('cart');
			// var_dump($product);
			$list_cart[$product['ID']]= array(
					'product_id'=>$product['ID'],'product_quan'=>$this->input->post('quantity')
				);
			$this->session->set_userdata('cart',$list_cart);
			// var_dump($this->session->all_userdata());
			
			// var_dump($list_cart);
			redirect('/');
		}

		public function checkout(){
			$this->load->model('Product');
			$product = $this->Product->display();
			$product['ID'] = array('ID'=>'ID','name'=>'name','description'=>'description','price'=>'price');
			$this->load->view('cart',array('product'=>$product));	
		}

		public function buy(){
			$this->load->model('Product');
			
		}

		public function remove($id) {
			// $this->seession->session_unset('cart'['id']);
			$delete_product= $this->session->userdata('cart');
			unset($delete_product[$id]);
			$this->session->set_userdata('cart',$delete_product);
			redirect('/products/checkout');



		}



	}

?>