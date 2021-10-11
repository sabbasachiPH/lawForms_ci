<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function table7a()
	{
		// Get Flash data on view 
		$this->session->flashdata('message_name');
		$data['data_7a'] = $this->Model_7a->get_all_entries();
		$this->load->view('7a/Table-7aDemandLoanCash', $data);
	}

	public function table7a_insert()
	{
		if (isset($_POST['submit7a'])) {
			$this->Model_7a->insert_entry();
			//echo "<pre>";
			//print_r($_POST);
			// die;
			//$this->db->insert('form7a', $data);
		} else {
			$this->load->view('7a/Form-7a_insert.php');
		}
	}

	public function table7b()
	{
		$this->load->view('Table-7bDemandLoanBBLC');
	}

	public function table7c()
	{
		$this->load->view('Table-7cFDBP');
	}

	public function table7d()
	{
		$this->load->view('Table-7dPackingCredit');
	}

	public function table7e()
	{
		$this->load->view('Table-7eLTR');
	}

	public function table7f()
	{
		$this->load->view('Table-7fLDBP');
	}
}
