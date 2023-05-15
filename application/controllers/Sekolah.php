<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SekolahModel', 'sm');
    }

    public function index()
    {
        $data['title'] = "Data Sekolah";
        $data['url'] = "Sekolah";
        $this->load->view('template/header', $data);
        $this->load->view('sekolah/list');
        $this->load->view('template/footer');
    }

    public function ajax_list()
    {
        $list = $this->sm->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $sekolah) {
            $no++;
            $row = array();
            $row[] = '<p class="text-center">' . $no . '</p>';
            $row[] = $sekolah->npsn;
            $row[] = $sekolah->nama;
            $row[] = $sekolah->alamat;
            $row[] = ($sekolah->tipe_sekolah == 'N' ? 'Negeri' : 'Swasta');
            $row[] = $sekolah->updated_at;

            //add html for action
            // <a class="btn btn-info" href="' . site_url('sekolah/detail/') . $sekolah->id . '" ><i class="fas fa-eye"></i></a>
            $row[] = '
                <div align="center">
                    <a class="btn btn-warning" href="javascript:void(0)" title="Edit" onclick="edit(' . "'" . $sekolah->id . "'" . ')"><i class="fas fa-pencil-alt"></i></a>
                    <a class="btn btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus(' . "'" . $sekolah->id . "'" . ')"><i class="fas fa-trash"></i></a>
                </div>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->sm->count_all(),
            "recordsFiltered" => $this->sm->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function detail($id)
    {
        $data['sekolah'] = $this->sm->get_by_id($id);
        if (!$data['sekolah']) redirect('sekolah');
        $data['title'] = "Data Sekolah";
        $data['url'] = "Sekolah";
        $this->load->view('template/header', $data);
        $this->load->view('sekolah/detail');
        $this->load->view('template/footer');
    }

    public function ajax_edit($id)
    {
        $data = $this->sm->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $this->_validate();
        $data = array(
            'npsn' => $this->input->post('npsn'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kelurahan'),
            'status_pendidikan' => $this->input->post('status_pendidikan'),
            'tipe_sekolah' => $this->input->post('tipe_sekolah'),
            'akreditasi' => $this->input->post('akreditasi'),
            'kurikulum' => $this->input->post('kurikulum'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        );
        $insert = $this->sm->save($data);
        // helper_log("add", "Tambah Data Sekolah");
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $this->_validate();
        $data = array(
            'npsn' => $this->input->post('npsn'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kecamatan'),
            'status_pendidikan' => $this->input->post('status_pendidikan'),
            'tipe_sekolah' => $this->input->post('tipe_sekolah'),
            'akreditasi' => $this->input->post('akreditasi'),
            'kurikulum' => $this->input->post('kurikulum'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
        );
        $this->sm->update(array('id' => $this->input->post('idne')), $data);
        // helper_log("update", "Ubah Data Sekolah");
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->sm->delete_by_id($id);
        // helper_log("delete", "Hapus Data Sekolah");
        echo json_encode(array("status" => TRUE));
    }


    private function _validate()
    {
        if (!$this->session->userdata('openedThisApps')) {
            redirect('auth/login');
        }
        $data = array();
        // $data['error_string'] = array();
        // $data['inputerror'] = array();
        $data['status'] = TRUE;

        if (
            strlen($this->input->post('nama')) < 6
            || strlen($this->input->post('npsn')) < 6
            || strlen($this->input->post('alamat')) < 6
            || $this->input->post('provinsi') == ''
            || $this->input->post('kota') == ''
            || $this->input->post('kecamatan') == ''
            || $this->input->post('status_pendidikan') == ''
            || $this->input->post('tipe_sekolah') == ''
            || $this->input->post('akreditasi') == ''
            || $this->input->post('kurikulum') == ''
            || $this->input->post('lintang') == ''
            || $this->input->post('bujur') == ''
        ) {
            // $data['inputerror'][] = 'nama_sekolah';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}
