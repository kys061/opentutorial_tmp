<?php
class Topic_model extends CI_Model {
 
    function __construct()
    {       
        parent::__construct();
    }
 
	function gets(){
		return $this->db->query('SELECT * FROM topic')->result();
	}
	function post($topic_id){
		$this->db->select('id');
		$this->db->select('title');
		$this->db->select('description');
		$this->db->select('UNIX_TIMESTAMP(created) AS created');
		return $this->db->get_where('topic', array('id'=>$topic_id))->row();
	#	return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id)
	}
	function add($title, $description){
		$this->db->set('created', 'NOW()', false);
		$this->db->insert('topic', array(
				'title'=>$title,
				'description'=>$description,

			));

		return $this->db->insert_id();
	}
	function delete($topic_id){

		$this->db->delete('topic', array(
			'id' => $topic_id
			)); 

		return true;
// 생성결과:
// DELETE FROM mytable 
// WHERE id = $id
	}
	function modify($id, $title, $description){
		$this->db->set('created', 'NOW()', false);
		$this->db->update('topic', array('title'=>$title, 'description'=>$description), array('id'=>$id));
		$topic_id = $id;
		return $id;
	}

}
?>
