<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Siswa_model');
        $data['siswa'] = $this->Siswa_model->read();
        $this->load->view('home', $data);
    }

    public function simpan_data()
    {
        $this->load->model('Siswa_model');
        $this->Siswa_model->create();
        redirect(base_url());
    }

    public function tambah_siswa()
    {
        $this->load->view('form_tambah_siswa');
    }

    public function hapus_data($id)
    {
        $this->load->model('Siswa_model');
        $this->Siswa_model->delete($id);
        redirect(base_url());
    }

    public function panggil_data($id)
    {
        //Menuju ke Model
        $this->load->model('Siswa_model');
        $row = $this->Siswa_model->get_by_id($id);

        //Menuju ke View
        $data['tampilkan_data'] = $this->Siswa_model->get_by_id($id);
        if ($row) {
            $this->load->view('form_edit_siswa', $data);
        } else {
            redirect(base_url());
        }
    }
}
