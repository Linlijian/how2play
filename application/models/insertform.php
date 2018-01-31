<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertform extends CI_Model {

    public function insertcomment($commnet)
	{
        $sql = "INSERT INTO comment (id_comment,content) VALUE ('','".$commnet."');";
        $result = $this->db->query($sql);
        return $result;
    }

    public function selectcomment()
	{
        $sql = "SELECT * FROM `comment`;";
        $result = $this->db->query($sql);
        return $result;
    }

}
?>
