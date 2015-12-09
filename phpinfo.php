这是branch_test分支下的phpinfo
<?php
	#http://localhost/phpinfo.php?param=1
	phpinfo();

	# $�������ַ�����Ҳ�ᱻ����ɱ�����������ת���ַ�
	$item = 43;
	printf("The variable \$item is of type integer:%d<br/>",is_integer($item));
	printf("The variable \$item is of type array:%d<br/>",is_array($item));



	# ��������ǲ���ֻ����printf
	print "is_integer($item)";
	print "<br/>";
	print "is_integer(\$item)";
	print "<br/>";



	#����
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



	#ǿ��ת��
	$t1 = 10;
	$t2 = "5";
	$result = $t1 + $t2;
	echo " $result  <br/>";
	$t3 = "1a";
	$result += $t3;
	echo " $result  <br/>";

	

	#����
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



	#ȫ�ֱ����ں����е�ʹ��
	function global_test()
	{
		global $t1; //�������������ϣ�
		$t1 +=1 ;
	}
	global_test($t1);
	printf("global_change t1 :%d<br/>",$t1);



	#��̬����
	function static_test()
	{
		static $t1 = 0; //�������������ϣ�
		$t1 +=1 ;
		printf("static test :%d<br/>",$t1);
	}
	static_test();
	static_test();
	static_test();



	#����ȫ�ֱ���
	print("<br/><br/><br/><br/>");
	foreach($_SERVER as $var => $value)
	{
		print("$var => $value <br/>");
	}
	print("<br/><br/><br/><br/>");
	printf("You ip address is :%s <br/>", $_SERVER['REMOTE_ADDR']);
	printf("You url is :%s <br/>", $_SERVER['REQUEST_URI']);
	print("<br/><br/><br/><br/>");


	#GET����ȫ�ֱ�����ô��ݵı���
	$temp = $_GET['param'];
	printf("\$temp:%d",$temp);
	#����$_POST['param']����ȫ�ֱ����ܻ�ñ����ݵĲ���
	#����$_COOKIE['param']����ȫ�ֱ����ܻ��cookie�е���Ϣ
	print("<br/><br/><br/><br/>");

	
	#����
	define("PI",3.1415926,true);//��������������ʡ�ԣ�Ϊtrue�����ִ�Сд
	echo PI;
	print("<br/>");
	echo pi;
	print("<br/><br/><br/><br/>");


	
	#�ַ���ƴ�Ӳ�������.�� ��.=��
	$str1 = "aaa";
	$str2 = "bbb";
	$str3 = $str1.$str2;
	echo $str3;
	print("<br/><br/><br/><br/>");


	#������,ԭ������� heredoc,nowdoc
	printf('$abc\n');
?>