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
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
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
