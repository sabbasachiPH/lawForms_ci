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
			$this->session->set_flashdata('message_name', 'This is my message-Data Inserted Successfully Table 7.b');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7b", 'refresh');
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
		$data['data_7b'] = $this->Model_7b->get_all_entries();
		$this->load->view('7b/Table-7bDemandLoanBBLC', $data);
	}

	public function table7b_insert()
	{
		if (isset($_POST['submit7b'])) {
			$this->Model_7b->insert_entry();
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Inserted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7b", 'refresh');
		} else {
			$this->load->view('7b/Form-7b_insert.php');
		}
	}

	public function table7b_update($id)
	{
		if (isset($_POST['update7b'])) {
			$this->Model_7b->update_7b($id);
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Updated Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7b", 'refresh');
		} else {
			$data['existingData'] = $this->Model_7b->get_data_by_id($id);
			$this->load->view('7b/Form-7b_update.php', $data);
		}
	}

	public function table7b_delete($id)
	{
		if ($id) {
			$this->Model_7b->delete_7b($id);
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Deleted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7b", 'refresh');
		} else {
			echo '<div class="alert alert-warning">Data Id not found</div>';
		}
	}

	public function table7c()
	{
		$data['data_7c'] = $this->Model_7c->get_all_entries();
		$this->load->view('7c/Table-7cFDBP', $data);
	}

	public function table7c_insert()
	{
		if (isset($_POST['submit7c'])) {
			$this->Model_7c->insert_entry();
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Inserted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7c", 'refresh');
		} else {
			$this->load->view('7c/Form-7c_insert.php');
		}
	}

	public function table7c_update($id)
	{
		if (isset($_POST['update7c'])) {
			$this->Model_7c->update_7c($id);
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Updated Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7c", 'refresh');
		} else {
			$data['existingData'] = $this->Model_7c->get_data_by_id($id);
			$this->load->view('7c/Form-7c_update.php', $data);
		}
	}

	public function table7c_delete($id)
	{
		if ($id) {
			$this->Model_7c->delete_7c($id);
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Deleted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7c", 'refresh');
		} else {
			echo '<div class="alert alert-warning">Data Id not found</div>';
		}
	}
	// TABLE 7D START ------------------------

	public function table7d()
	{
		$data['data_7d'] = $this->Model_7d->get_all_entries();
		$this->load->view('7d/Table-7dPackingCredit', $data);
	}

	public function table7d_insert()
	{
		if (isset($_POST['submit7d'])) {
			$this->Model_7d->insert_entry();
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Inserted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7d", 'refresh');
		} else {
			$this->load->view('7d/Form-7d_insert.php');
		}
	}

	public function table7d_update($id)
	{
		if (isset($_POST['update7d'])) {
			$this->Model_7d->update_7d($id);
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Updated Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7d", 'refresh');
		} else {
			$data['existingData'] = $this->Model_7d->get_data_by_id($id);
			$this->load->view('7d/Form-7d_update.php', $data);
		}
	}

	public function table7d_delete($id)
	{
		if ($id) {
			$this->Model_7d->delete_7d($id);
			// Set flash data 
			$this->session->set_flashdata('message_name', 'This is my message-Data Deleted Successfully');
			// After that you need to used redirect function instead of load view such as 
			redirect("welcome/table7d", 'refresh');
		} else {
			echo '<div class="alert alert-warning">Data Id not found</div>';
		}
	}
	/*
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
	}*/
}
