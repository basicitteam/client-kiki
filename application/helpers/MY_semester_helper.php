<?php
//helper buat get semester yg lagi aktif
function get_semester_aktif()
{
	$CI =& get_instance();
	$aktif = $CI->M_tahun_ajaran->get_semester_aktif();
	return $aktif['id_semester'];
}