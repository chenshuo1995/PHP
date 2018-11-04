<?php 
	define('PI','3.14');
	echo PI;
	class Person{
		//常量定义不需要加$
		const sex = "男";
		function showSex(){
			//常量的访问方式1:在类内部访问使用self::
			echo self::sex;
		}
	}
	$person1 = new Person();
	// $person1->showSex();
	
	//常量的访问方式2 在类外部访问
	//echo Person::sex;//通过类名访问
	
	echo $person1::sex;//通过实例化对象
 ?>