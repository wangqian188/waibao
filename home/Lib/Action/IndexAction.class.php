<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	//首页
    public function index(){
    	$this->display();
    }
    //页面的头部
    public function head(){
    	$this->display();
    }
    //页面的头部加图片轮播
    public function headbrodcast(){
    	$this->display();
    }
	
	//关于我们
	public function aboutus(){
		$this->display();
	}
	
	//业务范围的详情--银行安防
	public function abusbank(){
		$this->display();
	}
	//业务范围的详情--学校安防
	public function schoolanf(){
		$this->display();
	}
	//业务范围的详情--国企安防
	public function composanf(){
		$this->display();
	}
	//业务范围的详情--其他
	public function otheryew(){
		$this->display();
	}
	
	
}