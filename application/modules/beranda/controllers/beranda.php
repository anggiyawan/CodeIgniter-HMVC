<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();		
		$this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');		
		
		//if ( $this->session->userdata('LEVEL') != 'admin' ){
			//redirect('/');
		//}
				
	}

    public function index()
    {
	$data['query'] = $this->db->get('mhs');
		$this->load->view('beranda', $data);
	}
	
	
}
?>