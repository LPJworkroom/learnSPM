<?php
	require 'dblogin.php';
	$testid = $_POST['testid'];
	$retarr = [];
	$usres = mysqli_query($con,"
		select userid,score from participation
		where testid = $testid
	;");
// echo "
		// select userid,score from particition
		// where testid = $testid
	// ;";
// exit(0);
	while($usrow = mysqli_fetch_array($usres)){
		$uid = $usrow["userid"];
		$score = $usrow['score'];
		$nickres = mysqli_query($con,"
			select nick from userinfo
			where
			id = $uid
		;");
		$nickrow = mysqli_fetch_array($nickres);
		$nick = $nickrow['nick'];
		$tmp = ["userAcc"=>$nick,"score"=>$score];
		array_push($retarr,$tmp);
	}
	echo json_encode($retarr);
?>