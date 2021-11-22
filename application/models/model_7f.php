<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_7f extends CI_Model
{
    public function get_all_entries()
    {
        $query = $this->db->get('form7f');
        return $query->result_array();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where('form7f', array('form7f_id' => $id));
        $existingData = $query->result_array();
        return $existingData[0];
    }

    public function insert_entry()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $data = array(
            'form7f_natureOfCredit' => $this->input->post('form7f_natureOfCredit'),
            'form7f_sanctionDate' => $this->input->post('form7f_sanctionDate'),
            'form7f_sanctionAmount' => $this->input->post('form7f_sanctionAmount'),
            'form7f_expiryDate' => $this->input->post('form7f_expiryDate'),
            'form7f_sanctioningAuthority' => $this->input->post('form7f_sanctioningAuthority'),
            'form7f_bblcNo' => $this->input->post('form7f_bblcNo'),
            'form7f_bblcDate' => $this->input->post('form7f_bblcDate'),
            'form7f_bblcValueFc' => $this->input->post('form7f_bblcValueFc'),
            'form7f_bblcValueBdt' => $this->input->post('form7f_bblcValueBdt'),
            'form7f_issuingBank' => $this->input->post('form7f_issuingBank'),
            'form7f_isAuthenticated' => $this->input->post('form7f_isAuthenticated'),
            'form7f_importerName' => $this->input->post('form7f_importerName'),
            'form7f_doucumentSubmissionDate' => $this->input->post('form7f_doucumentSubmissionDate'),
            'form7f_doucumentValueFc' => $this->input->post('form7f_doucumentValueFc'),
            'form7f_doucumentValueBdt' => $this->input->post('form7f_doucumentValueBdt'),
            'form7f_isDiscrepant' => $this->input->post('form7f_isDiscrepant'),
            'form7f_dueDate' => $this->input->post('form7f_dueDate'),
            'form7f_ldbpNo' => $this->input->post('form7f_ldbpNo'),
            'form7f_ldbpDate' => $this->input->post('form7f_ldbpDate'),
            'form7f_ldbpValueBdt' => $this->input->post('form7f_ldbpValueBdt'),
            'form7f_amountAdjusted' => $this->input->post('form7f_amountAdjusted'),
            'form7f_presentOutstanding' => $this->input->post('form7f_presentOutstanding'),
            'form7f_classificationStatus' => $this->input->post('form7f_classificationStatus'),
            'form7f_classificationDate' => $this->input->post('form7f_classificationDate'),
            'form7f_litigableAmount' => $this->input->post('form7f_litigableAmount'),
            'form7f_remarks' => $this->input->post('form7f_remarks'),
        );
        // echo "<pre>";
        // print_r($data);
        // die;
        $this->db->insert('form7f', $data);
    }

    public function update_7f($id)
    {
        $data = array(
            'form7f_natureOfCredit' => $this->input->post('form7f_natureOfCredit'),
            'form7f_sanctionDate' => $this->input->post('form7f_sanctionDate'),
            'form7f_sanctionAmount' => $this->input->post('form7f_sanctionAmount'),
            'form7f_expiryDate' => $this->input->post('form7f_expiryDate'),
            'form7f_sanctioningAuthority' => $this->input->post('form7f_sanctioningAuthority'),
            'form7f_bblcNo' => $this->input->post('form7f_bblcNo'),
            'form7f_bblcDate' => $this->input->post('form7f_bblcDate'),
            'form7f_bblcValueFc' => $this->input->post('form7f_bblcValueFc'),
            'form7f_bblcValueBdt' => $this->input->post('form7f_bblcValueBdt'),
            'form7f_issuingBank' => $this->input->post('form7f_issuingBank'),
            'form7f_isAuthenticated' => $this->input->post('form7f_isAuthenticated'),
            'form7f_importerName' => $this->input->post('form7f_importerName'),
            'form7f_doucumentSubmissionDate' => $this->input->post('form7f_doucumentSubmissionDate'),
            'form7f_doucumentValueFc' => $this->input->post('form7f_doucumentValueFc'),
            'form7f_doucumentValueBdt' => $this->input->post('form7f_doucumentValueBdt'),
            'form7f_isDiscrepant' => $this->input->post('form7f_isDiscrepant'),
            'form7f_dueDate' => $this->input->post('form7f_dueDate'),
            'form7f_ldbpNo' => $this->input->post('form7f_ldbpNo'),
            'form7f_ldbpDate' => $this->input->post('form7f_ldbpDate'),
            'form7f_ldbpValueBdt' => $this->input->post('form7f_ldbpValueBdt'),
            'form7f_amountAdjusted' => $this->input->post('form7f_amountAdjusted'),
            'form7f_presentOutstanding' => $this->input->post('form7f_presentOutstanding'),
            'form7f_classificationStatus' => $this->input->post('form7f_classificationStatus'),
            'form7f_classificationDate' => $this->input->post('form7f_classificationDate'),
            'form7f_litigableAmount' => $this->input->post('form7f_litigableAmount'),
            'form7f_remarks' => $this->input->post('form7f_remarks'),
        );
        $this->db->where('form7f_id', $id);
        // echo "<pre>";
        // print_r($data);
        // die;
        $sql = $this->db->update('form7f', $data);
    }

    public function delete_7f($id)
    {
        $this->db->delete('form7f', array('form7f_id' => $id));
    }
}
