
<?php  
	/*
		php标记
		<?php 开始标记 ?>结束标记  所有的php代码都写在这对标记里面  标记之外的代码会被全部忽略 当文件里只有php代码时结束标记可以忽略
		指令分隔符
		；所有的功能性语句必须以指令分隔符结束

		注释：注释不会被php解析器解析 
		 1.记录代码功能 2、调试
		单行注释  // 
		多行注释 /** /
		文档注释 /

		输出语句
		echo  print 
		print_r(); 输出数组
		var_dump()  能输出所有的数据类型 输出更详细的数据信息 是调试过程中频繁使用到的输出函数




	 */
	/**
	 * [foo description]
	 * @param  [type] $name [description]
	 * @param  [type] $age  [description]
	 * @return [type]       [description]
	 */
	

		//echo "hello world";
		/*
			echo "hello world";
			echo "hello world";
			echo "hello world";
			echo "hello world";
			echo "hello world";

		 */
		// echo "你好";
		header("content-type:text/html;charset=utf-8");

		// echo  "welcome to sexstaredu";
		// $arr = [1, 2, 3, 4];
		// $name = "jack";
		// var_dump($arr);
		// print_r($arr);
		
		/**
		 * 
		 * 变量 ：变量是内存中存储数据的空间 ，而且空间里的值是可变的
		 * 变量的定义：
		 * $name = value; 
		 * 变量名称的命名规范
		 * 	1、变量名称以$标示
		 * 	2、变量名称只能以字母和下划线开头
		 * 	3、变量的名称只能包含字母、下划线、数字
		 * 	4、变量名称区分大小写
		 * 	5、当变量的名称以两个或者两个以上的单词命名时采用驼峰命名法
		 * 	6、变量名称要具有描述性（见名知意）
		 * 
		 * 
		 *
		 * 
		 */
		
		// $name = "value"; //变量的初始化
		// $name = "我很温柔";
		// $n*** = "我很温柔";
		// echo $n***;
		// $name = "我很温柔";
		// $NAME = "弥城";
		// echo $name;
		// echo "<br/>";
		// echo $NAME;
		// $helloWorldIsVeryGod = "helloworldisverygodd";
		

		// $trademarkRegistration = "商标注册";
		// echo $;
		/**
		 * 数据类型  
		 * 8种数据类型
		 * 4种标量类型
		 * 整形 integer  $var = 180;
		 * 浮点型 float $var = 2.555
		 * 布尔型 boolean $var = true or false
		 * 字符串 string  $var = "welcome to sixstar";
		 * 2种复合类型
		 * 数组 array  $var = array(1, 2, 3, 4); [1, 2, 3, 4]
		 * 对象 object class Person{} $obj = new Person;
		 * 2种特殊类型
		 * 	资源 resource $fp = fopen("demo.php");
		 * 	null $var; $var = null
		 *
		 * 
		 */
		
		//整形
		// $num = 123;  //十进制
		// $num = 0123;  //八进制
		// $num = 0x123;  //十六进制
		// // mkdir("sixstar", 0775);
		// var_dump($num);
		//浮点型
		// $f = 2.34123243253543566566; //默认显示14位
		// $f1 = 1.000003;  //浮点型数据不要做加减运算
		// $f2 = 1.000002;
		// $res = $f1-$f2;
		// var_dump($res);
		
		//布尔类型
		// $bool = true; //false
		// $name = "我很温柔";

		// if ($name) {
		// 	echo "yes";
		// }
		

		//字符串
		//双引号解析变量  单引号不解析变量 
		//单引号定义的字符串性能更优
		// \ 转义字符 \t tab \r 回车
		// 双引号能够解析转义字符，而单引号不能
		// 双引号不能嵌套双引号，但是可以嵌套单引号
		// 单引号不能嵌套单引号，但是可以嵌套双引号
		// $name1 = "泛泛";
		// $name2 = "lemon";
		// $str1 = "welcome 'to $name1' sixstar"; //会 
		// $str2 = 'welcome "to $name2" sixstar'; //不会 
		// var_dump($str1);
		// echo "<br/>";
		// var_dump($str2);
// 		$name = "Hamid";
// 		$str = "sdfgasdfsadf 'saert34534ert' ewrw \"rtwert\" wertwqe   wer";

// 		$str =<<<hello_world
// 		sdfgasdfsadf 'saert34534ert' ewrw "rtwert" wertwqe   wer $name
// hello_world;
// 		echo $str;

		//数组
		// $arr = array(1, "hamid", 2.45);//[]
		// $arr = [1, 2,3];
		// var_dump($arr);

		//对象
		// class Person
		// {
		// 		public $name = "英文名很厉害";
		// }

		// $obj = new Person;
		// var_dump($obj);
		//资源
		// $fp = fopen("foo.txt",'r');
		// var_dump($fp);
		
		//null
		// $var;
		// $var = null;
		// var_dump($var);


