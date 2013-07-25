<?php
/**
 * Created by JetBrains PhpStorm.
 * User: qiujingxian
 * Date: 25/07/13
 * Time: 5:28 PM
 * To change this template use File | Settings | File Templates.
 */

class View extends CI_Controller{

    public function index(){
        $this->viewUser();
    }

    public function viewUser(){
        $this->load->model('model_users');
        $data['users']=$this->model_users->get_all();
        $this->load->view('index',$data);
    }

    public function blog(){
        $this->load->model('model_users');
        $this->load->model('model_articles');
        $username=$this->input->get('username');
        $data['user']=$this->model_users->get_user($username);
        $email=$data['user']->email;
        $data['articles']=$this->model_articles->get_articles($email);
        $this->load->view('blog',$data);
    }
}