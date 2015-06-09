<?php
include("phpgraphlib.php");
$graph = new PHPGraphLib(1000,1000);
$con = mysql_connect('localhost','root') or die('could not connect:' . mysql_error());
mysql_select_db('testdata') or die ('could not select database');
$data = array();
$q1= "select SUBSTRING(link,8,15) as `slink` , count(*) as `count`  from worldt group by slink;";
$result1 = mysql_query($q1);
/*
$q2= "select count(*) as `count` from cityt;";
$result2 = mysql_query($q2);
$q3= "select count(*) as `count` from citye;";
$result3 = mysql_query($q3);
*/
while($row1 = mysql_fetch_assoc($result1))
//&&(($row2 = mysql_fetch_array($result2))!== false)&&(($row3 = mysql_fetch_array($result3))!== false))
{
	
	$link1=$row1['slink'];
    $count1=$row1['count'];
      //add to data areray
      $data[$link1]=$count1;
	
	/*
$data["POPULAR"] = $row1['count'];
$data["TRENDING"]=  $row2['count'];
$data["EXCLUSIVE"] = $row3['count'];
*/

//$data[] = $row1['count'];
}
$graph->addData($data);
$graph->setupXAxis(40);
$graph->setupYAxis(6);
$graph->setTextColor('128,0,0');
$graph->setXAxisTextColor('128,0,0');
$graph->setYAxisTextColor('128,0,0');
$graph->setTitle("TRENDING NEWS' LINK-WISE  ANALYSIS");
$graph->setTitleColor('128,0,0');
$graph->setBarColor('255,0,0');
$graph->setBarOutline(true);
$graph->setBarOutlineColor('0,0,0');
$graph->setGrid(true);
$graph->setLine(true);
$graph->setLineColor("255,255,0");
$graph->setDataPoints(true);
$graph->setDataPointColor('0,0,128');
$graph->setDataPointSize(5);
//$graph->setGridColor('0,0,0');
$graph->setDataValues(true);
$graph->setDataValueColor('128,0,0');
$graph->setXValuesVertical(true);

//$graph->setBackgroundColor("black");
$graph->createGraph();

?>