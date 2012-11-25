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

function is_admin()
{
	$CI =& get_instance();
	if($CI->session->userdata('role') == 'admin')
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function is_guru()
{
	$CI =& get_instance();
	if($CI->session->userdata('role') == 'guru')
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function is_siswa()
{
	$CI =& get_instance();
	if($CI->session->userdata('role') == 'siswa')
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}