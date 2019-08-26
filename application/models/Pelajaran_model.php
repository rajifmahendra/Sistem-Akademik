<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelajaran_model extends CI_Model
{

    public $table = 'tbl_mapel';
    public $id = 'id_mapel';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_mapel,kode_mapel,mapel,jam_mulai,jam_selesai');
        $this->datatables->from('tbl_mapel');
     //  $this->datatables->add_column('is_aktif', '$1', 'rename_string_is_aktif(is_aktif)');
        //add this line for join
       // $this->datatables->join('tbl_kelas', 'tbl_siswa.kode_kelas = tbl_kelas.kode_kelas');
        $this->datatables->add_column('action',anchor(site_url('pelajaran/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ".anchor(site_url('pelajaran/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Hapus data ?\')"'), 'id_mapel');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_mapel', $q);
	$this->db->or_like('kode_mapel', $q);
	$this->db->or_like('mapel', $q);
	$this->db->or_like('jam_mulai', $q);
	
	$this->db->or_like('jam_selesai', $q);

	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_mapel', $q);
    $this->db->or_like('kode_mapel', $q);
    $this->db->or_like('mapel', $q);
    $this->db->or_like('jam_mulai', $q);
    
    $this->db->or_like('jam_selesai', $q);

	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file .php */
/* Location: ./application/models/.php */
/* Please DO NOT modify this information : */
/* Generated by Belicode.com Codeigniter CRUD Generator 2019-10-04 06:32:22 */
/* http://belicode.com */