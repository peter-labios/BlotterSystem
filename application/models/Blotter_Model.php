<?php
    class Blotter_Model extends CI_Model
    {
        public function __contruct()
        {
            $this->load->database();
        }

        public function get_blotters($id = FALSE)
        {
            if($id == FALSE)
            {
                $this->db->order_by('created_at','desc');
                $query = $this->db->get('blotters');
                return $query->result_array();
            }

            $query = $this->db->get_where('blotters', array('id'=>$id));
            return $query->row_array();
        }

        public function delete_blotter($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('blotters');
        }

        public function add_blotter($complainant, $defendant, $blotter_case, $details, $recording_officer)
        {
            $data = [
                'complainant' => $complainant,
                'defendant' => $defendant,
                'blotter_case' => $blotter_case,
                'details' => $details,
                'recording_officer' => $recording_officer,
                'status' => 'UNRESOLVED',
            ];
            $this->db->insert('blotters', $data);
        }

        public function edit_blotter($id, $complainant, $defendant, $blotter_case, $details, $status)
        {
            $data = [
                'complainant' => $complainant,
                'defendant' => $defendant,
                'blotter_case' => $blotter_case,
                'details' => $details,
                'status' => $status,
            ];
            $this->db->where('id', $id);
            $this->db->update('blotters', $data);
        }
    }
?>