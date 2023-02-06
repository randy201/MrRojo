<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class News_model extends CI_Model{
        public function get_info(){
            return array('auteur'=>'Randy','date'=>'04/01/20','email'=>'email@ndd.fr');
        }
    }

?>