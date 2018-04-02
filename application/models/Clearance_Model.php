<?php
    class Clearance_Model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_clearance($id = FALSE)
        {
            if($id == FALSE)
            {
                $this->db->order_by('created_at','desc');
                $query = $this->db->get('clearances');
                return $query->result_array();
            }
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