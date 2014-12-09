<?php
class Topic_model extends CI_Model {

	function __construct()
	{       
		parent::__construct();
	}

	function get_list($table='topic', $type='', $offset='', $limit='')
	{
		$limit_query = '';
		$table='topic';

		if ( $limit != '' OR $offset != '' )
		{
                //페이징이 있을 경우의 처리
			$limit_query = ' LIMIT '.$offset.', '.$limit;
		}

		$sql = "SELECT * FROM ".$table." ORDER BY id DESC".$limit_query;
		$query = $this->db->query($sql);

		if ( $type == 'count' )
		{
                //리스트를 반환하는 것이 아니라 전체 게시물의 갯수를 반환
			$result = $query->num_rows();

                //$this->db->count_all($table);
		}
		else
		{
                //게시물 리스트 반환
			$result = $query->result();
		}

		return $result;
	}
                //return $this->db->query('SELECT * FROM topic')->result();

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
