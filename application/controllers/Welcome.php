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
		$data['data_7a'] = $this->Model_7a->get_all_entries();
		$this->load->view('7a/Table-7aDemandLoanCash', $data);
	}

	public function table7a_insert()
	{
		if (isset($_POST['submit7a'])) {
			$this->Model_7a->insert_entry();

			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Inserted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7a", 'refresh');
		} else {
			$this->load->view('7a/Form-7a_insert.php');
		}
	}

	public function table7a_update($id)
	{
		if (isset($_POST['update7a'])) {
			$this->Model_7a->update_7a($id);

			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Updated Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7a", 'refresh');
		} else {
			$data['existingData'] = $this->Model_7a->get_data_by_id($id);
			$this->load->view('7a/Form-7a_update.php', $data);
		}
	}

	public function table7a_delete($id)
	{
		if ($id) {
			$this->Model_7a->delete_7a($id);
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Deleted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7a", 'refresh');
		} else {
			echo '<div class="alert alert-warning">Data Id not found</div>';
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
