<?php
class M_dewaUser extends CI_Model
{  
   function insertpengaduan($data)
   {
      $this->db->insert('pengaduan', $data);
   }


   public function pengaduan()
   {
      $user = $this->db->get_where('masyarakat',['username'=>$this->session->userdata('username')])->row_array();
      
      $this->db->select('*');
      $this->db->from('pengaduan');
      $this->db->join('kategori','kategori.id=pengaduan.kategori');
      $this->db->join('subkategori','subkategori.id_subkategori=pengaduan.subkategori');
      $this->db->where('pengaduan.nik',$user['nik']);

      return $this->db->get(); 
   }


   public function editProfil($update)
	{
		$this->db->update('masyarakat', $update);
	}

}
