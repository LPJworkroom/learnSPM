<?php
/*
[
	{"title":"题目1","options":[{"text":"dsfsdf","id":20},{"text":"ssssss","id":21},{"text":"sdfsdfsdfs","id":22},{"text":"aaaaa","id":23}],"solution":0,"id":36},
	{"title":"we","options":[{"text":"对"},{"text":"错"}],"solution":0,"id":40}
]
*/

function object_to_array($obj) {
    $obj = (array)$obj;
    foreach ($obj as $k => $v) {
        if (gettype($v) == 'resource') {
            return;
        }
        if (gettype($v) == 'object' || gettype($v) == 'array') {
            $obj[$k] = (array)object_to_array($v);
        }
    }
 
    return $obj;
}

	require 'dblogin.php';
	$uid = $_POST['userid'];
	$probarr = $_POST['probinfo'];

	$probarr = json_decode($probarr);
// echo gettype($probarr);
// $tmp = object_to_array($probarr[0]);
// echo $tmp["options"][0]["text"];
// exit(0);	
	$date=new \DateTime();
	$date = $date->format("Y-m-d H:i:s");
	$tidres = mysqli_query($con,"
		SELECT
			AUTO_INCREMENT as id
		FROM
			INFORMATION_SCHEMA. TABLES
		WHERE
			TABLE_NAME = 'testinfo'
	;");
/*
SELECT
AUTO_INCREMENT as id
FROM
INFORMATION_SCHEMA. TABLES
WHERE
TABLE_NAME = 'testinfo';
*/
	$tidrow = mysqli_fetch_array($tidres);
	$tid = $tidrow['id'];
// echo gettype($probarr);
// exit(0);
	$testname = "test".$tid;
	$newtres = mysqli_query($con,"
		insert into testinfo 
		(testname,publisher,publishdate,warning)
		values
		('{$testname}',$uid,'{$date}',60)
	;");
	$res &= $newtres;
mysqli_begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
mysqli_autocommit($con,FALSE);
	$res = true;
	foreach($probarr as $index=>$prob){
		$ind = $index + 1;
		//$prob = array($prob);
		//$prob = json_decode($prob);
		$prob = object_to_array($prob);

		$title = $prob['title'];
		$options = $prob['options'];
		$answer = $prob['solution']+1;
//echo gettype($prob)."---";
// echo $title."---";		
// echo "hehe";
// exit(0);
		
		$newpres = mysqli_query($con,"
			insert into probinfo
			(testid,probid,title,answer)
			values
			($tid,$ind,'{$title}',$answer)
		;");
		$res &= $newpres;

		foreach($options as $key=>$opt){
			$i = $key+1;
			$content = $opt['text'];
			$newores = mysqli_query($con,"
				insert into proboption
				(testid,probid,ind,content)
				values
				($tid,$ind,$i,'{$content}')
			;");
			$res &= $newores;
		}
		
	}
	if($res){
		mysqli_commit($con);
		// echo 1;
	}
	else{
		mysqli_rollback($con);
		echo 0;
		exit(0); 
	}
mysqli_autocommit($con,TRUE); 
echo 1;
?>