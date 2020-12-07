<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kegiatan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["kegiatan"] = $this->kegiatan_model->getAll();
        $this->load->view("kegiatan/list", $data);
    }

    public function pendidikan()
    {
        $data["kegiatan"] = $this->kegiatan_model->pendidikan();
        $this->load->view("kegiatan/list/pendidikan", $data);
    }

    public function penelitian()
    {
        $data["kegiatan"] = $this->kegiatan_model->penelitian();
        $this->load->view("kegiatan/list/penelitian", $data);
    }

    public function pema()
    {
        $data["kegiatan"] = $this->kegiatan_model->pema();
        $this->load->view("kegiatan/list/pema", $data);
    }

    public function publikasi()
    {
        $data["kegiatan"] = $this->kegiatan_model->publikasi();
        $this->load->view("kegiatan/list/publikasi", $data);
    }

    public function lainnya()
    {
        $data["kegiatan"] = $this->kegiatan_model->lainnya();
        $this->load->view("kegiatan/list/lainnya", $data);
    }

    public function add()
    {
        $kegiatan = $this->kegiatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kegiatan->rules());

        if ($validation->run()) {
            $kegiatan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("kegiatan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('kegiatan');
       
        $kegiatan = $this->kegiatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kegiatan->rules());

        if ($validation->run()) {
            $kegiatan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kegiatan"] = $kegiatan->getById($ID);
        if (!$data["kegiatan"]) show_404();
        
        $this->load->view("kegiatan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('kegiatan'));
        }
    }
}