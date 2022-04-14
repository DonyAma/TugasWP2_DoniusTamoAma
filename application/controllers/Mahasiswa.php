<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-input-mahasiswa');
    }
    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'tanggal' => $this->input->post('tanggal'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('data-mahasiswa', $data);
    }
}
