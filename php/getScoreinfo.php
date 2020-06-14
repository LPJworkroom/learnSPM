<?php
	require 'dblogin.php';
	$retarr = [];
	$uid = $_POST['userid'];
	$scoreres = mysqli_query($con,"
		select testid,score 
		from participation 
		where
		userid = $uid
	;");
	while($scorerow = mysqli_fetch_array($scoreres)){
		$testid = $scorerow['testid'];
		$score = $scorerow['score'];
		$testres = mysqli_query($con,"
			select testname,warning
			from testinfo
			where
			id = $testid
		;");
		$testrow = mysqli_fetch_array($testres);
		$testname = $testrow['testname'];
		$warning = $testrow['warning'];
		$tmp = [
				"testid"=>$testid,
				"testName"=>$testname,
				"warningLine"=>$warning,
				"myScore"=>$score
			];
		array_push($retarr,$tmp);
	}
	echo json_encode($retarr);
?>