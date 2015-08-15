<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('/home/index');
	}
	public function news(){
		$this->load->view('/home/news');
	}
	public function newsSub(){
		$this->load->view('/home/newsSub');
	}
	public function edu(){
		$this->load->view('/home/edu');
	}
	public function eduSub(){
		$this->load->view('/home/eduSub');
	}
	public function area(){
		$this->load->view('/home/area');
	}
	public function areaSub(){
		$this->load->view('/home/areaSub');
	}
	public function enrol(){
		$this->load->view('/home/enrol');
	}
	public function enrolSub(){
		$this->load->view('/home/enrolSub');
	}
	public function school(){
		$this->load->view('/home/school');
	}
	public function schoolSub(){
		$this->load->view('/home/schoolSub');
	}
	public function policy(){
		$this->load->view('/home/policy');
	}
	public function policySub(){
		$this->load->view('/home/policySub');
	}
	public function active(){
		$this->load->view('/home/active');
	}
	public function about(){
		$this->load->view('/home/about');
	}
}
