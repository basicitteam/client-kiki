<?php
//helper autentikasi, buat cek udah login atau belum & yg login admin atau guru atau siswa.
//by rogers dwiputra
function is_login()
{
	$CI =& get_instance();
	if($CI->session->userdata('logged_in') == TRUE)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}