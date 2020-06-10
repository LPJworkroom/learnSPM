<?php
	require 'dblogin.php';
	$nick = $_POST['nick'];
	$pw = $_POST['password'];
	// echo $nick;
	// echo $pw;
	// exit(0);
	$loginres = mysqli_query($con,"
		select id,nick,password,position from userinfo
		where
		nick = '{$nick}'
	;");
// $sql = "
		// select id,nick,pw,position from userinfo
		// where
		// nick = '{$nick}'
	// ;";
// echo $sql;
/*
select id,nick,password,position from userinfo
where
nick = 'lisi'

*/
	$loginrow = mysqli_fetch_array($loginres);
	$uid = $loginrow['id'];
	$rightpw = $loginrow['password'];
	$position = $loginrow['position'];
	// echo gettype($pw);
	// echo "--";
	// echo gettype($rightpw);
	// echo "--";
	// echo "uid:".$uid;
	// echo "position:".$position;
	// echo "rightpw:".$rightpw;
	// echo "pw:".$pw;
	// exit(0);
	// echo $pw;
	// echo $rightpw;
	//账号密码正确
	if($pw == $rightpw){
		$arr=["uid"=>$uid,"position"=>$position];
		echo json_encode($arr);
	}
	else{
		$arr=["uid"=>0,"position"=>0];
		echo json_encode($arr);
	}
?>