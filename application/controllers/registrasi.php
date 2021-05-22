<?php
class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->load->helper('security');
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama lengkap harus diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username harus diisi!']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
            'required' => 'password harus diisi!',
            'matches' => 'password tidak cocok',
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id' => 2,
            );
            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
