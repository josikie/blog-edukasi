<?php

class M_users extends CI_Model
{
	
	public function all() {
        return $this->db->order_by('name','asc')->get('users');
    }

    public function insert($id, $data) {
        return $this->db->insert('users',$data);
    }

    public function update($id, $data) {
        return $this->db->update('users',$data, ['id' => $id]);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
