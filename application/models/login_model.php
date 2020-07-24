<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
public function login($email, $password)
{
    $sql="select * from users where email='".$email."' and password='".$password."'";

    $res = $this->db->query($sql)->row();
    return $res;
}
}