<?php

class User_m extends CI_model{
	function gets(){}
	function get($id){
		return $this->db->get("user")->result();
	}
	public function add($data){
		$this->db->insert("user",$data);
	}
	function edit($id){}
	function del($id){}
}