<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("base");
		$this->load->library('GetData');
	}

	public function index(){
		//滚动
		$parameters=array(
			'result'=>'data',
			'column'=>76,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['sliders']=$this->getdata->getEssays($parameters);
		//通知
		$parameters=array(
			'result'=>'data',
			'column'=>77,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['notifications']=$this->getdata->getEssays($parameters);

		//中间广告1
		$parameters=array(
			'result'=>'data',
			'column'=>82,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['midAdvertisement1']=$this->getdata->getEssays($parameters);
		//中间广告2
		$parameters=array(
			'result'=>'data',
			'column'=>83,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['midAdvertisement2']=$this->getdata->getEssays($parameters);
		//新闻
		$subColumns=$this->getdata->getColumns('news',true);
		$parameters=array(
			'result'=>'data',
			'columns'=>$subColumns,
			'nocolumns'=>2,
			'limit'=>array('limit'=>6,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['news']=$this->getdata->getEssays($parameters);
		//资讯
		$parameters=array(
			'result'=>'data',
			'column'=>2,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['informations']=$this->getdata->getEssays($parameters);
		//时评
		$parameters=array(
			'result'=>'data',
			'column'=>3,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['reviews']=$this->getdata->getEssays($parameters);

		//教育
		$subColumns=$this->getdata->getColumns('edu',true);
		$parameters=array(
			'result'=>'data',
			'columns'=>$subColumns,
			'limit'=>array('limit'=>7,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['edu']=$this->getdata->getEssays($parameters);
		//招考
		$subColumns=$this->getdata->getColumns('enrol',true);
		$parameters=array(
			'result'=>'data',
			'columns'=>$subColumns,
			'limit'=>array('limit'=>6,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['enrol']=$this->getdata->getEssays($parameters);
		
		//市县
		$subColumns=$this->getdata->getColumns('area',true);
		$parameters=array(
			'result'=>'data',
			'columns'=>$subColumns,
			'limit'=>array('limit'=>6,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['area']=$this->getdata->getEssays($parameters);

		//公告
		$parameters=array(
			'result'=>'data',
			'column'=>78,
			'limit'=>array('limit'=>9,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['bulletins']=$this->getdata->getEssays($parameters);

		//政策
		$subColumns=$this->getdata->getColumns('policy',true);
		$parameters=array(
			'result'=>'data',
			'columns'=>$subColumns,
			'limit'=>array('limit'=>7,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['policy']=$this->getdata->getEssays($parameters);


		//电子报刊
		$parameters=array(
			'result'=>'data',
			'column'=>79,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['epress']=$this->getdata->getEssays($parameters);
		//视频新闻
		$parameters=array(
			'result'=>'data',
			'column'=>80,
			'limit'=>array('limit'=>3,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['videonews']=$this->getdata->getEssays($parameters);
		//右下广告
		$parameters=array(
			'result'=>'data',
			'column'=>81,
			'limit'=>array('limit'=>6,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['rightDownAdvertisements']=$this->getdata->getEssays($parameters);
		$this->load->view('/home/index',$data);
	}
	public function search(){
		$keywords=isset($_GET['keywords'])?$_GET['keywords']:'';
		$baseUrl='/home/search?keywords='.$keywords;
		$selectUrl='/home/search?keywords='.$keywords;
		$currentPage=isset($_GET['page'])?$_GET['page']:1;
		$amountPerPage=20;
		// $subColumns=$this->getdata->getColumns($english,true);
		$parameters=array('keywords'=>$keywords);
		if(isset($_GET['column'])){
			$parameters['column']=$_GET['column'];
		}
		// else{
		// 	$parameters['columns']=$subColumns;
		// }
		// if(isset($_GET['keywords'])) $parameters['keywords']=$_GET['keywords'];

		$parameters['result']='count';
		$amount=$this->getdata->getEssays($parameters);
		$pageInfo=$this->getdata->getPageLink($baseUrl,$selectUrl,$currentPage,$amountPerPage,$amount);

		$parameters['result']='data';
		$parameters['limit']=$pageInfo['limit'];
		$parameters['orderBy']=array('time'=>'DESC');

		$essays=$this->getdata->getEssays($parameters);
		$data=array(
			'essays'=>$essays,
			'pageInfo'=>$pageInfo
		);
		$this->load->view('/home/search',$data);
	}
	public function news(){
		$this->load->view('/home/news');
	}
	public function channel1(){
		$this->load->view('/home/channel1');
	}
	public function channel2(){
		$this->load->view('/home/channel2');
	}
	public function channel3(){
		$this->load->view('/home/channel3');
	}
	public function newsSub(){
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
			$this->load->view('redirect',array('info'=>'抱歉，链接错误！'));
			return false;
		}
		$id=$_GET['id'];
		$baseUrl='/home/newsSub?id='.$id;
		$selectUrl='/home/newsSub?id='.$id;
		$currentPage=isset($_GET['page'])?$_GET['page']:1;
		$amountPerPage=20;
		// $subColumns=$this->getdata->getColumns($english,true);
		$parameters=array('column'=>$id);
		// if(isset($_GET['column'])){
		// 	$parameters['column']=$_GET['column'];
		// }
		// else{
		// 	$parameters['columns']=$subColumns;
		// }
		// if(isset($_GET['keywords'])) $parameters['keywords']=$_GET['keywords'];

		$parameters['result']='count';
		$amount=$this->getdata->getEssays($parameters);
		$pageInfo=$this->getdata->getPageLink($baseUrl,$selectUrl,$currentPage,$amountPerPage,$amount);

		$parameters['result']='data';
		$parameters['limit']=$pageInfo['limit'];
		$parameters['orderBy']=array('time'=>'DESC');

		$essays=$this->getdata->getEssays($parameters);
		$data=array(
			'essays'=>$essays,
			'pageInfo'=>$pageInfo
		);
		$this->load->view('/home/newsSub',$data);
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
	public function detail(){
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
			$this->load->view('redirect',array('info'=>'抱歉，链接错误！'));
			return false;
		}
		$data=array();
		$data['essay']=$this->getdata->getContent('essay',$_GET['id']);
		$data['column']=$this->getdata->getContent('column',$data['essay']->column);
		$this->load->view('/home/detail',$data);
	}
	public function login(){
		$this->load->view('/home/login');
	}
	public function register(){
		$this->load->view('/home/regMail');
	}
}
