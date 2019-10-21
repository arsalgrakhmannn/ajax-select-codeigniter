<?php
class Siswa_model extends CI_Model
{
	function tampilkan_kelas()
	{
		$this->db->order_by("kelas_nama", "ASC");
		$kelas = $this->db->get('kelas');
		return $kelas->result();
	}

	function daftar_siswa($siswa_id)
	{
		$this->db->where('id_kelas', $siswa_id);
		$this->db->order_by('nama', 'ASC');
		$this->db->order_by('nim', 'ASC');
		$output = "";
		$query = $this->db->get('siswa');
		foreach($query->result() as $row)
		{
			$output .='<tr>'. 
			'<th scope="row">'.$row->id.'</th>'.
			'<td>'.$row->nama.'</td>'.
			'<td>'.$row->nim.'</td>';
			'</tr>';
		}
		return $output;
	}
}