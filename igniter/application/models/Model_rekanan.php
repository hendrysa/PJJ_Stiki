<?php

class Model_rekanan extends CI_Model
{
  
  function insert_data($data)
  {
    $this->load->database();
    
    $id_rekanan = $data['id_rekanan'];
    $nama_rekanan = $data['nama_rekanan'];
    $nama_pic = $data['pic'];
    $jenis_rekanan = $data['jenis'];
    $lingkup = $data['lingkup'];
    $nomor_telepon = $data['no_tlpn'];
    $email = $data['email'];
    $alamat = $data['alamat'];
    $no_mou = $data['no_mou'];
    $tanggal_mou = $data['tgl_mou'];
    $kegiatan = $data['kegiatan'];
    $value = "NULL, '$id_rekanan', '$nama_rekanan', '$nama_pic', '$jenis_rekanan', '$lingkup' , '$nomor_telepon', '$email', '$alamat', '$no_mou', '$tanggal_mou', '$kegiatan'";
    $query = $this->db->query("INSERT INTO Data_Rekanan Values($value)");
    if($query == 1){return TRUE;}
    return FALSE;
  }

  function get_data($id)
  {
    $this->load->database();

    if($id == "All")
    {
      $data = $this->db->query("Select * from Data_Rekanan");
    }
    
    else
    {
      $data = $this->db->query("Select * from Data_Rekanan where id=$id");
    }
    return $data->result();
  }

  function update_data($id, $data)
  {
    $this->load->database();

    $id_rekanan = $data['id_rekanan'];
    $nama_rekanan = $data['nama_rekanan'];
    $nama_pic = $data['pic'];
    $jenis_rekanan = $data['jenis'];
    $lingkup = $data['lingkup'];
    $nomor_telepon = $data['no_tlpn'];
    $email = $data['email'];
    $alamat = $data['alamat'];
    $no_mou = $data['no_mou'];
    $tanggal_mou = $data['tgl_mou'];
    $kegiatan = $data['kegiatan'];

    $query = "UPDATE Data_Rekanan SET `ID_Rekanan` = '$id_rekanan', `Nama_Rekanan` = '$nama_rekanan', `Nama_PIC` = '$nama_pic', `Jenis_Rekanan` = '$jenis_rekanan', `Lingkup` = '$lingkup', `Nomor_Telepon` = '$nomor_telepon', `Email` = '$email', `Alamat` = '$alamat', `No_MOU` = '$no_mou', `Tanggal_MOU` = '$tanggal_mou', `Kegiatan` = '$kegiatan' WHERE `id` = $id";
    $this->db->query($query);
  }

  function delete_data($id)
  {
    $this->load->database();
    $this->db->query("DELETE FROM Data_Rekanan where id=$id");
  }

}
?>