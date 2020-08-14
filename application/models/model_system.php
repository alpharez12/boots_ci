<?php
class model extends CI_model{
    public function simpan_db(){
    // $config['upload_path'] = './assets/.';
    // $config['allowed_type'] = 'jpg|png|gif';
    // $config['max_size'] = '2048000';
    // $config['file_name'] = url_title($this->input->post('gambar'));
    // $filename = $this->upload->file_name;
    // $this->upload->initialize($config);


    $data = array (
        'First_Name' => $this->input->post('First Name'),
        'Last_Name' => $this->input->post('Last Name'),
        'Email' => $this->input->post('Email'),
        'Password' => $this->input->post('Password'),
        'Re-Password' => $this->input->post('Re-Password'),

    );
    
    $this->db->insert('user', $data);

    header("location:".base_url().'dashboard/base/login');
    }
}