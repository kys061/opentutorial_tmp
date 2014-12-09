<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();      
		$this->load->database();
		if(!$this->input->is_cli_request())
			$this->load->library('session');
		
	}    
	function _footer(){
		$this->load->view('footer');
	}

    function _head(){ // private method - no routing
                //var_dump($this->session->userdata('session_test'));
                //$this->session->set_userdata('session_test','yskang');
                //var_dump($this->session->all_userdata());
    	$this->load->view('header');

    }
	function _sidebar(){
		$topics = $this->topic_model->get_list();
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/tmp/topic/tlist';
		$config['total_rows'] = count($topics);
		$config['per_page'] = 5; 
		$this->pagination->initialize($config); 
		$pages = $this->pagination->create_links();
		$this->load->view('topic_list', array('topics'=>$topics,'pages'=>$pages));


	}
    function _subhead(){
    	$this->load->view('subheader');
    }

}