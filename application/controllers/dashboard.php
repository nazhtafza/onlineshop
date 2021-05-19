<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('dashboard', $data);
    }

    public function tambah_keranjang($id)
    {
        $barang = $this->model_barang->find($id);
        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('keranjang');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('pembayaran');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda gagal diproses!";
        }
    }
    public function detail($id_barang)
    {
        $data['barang'] = $this->model_barang->detail_barang($id_barang);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
