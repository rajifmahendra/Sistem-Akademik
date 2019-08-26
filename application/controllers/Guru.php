<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Guru_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','guru/tbl_guru_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Guru_model->json();
    }

    public function read($id) 
    {
        $row = $this->Guru_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_guru'      => $row->id_guru,
		'nip'     => $row->nip,
		'nama_guru'         => $row->nama_guru,
		
		'no_telp'        => $row->no_telp,
		'alamat' => $row->alamat,
		
                'password'      => $row->password,
	    );
            $this->template->load('template','guru/tbl_guru_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }

    public function create() 
    {
        $data = array(
            'button'        => 'Create',
            'action'        => site_url('guru/create_action'),
	    'id_guru'      => set_value('id_guru'),
	    'nip'     => set_value('nip'),
	    'nama_guru'         => set_value('nama_guru'),
	   
	    'no_telp'        => set_value('no_telp'),
	    'alamat' => set_value('alamat'),
	   
     
        'password'      => set_value('password'),
	);
        $this->template->load('template','guru/tbl_guru_form', $data);
    }
    
    
    public function create_action() 
    {
        $this->_rules();
      //  $foto = $this->upload_foto();
      
            $this->create();
      
            $data = array(
		'nip'     => $this->input->post('nip',TRUE),
		'nama_guru'         => $this->input->post('nama_guru',TRUE),
		
		
		'no_telp' => $this->input->post('no_telp',TRUE),
		'alamat'      => $this->input->post('alamat',TRUE),
    
        'password'      => $this->input->post('password',TRUE),
	    );

            $this->Guru_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('guru'));
        
    }
    
    public function update($id) 
    {
        $row = $this->Guru_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button'        => 'Update',
                'action'        => site_url('guru/update_action'),
		'id_guru'      => set_value('id_guru', $row->id_guru),
		'nip'     => set_value('nip', $row->nip),
		'nama_guru'         => set_value('nama_guru', $row->nama_guru),
		
		'no_telp'        => set_value('no_telp', $row->no_telp),
		'alamat' => set_value('alamat', $row->alamat),
		
     
        'password'      => set_value('password', $row->password),
	    );
            $this->template->load('template','guru/tbl_guru_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();
     
      
            $this->update($this->input->post('id_guru', TRUE));
     
          $data = array(
        'nip'     => $this->input->post('nip',TRUE),
        'nama_guru'         => $this->input->post('nama_guru',TRUE),
        
        
        'no_telp' => $this->input->post('no_telp',TRUE),
        'alamat'      => $this->input->post('alamat',TRUE),
    
        'password'      => $this->input->post('password',TRUE),);

            $this->Guru_model->update($this->input->post('id_guru', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('guru'));
    
    }
    
    
    function upload_foto(){
        $config['upload_path']          = './assets/foto_profil';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('images');
        return $this->upload->data();
    }
    
    public function delete($id) 
    {
        $row = $this->Guru_model->get_by_id($id);

        if ($row) {
            $this->Guru_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('guru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('usguruer'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('full_name', 'full name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	//$this->form_validation->set_rules('password', 'password', 'trim|required');
	//$this->form_validation->set_rules('images', 'images', 'trim|required');
	$this->form_validation->set_rules('id_user_level', 'id user level', 'trim|required');
	$this->form_validation->set_rules('is_aktif', 'is aktif', 'trim|required');

	$this->form_validation->set_rules('id_users', 'id_users', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_user.xls";
        $judul = "tbl_user";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Full Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Images");
	xlsWriteLabel($tablehead, $kolomhead++, "Id User Level");
	xlsWriteLabel($tablehead, $kolomhead++, "Is Aktif");

	foreach ($this->Guru_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->full_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->images);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_user_level);
	    xlsWriteLabel($tablebody, $kolombody++, $data->is_aktif);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_user.doc");

        $data = array(
            'tbl_guru_data' => $this->Guru_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('guru/tbl_guru_doc',$data);
    }
    
    function profile(){
        
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-04 06:32:22 */
/* http://harviacode.com */