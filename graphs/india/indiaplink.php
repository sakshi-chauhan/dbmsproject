<?php
include("phpgraphlib.php");
$graph = new PHPGraphLib(400,400);
$con = mysql_connect('localhost','root') or die('could not connect:' . mysql_error());
mysql_select_db('testdata') or die ('could not select database');
$data = array();
$q1= "select SUBSTRING(link,8,15) as `slink` , count(*) as `count`  from indiap group by slink;";
$result1 = mysql_query($q1);

while($row1 = mysql_fetch_assoc($result1))
{
	
	$link1=$row1['slink'];
    $count1=$row1['count'];
      //add to data areray
      $data[$link1]=$count1;
	
	
}
$graph->addData($data);
$graph->setupXAxis(40);
$graph->setupYAxis(6);
$graph->setTextColor('128,0,0');
$graph->setXAxisTextColor('128,0,0');
$graph->setYAxisTextColor('128,0,0');
$graph->setTitle("POPULAR NEWS' LINK-WISE  ANALYSIS");
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