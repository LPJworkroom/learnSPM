<?php
	require 'dblogin.php';
	$testid = $_POST['testid'];
	
	$retarr = [];
	
	$probres = mysqli_query($con,"
		select probid,title 
		from probinfo
		where
		testid = $testid
	;");
	while($probrow = mysqli_fetch_array($probres)){
		$probid = $probrow['probid'];
		$title = $probrow['title'];
		
		$optres = mysqli_query($con,"
			select content 
			from proboption
			where
			testid = $testid and probid = $probid
			order by ind
		;");
		$optarr = [];
		while($optrow = mysqli_fetch_array($optres)){
			$content = $optrow['content'];
			array_push($optarr,$content);
		}
		$tmp = [
			"title"=>$title,
			"options"=>$optarr
		];
		array_push($retarr,$tmp);
	}
	echo json_encode($retarr);
?>