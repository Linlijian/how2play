<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inserform extends CI_Controller {

    public function insertcomment($commnet)
	{
        $sql = "INSERT INTO comment (id_comment,content) VALUE (1,'".$commnet."');";
        $result = $this->db->query($sql);
        return $result;
    }


}