<?php

class Dataa extends CI_Controller {
    public function index()
    {
        $data['title'] = 'home';
        $this->load->view('template/header.php', $data);
        $this->load->view('tampil/index');
        $this->load->view('template/footer.php');
    }
}

?>