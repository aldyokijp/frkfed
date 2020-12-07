<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fed_model extends CI_model
{
    public function getAllFed()
    {
        return $this->db->get('fed')->result_array();
    }

    public function getFedById($fed_id)
    {
        return $this->db->get_where('fed', ['fed_id' => $fed_id])->row_array();
    }

    public function update_status($final)  {
        
        $this->db->select('accepted');
        $this->db->from('user'); 
        $this->db->where('email',$_SESSION["fed"]);
        $query=$this->db->get();
        $data = [
        'accepted' => $final
        ];
        $this->db->where('email', $_SESSION["fed"]);
        $this->db->update('user', $data);
    }

    public function ubahfed()
    {
        $data = [
            "fed_ak" => $this->input->post('fed_ak', true),
            "fed_output" => $this->input->post('fed_output', true),
            "fed_mutu" => $this->input->post('fed_mutu', true),
            "fed_waktu" => $this->input->post('fed_waktu', true),
            "skp" => $this->input->post('skp', true)
        ];

        $this->db->where('fed_id', $this->input->post('fed_id'));
        $this->db->update('fed', $data);
    }

    

}