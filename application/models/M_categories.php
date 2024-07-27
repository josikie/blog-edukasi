<?php

class M_categories extends CI_Model
{
	
	public function all() {
        return $this->db->select('*,(SELECT COUNT(*) FROM posts WHERE posts.category_id=category.id) AS count')->order_by('name','asc')->get('category');
    }

    public function insert($id, $data) {
        return $this->db->insert('category',$data);
    }

    public function update($id, $data) {
        return $this->db->update('category',$data, ['id' => $id]);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }
}
