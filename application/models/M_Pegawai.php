<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Pegawai extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
 
    function get_list($limit, $offset) {
        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        $this->db->order_by('nip ASC, nama_pegawai ASC');
        $result['rows'] = $this->db->get('pegawai', $limit, $offset);
        $result['num_rows'] = $this->db->count_all_results('pegawai');
        return $result;
    }
 
    function export_csv(){
        $query = $this->db->get('pegawai');
        return $query;
    }
}
