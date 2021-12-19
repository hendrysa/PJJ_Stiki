<?php

class Model_international extends CI_Model
{
  
  function data_to_sql($value, $data)
  {
    foreach($data as $i)
    {
      if(is_array($i))
      {
        foreach($i as $arr_i)
        {
          if(is_array($arr_i))
          {
            foreach($arr_i as $arr_ii)
            {
              $value .= ", '$arr_ii'";
            }
          }
          else
          {
            $value .= ", '$arr_i'";
          }
        }
      }
      else
      {
        $value .= ", '$i'";
      }
    }
    return $value;
  }

  function insert_pendaftaran($data)
  {
    $value = "'NULL'";

    $app_form=$data['app_form'];
		$institution=$data['institution'];
		$pos=$data['pos'];
		$lang=$data['lang'];
		$shs=$data['shs'];
		$current=$data['current'];

    $value = $this->data_to_sql($value, $app_form);
    $value = $this->data_to_sql($value, $institution);
    $value = $this->data_to_sql($value, $pos);
    $value = $this->data_to_sql($value, $lang);
    $value = $this->data_to_sql($value, $shs);
    $value = $this->data_to_sql($value, $current);

    return $value;
  }

  function insert_mhs($last_id, $data)
  { 
    $value = "'NULL'";
    $value .= ", '$last_id'";

		$student=$data['student'];
		$parents=$data['parents'];
		$econtact=$data['econtact'];

    $value = $this->data_to_sql($value, $student);
    $value = $this->data_to_sql($value, $parents);
    $value = $this->data_to_sql($value, $econtact);

    return $value;
  }

  function insert_data($data)
  {
    $this->load->database();

    $value_pdf = $this->insert_pendaftaran($data);
    $query_pdf = $this->db->query("INSERT INTO International_Pendaftaran Values($value_pdf)");
    $last_id = $this->db->insert_id();

    $value_mhs = $this->insert_mhs($last_id, $data);
    $query_mhs = $this->db->query("INSERT INTO International_Mhs Values($value_mhs)");

    #if($query == 1){return TRUE;}
    return FALSE;
  }

  function get_data($id)
  {
    $this->load->database();

    if($id == "All")
    {
      $data = $this->db->query("select International_Pendaftaran.id, International_Pendaftaran.Institution_Name, International_Mhs.Surname, International_Mhs.Givenname, International_Mhs.Middlename from International_Pendaftaran INNER JOIN International_Mhs where International_Pendaftaran.id = International_Mhs.id_pendaftaran");
    }
    
    else
    {
      $data = $this->db->query("select International_Pendaftaran.id, International_Pendaftaran.Institution_Name, International_Mhs.Surname, International_Mhs.Givenname, International_Mhs.Middlename from International_Pendaftaran INNER JOIN International_Mhs where International_Pendaftaran.id = International_Mhs.id_pendaftaran and International_Pendaftaran.id = $id");
    }
    return $data->result();
  }

  function update_data($id, $data)
  {
    $this->load->database();

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

    $query = "UPDATE Data_Rekanan SET `Nama_Rekanan` = '$nama_rekanan', `Nama_PIC` = '$nama_pic', `Jenis_Rekanan` = '$jenis_rekanan', `Lingkup` = '$lingkup', `Nomor_Telepon` = '$nomor_telepon', `Email` = '$email', `Alamat` = '$alamat', `No_MOU` = '$no_mou', `Tanggal_MOU` = '$tanggal_mou', `Kegiatan` = '$kegiatan' WHERE `id` = $id";
    $this->db->query($query);
  }

  function delete_data($id)
  {
    $this->load->database();
    $this->db->query("DELETE FROM Data_Rekanan where id=$id");
  }

}
?>