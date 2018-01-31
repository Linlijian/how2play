<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller {
	public function index()
	{
		$this->load->view('form/form');
    }

    public function insert()
	{
        $comm = (isset($_POST["comment"])?$_POST["comment"]:"");
        $this->load->model('insertform');
        $result = $this->insertform->insertcomment($comm);
        IF ($result){
            redirect('/form/');
        }else{
            echo "ERROR";
        }

    }
}