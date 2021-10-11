<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index() {
        $this->load->view('v1/checkout/checkout.php');
	}

    public function try_checkout() {
        $this->load->view('v1/checkout/try-checkout.php');
    }
}
