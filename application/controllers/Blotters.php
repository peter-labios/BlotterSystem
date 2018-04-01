<?php
    class Blotters extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Blotter Reports';

            $data['blotters'] = $this->blotter_model->get_blotters();

            $this->load->view('templates/header');
            $this->load->view('blotters/index', $data);
            $this->load->view('templates/footer');
        }

        public function addBlotter()
        {
            $this->form_validation->set_rules('complainantNameTxt', 'Complainant Name', 'required');
            $this->form_validation->set_rules('defendantNameTxt', 'Defendant Name', 'required');
            $this->form_validation->set_rules('caseTypeTxt', 'Case Type', 'required');
            $this->form_validation->set_rules('detailsTxt', 'Case Details', 'required');

            if($this->form_validation->run())
            {
                $complainant = $this->input->post('complainantNameTxt');
                $defendant = $this->input->post('defendantNameTxt');
                $blotter_case = $this->input->post('caseTypeTxt');
                $details = $this->input->post('detailsTxt');
                $recording_officer = 'USERNAME NG ACCOUNT DITO';

                $this->blotter_model->add_blotter($complainant, $defendant, $blotter_case, $details, $recording_officer);
                $msg['success']=true;
            }
            else{
                $msg['success']=false;
            }
            echo json_encode($msg);
        }

        public function deleteBlotter($id)
        {
            $this->blotter_model->delete_blotter($id);
            $msg['success']=true;
            echo json_encode($msg);
        }

        public function editBlotter($id)
        {
            $this->form_validation->set_rules('complainantNameTxt', 'Complainant Name', 'required');
            $this->form_validation->set_rules('defendantNameTxt', 'Defendant Name', 'required');
            $this->form_validation->set_rules('caseTypeTxt', 'Case Type', 'required');
            $this->form_validation->set_rules('detailsTxt', 'Case Details', 'required');
            $this->form_validation->set_rules('statusTxt', 'Case Status', 'required');

            if($this->form_validation->run())
            {
                $complainant = $this->input->post('complainantNameTxt');
                $defendant = $this->input->post('defendantNameTxt');
                $blotter_case = $this->input->post('caseTypeTxt');
                $details = $this->input->post('detailsTxt');
                $status = $this->input->post('statusTxt');

                $this->blotter_model->edit_blotter($id, $complainant, $defendant, $blotter_case, $details, $status);
                $msg['success']=true;
            }
            else{
                $msg['success']=false;
            }
            echo json_encode($msg);
        }
    }
?>