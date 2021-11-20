<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_7c extends CI_Model
{
    public function get_all_entries()
    {
        $query = $this->db->get('form7c');
        return $query->result_array();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where('form7c', array('form7c_id' => $id));
        $existingData = $query->result_array();
        return $existingData[0];
    }

    public function insert_entry()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $data = array(
            'form7c_natureOfCredit' => $this->input->post('form7c_natureOfCredit'),
            'form7c_sanctionDate' => $this->input->post('form7c_sanctionDate'),
            'form7c_limitAmount' => $this->input->post('form7c_limitAmount'),
            'form7c_limitExpiry' => $this->input->post('form7c_limitExpiry'),
            'form7c_limitSantionAuthority' => $this->input->post('form7c_limitSantionAuthority'),
            'form7c_lcNumber' => $this->input->post('form7c_lcNumber'),
            'form7c_lcDate' => $this->input->post('form7c_lcDate'),
            'form7c_lcValueFc' => $this->input->post('form7c_lcValueFc'),
            'form7c_nameOfTransferingBr' => $this->input->post('form7c_nameOfTransferingBr'),
            'form7c_transferRefNo' => $this->input->post('form7c_transferRefNo'),
            'form7c_transferDate' => $this->input->post('form7c_transferDate'),
            'form7c_exportDocumentsSubmissionDate' => $this->input->post('form7c_exportDocumentsSubmissionDate'),
            'form7c_fdbpNumber' => $this->input->post('form7c_fdbpNumber'),
            'form7c_fdbpDate' => $this->input->post('form7c_fdbpDate'),
            'form7c_fdbpDocumentsValue' => $this->input->post('form7c_fdbpDocumentsValue'),
            'form7c_isDiscrepantFdbp' => $this->input->post('form7c_isDiscrepantFdbp'),
            'form7c_fdbpValue' => $this->input->post('form7c_fdbpValue'),
            'form7c_fdbpMaturityDate' => $this->input->post('form7c_fdbpMaturityDate'),
            'form7c_fdbpPresentingBank' => $this->input->post('form7c_fdbpPresentingBank'),
            'form7c_reasonForNonRepartition' => $this->input->post('form7c_reasonForNonRepartition'),
            'form7c_amountSinceeAdjusted' => $this->input->post('form7c_amountSinceeAdjusted'),
            'form7c_presentOutstanding' => $this->input->post('form7c_presentOutstanding'),
            'form7c_classificationStatus' => $this->input->post('form7c_classificationStatus'),
            'form7c_classificationDate' => $this->input->post('form7c_classificationDate'),
            'form7c_litigableAmount' => $this->input->post('form7c_litigableAmount'),
            'form7c_remarks' => $this->input->post('form7c_remarks')
        );
        // echo "<pre>";
        // print_r($data);
        // die;
        $this->db->insert('form7c', $data);
    }

    public function update_7c($id)
    {
        $data = array(
            'form7c_natureOfCredit' => $this->input->post('form7c_natureOfCredit'),
            'form7c_sanctionDate' => $this->input->post('form7c_sanctionDate'),
            'form7c_limitAmount' => $this->input->post('form7c_limitAmount'),
            'form7c_limitExpiry' => $this->input->post('form7c_limitExpiry'),
            'form7c_limitSantionAuthority' => $this->input->post('form7c_limitSantionAuthority'),
            'form7c_lcNumber' => $this->input->post('form7c_lcNumber'),
            'form7c_lcDate' => $this->input->post('form7c_lcDate'),
            'form7c_lcValueFc' => $this->input->post('form7c_lcValueFc'),
            'form7c_nameOfTransferingBr' => $this->input->post('form7c_nameOfTransferingBr'),
            'form7c_transferRefNo' => $this->input->post('form7c_transferRefNo'),
            'form7c_transferDate' => $this->input->post('form7c_transferDate'),
            'form7c_exportDocumentsSubmissionDate' => $this->input->post('form7c_exportDocumentsSubmissionDate'),
            'form7c_fdbpNumber' => $this->input->post('form7c_fdbpNumber'),
            'form7c_fdbpDate' => $this->input->post('form7c_fdbpDate'),
            'form7c_fdbpDocumentsValue' => $this->input->post('form7c_fdbpDocumentsValue'),
            'form7c_isDiscrepantFdbp' => $this->input->post('form7c_isDiscrepantFdbp'),
            'form7c_fdbpValue' => $this->input->post('form7c_fdbpValue'),
            'form7c_fdbpMaturityDate' => $this->input->post('form7c_fdbpMaturityDate'),
            'form7c_fdbpPresentingBank' => $this->input->post('form7c_fdbpPresentingBank'),
            'form7c_reasonForNonRepartition' => $this->input->post('form7c_reasonForNonRepartition'),
            'form7c_amountSinceeAdjusted' => $this->input->post('form7c_amountSinceeAdjusted'),
            'form7c_presentOutstanding' => $this->input->post('form7c_presentOutstanding'),
            'form7c_classificationStatus' => $this->input->post('form7c_classificationStatus'),
            'form7c_classificationDate' => $this->input->post('form7c_classificationDate'),
            'form7c_litigableAmount' => $this->input->post('form7c_litigableAmount'),
            'form7c_remarks' => $this->input->post('form7c_remarks')
        );
        $this->db->where('form7c_id', $id);
        // echo "<pre>";
        // print_r($data);
        // die;
        $sql = $this->db->update('form7c', $data);
    }

    public function delete_7c($id)
    {
        $this->db->delete('form7c', array('form7c_id' => $id));
    }
}
