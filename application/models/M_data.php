<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
    function getdata(){
        return $this->db->get('datashop');
}
}