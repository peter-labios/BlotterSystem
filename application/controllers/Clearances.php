<?php
    class Clearances extends CI_Controller
    {
        public function addClearance()
        {
            $this->form_validation->set_rules('applicantNameTxt', 'Applicant Name', 'required');
            $this->form_validation->set_rules('origAddressTxt', 'Original Address', 'required');
            $this->form_validation->set_rules('birthDatePicker', 'Birth Date', 'required');
            $this->form_validation->set_rules('currAddressTxt', 'Current Address', 'required');
            $this->form_validation->set_rules('reasonTxt', 'Reason', 'required');

            if($this->form_validation->run())
            {
                $applicant = $this->input->post('applicantNameTxt');
                $origaddress = $this->input->post('origAddressTxt');
                $birthdate = $this->input->post('birthDatePicker');
                $curraddress = $this->input->post('currAddressTxt');
                $reason = $this->input->post('reasonTxt');

                $this->clearance_model->add_clearance($applicant, $origaddress, $birthdate, $curraddress, $reason);
                 $data=[
                    'name'=>$applicant,
                    'from'=>$origaddress,
                    'bday'=>$birthdate,
                    'address'=>$curraddress,
                    'reason'=> $reason,
                    'date'=>date('Y/m/d')
                ];
                $this->load->view('BgyClearance/index',$data);
                // $msg['success']=true;

               
            }
            // else{
            //     $msg['success']=false;
            // }
            // echo json_encode($msg);
        }
    }
?>