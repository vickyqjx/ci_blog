<?php
/**
 * Created by JetBrains PhpStorm.
 * User: qiujingxian
 * Date: 25/07/13
 * Time: 4:36 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin extends CI_Controller{

    public function index(){
        $this->login();
    }

    public function login(){
        $this->load->view('admin/index');
    }

    public function home(){
        if($this->session->userdata('logged_in')){
            $data['name']=$this->session->userdata('name');
            $this->load->view('admin/home',$data);
        }else{
            redirect('user/restricted');
        }
    }

    public function restricted(){
        $this->load->view('user/restricted');
    }

    public function login_validation(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name','Admin Name','required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password','Password','required|md5');

        if($this->form_validation->run()){
            $data=array(
                'name'=>$this->input->post('name'),
                'logged_in'=>1
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        }else{
            $this->load->view('admin/index');
        }
    }

    public function validate_credentials(){
        $this->load->model('model_admins');

        if($this->model_admins->can_log_in()){
            return true;
        }else{
            $this->form_validation->set_message('validate_credentials','Incorrect username/password');
            return false;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    public function view_category(){
        if($this->session->userdata('logged_in')){
            $data['name']=$this->session->userdata('name');
            $this->load->model('model_articles');
            $data['categories']=$this->model_articles->get_categories();
            $this->load->view('admin/category',$data);
        }else{
            redirect('user/restricted');
        }
    }

    public function add_category(){
        if($this->session->userdata('logged_in')){
            $data['name']=$this->session->userdata('name');
            $this->load->model('model_articles');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('category_name','Category','required|is_unique[categories.name]');

            if($this->form_validation->run()){
                $this->model_articles->add_category();
                $data['categories']=$this->model_articles->get_categories();
                $this->load->view('admin/category',$data);
            }
            else{
                $data['categories']=$this->model_articles->get_categories();
                $this->load->view('admin/category',$data);
            }
        }else{
            redirect('user/restricted');
        }
    }

}