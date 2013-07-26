<?php
/**
 * Created by JetBrains PhpStorm.
 * User: qiujingxian
 * Date: 24/07/13
 * Time: 3:34 PM
 * To change this template use File | Settings | File Templates.
 */

class Model_articles extends CI_Model{

    //Get all the articles created by User whose email is $email
    public function get_articles($email){
        $query=$this->db->query('SELECT articles.* FROM articles,users,user_article
        WHERE users.id=user_article.user_id and user_article.article_id=articles.id
        and users.email="'.$email.'"');
        return $query->result();
    }

    public function get_by_category($email,$category_id){
        $query=$this->db->query('SELECT articles.* FROM articles,users,user_article,article_category
        WHERE users.id=user_article.user_id AND user_article.article_id=articles.id
        AND article_category.article_id=articles.id AND users.email="'.$email.'" AND
        article_category.category_id="'.$category_id.'"');
        return $query->result();
    }

    //Get the most recent added article ID
    public function get_new_id(){
        $this->db->select_max('id', 'max_id');
        $query = $this->db->get('articles');
        $article_id=$query->row()->max_id;
        return $article_id;
    }

    //User whose email is $email add a new article
    public function add_article($email,$date){
        //add to Table 'articles'
        $data=array(
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content'),
            'time'=>$date
        );
        $query=$this->db->insert('articles',$data);

        if($query){;
            $article_id=$this->get_new_id();

            $this->db->where('email',$email);
            $query2=$this->db->get('users');
            $user_id=$query2->row()->id;

            //add to Table 'user_article'
            $data=array(
                'user_id'=>$user_id,
                'article_id'=>$article_id,
            );
            $query3=$this->db->insert('user_article',$data);

            if($query3){
                $category_id=$this->input->post('category');

                //add to Table 'article_category'
                $data=array(
                    'category_id'=>$category_id,
                    'article_id'=>$article_id,
                );
                $query4=$this->db->insert('article_category',$data);

                if($query4){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    //Get the article information(id, title, date, content, category)
    public function get_article($article_id){
        $query=$this->db->query('SELECT articles.*,categories.name as category_name,categories.id
        as category_id, article_category.id as article_category_id FROM articles,categories,article_category
        WHERE categories.id=article_category.category_id AND article_category.article_id=articles.id
        AND articles.id="'.$article_id.'"');
        return $query->row();
    }

    //Get all the categories in the Database
    public function get_categories(){
        $query=$this->db->get('categories');
        return $query->result();
    }

    //Add new category in the Database
    public function add_category(){
        $data=array(
            'name'=>$this->input->post('category_name'),
        );

        $query=$this->db->insert('categories',$data);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    //Update article
    public function update_article(){
        //Update Table "articles"
        $article_id=$this->input->post('article_id');
        $data=array(
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content')
        );

        if($this->db->update('articles', $data, array('id'=>$article_id))){
            //update Table "article_category"
            if($this->input->post('category')==null){
                return true;
            }else{
                $article_category_id=$this->input->post('article_category_id');
                $data2=array(
                    'article_id'=>$article_id,
                    'category_id'=>$this->input->post('category')
                );
                if($this->db->update('article_category', $data2, array('id'=>$article_category_id))){
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }

    //Delete article
    public function delete_article(){
        $article_id=$this->input->get('id');
        if($this->db->delete('articles', array('id' => $article_id))){
            $this->db->delete('user_article', array('article_id' => $article_id));
            $this->db->delete('article_category', array('article_id' => $article_id));
            return true;
        }else{
            return false;
        }
    }

}