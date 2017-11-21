<?php
include ("ANM_default_page.php");
class Api extends ANM_default_page {

    public function __construct()
    {
			parent::__construct();
			$this->load->database();
    }

    public function addFriend($params){
        $id=$params[0];
        $redirectto=$params[1];
		$query=$this->db->query(
			'select friend_id from Users 
			inner join Friends on Users.id=Friends.user_id
			where user_id=? && friend_id=?',array(currentUser()->id, $id));
		$canAdd=$id!=currentUser()->id && !(count($query->result())>0);
		if ($canAdd)
		{
			$this->db->query('insert into Friends values(?,?)',array(currentUser()->id,$id));
        }
        header('Location: '.site_url($redirectto),true,301);
    }
    
    public function RemoveFriend($params){
        $id=$params[0];
        $redirectto=$params[1];
        $query=$this->db->query(
			'select friend_id from Users 
			inner join Friends on Users.id=Friends.user_id
            where user_id=? && friend_id=?',array(currentUser()->id, $id));
        $canRemove=$id!=currentUser()->id && (count($query->result())>0);
        if ($canRemove)
        {
            $this->db->query('delete from Friends where user_id=? && friend_id=?',array(currentUser()->id,$id));
        }
        header('Location: '.site_url($redirectto),true,301);
    }
}
?>