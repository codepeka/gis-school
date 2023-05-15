<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password)
    {
        $query = $this->db->get_where("users", array('username' => $username, 'password' => md5($password), 'status' => 1));

        return $query;
    }

    public function update($where, $data)
    {
        $this->db->update('users', $data, $where);
        return $this->db->affected_rows();
    }

    public function verifyPass($pass)
    {
        $this->db->select("password");
        $query = $this->db->get_where('users',  array('id' => $this->session->userdata("idUser"), 'password' => $pass));
        return $query->num_rows();
    }
}
