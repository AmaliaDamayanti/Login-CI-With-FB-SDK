<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Welcome_model extends CI_Model{

		public function __construct() {
		$this->tableName = 'users';
		$this->primaryKey = 'id';
	}

		public function simpan($data)
			{	// query binding ditandai dengan "?" untuk security
				$this->db->insert($this->tableName,$data);
				return TRUE;
			}
		


	}
?>