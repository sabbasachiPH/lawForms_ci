<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_7d extends CI_Model
{
    public function get_all_entries()
    {
        $query = $this->db->get('form7d');
        return $query->result_array();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where('form7d', array('form7d_id' => $id));
        $existingData = $query->result_array();
        return $existingData[0];
    }

    public function insert_entry()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $data = array(
            'form7d_natureOfCredit' => $this->input->post('form7d_natureOfCredit'),
            'form7d_lcOrEcNo' => $this->input->post('form7d_lcOrEcNo'),
            'form7d_lcOrEcDate' => $this->input->post('form7d_lcOrEcDate'),
            'form7d_lcOrEcValueFc' => $this->input->post('form7d_lcOrEcValueFc'),
            'form7d_totalExportLcOrEc' => $this->input->post('form7d_totalExportLcOrEc'),
            'form7d_pcNo' => $this->input->post('form7d_pcNo'),
            'form7d_pcDate' => $this->input->post('form7d_pcDate'),
            'form7d_pcValue' => $this->input->post('form7d_pcValue'),
            'form7d_pcExpiry' => $this->input->post('form7d_pcExpiry'),
            'form7d_amountSinceeAdjusted' => $this->input->post('form7d_amountSinceeAdjusted'),
            'form7d_presentOutstanding' => $this->input->post('form7d_presentOutstanding'),
            'form7d_classificationStatus' => $this->input->post('form7d_classificationStatus'),
            'form7d_classificationDate' => $this->input->post('form7d_classificationDate'),
            'form7d_litigableAmount' => $this->input->post('form7d_litigableAmount'),
            'form7d_remarks' => $this->input->post('form7d_remarks')
        );
        // echo "<pre>";
        // print_r($data);
        // die;
        $this->db->insert('form7d', $data);
    }

    public function update_7d($id)
    {
        $data = array(
            'form7d_natureOfCredit' => $this->input->post('form7d_natureOfCredit'),
            'form7d_lcOrEcNo' => $this->input->post('form7d_lcOrEcNo'),
            'form7d_lcOrEcDate' => $this->input->post('form7d_lcOrEcDate'),
            'form7d_lcOrEcValueFc' => $this->input->post('form7d_lcOrEcValueFc'),
            'form7d_totalExportLcOrEc' => $this->input->post('form7d_totalExportLcOrEc'),
            'form7d_pcNo' => $this->input->post('form7d_pcNo'),
            'form7d_pcDate' => $this->input->post('form7d_pcDate'),
            'form7d_pcValue' => $this->input->post('form7d_pcValue'),
            'form7d_pcExpiry' => $this->input->post('form7d_pcExpiry'),
            'form7d_amountSinceeAdjusted' => $this->input->post('form7d_amountSinceeAdjusted'),
            'form7d_presentOutstanding' => $this->input->post('form7d_presentOutstanding'),
            'form7d_classificationStatus' => $this->input->post('form7d_classificationStatus'),
            'form7d_classificationDate' => $this->input->post('form7d_classificationDate'),
            'form7d_litigableAmount' => $this->input->post('form7d_litigableAmount'),
            'form7d_remarks' => $this->input->post('form7d_remarks')
        );
        $this->db->where('form7d_id', $id);
        // echo "<pre>";
        // print_r($data);
        // die;
        $sql = $this->db->update('form7d', $data);
    }

    public function delete_7d($id)
    {
        $this->db->delete('form7d', array('form7d_id' => $id));
    }
}
