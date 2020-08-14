<?php

class Dashboard extends CI_Controller
{
    
    
    
    
    public function index()
    {
        $data['title'] = 'home';
        $this->load->view('template/header.php', $data);
        $this->load->view('index');
        $this->load->view('template/footer.php');
    }
    
    public function login(){
        $data['title'] = "login";
        $this->load->view('login', $data);
    }
    public function about(){
        $data['title'] = "about";
        $this->load->view('about', $data);
    }
    public function reggister(){
        $data['title'] = "reggister";
        $this->load->view('reggister', $data);
    }
    // public function __construct(){
        
        //     parent::__construct();
        //     $this->load->model('model_system');
        //     // }
        //     public function index(){
            //         $data['title'] = "Belajar CI";
            //         $this->load->view('base', $data);
    //     }
    //     public function home(){
    //         $data['title'] = "home";
    //         $this->load->view('base', $data);
    //     }
    //     // public function simpan_data(){
    //     //     $this->model_system->simpan_db();
    //     // }



}
