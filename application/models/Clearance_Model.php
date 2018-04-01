<?php
    class Clearance_Model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }
        public function add_clearance($applicant, $origaddress, $birthdate, $curraddress, $reason)
        {
            $data = [
                'applicant_name' => $applicant,
                'orig_address' => $origaddress,
                'birth_date' => $birthdate,
                'curr_address' => $curraddress,
                'reason' => $reason,
            ];
            $this->db->insert('clearances', $data);
        }
    }
?>