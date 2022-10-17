<?php

	class home extends CI_Controller{

	public function index()
	{
	 echo 'Belajar Web Framework';
	}
public function tampil()
{
	return $this->load->view('v_tampil');
}

}
