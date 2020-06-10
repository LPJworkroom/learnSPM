<?php
	require 'dblogin.php';
	$uid=$_POST['uid'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$date=new \DateTime();
	$date = $date->format("Y-m-d H:i:s");
	//echo $uid.'----'.$title.'----'.$content.'----'.$date->format("Y-m-d H:i:s");
	$pidres = mysqli_query($con,"
		select max(id) as pid from postinfo
	;");
	$pid = mysqli_fetch_array($pidres)['pid']+1;
mysqli_begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
mysqli_autocommit($con,FALSE); 
	$res = 1;
	$postres = mysqli_query($con,"
		insert into postinfo (publisher,title,publishtime) values ($uid,'{$title}','{$date}')
	;");
	$res &= $postres;
	
	$floorres = mysqli_query($con,"
		insert into floorinfo 
		(postid,publisher,content,replydate,parentfloor,replyto) 
		values 
		($pid,$uid,'{$content}','{$date}',0,0)
	;");
	$res &= $floorres;
	if($res){
		mysqli_commit($con);
		echo 1;
	}
	else{
		mysqli_rollback($con);
		echo 0;
	}
mysqli_autocommit($con,TRUE); 
	
?>