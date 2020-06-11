<?php
	require 'dblogin.php';
	$postid = $_POST['postid'];
	$publisher = $_POST['publisher'];
	$content = $_POST['content'];
	$parentfloor = $_POST['parentfloor'];
	$replyto = $_POST['replyto'];
	$date=new \DateTime();
	$date = $date->format("Y-m-d H:i:s");
	//echo $postid.'----'.$publisher.'----'.$content.'----'.$parentfloor.'----'.$replyto.'----'.$date;

mysqli_begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
mysqli_autocommit($con,FALSE);
	$floorres = mysqli_query($con,"
		insert into floorinfo 
		(postid,publisher,content,replydate,parentfloor,replyto) 
		values 
		($postid,$publisher,'{$content}','{$date}',$parentfloor,$replyto)
	;");
	if($floorres){
		mysqli_commit($con);
		echo 1;
	}
	else{
		mysqli_rollback($con);
		echo 0;
	}
mysqli_autocommit($con,TRUE); 
?>