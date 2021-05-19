<?php

class Kategori extends CI_Controller
{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }
    public function buku()
    {
        $data['buku'] = $this->model_kategori->data_buku()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buku', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian()
    {
        $data['pakaian'] = $this->model_kategori->data_pakaian()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian', $data);
        $this->load->view('templates/footer');
    }
    public function olahraga()
    {
        $data['olahraga'] = $this->model_kategori->data_olahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('olahraga', $data);
        $this->load->view('templates/footer');
    }
}
