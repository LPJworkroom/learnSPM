<?php
	require 'dblogin.php';
	$retarr=[];
	//查询所有帖子
	$postres=mysqli_query($con,"
		select id,publisher,title,publishtime
		from 
		postinfo
	;");
	/*
		前端需要：
		id,
		title,
		introduction,
		postInfo{
			publisher:"nick",
			publishDate,
			lastReplyDate,
			floors,
			pageViews:100,
		}
	*/
	while($postrow = mysqli_fetch_array($postres)){
		$postid = $postrow['id'];
		$title = $postrow['title'];
		$introduction = "";//need to select from floorinfo where postid = id and floorid = 1
		$publisherid = $postrow['publisher'];
		$publisher = "user1";
		$publishDate = $postrow['publishtime'];
//echo $publishDate;
		$lastReplyDate = "2020-01-01 00:00:00";//need to select from floorinfo where postid = id and floorid = max
		$floors = 0;//need to select count from floorinfo
		$pageViews = 100;
		
		$publisherres = mysqli_query($con,"
			select nick from userinfo where id = $publisherid
		;");
		$publisher = mysqli_fetch_array($publisherres)['nick'];
		$introres = mysqli_query($con,"
			select content from floorinfo where postid = $postid order by id limit 1
		;");
//echo "select content from floorinfo where postid = $postid and id = 1";
		$introduction = mysqli_fetch_array($introres)['content'];
		$lastReplyres = mysqli_query($con,"
			select replydate from floorinfo where postid = $postid order by replydate desc limit 1
		;");
		$lastReplyDate = mysqli_fetch_array($lastReplyres)['replydate'];
		$floorsres = mysqli_query($con,"
			select count(id) as floors from floorinfo where postid = $postid
		;");
		$floors = mysqli_fetch_array($floorsres)['floors'];
		
		$postInfo = ["publisher"=>$publisher,"publishDate"=>$publishDate,"lastReplyDate"=>$lastReplyDate,"floors"=>$floors,"pageViews"=>$pageViews];
		$tmp = ["id"=>$postid,"title"=>$title,"introduction"=>$introduction,"postInfo"=>$postInfo];
		array_push($retarr,$tmp);
	}
	echo json_encode($retarr);
?>