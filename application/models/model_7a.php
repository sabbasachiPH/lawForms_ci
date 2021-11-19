<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_7a extends CI_Model
{
    public function get_all_entries()
    {
        $query = $this->db->get('form7a');
        return $query->result_array();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where('form7a', array('form7a_id' => $id));
        $existingData = $query->result_array();
        return $existingData[0];
    }

    public function insert_entry()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $data = array(
            'form7a_natureOfCredit' => $this->input->post('form7a_natureOfCredit'),
            'form7a_notionalLimitSanctionDate' => $this->input->post('form7a_notionalLimitSanctionDate'),
            'form7a_notionalLimitAmount' => $this->input->post('form7a_notionalLimitAmount'),
            'form7a_notionalLimitExpiry' => $this->input->post('form7a_notionalLimitExpiry'),
            'form7a_sanctioningAuthority' => $this->input->post('form7a_sanctioningAuthority'),
            'form7a_lcNo' => $this->input->post('form7a_lcNo'),
            'form7a_lcDate' => $this->input->post('form7a_lcDate'),
            'form7a_lcTenor' => $this->input->post('form7a_lcTenor'),
            'form7a_lcValueFc' => $this->input->post('form7a_lcValueFc'),
            'form7a_lcValueBdt' => $this->input->post('form7a_lcValueBdt'),
            'form7a_lcMarginPercentage' => $this->input->post('form7a_lcMarginPercentage'),
            'form7a_dateDocumentReceivedInBranch' => $this->input->post('form7a_dateDocumentReceivedInBranch'),
            'form7a_documentValue' => $this->input->post('form7a_documentValue'),
            'form7a_lodgementDate' => $this->input->post('form7a_lodgementDate'),
            'form7a_dateDiscrepencyNotice' => $this->input->post('form7a_dateDiscrepencyNotice'),
            'form7a_dueDate' => $this->input->post('form7a_dueDate'),
            'form7a_acceptancePaymentDate' => $this->input->post('form7a_acceptancePaymentDate'),
            'form7a_padCreatoionDate' => $this->input->post('form7a_padCreatoionDate'),
            'form7a_padAmount' => $this->input->post('form7a_padAmount'),
            'form7a_sourceOfAdjustment' => $this->input->post('form7a_sourceOfAdjustment'),
            'form7a_billEntryMatchingDate' => $this->input->post('form7a_billEntryMatchingDate'),
            'form7a_amountSinceeAdjusted' => $this->input->post('form7a_amountSinceeAdjusted'),
            'form7a_presentOutstanding' => $this->input->post('form7a_presentOutstanding'),
            'form7a_forcedLoanCreationDate' => $this->input->post('form7a_forcedLoanCreationDate'),
            'form7a_forcedLoanCreationReason' => $this->input->post('form7a_forcedLoanCreationReason'),
            'form7a_classificationStatus' => $this->input->post('form7a_classificationStatus'),
            'form7a_classificationDate' => $this->input->post('form7a_classificationDate'),
            'form7a_litigableAmount' => $this->input->post('form7a_litigableAmount'),
            'form7a_remarks' => $this->input->post('form7a_remarks')
        );
        $this->db->insert('form7a', $data);
    }

    public function update_7a($id)
    {
        $data = array(
            'form7a_natureOfCredit' => $this->input->post('form7a_natureOfCredit'),
            'form7a_notionalLimitSanctionDate' => $this->input->post('form7a_notionalLimitSanctionDate'),
            'form7a_notionalLimitAmount' => $this->input->post('form7a_notionalLimitAmount'),
            'form7a_notionalLimitExpiry' => $this->input->post('form7a_notionalLimitExpiry'),
            'form7a_sanctioningAuthority' => $this->input->post('form7a_sanctioningAuthority'),
            'form7a_lcNo' => $this->input->post('form7a_lcNo'),
            'form7a_lcDate' => $this->input->post('form7a_lcDate'),
            'form7a_lcTenor' => $this->input->post('form7a_lcTenor'),
            'form7a_lcValueFc' => $this->input->post('form7a_lcValueFc'),
            'form7a_lcValueBdt' => $this->input->post('form7a_lcValueBdt'),
            'form7a_lcMarginPercentage' => $this->input->post('form7a_lcMarginPercentage'),
            'form7a_dateDocumentReceivedInBranch' => $this->input->post('form7a_dateDocumentReceivedInBranch'),
            'form7a_documentValue' => $this->input->post('form7a_documentValue'),
            'form7a_lodgementDate' => $this->input->post('form7a_lodgementDate'),
            'form7a_dateDiscrepencyNotice' => $this->input->post('form7a_dateDiscrepencyNotice'),
            'form7a_dueDate' => $this->input->post('form7a_dueDate'),
            'form7a_acceptancePaymentDate' => $this->input->post('form7a_acceptancePaymentDate'),
            'form7a_padCreatoionDate' => $this->input->post('form7a_padCreatoionDate'),
            'form7a_padAmount' => $this->input->post('form7a_padAmount'),
            'form7a_sourceOfAdjustment' => $this->input->post('form7a_sourceOfAdjustment'),
            'form7a_billEntryMatchingDate' => $this->input->post('form7a_billEntryMatchingDate'),
            'form7a_amountSinceeAdjusted' => $this->input->post('form7a_amountSinceeAdjusted'),
            'form7a_presentOutstanding' => $this->input->post('form7a_presentOutstanding'),
            'form7a_forcedLoanCreationDate' => $this->input->post('form7a_forcedLoanCreationDate'),
            'form7a_forcedLoanCreationReason' => $this->input->post('form7a_forcedLoanCreationReason'),
            'form7a_classificationStatus' => $this->input->post('form7a_classificationStatus'),
            'form7a_classificationDate' => $this->input->post('form7a_classificationDate'),
            'form7a_litigableAmount' => $this->input->post('form7a_litigableAmount'),
            'form7a_remarks' => $this->input->post('form7a_remarks')
        );
        $this->db->where('form7a_id', $id);
        // echo "<pre>";
        // print_r($data);
        // die;
        $sql = $this->db->update('form7a', $data);
    }

    public function delete_7a($id)
    {
        $this->db->delete('form7a', array('form7a_id' => $id));
    }
}
