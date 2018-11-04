<?php 
	class Person{
		public $name;
		public $age;
		//创建构造函数 名字必须为__construct 
		function __construct($n,$a){
			$this->name = $n;
			$this->age = $a;
		}

	}
	$person1 = new Person('哈哈',20);
	$person2 = new Person('呵呵',18);
	echo $person1->name;
	echo $person2->name;
?>
<script>
	function Person(name,age){
		this.name = name;
		this.age = age;
	}
	var person1 = new Person('傻逼',12);
	var person2 = new Person('智障',12);
	console.log(person1);
	console.log(person2);
</script>