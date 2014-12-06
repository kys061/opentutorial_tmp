<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('topic_model');
	}

	function index(){
		//var_dump($this->session->userdata('session_test'));
		//$this->session->set_userdata('session _test','yskang');
		$this->load->view('main');

		//$topics=$this->topic_model->gets();
		//$this->load->view('header');
		//$this->load->view('topic_list', array('topics'=>$topics));
		//$this->load->view('topic');
		//$this->load->view('footer');
	}

	function post($id){
		$this->_head();
		$this->_headstory();
		$this->_topiclist();
		$topic=$this->topic_model->post($id);
		$this->load->helper(array('url','korean'));
		$this->load->view('post', array('topic'=>$topic));
		$topic_id = $this->uri->segment(3);
		$this->load->view('footer');
	}

	function story(){
		$this->_head();
		$this->_headstory();
		$this->_topiclist();
		$this->load->helper(array('url','korean'));
		$this->load->view('story');
		//$topic_id = $this->uri->segment(3);
		$this->load->view('footer');
	}

	function add(){
		// need login
		//로그인이 되어있지 않다면 로그인 페이지로 리다이렉숀
		
		if(!$this->session->userdata('is_login')){
			$this->load->helper('url');
			redirect('/auth/login');
		}

		$this->_head();
		$this->_headstory();
		$this->_topiclist();

		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Content', 'required');

		
		if ($this->form_validation->run() == FALSE) // 
		{
			$this->load->view('add');
		}
		
		else
		{
			$topic_id = $this->topic_model->add($this->input->post('title'), $this->input->post('description'));
			$this->load->helper('url');
			redirect('/topic/post/'.$topic_id);
		}
		
		$this->load->view('footer');
	}
	function delete(){
		$this->load->helper('url');
		$topic_id = $this->uri->segment(3);
		$this->topic_model->delete($topic_id); 
		echo "<script> alert('Contents Delete Success') </script>";
		redirect('/topic/story');
	}

	function modify($id){
		$this->_head();
		$this->_headstory();
		$this->_topiclist();

		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Content', 'required');

		if ($this->form_validation->run() == FALSE) // 
		{
			$topic = $this->topic_model->post($id);

			$this->load->view('modify', array('topic'=>$topic));
		}
		
		else
		{
			$topic_id = $id;
			$topic_id = $this->topic_model->modify($id, $this->input->post('title'), $this->input->post('description'));
			$this->load->helper('url');
			redirect('/topic/post/'.$topic_id);
		}

		$this->load->view('footer');
	}
	function _head(){ // private method - no routing
		//var_dump($this->session->userdata('session_test'));
		//$this->session->set_userdata('session_test','yskang');
		//var_dump($this->session->all_userdata());
		$this->load->view('header');
		}
	function _headstory(){
		$this->load->view('header_story');
	}

	function _topiclist(){
		$topics=$this->topic_model->gets();
		$this->load->view('topic_list', array('topics'=>$topics));
	}

	
	function upload_receive_from_ck(){
		// 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
		$config['upload_path'] = './images';
		// git,jpg,png 파일만 업로드를 허용한다.
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		// 허용되는 파일의 최대 사이즈
		$config['max_size'] = '20480';
		// 이미지인 경우 허용되는 최대 폭
		$config['max_width']  = '5000';
		// 이미지인 경우 허용되는 최대 높이
		$config['max_height']  = '5000';
		$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("upload"))
		{
			echo "<script> alert('Upload Fail".$this->upload->display_errors('','')."') </script>";
			
			//$error = array('error' => $this->upload->display_errors());
			
			//$this->load->view('upload_form', $error);
		}	
		else
		{
			$CKEditorFuncNum = $this->input->get('CKEditorFuncNum');

			$data = $this->upload->data();
			$filename = $data['file_name'];			
			//$this->load->view('upload_success', $data);
			$url = '/tmp/images/'.$filename;
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."', '".$url."', 'Upload Sucess')</script>";

		}

	}
	function upload_form(){
		
		$this->_head();
		$this->_headstory();
		$this->_topiclist();
		$this->load->view('upload_form');
		$this->load->view('footer');
	}
}

?>

