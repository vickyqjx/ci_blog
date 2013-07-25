<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by JetBrains PhpStorm.
 * User: qiujingxian
 * Date: 23/07/13
 * Time: 8:57 AM
 * To change this template use File | Settings | File Templates.
 */

class User extends CI_Controller{

    public function index(){
        $this->sign_in();
    }

    public function sign_in(){
        $this->load->view('user/login');
    }

    public function sign_up(){
        $this->load->view('user/registration');
    }

    public function home(){
        if($this->session->userdata('is_logged_in')){
            $data['email']=$this->session->userdata('email');
            $this->load->model('model_articles');
            $data['selected_category']=0;

            if(isset($_POST['category_id'])){
                $category_id=$_POST['category_id'];
                if($category_id==0){
                    $data['articles'] = $this->model_articles->get_articles($data['email']);
                }else{
                    $data['articles'] = $this->model_articles->get_by_category($data['email'],$category_id);

                }
                $data['selected_category']=$category_id;
            }else{
                $data['articles'] = $this->model_articles->get_articles($data['email']);
            }
            $data['categories']=$this->model_articles->get_categories();
            $this->load->view('user/home',$data);
        }else{
            redirect('user/restricted');
        }
    }

    public function restricted(){
        $this->load->view('user/restricted');
    }

    public function login_validation(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password','Password','required|md5');

        if($this->form_validation->run()){
            $data=array(
                'email'=>$this->input->post('email'),
                'is_logged_in'=>1
            );
            $this->session->set_userdata($data);
            redirect('user/home');
        }else{
            $this->load->view('user/login');
        }
    }

    public function sign_up_validation(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules("email","Email address","required|trim|valid_email|xxs_clean|is_unique[users.email]");
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('re_password', 'Password Confirmation', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique','This email has already exists');

        if($this->form_validation->run()){
            //generate a radom key
            $key=md5(uniqid());

            $this->load->library('email',array('mailtype'=>'html'));
            $this->load->model('model_users');

            $this->email->from('email@ciblog.com',"CI_blog Team");
            $this->email->to($this->input->post('email'));
            $this->email->subject("Confirm your CI_Blog account.");

            $message="<p>Thank you for signing up!</p>";
            $message.="<p><a href='".base_url()."user/register_user/$key'>Click here</a> to confirm your account</p>";

            $this->email->message($message);

            //send an email to the user
            if($this->model_users->add_temp_user($key)){
                if($this->email->send()){
                    echo "The email has been sent!";
                }else{
                    echo "The email could not be sent!";
                }
            }else echo "problem adding to database";

            //add this user to temp_users databse


        }else{
            $this->load->view('user/registration');
        }

    }

    public function validate_credentials(){
        $this->load->model('model_users');

        if($this->model_users->can_log_in()){
            return true;
        }else{
            $this->form_validation->set_message('validate_credentials','Incorrect username/password');
            return false;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('user/sign_in');
    }

    public function register_user($key){
        $this->load->model('model_users');

        if($this->model_users->is_key_valid($key)){
            if($newmail=$this->model_users->add_user($key)){
                $data=array(
                    'email'=>$newmail,
                    'is_logged_in'=>1
                );
                $this->session->set_userdata($data);
                redirect('user/home');
            }else{
                echo "Failed to add user,please try again!";
            }
        }else{
            echo "Invalid key";
        }
    }

    public function article(){
        if($this->session->userdata('is_logged_in')){
            $data['email']=$this->session->userdata('email');
            $this->load->model('model_articles');
            $data['article']=$this->model_articles->get_article($this->input->get('id'));
            $this->load->view('user/article',$data);
        }else{
            redirect('user/restricted');
        }
    }

    public function add_article(){
        if($this->session->userdata('is_logged_in')){
            $data['email']=$this->session->userdata('email');
            $this->load->model('model_articles');
            $data['categories']=$this->model_articles->get_categories();
            $this->load->view('user/add',$data);
        }else{
            redirect('user/restricted');
        }
    }

    public function add_result(){

        if($this->session->userdata('is_logged_in')){

            $this->load->model('model_articles');
            $this->load->helper('date');
            $date=date(("Y-m-d H:i:s"));
            $data['email']= $this->session->userdata('email');
            if($this->model_articles->add_article($data['email'],$date)){
                $article_id=$this->model_articles->get_new_id();
                $data['article']=$this->model_articles->get_article($article_id);
                $this->load->view('user/article',$data);
            }else{
                redirect('user/add_article');
            }
        }else{
            redirect('user/restricted');
        }
    }

    public function edit_article(){
        if($this->session->userdata('is_logged_in')){
            $data['email']=$this->session->userdata('email');
            $this->load->model('model_articles');
            $data['article']=$this->model_articles->get_article($this->input->get('id'));
            $data['categories']=$this->model_articles->get_categories();
            $this->load->view('user/edit',$data);
        }else{
            redirect('user/restricted');
        }
    }

    public function edit_result(){

        if($this->session->userdata('is_logged_in')){

            $this->load->model('model_articles');
            $data['email']= $this->session->userdata('email');
            $article_id=$this->input->post('article_id');

            if($this->model_articles->update_article()){

                $data['article']=$this->model_articles->get_article($article_id);
                $this->load->view('user/article',$data);

            }else{
                redirect('user/edit_article');
            }
        }else{
            redirect('user/restricted');
        }
    }

    public function delete_article(){

        if($this->session->userdata('is_logged_in')){
            $data['email']=$this->session->userdata('email');
            $this->load->model('model_articles');
            $this->model_articles->delete_article();
            redirect('user/home');;
        }else{
            redirect('user/restricted');
        }
    }
}