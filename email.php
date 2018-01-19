<?php 	
	require_once("email.class.php");
	
	//******************** 配置信息 ********************************
	
	/*** 阿里云ECS 
		25端口禁用，使用465端口，SMTP服务器前加 ssl协议（ssl://）;
		php配置，开启ssl
	***/
	//$smtpserver = "ssl://smtp.exmail.qq.com";
	//$smtpserverport = 465;
	
	$smtpserver = "smtp.exmail.qq.com";//SMTP服务器
	$smtpserverport = 25;//SMTP服务器端口
	$smtpusermail = "";//SMTP服务器的用户邮箱
	$smtpuser = "";//SMTP服务器的用户帐号
	$smtppass = "";//SMTP服务器的用户密码

	
	//*********************详细内容*********************
	$smtpemailtomember = '754427571@qq.com';
	$smtpemailfrom = "邮件";
	$mailtitle = "邮件主题";//邮件主题
	$mailcontent = '邮件内容';
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailtomember, $smtpusermail, $mailtitle, $mailcontent, $mailtype);	


?>