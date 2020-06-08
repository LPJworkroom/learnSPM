<?php
	require 'dblogin.php';
	$postid = $_POST['postid'];
	//$postid = 1;
	//echo $postid;
	//结果
	$retarr=[];
	
	//首先查出postid对应的帖子的所有楼层
	$floorres=mysqli_query($con,"
		select id,publisher,content,replydate
		from 
		floorinfo
		where postid={$postid} and parentfloor = 0
	;");

	
	//然后查出所有非楼中楼的发布人昵称
	while($floorrow = mysqli_fetch_array($floorres)){
		$floorid = $floorrow['id'];
		$publisherid = $floorrow['publisher'];
		$content = $floorrow['content'];
		$replydate  = $floorrow['replydate'];
		// $parentfloor = $floorrow['parentfloor'];
		// $replytofloor = $floorrow['replyto'];
		$pnickres = mysqli_query($con,"
			select nick from userinfo
			where 
			id = $publisherid
		;");
		$pnick = mysqli_fetch_array($pnickres)['nick'];
		//构造该层对应的键值对数组元素
		$eachfloor = ["floorid"=>$floorid,"nick"=>$pnick,"content"=>$content,"replyDate"=>$replydate,"replyFloors"=>[]];
		$parentfloor = $floorid;
		//查出该楼层的所有楼中楼的回复楼层层主昵称
		$sonres = mysqli_query($con,"
			select id,publisher,content,replydate,replyto
			from 
			floorinfo
			where postid={$postid} and parentfloor = $floorid
		;");
		while($sonfloorrow=mysqli_fetch_array($sonres)){
			$sonfloorid = $sonfloorrow['id'];
			$sonpublisherid = $sonfloorrow['publisher'];
			$soncontent = $sonfloorrow['content'];
			$sonreplydate  = $sonfloorrow['replydate'];
			$sonreplytofloor = $sonfloorrow['replyto'];
			
			$sonpnickres = mysqli_query($con,"
				select nick from userinfo
				where 
				id = $publisherid
			;");
			$sonpnick = mysqli_fetch_array($sonpnickres)['nick'];
			
			$replytonickres = mysqli_query($con,"
				select nick from userinfo 
				where
				id = (select publisher from floorinfo where postid = $postid and id = $sonreplytofloor)
			;");
			$replytonick = mysqli_fetch_array($replytonickres)['nick'];	
			//构造该层对应的键值对数组元素
			$eachsonfloor = ["floorid"=>$sonfloorid,"nick"=>$sonpnick,"content"=>$soncontent,"replyDate"=>$sonreplydate,"replyTonick"=>$replytonick];
			//array_push($eachfloor['replyFloors'],1);
			array_push($eachfloor['replyFloors'],$eachsonfloor);
		}
		array_push($retarr,$eachfloor);
		
		

	}
	echo json_encode($retarr);
/*
select id,publisher,content,replydate,parentfloor,replyto
from 
floorinfo
where postid=1


select nick from userinfo 
where
id = (select publisher from floorinfo where postid = 1 and id = 3)

select nick from userinfo 
where
id = (select publisher from floorinfo where postid = 1 and id = 3)
*/
?>