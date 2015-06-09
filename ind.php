<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<title>MRS3 NEWS</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" type="text/css" rel="stylesheet" media="screen" />
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<!--[if IE 6]><script src="scripts/suckerfish.js" type="text/javascript"></script><link href="ie6.css" type="text/css" rel="stylesheet" media="screen" /><![endif]-->
<!--[if IE 7]><style>ul#menu li li li {padding-left:0;}</style><![endif]-->
<!--[if IE]><style>#searchform input#searchsubmit {height:24px;}#feeds p { padding-top:1px;}</style><![endif]-->
</head>
<body>
<div id="wrapper">
 
  <!-- /feeds -->
  <div id="topbar"> </div>
  <!-- /topbar -->
  <div id="header"><!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><a href="http://wowslider.com/vf"><img src="data1/images/9.jpg" alt="" title="" id="wows1_0"/></a></li>
		<li><img src="data1/images/10.jpg" alt="" title="" id="wows1_1"/></li>
	</ul></div>
	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
  </div>
  <!-- /header -->
  <form method="get" id="searchform" action="#" >
  </form>
  <div id="nav">
    <ul id="menu">
      <li class="current_page_item"><a href="index.php">Home</a></li>
      <li><a href="#">Telecommunication</a>
        <ul>
           <li><a href="discovery.php">Discovery</a></li>
          <li><a href="technology.php">Technology</a></li>
		  <li><a href="it.php">IT Companies</a>
            
        </ul></li>
		<li><a href="#">Entertainment</a>
        <ul>
          <li><a href="tv.php">TV</a></li>
          <li><a href="bollywood.php">Bollywood</a>
		  <li><a href="hollywood.php">Hollywood</a>
		 
        </ul>
		<li><a href="#">Sports</a>
        <ul>
          <li><a href="cricket.php">Cricket</a></li>
          <li><a href="football.php">Football</a>
		  <li><a href="tennis.php">Tennis</a>
		  <li><a href="mores.php">More</a>
		 
            
        </ul>
		<li><a href="#">Multimedia</a>
        <ul>
          <li><a href="video.php">Videos</a></li>
          <li><a href="photo.php">Photos</a>
		 
            
        </ul>
		<li><a href="#">Corporate</a>
        <ul>
          <li><a href="buisness.php">Business</a></li>
          <li><a href="economics.php">Economics</a>
		  <li><a href="companies.php">Companies</a>
		 
            
        </ul>
		<li><a href="#">Others</a>
        <ul>
          
          <li><a href="article.php">Article</a>
		  <li><a href="environment.php">Environment</a>
		  <li><a href="event.php">Event</a></li>
          <li><a href="opinion.php">Opinion</a>
		  <li><a href="story.php">Story</a>
		  <li><a href="moreo.php">More</a></li>
          
		 
            
        </ul>
		
        </ul>
		</li>
    </ul>
    <!-- /menu -->
  </div>
  <!-- /nav -->
  <div id="content">
    <div id="center">
      <div id="headline">
        <h3>POPULAR NEWS</h3>
        <h5>&nbsp;</h5>
         <br>
        <ul>
          
		
      </ul>
      </div>
      <!-- /headline --><!-- /featured --><!-- /popular -->
      <div id="latest">
        <h3>LATEST NEWS</h3>
        <div class="spost">
          <h2>&nbsp;</h2>
           <marquee behavior="scroll" scrollamount="2" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
        <?php
		$con = mysql_connect('localhost','root');
         mysql_select_db('testdata');


$q2 = "select * from topnews order by startdate desc limit 30;";
$r2=mysql_query($q2,$con);
while($row2 = mysql_fetch_array($r2))
      { ?>
         
        <p><a href="<?php echo $row2['link']  ?>" >
		<?php echo $row2['headline']  ?><br /><br /></a></p> 
        <?php
           
       } 
	

?>

        </marquee>
          
        </div>
        <!-- /spost --><!-- /spost --><!-- /spost --><!-- /navigation -->
      </div>
      <!-- /latest -->
    </div>
    <!-- /center -->
    <div id="sidebar">
      <div id="top">
        <div class="topitem">
          <h3>Categories</h3>
          <ul id="categories">
		   <li class="cat-item"><a href="topnews.php">Top News</a></li>
		    <li class="cat-item"><a href="city.php">City</a></li>
			 <li class="cat-item"><a href="india.php">India</a></li>
			  <li class="cat-item"><a href="world.php">World</a></li>
            <li class="cat-item"><a href="politics.php">Politics and Relations</a></li>
            <li class="cat-item"><a href="health.php">Health</a></li>
            <li class="cat-item"><a href="lifestyle.php">Life Style</a></li>
			<li class="cat-item"><a href="education.php">Education</a></li>
			<li class="cat-item"><a href="travel.php">Travel and Tourism</a></li>
          </ul>
          <!-- /categories -->
        </div>
        <!-- /topitem -->
      </div>
      <!-- /top -->
      <div id="left">
        <div class="sitem">
          <h3>Archives</h3>
          <ul class="links">
            <li><a href="archieve\articleo.php">October 2014</a></li>
            <li><a href="#">September 2014</a></li>
            <li><a href="#">August 2014</a></li>
            <li><a href="#">July 2014</a></li>
            <li><a href="#">June 2014</a></li>
            <li><a href="#">May 2014</a></li>
            <li><a href="#">April 2014</a></li>
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">Januaury 2014</a></li>
          </ul>
          <!-- /links -->
        </div>
        <!-- /sitem -->
      </div>
      <!-- /left -->
      <div id="right">
        <div class="sitem">
          <h3>Blogroll</h3>
                    <?php
// database connection stuff here
$rows_per_page = 4;




		  $con =mysql_connect('localhost','root');
		  mysql_select_db('testdata');
		  $sql = "select * from blog order by startdate desc;";
		  $retval = mysql_query($sql, $con);
		  $rec_limit = 4;
		  //define("_PHP_SELF",$_SERVER['PHP_SELF']); 

			$_PHP_SELF = &$_SERVER['PHP_SELF'];
		/* $total_records = mysql_num_rows($result);
		 $pages = ceil($total_records / $rows_per_page);
			mysql_free_result($result);
			$msg_id=0;*/
		 
		  ?>
          <?php

if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT * ".
       "FROM blog ".
       "LIMIT $offset, $rec_limit";

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?>
<ul>
<?php
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	?>
    <li><p><a href = "<?php echo $row['link'] ?> "> 
    <?php
    echo "{$row['headline']}  <br> ";?></a></p></li>
    <?php
         
} ?>
</ul>
<?php

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last</a> |";
   echo "<a href=\"$_PHP_SELF?page=$page\">Next </a>";
}
else if( $page == 0 )
{
   echo "<a href=\"$_PHP_SELF?page=$page\">More</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last</a>";
}
?>
		  
          <!-- /links -->
        </div>
        <!-- /sitem -->
      </div>
      <!-- /right -->
      <div id="bottom">
        <div class="sitem">
          <h3>PHOTO GALLERY</h3>
          
           
            
        </div>
        <!-- /sitem -->
      </div>
      <!-- /bottom -->
    </div>
    <!-- /sidebar -->
    <div id="footer">
      <div id="fbar">
        <div class="flinks">
          <h3>Most commented</h3>
          <ul>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
        <!-- /flinks -->
        <div class="flinks">
          <h3>Recent Articles</h3>
          <ul>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
        <!-- /flinks -->
        <div class="flinks">
          <h3>GOOGLE SEARCH</h3>
        </div>
        <!-- /flinks -->
      </div>
      <!-- /fbar -->
      <div id="copyright">
        <p>&copy; 
    <a href="index.php">www.MRS3NEWS.com</a> </p>
      </div>
      <!-- /copyright -->
    </div>
    <!-- /footer -->
  </div>
  <!-- /content -->
</div>
<!-- /wrapper -->
</body>
</html>
