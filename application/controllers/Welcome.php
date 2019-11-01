  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
      $this->load->model('M_data');
      $this->load->helper('url');
	}
   function index()
	{
		$data['datashop']=$this->M_data->getdata()->result();
      $this->load->view('v_praktikum',$data);
   }
}