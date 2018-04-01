<?php
    class BgyClearances extends CI_Controller{

        public function index(){
            $data=[
                'name'=>'Rullamas, Pogi Kealu S.,',
                'from'=>'Calamba',
                'bday'=>'April 6, 1997',
                'address'=>'Bgy.Burol',
                'reason'=>'la lng',
                'date'=>date('Y/m/d')
            ];

            $this->load->view('templates/header');
            $this->load->view('BgyClearance/index',$data);
            $this->load->view('templates/footer');
        }
    }
?>