<?php
	require 'dblogin.php';
	$retarr = [];
	$testres = mysqli_query($con,"
		select id,testname,publisher,publishdate,warning
		from testinfo
	;");
	while($testrow = mysqli_fetch_array($testres)){
		$testid = $testrow['id'];
		$testname = $testrow['testname'];
		$publisherid = $testrow['publisher'];
		$publishdate = $testrow['publishdate'];
		$warning = $testrow['warning'];
		
		$participant = 0;
		$warnnum = 0;
		
		$partres = mysqli_query($con,"
			select score from participation 
			where
			testid = $testid
		;");
		while($partrow = mysqli_fetch_array($partres)){
			$score = $partrow['score'];
			$participant++;
			if($score<$warning){
				$warnnum++;
			}
		}
		$tmp=[
			"id"=>$testid,
			"name"=>$testname,
			"createDate"=>$publishdate,
			"completeNum"=>$participant,
			"warningLine"=>$warning,
			"unPassNum"=>$warnnum
		];
		array_push($retarr,$tmp);
	}
	echo json_encode($retarr);
?>