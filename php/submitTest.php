<?php
	require 'dblogin.php';
	$testid = $_POST['testid'];
	$answer = $_POST['answer'];
	$uid = $_POST['uid'];
	
	$ansarr = explode(",",$answer);
	//echo $testid."//////".$uid."    ";
	//echo gettype($ansarr);
//判断用户是否做过该测试
$visres = mysqli_query($con,"
	select id from participation
	where
	testid = $testid and userid = $uid
;");
// echo "
	// select id from participation
	// where
	// testid = $testid and userid = $uid
// ;";
$vis=mysqli_fetch_array($visres)['id'];
//echo $vis."------";
if($vis!=0){
	echo 0;
	exit(0);
}
//计算得分	
	$rightnum = 0;
	$ansres = mysqli_query($con,"
		select answer from probinfo 
		where
		testid = $testid
	;");

	foreach($ansarr as $key=>$ans){
		//数据库中选项从1开始编号，前端($ans)从0开始
		//echo $key."---".$ans."      ";
		$curans = mysqli_fetch_array($ansres)['answer'];
		//echo ($curans-1)."----".$ans;
		if($curans-1 == $ans){
			$rightnum++;
		}
	}
	$score = ceil($rightnum*100/sizeof($ansarr));
	//echo $score;

mysqli_begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
mysqli_autocommit($con,FALSE);
	$insres = mysqli_query($con,"
		insert into participation 
		(testid,userid,score)
		values
		($testid,$uid,$score)
	;");

	if($insres){
		mysqli_commit($con);
		// echo 1;
	}
	else{
		mysqli_rollback($con);
		// echo 0;
	}
mysqli_autocommit($con,TRUE); 
	echo 1;

?>