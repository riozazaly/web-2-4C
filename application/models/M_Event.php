<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Event extends CI_Model
{
    public function getAllEvent()
    {
        return $this->db->get('event_kampus')->result();
    }

    public function insertEvent($data)
    {
        return $this->db->insert('event_kampus', $data);
    }

    public function getEventById($id)
    {
        return $this->db->get_where('event_kampus', ['id' => $id])->row();
    }

    public function updateEvent($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('event_kampus', $data);
    }

    public function deleteEvent($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('event_kampus');
    }
}
