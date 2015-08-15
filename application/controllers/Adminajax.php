<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Adminajax extends CI_Controller {
	private $_data;//获取到的数据
	function __construct(){
		parent::__construct();
		$this->load->helper("base");
		$this->load->library('GetData');
//		$this->load->model("Dbhandler");
		if(isset($_POST['data'])){
			$this->_data=json_decode($_POST['data']);
		}else{
			echo json_encode(array("result"=>"failed","message"=>"没有得到数据!"));
		}
	}
	public function login(){
		if(property_exists($this->_data, "username") && property_exists($this->_data, "password")){
			$username=$this->_data->username;
			$password=$this->_data->password;
			$info=$this->getdata->getContentAdvance('sxjyadmin',array('username'=>$username));
			if(property_exists($info,'username')){
				$post_pwd=MD5("MonkeyKing".$password);
				$db_pwd=$info->password;
				if($post_pwd==$db_pwd){
					$_SESSION['username']=$info->username;
					$_SESSION['userid']=$info->id;
					$_SESSION['usertype']="admin";
					echo json_encode(array("result"=>"success","message"=>"登录成功!"));
				}
				else{
					echo json_encode(array("result"=>"failed","message"=>"密码错误!"));
				}
			}
			else{
				echo json_encode(array("result"=>"failed","message"=>"用户名不存在!"));
			}
		}else{
			echo json_encode(array("result"=>"failed","message"=>"请输入用户名和密码!"));
		}
	}
	public function logout(){
		unset($_SESSION["username"]);
		unset($_SESSION["userid"]);
		unset($_SESSION["usertype"]);
		$this->load->view('redirect',array("url"=>"/admin/login"));
	}
}