<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
        $this->load->model('Insertform');
        $result = $this->Insertform->selectcomment();
        $data = array("data_result" => $result);

		$this->load->view('form/form',$data);
    }

    public function insert()
	{
        $comm = (isset($_POST["comment"])?$_POST["comment"]:"");
        echo $comm;
        $this->load->model('Insertform');
        $result = $this->Insertform->insertcomment($comm);
        echo $result;
        IF ($result){
            redirect('/form/');
        }else{
            echo "ERROR";
        }

    }
}