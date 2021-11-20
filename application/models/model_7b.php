<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_7b extends CI_Model
{
    public function get_all_entries()
    {
        $query = $this->db->get('form7b');
        return $query->result_array();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where('form7b', array('form7b_id' => $id));
        $existingData = $query->result_array();
        return $existingData[0];
    }

    public function insert_entry()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $data = array(
            'form7b_natureOfCredit' => $this->input->post('form7b_natureOfCredit'),
            'form7b_notionalLimitSanctionDate' => $this->input->post('form7b_notionalLimitSanctionDate'),
            'form7b_notionalLimitAmount' => $this->input->post('form7b_notionalLimitAmount'),
            'form7b_notionalLimitExpiry' => $this->input->post('form7b_notionalLimitExpiry'),
            'form7b_sanctioningAuthority' => $this->input->post('form7b_sanctioningAuthority'),
            'form7b_lcNumber' => $this->input->post('form7b_lcNumber'),
            'form7b_lcDate' => $this->input->post('form7b_lcDate'),
            'form7b_lcValueFc' => $this->input->post('form7b_lcValueFc'),
            'form7b_dateOfObtainingBuyersCreditReport' => $this->input->post('form7b_dateOfObtainingBuyersCreditReport'),
            'form7b_bblcNumber' => $this->input->post('form7b_bblcNumber'),
            'form7b_bblcDate' => $this->input->post('form7b_bblcDate'),
            'form7b_bblcValueFc' => $this->input->post('form7b_bblcValueFc'),
            'form7b_bblcValueBdt' => $this->input->post('form7b_bblcValueBdt'),
            'form7b_bblcDocumentDate' => $this->input->post('form7b_bblcDocumentDate'),
            'form7b_bblcDocumentValue' => $this->input->post('form7b_bblcDocumentValue'),
            'form7b_bblcDiscrepant' => $this->input->post('form7b_bblcDiscrepant'),
            'form7b_totalExportAgainstLc' => $this->input->post('form7b_totalExportAgainstLc'),
            'form7b_dateOfDemandLoanBackToBack' => $this->input->post('form7b_dateOfDemandLoanBackToBack'),
            'form7b_amountOfDemandLoanBackToBack' => $this->input->post('form7b_amountOfDemandLoanBackToBack'),
            'form7b_amountSinceeAdjusted' => $this->input->post('form7b_amountSinceeAdjusted'),
            'form7b_presentOutstanding' => $this->input->post('form7b_presentOutstanding'),
            'form7b_classificationStatus' => $this->input->post('form7b_classificationStatus'),
            'form7b_classificationDate' => $this->input->post('form7b_classificationDate'),
            'form7b_litigableAmount' => $this->input->post('form7b_litigableAmount'),
            'form7b_remarks' => $this->input->post('form7b_remarks'),
        );
        // echo "<pre>";
        // print_r($data);
        // die;
        $this->db->insert('form7b', $data);
    }

    public function update_7b($id)
    {
        $data = array(
            'form7b_natureOfCredit' => $this->input->post('form7b_natureOfCredit'),
            'form7b_notionalLimitSanctionDate' => $this->input->post('form7b_notionalLimitSanctionDate'),
            'form7b_notionalLimitAmount' => $this->input->post('form7b_notionalLimitAmount'),
            'form7b_notionalLimitExpiry' => $this->input->post('form7b_notionalLimitExpiry'),
            'form7b_sanctioningAuthority' => $this->input->post('form7b_sanctioningAuthority'),
            'form7b_lcNumber' => $this->input->post('form7b_lcNumber'),
            'form7b_lcDate' => $this->input->post('form7b_lcDate'),
            'form7b_lcValueFc' => $this->input->post('form7b_lcValueFc'),
            'form7b_dateOfObtainingBuyersCreditReport' => $this->input->post('form7b_dateOfObtainingBuyersCreditReport'),
            'form7b_bblcNumber' => $this->input->post('form7b_bblcNumber'),
            'form7b_bblcDate' => $this->input->post('form7b_bblcDate'),
            'form7b_bblcValueFc' => $this->input->post('form7b_bblcValueFc'),
            'form7b_bblcValueBdt' => $this->input->post('form7b_bblcValueBdt'),
            'form7b_bblcDocumentDate' => $this->input->post('form7b_bblcDocumentDate'),
            'form7b_bblcDocumentValue' => $this->input->post('form7b_bblcDocumentValue'),
            'form7b_bblcDiscrepant' => $this->input->post('form7b_bblcDiscrepant'),
            'form7b_totalExportAgainstLc' => $this->input->post('form7b_totalExportAgainstLc'),
            'form7b_dateOfDemandLoanBackToBack' => $this->input->post('form7b_dateOfDemandLoanBackToBack'),
            'form7b_amountOfDemandLoanBackToBack' => $this->input->post('form7b_amountOfDemandLoanBackToBack'),
            'form7b_amountSinceeAdjusted' => $this->input->post('form7b_amountSinceeAdjusted'),
            'form7b_presentOutstanding' => $this->input->post('form7b_presentOutstanding'),
            'form7b_classificationStatus' => $this->input->post('form7b_classificationStatus'),
            'form7b_classificationDate' => $this->input->post('form7b_classificationDate'),
            'form7b_litigableAmount' => $this->input->post('form7b_litigableAmount'),
            'form7b_remarks' => $this->input->post('form7b_remarks'),
        );
        $this->db->where('form7b_id', $id);
        // echo "<pre>";
        // print_r($data);
        // die;
        $sql = $this->db->update('form7b', $data);
    }

    public function delete_7b($id)
    {
        $this->db->delete('form7b', array('form7b_id' => $id));
    }
}
