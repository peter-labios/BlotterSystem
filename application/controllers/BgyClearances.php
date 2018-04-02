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

        public function save_image(){
            $config=[
                'upload_path'=>'assets/img/BarangayClearance',
                'allowed_type'=>'jpg|jpeg|png|bmp',
                'max_size'=>0,
                'filename'=>url_title($this->input->post('image')),
                'encrypt_name'=>true
            ];

            $this->load->library('upload',$config);

            if($this->upload->do_upload('image')){
                $data['title'] = 'Blotter Reports';

            $data['blotters'] = $this->blotter_model->get_blotters();

            $this->load->view('templates/header');
            $this->load->view('blotters/index', $data);
            $this->load->view('templates/footer');
            }
            else
            {
                echo "gg";
            }
        }
    }
?>