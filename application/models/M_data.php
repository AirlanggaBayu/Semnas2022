<?php
class M_data extends CI_Model
{
    function getdata($tabel)
    {
        return $this->db->get($tabel)->result();
    }
    function pembicara()
    {
        return $this->db->order_by('no', 'ASC')->get('pembicara')->result();
    }
}
