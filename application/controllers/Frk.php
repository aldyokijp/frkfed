<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Frk_model');
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
    }

    public function index()
    {
        $data['title'] = 'FRK';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Frk_model');
        $email = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $email);
        $query = $this->db->get();
        $data['Frk'] = $query->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('frk/index', $data);
        $this->load->view('templates/footer');
    }
    public function cetakLaporan()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Frk_model');
        $email = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $email);
        $query = $this->db->get();
        $data['Frk'] = $query->result_array();

        $dompdf = new Dompdf();

        $html = $this->load->view('frk/laporan_pdf', $data, true);
        $dompdf->load_html($html);
        $dompdf->set_paper('A4', 'landscape');
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream('laporan_frk.pdf', array("Attachment" => false));
    }

    public function excel()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Frk_model');
        $email = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $email);
        $query = $this->db->get();
        $data['Frk'] = $query->result_array();


        $this->load->view('frk/excel', $data);
    }

    public function tambahPendidikan()
    {
        $data['title'] = 'Form Tambah Data Pendidikan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $this->form_validation->set_rules('ak', 'Angka Kredit', 'required');
        $this->form_validation->set_rules('output', 'Output', 'required');
        $this->form_validation->set_rules('mutu', 'Mutu/Kualitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('frk/tambahpendidikan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Frk_model->tambahDataPendidikan($email);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('frk/editfrk');
        }
    }

    public function tambahPenelitian()
    {
        $data['title'] = 'Form Tambah Data Penelitian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $this->form_validation->set_rules('ak', 'Angka Kredit', 'required');
        $this->form_validation->set_rules('output', 'Output', 'required');
        $this->form_validation->set_rules('mutu', 'Mutu/Kualitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('frk/tambahpenelitian', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Frk_model->tambahDataPenelitian($email);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('frk/editfrk');
        }
    }

    public function tambahPengabdian()
    {
        $data['title'] = 'Form Tambah Data Pengabdian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $this->form_validation->set_rules('ak', 'Angka Kredit', 'required');
        $this->form_validation->set_rules('output', 'Output', 'required');
        $this->form_validation->set_rules('mutu', 'Mutu/Kualitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('frk/tambahpengabdian', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Frk_model->tambahDataPengabdian($email);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('frk/editfrk');
        }
    }

    public function tambahPublikasi()
    {
        $data['title'] = 'Form Tambah Data Publikasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $this->form_validation->set_rules('ak', 'Angka Kredit', 'required');
        $this->form_validation->set_rules('output', 'Output', 'required');
        $this->form_validation->set_rules('mutu', 'Mutu/Kualitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('frk/tambahpublikasi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Frk_model->tambahDataPublikasi($email);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('frk/editfrk');
        }
    }

    public function tambahLainnya()
    {
        $data['title'] = 'Form Tambah Data Lainnya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $this->form_validation->set_rules('ak', 'Angka Kredit', 'required');
        $this->form_validation->set_rules('output', 'Output', 'required');
        $this->form_validation->set_rules('mutu', 'Mutu/Kualitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('frk/tambahlainnya', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Frk_model->tambahDataLainnya($email);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('frk/editfrk');
        }
    }

    public function hapus($id)
    {
        $this->Frk_model->hapusDataFRK($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('frk/editfrk');
    }


    public function editfrk()
    {
        $data['title'] = 'Edit FRK';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $email);
        $query = $this->db->get();
        $data['Frk'] = $query->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('frk/editfrk', $data);
        $this->load->view('templates/footer');
    }

    public function ubahfrk($id)
    {
        $data['title'] = 'Form Ubah Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['frk'] = $this->Frk_model->getFrkById($id);

        $this->form_validation->set_rules('ak', 'Angka Kredit', 'required');
        $this->form_validation->set_rules('output', 'Output', 'required');
        $this->form_validation->set_rules('mutu', 'Mutu/Kualitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('frk/ubahfrk', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Frk_model->ubahDataFrk();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('frk/editfrk');
        }
    }
}
