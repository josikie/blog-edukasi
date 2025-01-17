<?php

class M_post extends CI_Model
{
	
	public function getArticle($limit,$offset,$where = array()) {
        $this->db->select('posts.*,category.name')
            ->from('posts')
            ->join('category','category.id=posts.category_id','left');
            if(!empty($where))
            $this->db->where($where);
            $this->db->order_by('id', 'desc');
        return $this->db->limit($limit,$offset)->get();
    }

    public function getTopArticle($limit,$where) {
        $this->db->select('posts.*,category.name')
            ->from('posts')
            ->join('category','category.id=posts.category_id','left');
            if(!empty($where))
            $this->db->where($where);
        $this->db->order_by('viewer','DESC');
        return $this->db->limit($limit)->get();
    }

    public function getPrevArticle($id) {
        $this->db->select('posts.*,category.name')
            ->from('posts')
            ->join('category','category.id=posts.category_id','left')
            ->where('posts.id <', $id);
        return $this->db->get();
    }

    public function getNextArticle($id) {
        $this->db->select('posts.*,category.name')
            ->from('posts')
            ->join('category','category.id=posts.category_id','left')
            ->where('posts.id >', $id);
        return $this->db->get();
    }

    public function getCategories() {
        return $this->db->get('category')->result();
    }

    public function getComments($id) {
        $this->db->select('comments.*,users.name,users.image,users.email')
            ->from('comments')
            ->join('users','users.id=comments.user_id','left')
            ->where('comments.post_id', $id);
        return $this->db->get();            
    }

    public function getRecentPost($limit = 0) {
        $this->db->select('posts.*,category.name')
            ->from('posts')
            ->join('category','category.id=posts.category_id','left');
            if($limit!=0){
                $this->db->limit($limit);
            }
            $this->db->order_by('posts.date','desc');
        return $this->db->get();
    }

    public function updateViewer($id) {
        $sql = "UPDATE posts SET viewer=viewer+1 WHERE id=?";
        $this->db->query($sql, [$id]);
    }

    public function get_count() {
        return $this->db->count_all("posts");
    }

    public function fetch_data($limit, $start) {
        $this->db->select('posts.*,category.name')
        ->from('posts')
        ->join('category','category.id=posts.category_id','left');
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    public function insert($id, $data) {
        return $this->db->insert('posts',$data);
    }

    public function update($id, $data) {
        return $this->db->update('posts',$data, ['id' => $id]);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('posts');
    }
}
