<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_plane extends CI_Model{

       function allplane()
       {
         return $this->db->get('cod_plane');
       }

       function insert($data){
        $this->db->insert('cod_plane', $data);
        return TRUE;
       }

       function delete($cond){
        $this->db->delete('cod_plane', $cond);
       }

       function update($data,$id){
        $this->db->where('id_pla',$id)->update('cod_plane', $data);
       }
  }