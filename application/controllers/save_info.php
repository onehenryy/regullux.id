<?php
class save_info extends CI_models{
	function simpan_info($nama_depan,$nama_belakang,$email){
		$save=$this->db->query("INSERT INTO regullux_info (nama_depan,nama_belakang,email) VALUES ('$first_name','$last_name','$email')")
		return $save;
		}
}