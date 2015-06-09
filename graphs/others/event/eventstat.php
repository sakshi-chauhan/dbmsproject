<?php
include("phpgraphlib.php");
$graph = new PHPGraphLib(400,400);
$con = mysql_connect('localhost','root') or die('could not connect:' . mysql_error());
mysql_select_db('testdata') or die ('could not select database');
$data = array();
$q1= "select count(*) as `count` from eventsp;";
$result1 = mysql_query($q1);
$q2= "select count(*) as `count` from eventst;";
$result2 = mysql_query($q2);
$q3= "select count(*) as `count` from eventse;";
$result3 = mysql_query($q3);

while((($row1 = mysql_fetch_array($result1))!== false)&&(($row2 = mysql_fetch_array($result2))!== false)&&(($row3 = mysql_fetch_array($result3))!== false))
{
$data["POPULAR"] = $row1['count'];
$data["TRENDING"]=  $row2['count'];
$data["EXCLUSIVE"] = $row3['count'];
}
$graph->addData($data);
$graph->setupXAxis(6);
$graph->setupYAxis(6);
$graph->setTextColor('128,0,0');
$graph->setXAxisTextColor('128,0,0');
$graph->setYAxisTextColor('128,0,0');
$graph->setTitle("Statistical Analysis");
$graph->setTitleColor('128,0,0');
$graph->setBarColor('255,0,0');
$graph->setBarOutline(true);
$graph->setBarOutlineColor('0,0,0');
$graph->setGrid(true);
//$graph->setGridColor('0,0,0');
$graph->setDataValues(true);
$graph->setDataValueColor('128,0,0');
$graph->setXValuesHorizontal(true);

//$graph->setBackgroundColor("black");
$graph->createGraph();

?>