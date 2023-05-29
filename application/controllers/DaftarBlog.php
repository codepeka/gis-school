<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarBlog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DaftarBlogModel', 'dbm');
        if (!$this->session->userdata('openedThisApps')) {
            redirect('auth/login');
            // } elseif (!$this->session->userdata('hak') == "superadmin") {
            //     redirect('home');
        }
    }

    public function index()
    {
        $data['title'] = "Data Blog";
        $data['url'] = "Blog";
        $this->load->view('template/header', $data);
        $this->load->view('daftar_blog/list');
        $this->load->view('template/footer');
    }

    public function ajax_list()
    {
        $list = $this->dbm->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $blog) {
            $no++;
            $row = array();
            $row[] = '<p class="text-center">' . $no . '</p>';
            $row[] = $blog->judul;
            $row[] = ($blog->status == 1) ? "Active" : "Non Active";
            $row[] = $blog->updated_at;

            //add html for action
            $row[] = '
                <div align="center">
                    <a class="btn btn-warning" href="' . site_url('daftarblog/edit/') . $blog->id . '" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                    <a class="btn btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus(' . "'" . $blog->id . "'" . ')"><i class="fas fa-trash"></i></a>
                </div>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dbm->count_all(),
            "recordsFiltered" => $this->dbm->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function add()
    {
        $data['title'] = "Tambah Data Blog";
        $data['url'] = "Blog";
        $this->load->view('template/header', $data);
        $this->load->view('daftar_blog/add');
        $this->load->view('template/footer');
    }

    public function store()
    {
        $data = array(
            'user_id' => $this->session->userdata('idUser'),
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        );

        if (!empty($_FILES['gambar']['name'])) {
            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }

        $insert = $this->dbm->save($data);
        $this->session->set_userdata('message', true);
        helper_log("add", "Tambah Data User / Pengguna");
        redirect('daftarblog');
    }

    public function edit($id)
    {
        $data['blog'] = $this->dbm->get_by_id($id);
        $data['title'] = "Edit Data Blog";
        $data['url'] = "Blog";
        $this->load->view('template/header', $data, $id);
        $this->load->view('daftar_blog/edit');
        $this->load->view('template/footer');
    }

    public function update()
    {
        $data = array(
            'user_id' => $this->session->userdata('idUser'),
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'status' => ($this->input->post('status') == 'on' ? 1 : 0),
        );

        if (!empty($_FILES['gambar']['name'])) {
            $upload = $this->_do_upload();

            //delete file
            $file = $this->dbm->get_by_id($this->input->post('idne'));
            if (file_exists('uploads/blog/' . $file->gambar) && $file->gambar)
                unlink('uploads/blog/' . $file->gambar);

            $data['gambar'] = $upload;
        }

        $this->dbm->update(array('id' => $this->input->post('idne')), $data);
        $this->session->set_userdata('message', true);
        helper_log("update", "Ubah Data User / Pengguna");
        redirect('daftarblog');
    }

    public function ajax_delete($id)
    {
        //delete file
        $file = $this->dbm->get_by_id($id);
        if (file_exists('uploads/blog/' . $file->gambar) && $file->gambar) {
            unlink('uploads/blog/' . $file->gambar);
        }
        $this->dbm->delete_by_id($id);
        helper_log("delete", "Hapus Data User / Pengguna");
        echo json_encode(array("status" => TRUE));
    }

    private function _do_upload()
    {
        $config['upload_path']          = 'uploads/blog/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) //upload and validate
        {
            $data['inputerror'][] = 'gambar';
            $data['error_string'][] = 'Upload error: ' . $this->upload->display_errors('', ''); //show ajax error
            $data['status'] = FALSE;
        }

        return $this->upload->data('file_name');
    }
}
