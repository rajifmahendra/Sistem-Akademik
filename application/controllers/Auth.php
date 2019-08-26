<?php
Class Auth extends CI_Controller{
    
    
    
    function index(){
        $this->load->view('auth/login');
    }
    
    function cheklogin(){
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        //$password = $this->input->post('password',TRUE);
        //$hashPass = password_hash($password,PASSWORD_DEFAULT);
        //$test     = password_verify($password, $hashPass);
        // query chek users
        $this->db->where('email',$email);
        $this->db->where('password',  $password);
        $users       = $this->db->get('tbl_user');
        if($users->num_rows()>0){
            $user = $users->row_array();
             $this->session->set_userdata($user);
                redirect('welcome');
            
        }else{
            $this->session->set_flashdata('status_login','email atau password yang anda input salah');
            redirect('auth');
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }
}
