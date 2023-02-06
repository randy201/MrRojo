    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function itoo($nom = ''){
        echo 'Bonjour '.$nom.'<br>';
		echo 'number'.$this->input->get('num');
	}
    public function getDonne(){
       $val=array();
       $val['nom']='Rajaonson';
       $val['prenom']='randy';
       $val['dtn']='20-01-2004';
       $this->load->view('infoRandy',$val);
	}
    public function redirect(){
        redirect('Test/getDonne');
    }
   	
    
}