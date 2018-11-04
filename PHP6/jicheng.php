<?php 
	class PsFather{
		public $xing = '傻逼';
		public $money = 1200;

	}
	//创建子类 使用extends关键字指定父类的属性和方法
	class PsChildren extends PsFather{
		public $name = '二楞';
	}
	$psc = new PsChildren;
	echo $psc->xing.'<hr>';
	echo $psc->money.'<hr>';
	echo $psc->name.'<hr>';

 ?>
