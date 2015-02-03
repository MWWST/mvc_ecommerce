<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		
		$this->load->model('Product');
		$products = $this->Product->display();
		$this->load->view('products', array('value' => $products));
		// var_dump($products);
		// $this->load->view('products');
	}

}

//end of main controller