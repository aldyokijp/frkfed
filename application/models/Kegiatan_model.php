<?php defined('BASEPATH') or exit('No direct script access allowes');

class Kegiatan_model extends CI_Model
{

    private $_pendidikan = "pendidikan";
    private $_penelitian = "penelitian";
    private $_pema = "pengabdian masyarakat";
    private $_publikasi = "publikasi";
    private $_lainnya = "lainnya";

    public $ID;
    public $kegiatan_jenis;
    public $angka_kredit;
    public $kuantitas;
    public $kualitas;
    public $waktu;

    public function rules()
    {
        return [
            [
                'field' => 'nama_kegiatan',
                'label' => 'Nama Kegiatan',
                'rules' => 'required'
            ],

            [
                'field' => 'angka_kredit',
                'label' => 'Angka Kredit',
                'rules' => 'required'
            ],

            [
                'field' => 'kuantitas',
                'label' => 'Kuantitas',
                'rules' => 'required'
            ],

            [
                'field' => 'kualitas',
                'label' => 'Kualitas',
                'rules' => 'numeric'
            ],

            [
                'field' => 'waktu',
                'label' => 'Waktu',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($ID)
    {
        return $this->db->get_where($this->_table, ["ID" => $ID])->row();
    }

    public function pendidikan()
    {
        return $this->db->get_where($this->_table, ["kegiatan_jenis" => $_pendidikan])->row();
    }

    public function penelitian()
    {
        return $this->db->get_where($this->_table, ["kegiatan_jenis" => $_penelitian])->row();
    }

    public function pema()
    {
        return $this->db->get_where($this->_table, ["kegiatan_jenis" => $_pema])->row();
    }

    public function publikasi()
    {
        return $this->db->get_where($this->_table, ["kegiatan_jenis" => $_publikasi])->row();
    }

    public function lainnya()
    {
        return $this->db->get_where($this->_table, ["kegiatan_jenis" => $_lainnya])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->ID = uniqid();
        $this->kegiatan_nama = $post["kegiatan_nama"];
        $this->kegiatan_jenis = $post["kegiatan_jenis"];
        $this->angka_kredit = $post["angka_kredit"];
        $this->kuantitas = $post["kuantitas"];
        $this->kualitas = $post["kualitas"];
        $this->waktu = $post["waktu"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->ID = $post["ID"];
        $this->kegiatan_nama = $post["kegiatan_nama"];
        $this->kegiatan_jenis = $post["kegiatan_jenis"];
        $this->angka_kredit = $post["angka_kredit"];
        $this->kuantitas = $post["kuantitas"];
        $this->kualitas = $post["kualitas"];
        $this->waktu = $post["waktu"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($ID)
    {
        return $this->db->delete($this->_table, array("ID" => $ID));
    }
}
