<?php
class Register_model extends CI_Model {

    public function addmember()
    {
        $data = array(
        'email' => $this->input->post('email'),
        'password' => $this->input->post('pass')
        );
        // var_dump($data);
        $qu = $this->db->insert('member', $data);
        if($qu){
            echo "สำเร็จ";
        } else{
            echo "ไม่สำเร็จ";
        }
    }

    public function showmember()
    {
            $query = $this->db->get('member');
            return $query->result();
    }
    
}