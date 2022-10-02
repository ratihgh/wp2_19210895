<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	
	public function index()
	{
		echo "<h1>Perkenalan</h1>";
		echo "
		Nama saya Ratih <br>
		Saya tinggal di Bumi <br>
		Olahraga yang saya sukai adalah berenang";
	}
}
