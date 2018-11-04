<?php 
	//类的创建	
	/*class Person{
		//定义类的属性和方法的时候要加上访问修饰符 属性与属性之间用分号隔开
		protected $name = "傻逼";
		private $age = 20;
		public $sex = "男";
		public function show(){
			echo "这是一个方法";
		}
	}
	$person1 = new Person();
	echo $person1->sex;
	$person1->show();*/


	class Person{
		static $age = 18;//定义静态变量
		public $name = "哈哈";
		public $weight = 45;
		function showName(){
			echo $this->name;
		}
		function showAge(){
			// echo $this->age;//不能用this访问静态变量 静态变量属于类本身, 不会被实例化出来的对象所继承,而$this是实例化出来的对象
			self::$age++;
			echo self::$age;
			//echo self::$age;//静态变量调用1 在类的内部调用 使用self::注意静态变量的$不能省去
		}
		function showWeight(){
			$this->weight++;
			echo  $this->weight;
		}
	}
	$person1 = new Person();
	$person2 = new Person();
	// $person1->showName();
	$person1->showAge();
	$person1->showAge();
	$person2->showAge();
	$person1->showWeight();//46
	$person2->showWeight();//46
	//静态变量调用2 类的外部调用
	//echo Person::$age;

	//静态变量调用3 通过实例化的对象来调用
	//echo $person1::$age;
	//静态与普通的区别
	//静态变量只属于类本身 任何实例化的对象对静态变量进行修改都会导致静态变量的值发生改变(静态变量是所有对象共有的)
	//而普通变量只有对象本身对变量进行修改才会发生改变 普通变量只属于对象本身(普通变量是对象私有的)
 ?>
 <script>
 	function Person(){
 		this.name = "傻逼";
 		this.age = 18;
 	}
 	person1 = new Person();
 </script>