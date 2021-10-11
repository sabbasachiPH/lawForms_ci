<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_7a extends CI_Model
{
    public function get_all_entries()
    {
        $query = $this->db->get('form7a');
        return $query->result_array();
    }

    public function insert_entry()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $data['form7a_natureOfCredit'] = $_POST['form7a_natureOfCredit'];
        $data['form7a_notionalLimitSanctionDate'] = $_POST['form7a_notionalLimitSanctionDate'];
        $data['form7a_notionalLimitAmount'] = $_POST['form7a_notionalLimitAmount'];
        $data['form7a_notionalLimitExpiry'] = $_POST['form7a_notionalLimitExpiry'];
        $data['form7a_sanctioningAuthority'] = $_POST['form7a_sanctioningAuthority'];
        $data['form7a_lcNo'] = $_POST['form7a_lcNo'];
        $data['form7a_lcDate'] = $_POST['form7a_lcDate'];
        $data['form7a_lcTenor'] = $_POST['form7a_lcTenor'];
        $data['form7a_lcValueFc'] = $_POST['form7a_lcValueFc'];
        $data['form7a_lcValueBdt'] = $_POST['form7a_lcValueBdt'];
        $data['form7a_lcMarginPercentage'] = $_POST['form7a_lcMarginPercentage'];
        $data['form7a_dateDocumentReceivedInBranch'] = $_POST['form7a_dateDocumentReceivedInBranch'];
        $data['form7a_documentValue'] = $_POST['form7a_documentValue'];
        $data['form7a_lodgementDate'] = $_POST['form7a_lodgementDate'];
        $data['form7a_dateDiscrepencyNotice'] = $_POST['form7a_dateDiscrepencyNotice'];
        $data['form7a_dueDate'] = $_POST['form7a_dueDate'];
        $data['form7a_acceptancePaymentDate'] = $_POST['form7a_acceptancePaymentDate'];
        $data['form7a_padCreatoionDate'] = $_POST['form7a_padCreatoionDate'];
        $data['form7a_padAmount'] = $_POST['form7a_padAmount'];
        $data['form7a_sourceOfAdjustment'] = $_POST['form7a_sourceOfAdjustment'];
        $data['form7a_billEntryMatchingDate'] = $_POST['form7a_billEntryMatchingDate'];
        $data['form7a_amountSinceeAdjusted'] = $_POST['form7a_amountSinceeAdjusted'];
        $data['form7a_presentOutstanding'] = $_POST['form7a_presentOutstanding'];
        $data['form7a_forcedLoanCreationDate'] = $_POST['form7a_forcedLoanCreationDate'];
        $data['form7a_forcedLoanCreationReason'] = $_POST['form7a_forcedLoanCreationReason'];
        $data['form7a_classificationStatus'] = $_POST['form7a_classificationStatus'];
        $data['form7a_litigableAmount'] = $_POST['form7a_litigableAmount'];
        $data['form7a_remarks'] = $_POST['form7a_remarks'];

        $this->db->insert('form7a', $data);
        // Set flash data 
        $this->session->set_flashdata('message_name', 'This is my message-Data Inserted Successfully');
        // After that you need to used redirect function instead of load view such as 
        redirect("welcome/table7a");
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    public function delete_entry()
    {

        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}
