<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function change_status()
    {
        $candidate_id = $this->input->post('candidate_id');
        $this->Fed_model->update_status($candidate_id);

        echo true;
        exit;
    }

    public function fed()
    {
        $data['title'] = 'FED';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->select('*');
        $this->db->from('fed');
        $this->db->join('user', 'user.email=fed.user_email', 'inner');
        $this->db->where('user.is_active !=', 0);
        $this->db->distinct('id');
        $this->db->group_by('user.id');

        $query = $this->db->get();
        $data['User'] = $query->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/fed', $data);
        $this->load->view('templates/footer');
    }

    public function editfed()
    {
        $data['title'] = 'Edit FED';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Fed_model');
        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $_SESSION["fed"]);
        $query = $this->db->get();
        $data['Fed'] = $query->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/editfed', $data);
        $this->load->view('templates/footer');
    }

    public function fed_final()
    {
        $data['title'] = 'FED';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $_SESSION["fed"]);
        $query = $this->db->get();
        $data['Fed'] = $query->result_array();
        $this->load->model('Fed_model');
        $this->Fed_model->update_status($_SESSION["accepted"]);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/fed_final', $data);
        $this->load->view('templates/footer');
    }

    public function excel()
    {
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->model('Fed_model');
        // $this->Fed_model->getAllFed();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $final = $_SESSION["accepted"];
        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $_SESSION["fed"]);
        $query = $this->db->get();
        $data['Fed'] = $query->result_array();
        $this->load->model('Fed_model');
        $this->Fed_model->update_status($final);

        $this->load->view('admin/excel', $data);

        // require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        // require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        // $object = new PHPExcel();

        // $object->getProperties()->setCreator("Institut Teknologi DEL");
        // $object->getProperties()->setLastModifiedBy("FRK FED IT DEL");
        // $object->getProperties()->setTitle("FED DOSEN");

        // $object->setActiveSheetIndex(0);

        // $object->getActiveSheet()->setCellValue('A1', 'NO');
        // $object->getActiveSheet()->setCellValue('C1', 'TARGET');
        // $object->getActiveSheet()->setCellValue('H1', 'REALISASI');
        // $object->getActiveSheet()->setCellValue('B2', 'Kegiatan Tugas Jabatan');
        // $object->getActiveSheet()->setCellValue('C2', 'AK');
        // $object->getActiveSheet()->setCellValue('D2', 'Output');
        // $object->getActiveSheet()->setCellValue('E2', 'Mutu');
        // $object->getActiveSheet()->setCellValue('F2', 'Waktu');
        // $object->getActiveSheet()->setCellValue('G2', 'Output');
        // $object->getActiveSheet()->setCellValue('H2', 'Mutu');
        // $object->getActiveSheet()->setCellValue('I2', 'Waktu');
        // $object->getActiveSheet()->setCellValue('J2', 'Nilai Capaian SKP');

        // $baris = 2;
        // $no = 1;

        // foreach ($data['Fed'] as $f) {
        //     $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
        //     $object->getActiveSheet()->setCellValue('A' . $baris, $f->pendidikan);
        //     $object->getActiveSheet()->setCellValue('B' . $baris, $f->ak);
        //     $object->getActiveSheet()->setCellValue('C' . $baris, $f->output);
        //     $object->getActiveSheet()->setCellValue('D' . $baris, $f->mutu);
        //     $object->getActiveSheet()->setCellValue('E' . $baris, $f->waktu);
        //     $object->getActiveSheet()->setCellValue('F' . $baris, $f->fed_output);
        //     $object->getActiveSheet()->setCellValue('G' . $baris, $f->fed_mutu);
        //     $object->getActiveSheet()->setCellValue('H' . $baris, $f->fed_waktu);
        //     $object->getActiveSheet()->setCellValue('I' . $baris, $f->fed_skp);

        //     $baris++;
        // }

        // $filename = "FED_Dosen" . '.xlsx';

        // $object->getActiveSheet()->setTitle("Data FED Dosen");

        // header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition:attachment; filename="' . $filename . '"');
        // header('Cache-Control: max-age=0');

        // $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        // $writer->save('php://output');

        // exit;
    }

    public function cetakLaporan()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $final = $_SESSION["accepted"];
        $this->db->select('*');
        $this->db->from('frk');
        $this->db->join('fed', 'frk.id=fed.frk_id', 'inner');
        $this->db->where('fed.user_email', $_SESSION["fed"]);
        $query = $this->db->get();
        $data['Fed'] = $query->result_array();
        $this->load->model('Fed_model');
        $this->Fed_model->update_status($final);

        $dompdf = new Dompdf();

        $html = $this->load->view('admin/laporan_pdf', $data, true);
        $dompdf->load_html($html);
        $dompdf->set_paper('A4', 'landscape');
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream('laporan_fed.pdf', array("Attachment" => false));
    }

    public function ubahfed($fed_id)
    {
        $data['title'] = 'Form Ubah Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Fed_model');
        $data['fed'] = $this->Fed_model->getFedById($fed_id);

        $this->form_validation->set_rules('fed_ak', 'Angka Kredit', 'required');
        $this->form_validation->set_rules('fed_output', 'Output', 'required');
        $this->form_validation->set_rules('fed_mutu', 'Mutu/Kualitas', 'required');
        $this->form_validation->set_rules('fed_waktu', 'Waktu Kegiatan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/ubahfed', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Fed_model->ubahfed();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/editfed');
        }
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
