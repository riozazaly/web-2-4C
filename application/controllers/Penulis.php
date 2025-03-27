<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penulis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Penulis', 'penulis');
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Penulis',
            'page' => 'penulis/v_penulis',
            'penulis' => $this->penulis->getAllPenulis()
        ];

        $this->load->view('index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Penulis',
            'page' => 'penulis/v_addPenulis'
        ];

        $this->load->view('index', $data);
    }

    public function postAdd()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama harus diisi!']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat harus diisi!']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal lahir harus diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            ];

            $insert = $this->penulis->insertPenulis($data);
            $this->session->set_flashdata($insert ? 'success' : 'error', $insert ? 'Penulis berhasil ditambahkan!' : 'Penulis gagal ditambahkan!');
            redirect('penulis');
        }
    }

    public function edit($id)
    {
        $penulis = $this->penulis->getPenulisById($id);
        if (!$penulis) {
            show_404();
        }

        $data = [
            'title' => 'Edit Penulis',
            'page' => 'penulis/v_editPenulis',
            'penulis' => $penulis
        ];

        $this->load->view('index', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama harus diisi!']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat harus diisi!']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal lahir harus diisi!']);

        $id = $this->input->post('id');
        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            ];

            $update = $this->penulis->updatePenulis($id, $data);
            $this->session->set_flashdata($update ? 'success' : 'error', $update ? 'Penulis berhasil diubah!' : 'Penulis gagal diubah!');
            redirect('penulis');
        }
    }

    public function delete($id)
    {
        $delete = $this->penulis->deletePenulis($id);
        $this->session->set_flashdata($delete ? 'success' : 'error', $delete ? 'Penulis berhasil dihapus!' : 'Penulis gagal dihapus!');
        redirect('penulis');
    }
}