<?php

class DownloadsModel extends CI_Model
{

	public $table = 'cv_downloads';
	public function __construct()
	{
		parent::__construct();
	}

	public function get(array $column){
		$this->db->select($column);
		return json_encode($this->db->get($this->table)->result_array());
	}

	public function insert($request)
	{
		$entries = json_decode($this->get(['email']), true);
		$visitors = [];
		foreach ($entries as $key => $value) {
			array_push($visitors, $value['email']);
		}

		if(in_array($request['email'], $visitors)){
			$this->update(['email' => $request['email']]);
		} else{
			if ($this->db->insert($this->table, $request)) {
				return true;
			} else {
				return json_encode(array('db_error' => 'insert failed'));
			}
		}
	}

	public function update(array $condition)
	{
		$this->db->set('download_count', 'download_count + 1', FALSE);
		$this->db->where($condition);
		if($this->db->update($this->table)){
			return true;
		} else {
			return false;
		}
	}
}
