<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');/* * Developer : pan-x (info@pan-x.com) * All code (c)2013 pan-x all rights reserved */ class Login extends CI_Controller {   function __construct() {        parent::__construct();    }	public function index() {        $this->load->library('MyMenu');        $menu = new MyMenu;        $this->load->library('MyFooter');        $footer = new MyFooter;        $this->load->helper(array('form', 'url'));        $data = array();        $data['navigation'] = $menu->show_menu();        $data['mainContent'] = $this->load->view('login', $data, true);        $data['homeTitle'] = 'Login';		$data['headerTitle']  =  $_SESSION ['client']['client_name'];        $data['footer'] = $footer->show_footer();        $this->load->view('main_template', $data);    }}/* End of file login.php *//* Location: ./application/controllers/login.php */