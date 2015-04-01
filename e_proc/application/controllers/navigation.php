<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigation extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
	
	public function index()
	{
		$this->load->view('login');
	}	
	
	public function register(){
		$this->load->view('register/register_view');
	}
	
	public function shipping()
	{
		$this->load->view('shipping/shipping_view');
	}
	
	public function depo()
	{
		$this->load->view('depo/depo_view');
	}
	
	public function freight()
	{
		$this->load->view('freight/freight_view');
	}
	
	public function truck()
	{
		$this->load->view('truck/truck_view');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */