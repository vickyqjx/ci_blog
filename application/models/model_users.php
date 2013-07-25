<?php
/**
 * Created by JetBrains PhpStorm.
 * User: qiujingxian
 * Date: 23/07/13
 * Time: 10:52 AM
 * To change this template use File | Settings | File Templates.
 */

class Model_users extends CI_Model{

    public function can_log_in(){
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',md5($this->input->post('password')));
        $query=$this->db->get('users');

        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }

    public function add_temp_user($key){

        $data=array(
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'key'=>$key
        );

        $query=$this->db->insert('temp_users',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function is_key_valid($key){
        $this->db->where('key',$key);
        $query=$this->db->get('temp_users');

        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }

    public function add_user($key){
        $this->db->where('key',$key);
        $temp_user=$this->db->get('temp_users');

        if($temp_user){
            $row=$temp_user->row();
            $data=array(
                'email'=>$row->email,
                'password'=>$row->password
            );

            $did_add_user=$this->db->insert('users',$data);
        }

        if($did_add_user){
            $this->db->where('key',$key);
            $this->db->delete('temp_users');
            return true;
        }else{
            return false;
        }
    }

}