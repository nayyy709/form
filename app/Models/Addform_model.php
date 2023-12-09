<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class Addform_model extends Model
{
    protected $db;
    protected $request;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }
    public function simpandata()
    {
        $t_01 = $this->request->getPost('t_01');
        $v_08 = $this->request->getPost('v_08');
        $t_02 = $this->request->getPost('t_02');
        $v_09 = $this->request->getPost('v_09');
        $t_03 = $this->request->getPost('t_03');
        $v_10 = $this->request->getPost('v_10');
        $v_11 = $this->request->getPost('v_11');

        $sql = "INSERT INTO TEST (t_01, v_08, t_02, v_09,  t_03, v_10, v_11)
                VALUES('$t_01', '$v_08', '$t_02',  '$v_09', '$t_03', '$v_10', '$v_11')";

        $this->db->query($sql);
        return;
    }
}
