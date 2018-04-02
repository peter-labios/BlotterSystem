<?php
    class Clearances extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Barangay Clearance';

            $data['clearances'] = $this->clearance_model->get_clearance();

            $this->load->view('templates/header');
            $this->load->view('clearances/index', $data);
            $this->load->view('templates/footer');
        }

        public function addClearance()
        {
            $applicant = $this->input->post('applicantNameTxt');
            $origaddress = $this->input->post('origAddressTxt');
            $birthdate = $this->input->post('birthDatePicker');
            $curraddress = $this->input->post('currAddressTxt');
            $reason = $this->input->post('reasonTxt');

<<<<<<< HEAD
            $this->clearance_model->add_clearance($applicant, $origaddress, $birthdate, $curraddress, $reason);
            $msg['success']=true;
            echo json_encode($msg);
=======
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
>>>>>>> 99da1125601a831655328437ce288b591503d644
        }
    }
?>