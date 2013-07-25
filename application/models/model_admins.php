<?php
/**
 * Created by JetBrains PhpStorm.
 * User: qiujingxian
 * Date: 25/07/13
 * Time: 4:36 PM
 * To change this template use File | Settings | File Templates.
 */

class Model_admins extends CI_Model{

    public function can_log_in(){
        $this->db->where('name',$this->input->post('username'));
        $this->db->where('password',md5($this->input->post('password')));
        $query=$this->db->get('admins');

        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }

}