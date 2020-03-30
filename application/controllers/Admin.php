<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
    }
    public function index()
    {

        $data['tittle'] = 'Dasboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['tittle'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/footer');
    }

    public function b_berita()
    {
        $data['tittle'] = 'Buat Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/b_berita', $data);
        $this->load->view('templates/footer');
    }

    public function c_berita()
    {
        $data['tittle'] = 'Buat Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Wajib isi judul,konten dan kategori
        $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[artikel.artikel_judul]');
        $this->form_validation->set_rules('konten', 'Konten', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/b_berita', $data);
            $this->load->view('templates/footer');
        } else {
            $judul = $this->input->post('judul');
            $tanggal = date('Y-m-d H:i:s');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');
            $author = $this->session->userdata('name');
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/artikel/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->form_validation->set_rules('image', 'Image', 'required');
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $Sampul = $this->upload->data('file_name');
                    $data = array(
                        'artikel_tanggal' => $tanggal,
                        'artikel_judul' => $judul,
                        'artikel_slug' => $slug,
                        'artikel_konten' => $konten,
                        'artikel_sampul' => $Sampul,
                        'artikel_author' => $author,
                    );
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->m_data->insert_data($data, 'artikel');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
                Berhasil tambah berita </div>');
            redirect('admin/b_berita');
        }
    }

    public function berita()
    {
        $data['tittle'] = 'Berita';
        $data['artikel'] = $this->db->query("SELECT * FROM artikel,user WHERE artikel_author=name order by id desc")->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/berita', $data);
        $this->load->view('templates/footer');
    }

    public function berita_edit($id)
    {
        $where = array(
            'id' => $id
        );
        $data['tittle'] = 'Edit Berita';
        $data['artikel'] = $this->m_data->edit_data($where, 'artikel')->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/berita_edit', $data);
        $this->load->view('templates/footer');
    }

    public function berita_update()
    {
        $data['tittle'] = 'Buat Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Wajib isi judul,konten dan kategori
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');

        if ($this->form_validation->run() != false) {

            $id = $this->input->post('id');

            $judul = $this->input->post('judul');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');

            $where = array(
                'id' => $id
            );

            $data = array(
                'artikel_judul' => $judul,
                'artikel_slug' => $slug,
                'artikel_konten' => $konten,
            );

            $this->m_data->update_data($where, $data, 'artikel');


            if (!empty($_FILES['sampul']['name'])) {
                $config['upload_path']   = './gambar/artikel/';
                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('sampul')) {

                    // mengambil data tentang gambar
                    $gambar = $this->upload->data();

                    $data = array(
                        'artikel_sampul' => $gambar['file_name'],
                    );

                    $this->m_data->update_data($where, $data, 'artikel');

                    redirect(base_url() . 'admin/berita');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
                Berhasil tambah berita </div>');
                    redirect('admin/berita');
                } else {
                    $this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());

                    $where = array(
                        'id' => $id
                    );
                    $data['artikel'] = $this->m_data->edit_data($where, 'artikel')->result();
                    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/topbar');
                    $this->load->view('admin/berita', $data);
                    $this->load->view('templates/footer');
                }
            } else {
                redirect(base_url() . 'admin/berita');
            }
        } else {
            $id = $this->input->post('id');
            $where = array(
                'id' => $id
            );
            $data['artikel'] = $this->m_data->edit_data($where, 'artikel')->result();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/berita', $data);
            $this->load->view('templates/footer');
        }
    }

    public function berita_hapus($id)
    {
        $where = array(
            'id' => $id
        );

        $this->m_data->delete_data($where, 'artikel');

        redirect(base_url() . 'admin/berita');
    }
}
