<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frk_model extends CI_model
{
    public function getAllFrk()
    {
        return $this->db->get('frk')->result_array();
    }

    public function tambahDataPendidikan($email)
    {
        $data = [
            "pendidikan" => $this->input->post('pendidikan', true),
            "ak" => $this->input->post('ak', true),
            "output" => $this->input->post('output', true),
            "mutu" => $this->input->post('mutu', true),
            "waktu" => $this->input->post('waktu', true)
        ];
        $this->db->insert('frk', $data);
        $insert_id = $this->db->insert_id();
        $feder = ["user_email" => $email, "frk_id" => $insert_id];
        $this->db->insert('fed', $feder);
    }

    public function hapusDataFRK($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('frk');
        $this->db->where('frk_id', $id);
        $this->db->delete('fed');
    }

    public function tambahDataPenelitian($email)
    {
        $data = [
            "penelitian" => $this->input->post('penelitian', true),
            "ak" => $this->input->post('ak', true),
            "output" => $this->input->post('output', true),
            "mutu" => $this->input->post('mutu', true),
            "waktu" => $this->input->post('waktu', true)
        ];

        $this->db->insert('frk', $data);
        $insert_id = $this->db->insert_id();
        $feder = ["user_email" => $email, "frk_id" => $insert_id];
        $this->db->insert('fed', $feder);
    }

    public function tambahDataPengabdian($email)
    {
        $data = [
            "pengabdian" => $this->input->post('pengabdian', true),
            "ak" => $this->input->post('ak', true),
            "output" => $this->input->post('output', true),
            "mutu" => $this->input->post('mutu', true),
            "waktu" => $this->input->post('waktu', true)
        ];

        $this->db->insert('frk', $data);
        $insert_id = $this->db->insert_id();
        $feder = ["user_email" => $email, "frk_id" => $insert_id];
        $this->db->insert('fed', $feder);
    }

    public function tambahDataPublikasi($email)
    {
        $data = [
            "publikasi" => $this->input->post('publikasi', true),
            "ak" => $this->input->post('ak', true),
            "output" => $this->input->post('output', true),
            "mutu" => $this->input->post('mutu', true),
            "waktu" => $this->input->post('waktu', true)
        ];

        $this->db->insert('frk', $data);
        $insert_id = $this->db->insert_id();
        $feder = ["user_email" => $email, "frk_id" => $insert_id];
        $this->db->insert('fed', $feder);
    }

    public function tambahDataLainnya($email)
    {
        $data = [
            "lainnya" => $this->input->post('lainnya', true),
            "ak" => $this->input->post('ak', true),
            "output" => $this->input->post('output', true),
            "mutu" => $this->input->post('mutu', true),
            "waktu" => $this->input->post('waktu', true)
        ];

        $this->db->insert('frk', $data);
        $insert_id = $this->db->insert_id();
        $feder = ["user_email" => $email, "frk_id" => $insert_id];
        $this->db->insert('fed', $feder);
    }

    public function getFrkById($id)
    {
        return $this->db->get_where('frk', ['id' => $id])->row_array();
    }

    public function ubahDataFrk()
    {
        $data = [
            "pendidikan" => $this->input->post('pendidikan', true),
            "penelitian" => $this->input->post('penelitian', true),
            "pengabdian" => $this->input->post('pengabdian', true),
            "publikasi" => $this->input->post('publikasi', true),
            "lainnya" => $this->input->post('lainnya', true),
            "ak" => $this->input->post('ak', true),
            "output" => $this->input->post('output', true),
            "mutu" => $this->input->post('mutu', true),
            "waktu" => $this->input->post('waktu', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('frk', $data);
    }
}
