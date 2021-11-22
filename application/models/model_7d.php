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
            'form7d_sanctionDate' => $this->input->post('form7d_sanctionDate'),
            'form7d_limitAmount' => $this->input->post('form7d_limitAmount'),
            'form7d_limitExpiry' => $this->input->post('form7d_limitExpiry'),
            'form7d_limitSantionAuthority' => $this->input->post('form7d_limitSantionAuthority'),
            'form7d_lcNumber' => $this->input->post('form7d_lcNumber'),
            'form7d_lcDate' => $this->input->post('form7d_lcDate'),
            'form7d_lcValueFc' => $this->input->post('form7d_lcValueFc'),
            'form7d_nameOfTransferingBr' => $this->input->post('form7d_nameOfTransferingBr'),
            'form7d_transferRefNo' => $this->input->post('form7d_transferRefNo'),
            'form7d_transferDate' => $this->input->post('form7d_transferDate'),
            'form7d_exportDocumentsSubmissionDate' => $this->input->post('form7d_exportDocumentsSubmissionDate'),
            'form7d_fdbpNumber' => $this->input->post('form7d_fdbpNumber'),
            'form7d_fdbpDate' => $this->input->post('form7d_fdbpDate'),
            'form7d_fdbpDocumentsValue' => $this->input->post('form7d_fdbpDocumentsValue'),
            'form7d_isDiscrepantFdbp' => $this->input->post('form7d_isDiscrepantFdbp'),
            'form7d_fdbpValue' => $this->input->post('form7d_fdbpValue'),
            'form7d_fdbpMaturityDate' => $this->input->post('form7d_fdbpMaturityDate'),
            'form7d_fdbpPresentingBank' => $this->input->post('form7d_fdbpPresentingBank'),
            'form7d_reasonForNonRepartition' => $this->input->post('form7d_reasonForNonRepartition'),
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
            'form7d_sanctionDate' => $this->input->post('form7d_sanctionDate'),
            'form7d_limitAmount' => $this->input->post('form7d_limitAmount'),
            'form7d_limitExpiry' => $this->input->post('form7d_limitExpiry'),
            'form7d_limitSantionAuthority' => $this->input->post('form7d_limitSantionAuthority'),
            'form7d_lcNumber' => $this->input->post('form7d_lcNumber'),
            'form7d_lcDate' => $this->input->post('form7d_lcDate'),
            'form7d_lcValueFc' => $this->input->post('form7d_lcValueFc'),
            'form7d_nameOfTransferingBr' => $this->input->post('form7d_nameOfTransferingBr'),
            'form7d_transferRefNo' => $this->input->post('form7d_transferRefNo'),
            'form7d_transferDate' => $this->input->post('form7d_transferDate'),
            'form7d_exportDocumentsSubmissionDate' => $this->input->post('form7d_exportDocumentsSubmissionDate'),
            'form7d_fdbpNumber' => $this->input->post('form7d_fdbpNumber'),
            'form7d_fdbpDate' => $this->input->post('form7d_fdbpDate'),
            'form7d_fdbpDocumentsValue' => $this->input->post('form7d_fdbpDocumentsValue'),
            'form7d_isDiscrepantFdbp' => $this->input->post('form7d_isDiscrepantFdbp'),
            'form7d_fdbpValue' => $this->input->post('form7d_fdbpValue'),
            'form7d_fdbpMaturityDate' => $this->input->post('form7d_fdbpMaturityDate'),
            'form7d_fdbpPresentingBank' => $this->input->post('form7d_fdbpPresentingBank'),
            'form7d_reasonForNonRepartition' => $this->input->post('form7d_reasonForNonRepartition'),
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
