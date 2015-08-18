<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("base");
		$this->load->library('GetData');
		$this->load->model("Dbhandler");
	}
	public function checkAdminLogin(){
		if (!checkLogin() || strcmp($_SESSION["usertype"], "admin")) {
			$this->load->view('redirect',array("url"=>"/admin/login","info"=>"请先登录管理员账号"));
			return false;
		}else return true;
	}
	public function login(){
		$this->load->view('admin/login',array('title'=>"管理员登录"));
	}
	/*
	public function adminBaseHandler($title,$slider,$view,$data){
		$this->checkAdminLogin();
		$websiteName=$this->commongetdata->getWebsiteConfig("website_name");
		$this->load->view('admin/header',
			array(
				'title' => $title."-".$websiteName,
				'showSlider' => true,
				$slider => true,
				'websiteName'=>$websiteName
			)
		);
		$this->load->view('admin/'.$view,$data);
		$this->load->view('admin/footer');
	}*/
	public function adminBaseHandler($title,$sider,$view,$data){
		if(!$this->checkAdminLogin()) return false;
//		$websiteConfig=$this->commongetdata->getWebsiteConfig("ALLINFO");
//		$websiteName=$websiteConfig['website_name_'.$_SESSION['language']];
		$this->load->view('admin/header',
			array(
				'title' => $title." - 山西教育在线",
				'showSider' => true,
				'sider' => $sider,
				'websiteName'=>"山西教育在线"
			)
		);
		$this->load->view('admin/'.$view,$data);
		$this->load->view('admin/footer');
	}
	public function index(){
		$data=array();
		$this->adminBaseHandler('首页',array('index'=>true),'index',$data);
	}
	public function news(){
		$data=array();
		$this->adminBaseHandler('新闻管理',array('content'=>true,'news'=>true),'news',$data);
	}
	public function columnList(){
		$data=array();
		$this->load->view('admin/columnList',$data);
	}
	public function backup(){
		$this->checkAdminLogin();
		// 加载数据库工具类
		$this->load->dbutil();
		$fileName=$_GET['filename'];
		$prefs = array(
			'tables'      => array(),  // 包含了需备份的表名的数组.
			'ignore'      => array('column'),           // 备份时需要被忽略的表
			'format'      => 'txt',             // gzip, zip, txt
			'filename'    => $fileName,    // 文件名 - 如果选择了ZIP压缩,此项就是必需的
			'add_drop'    => TRUE,              // 是否要在备份文件中添加 DROP TABLE 语句
			'add_insert'  => TRUE,              // 是否要在备份文件中添加 INSERT 语句
			'newline'     => "\n"               // 备份文件中的换行符
		);
		// 备份整个数据库并将其赋值给一个变量
		$backup =& $this->dbutil->backup($prefs);
		// 加载文件辅助函数并将文件写入你的服务器
		$this->load->helper('file');
		write_file($fileName, $backup);
		$condition=array(
			"table"=>'websiteconfig',
			"where"=>array('key_websiteconfig'=>'last_backup_time'),
			"data"=>array('value_websiteconfig'=>date("Y-m-d H:i:s"))
		);
		$this->dbHandler->updateData($condition);
		// 加载下载辅助函数并将文件发送到你的桌面
		$this->load->helper('download');
		force_download($fileName, $backup);
	}
}