<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RiwayatModel extends CI_Model
{

    var $table = 'riwayat';
    var $column_order = array(null, 'a.tanggal', 'b.nama', 'b.username', 'a.tipe', 'a.description'); //set column field database for datatable orderable
    var $column_search = array('a.tanggal', 'b.nama', 'b.username', 'a.tipe', 'a.description'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('a.id' => 'desc'); // default order 

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();
    // }

    private function _get_datatables_query()
    {

        $this->db->select('a.*, b.nama, b.username');
        $this->db->join('users b', 'b.id = a.user_id', 'left');
        $this->db->from($this->table . ' a');

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function save_log($param)
    {
        $sql = $this->db->insert_string('riwayat', $param);
        $ex = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }
}
