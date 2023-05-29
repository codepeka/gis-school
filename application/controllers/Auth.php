<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel', 'am');
    }

    public function index()
    {
        // Kondisi Ketika Session Opened == TRUE
        if ($this->session->userdata('openedThisApps')) {
            redirect('home');
        }
        $data['title'] = 'Login - Tracking Zonasi Sekolah';
        $this->load->view('auth/login', $data);
    }

    public function login()
    {
        $data = $this->am->login($_POST['username'], $_POST['password']);
        if ($data->num_rows() > 0) {
            $this->session->set_userdata('idUser', $data->row()->id);
            $this->session->set_userdata('name', $data->row()->nama);
            $this->session->set_userdata('username', $data->row()->username);
            $this->session->set_userdata('hak', $data->row()->hak);
            // $this->session->set_userdata('foto', $data->row()->foto);
            $this->session->set_userdata('openedThisApps', TRUE);
            helper_log("login", "Login GIS");

            // if ($data->row()->hak != "superadmin") {
            redirect('home');
            // }
        } else {
            $this->session->set_userdata('messageLogin', TRUE);
            redirect('auth');
        }
    }

    public function profile()
    {
        $data['title'] = "Profile";
        $data['url'] = "User";
        $data['profile'] = $this->db->where('id', $this->session->userdata('idUser'))->get('users')->row();
        $this->load->view('template/header', $data);
        $this->load->view('user/profile');
        $this->load->view('template/footer');
    }

    public function ajax_update()
    {
        $this->_validate();
        if ($this->am->verifyPass(md5($this->input->post("passLama"))) == 1) {
            if ($this->input->post('passBaru') == $this->input->post('ulangiPassBaru')) {
                # code...
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('passBaru')),
                    // 'tgl_buat' => date('Y-m-d H:i:s'),
                );
                $this->am->update(array('id' => $this->session->userdata('idUser')), $data);
                helper_log("update", "Ubah Data Profile");
                echo json_encode(array("status" => TRUE));
            } else {
                echo json_encode(array("status" => "nosame"));
            }
        } else {
            echo json_encode(array("status" => "failed"));
        }
    }

    private function _validate()
    {
        $data = array();
        // $data['error_string'] = array();
        // $data['inputerror'] = array();
        $data['status'] = TRUE;

        if (
            $this->input->post('nama') == '' ||
            $this->input->post('username') == '' ||
            $this->input->post('passLama') == '' ||
            $this->input->post('passBaru') == '' ||
            $this->input->post('ulangiPassBaru') == ''
        ) {
            // $data['inputerror'][] = 'nama_barang';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    public function logout()
    {
        if ($this->session->userdata('idUser') == '') redirect('auth');
        helper_log("logout", "Logout GIS");

        $this->session->set_userdata('idUser', "");
        $this->session->set_userdata('name', "");
        $this->session->set_userdata('username', "");
        $this->session->set_userdata('hak', "");
        // $this->session->set_userdata('foto', $data->row()->foto);
        $this->session->set_userdata('openedThisApps', FALSE);

        redirect('auth');
    }
}
