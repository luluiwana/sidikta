<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') != 'siswa' && $this->session->userdata('role') != 'guru') {
            redirect('auth', 'refresh');
        }
        $this->load->model('M_Auth');
        $this->load->model('Course_model');
    }


    public function index()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules(
            'telp',
            'Nomor Telepon',
            'required|numeric|min_length[10]|max_length[15]',
            array(
                'numeric'       => '%s harus berupa angka',
                'min_length'    => '%s terlalu pendek',
                'max_length'    => '%s terlalu panjang'
            )
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'valid_email'   => "%s tidak valid",
            )
        );
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Profil',
                'menu' => 'Profil',
                'user'        => $this->Course_model->getUser(),
                'profil' => $this->M_Auth->getProfil()
            );

            $role = $this->session->userdata('role');

            $this->load->view($role . '/template/header', $data);
            $this->load->view('profil/profil');
            $this->load->view($role . '/template/footer');
        } else {
            $update_data = [
                'UserName' => $this->input->post('nama'),
                'UserEmail' => $this->input->post('email'),
                'UserContactNo' => $this->input->post('telp'),
            ];
            $this->M_Auth->update($update_data);
            $array = array(
                'nama' => $this->input->post('nama')
            );

            $this->session->set_userdata($array);

            redirect('profil', 'refresh');
        }
    }
    public function password()
    {
        $this->form_validation->set_rules('old', 'Password Lama', 'callback_old_check');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[5]',
            array(
                'min_length'    => '%s terlalu pendek'
            )
        );
        $this->form_validation->set_rules(
            'passconf',
            'Konfirmasi password',
            'required|matches[password]',
            array(
                'matches'   => '%s tidak sesuai'
            )
        );
        if (
            $this->form_validation->run() == true
        ) {
            $update_data = [
                'UserPassword' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            ];
            $this->M_Auth->update($update_data);

            redirect('profil', 'refresh');
        } else {
            $data = array(
                'title' => 'Ubah Password',
                'user'        => $this->Course_model->getUser(),
                'menu' => 'Profil',
                'profil' => $this->M_Auth->getProfil()

            );

            $role = $this->session->userdata('role');

            $this->load->view($role . '/template/header', $data);
            $this->load->view('profil/password');
            $this->load->view($role . '/template/footer');
        }
    }
    public function old_check($password)
    {
        $hash = $this->M_Auth->old_check();
        if (password_verify($password, $hash)) {
            return true;
        } else {
            $this->form_validation->set_message('old_check', 'Password lama salah');
            return false;
        }
    }
    public function avatar()
    {
        $data = array(
            'title' => 'Profil',
            'menu' => 'Profil',
            'user'        => $this->Course_model->getUser(),
            'profil' => $this->M_Auth->getProfil(),
            'error' => ''
        );

        $role = $this->session->userdata('role');

        $this->load->view($role . '/template/header', $data);
        $this->load->view('profil/avatar');
        $this->load->view($role . '/template/footer');
    }
    public function updateAvatar($file)
    {
        $data = array(
            'UserAvatar' => $file
        );

        $array = array(
            'ava' => $file
        );

        $this->session->set_userdata($array);
        //delete old profile pict
        $old_avatar = $this->M_Auth->getAvatar();
        if (strpos($old_avatar, 'ava') === FALSE && strpos($old_avatar, 'default') === FALSE) {
            unlink('./media/avatar/' . $old_avatar);
        }
        //update database
        $this->M_Auth->update($data);

        redirect('profil', 'refresh');
    }
    public function updatePhoto()
    {
        $config['upload_path']          = './media/avatar';
        $config['allowed_types']        = 'jpg|png|jpeg';;
        $config['max_size']      = 200;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('avatar')) {
            $error = $this->upload->display_errors();
            if ($error = "The file you are attempting to upload is larger than the permitted size.") {
                $error = "Maksimal ukuran file foto profil adalah 200KB";
            }
            $data = array(
                'title' => 'Profil',
                'menu' => 'Profil',
                'user'        => $this->Course_model->getUser(),
                'profil' => $this->M_Auth->getProfil(),
                'error' => $error
            );

            $role = $this->session->userdata('role');

            $this->load->view($role . '/template/header', $data);
            $this->load->view('profil/avatar');
            $this->load->view($role . '/template/footer');
        } else {
            $filename = $this->upload->data('file_name');
            $data = array(
                'UserAvatar' => $filename
            );
            //update userdata
            $array = array(
                'ava' => $filename
            );
            $this->session->set_userdata($array);
            //delete old profile pict
            $old_avatar = $this->M_Auth->getAvatar();
            if (strpos($old_avatar, 'ava') === FALSE && strpos($old_avatar, 'default') === FALSE) {
                unlink('./media/avatar/' . $old_avatar);
            }
            //update database
            $this->M_Auth->update($data);
            redirect('profil', 'refresh');
        }
    }
}
        
    /* End of file  profil.php */