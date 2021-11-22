<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_7e extends CI_Model
{
    public function get_all_entries()
    {
        $query = $this->db->get('form7e');
        return $query->result_array();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where('form7e', array('form7e_id' => $id));
        $existingData = $query->result_array();
        return $existingData[0];
    }

    public function insert_entry()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $data = array(
            'form7e_natureOfCredit' => $this->input->post('form7e_natureOfCredit'),
            'form7e_sanctionDate' => $this->input->post('form7e_sanctionDate'),
            'form7e_sanctionAmountFc' => $this->input->post('form7e_sanctionAmountFc'),
            'form7e_sanctionAmountBdt' => $this->input->post('form7e_sanctionAmountBdt'),
            'form7e_fundBuildupPercentage' => $this->input->post('form7e_fundBuildupPercentage'),
            'form7e_sanctioningAuthority' => $this->input->post('form7e_sanctioningAuthority'),
            'form7e_importLcNo' => $this->input->post('form7e_importLcNo'),
            'form7e_importLcDate' => $this->input->post('form7e_importLcDate'),
            'form7e_importLcValueFc' => $this->input->post('form7e_importLcValueFc'),
            'form7e_importLcValueBdt' => $this->input->post('form7e_importLcValueBdt'),
            'form7e_documentRecdiveDate' => $this->input->post('form7e_documentRecdiveDate'),
            'form7e_documentValue' => $this->input->post('form7e_documentValue'),
            'form7e_LtrCreationDate' => $this->input->post('form7e_LtrCreationDate'),
            'form7e_LtrCreationValue' => $this->input->post('form7e_LtrCreationValue'),
            'form7e_amountAdjusted' => $this->input->post('form7e_amountAdjusted'),
            'form7e_presentOutstanding' => $this->input->post('form7e_presentOutstanding'),
            'form7e_classificationStatus' => $this->input->post('form7e_classificationStatus'),
            'form7e_classificationDate' => $this->input->post('form7e_classificationDate'),
            'form7e_litigableAmount' => $this->input->post('form7e_litigableAmount'),
            'form7e_remarks' => $this->input->post('form7e_remarks')
        );
        // echo "<pre>";
        // print_r($data);
        // die;
        $this->db->insert('form7e', $data);
    }

    public function update_7e($id)
    {
        $data = array(
            'form7e_natureOfCredit' => $this->input->post('form7e_natureOfCredit'),
            'form7e_sanctionDate' => $this->input->post('form7e_sanctionDate'),
            'form7e_sanctionAmountFc' => $this->input->post('form7e_sanctionAmountFc'),
            'form7e_sanctionAmountBdt' => $this->input->post('form7e_sanctionAmountBdt'),
            'form7e_fundBuildupPercentage' => $this->input->post('form7e_fundBuildupPercentage'),
            'form7e_sanctioningAuthority' => $this->input->post('form7e_sanctioningAuthority'),
            'form7e_importLcNo' => $this->input->post('form7e_importLcNo'),
            'form7e_importLcDate' => $this->input->post('form7e_importLcDate'),
            'form7e_importLcValueFc' => $this->input->post('form7e_importLcValueFc'),
            'form7e_importLcValueBdt' => $this->input->post('form7e_importLcValueBdt'),
            'form7e_documentRecdiveDate' => $this->input->post('form7e_documentRecdiveDate'),
            'form7e_documentValue' => $this->input->post('form7e_documentValue'),
            'form7e_LtrCreationDate' => $this->input->post('form7e_LtrCreationDate'),
            'form7e_LtrCreationValue' => $this->input->post('form7e_LtrCreationValue'),
            'form7e_amountAdjusted' => $this->input->post('form7e_amountAdjusted'),
            'form7e_presentOutstanding' => $this->input->post('form7e_presentOutstanding'),
            'form7e_classificationStatus' => $this->input->post('form7e_classificationStatus'),
            'form7e_classificationDate' => $this->input->post('form7e_classificationDate'),
            'form7e_litigableAmount' => $this->input->post('form7e_litigableAmount'),
            'form7e_remarks' => $this->input->post('form7e_remarks')
        );
        $this->db->where('form7e_id', $id);
        // echo "<pre>";
        // print_r($data);
        // die;
        $sql = $this->db->update('form7e', $data);
    }

    public function delete_7e($id)
    {
        $this->db->delete('form7e', array('form7e_id' => $id));
    }
}
