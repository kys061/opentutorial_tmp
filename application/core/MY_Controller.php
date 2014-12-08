<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();      
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
        $topics = $this->topic_model->gets();
        $this->load->view('topic_list', array('topics'=>$topics));
    }
    function _headstory(){
		$this->load->view('header_story');
	}

}