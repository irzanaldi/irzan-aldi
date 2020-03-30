<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');
	}

	public function index()
	{
		// 3 artikel terbaru
		$data['artikel'] = $this->db->query("SELECT * FROM artikel,user WHERE artikel_author=name order by id desc")->result();

		$this->load->view('frontend/index', $data);
	}
}
