<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Logout extends CI_Controller {   function __construct()	 {     parent::__construct();   }	public function index()	{        unset($_SESSION['user']);        redirect('login', 'refresh');	}}/* End of file welcome.php *//* Location: ./application/controllers/welcome.php */