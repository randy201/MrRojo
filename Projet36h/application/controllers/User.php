<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller {
        public function accueil(){
            $this->load->model('news_model');
            $data=array();

            $data=$this->news_model->get_info();
            // var_dump($data);

            $this->load->view('test',$data);
        }
    }

?>