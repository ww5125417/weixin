1
<?php
	#http://localhost/phpinfo.php?param=1
	phpinfo();

	# $出现在字符串中也会被解读成变量，除非用转义字符
	$item = 43;
	printf("The variable \$item is of type integer:%d<br/>",is_integer($item));
	printf("The variable \$item is of type array:%d<br/>",is_array($item));



	# 输出函数是不是只能用printf
	print "is_integer($item)";
	print "<br/>";
	print "is_integer(\$item)";
	print "<br/>";



	#对象
	class student
	{
		private $name;
		public function setName($name)
		{
			$this->name = $name;
		}
		public function getName()
		{
			return $this->name;
		}
	}
 	$zgx = new student;
	$zgx->setName("zgx");
	printf("%s",$zgx->getName());



	#强制转换
	$t1 = 10;
	$t2 = "5";
	$result = $t1 + $t2;
	echo " $result  <br/>";
	$t3 = "1a";
	$result += $t3;
	echo " $result  <br/>";

	

	#引用
	$t4 = &$t3;
	printf("\$t3 :%d<br/>",$t3);
	$t4 = "change";
	printf("\$t3 :%d<br/>",$t3);
	function ref_test(&$param)
	{
		$param=$param+1;
	}
	ref_test($t1);
	printf("function_ref t1 :%d<br/>",$t1);



	#全局变量在函数中的使用
	function global_test()
	{
		global $t1; //这句声明必须加上！
		$t1 +=1 ;
	}
	global_test($t1);
	printf("global_change t1 :%d<br/>",$t1);



	#静态变量
	function static_test()
	{
		static $t1 = 0; //这句声明必须加上！
		$t1 +=1 ;
		printf("static test :%d<br/>",$t1);
	}
	static_test();
	static_test();
	static_test();



	#超级全局变量
	print("<br/><br/><br/><br/>");
	foreach($_SERVER as $var => $value)
	{
		print("$var => $value <br/>");
	}
	print("<br/><br/><br/><br/>");
	printf("You ip address is :%s <br/>", $_SERVER['REMOTE_ADDR']);
	printf("You url is :%s <br/>", $_SERVER['REQUEST_URI']);
	print("<br/><br/><br/><br/>");


	#GET超级全局变量获得传递的变量
	$temp = $_GET['param'];
	printf("\$temp:%d",$temp);
	#还有$_POST['param']超级全局变量能获得表单传递的参数
	#还有$_COOKIE['param']超级全局变量能获得cookie中的信息
	print("<br/><br/><br/><br/>");

	
	#常量
	define("PI",3.1415926,true);//第三个参数可以省略，为true不区分大小写
	echo PI;
	print("<br/>");
	echo pi;
	print("<br/><br/><br/><br/>");


	
	#字符串拼接操作符“.” “.=”
	$str1 = "aaa";
	$str2 = "bbb";
	$str3 = $str1.$str2;
	echo $str3;
	print("<br/><br/><br/><br/>");


	#单引号,原样输出。 heredoc,nowdoc
	printf('$abc\n');
?>