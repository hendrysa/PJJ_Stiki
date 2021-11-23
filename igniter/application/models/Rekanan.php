<?php

class Rekanan extends CI_Model
{
  
  function insert_data($data)
  {
    $this->load->database();
    $id_rekanan = $data['id_rekanan'];
    $nama_rekanan = $data['nama_rekanan'];
    $nama_pic = $data['pic'];
    if(!empty($data['jenis_field'])) {$jenis_rekanan = $data['jenis_field'];}
    else {$jenis_rekanan = $data['jenis'];}
    $lingkup = $data['lingkup'];
    $nomor_telepon = $data['no_tlpn'];
    $email = $data['email'];
    $alamat = $data['alamat'];
    $no_mou = $data['no_mou'];
    $tanggal_mou = $data['tgl_mou'];
    if(!empty($data['kegiatan_field'])) {$kegiatan = $data['kegiatan_field'];}
    else {$kegiatan = $data['kegiatan'];}
    $value = "NULL, '$id_rekanan', '$nama_rekanan', '$nama_pic', '$jenis_rekanan', '$lingkup' , '$nomor_telepon', '$email', '$alamat', '$no_mou', '$tanggal_mou', '$kegiatan'";
    $query = $this->db->query("INSERT INTO Data_Rekanan Values($value)");
    if($query == 1){return TRUE;}
    return FALSE;
  }

  function get_data($data)
  {

  }

  function update_data($data)
  {

  }

      //function get_all($nbank){
        //$query=$this->db->query("SELECT * FROM Bank where Bank='".$nbank."'");
        //return $query->result();
      //}
}
?>