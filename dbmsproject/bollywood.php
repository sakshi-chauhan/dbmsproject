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

<script>
$(window).load(function(){
jQuery(document).ready(function ($) {
 
    $('[data-popup-target]').click(function () {
        $('html').addClass('overlay');
        var activePopup = $(this).attr('data-popup-target');
        $(activePopup).addClass('visible');
 
    });
 
    $(document).keyup(function (e) {
        if (e.keyCode == 27 && $('html').hasClass('overlay')) {
            clearPopup();
        }
    });
 
    $('.popup-exit').click(function () {
        clearPopup();
 
    });
 
    $('.popup-overlay').click(function () {
        clearPopup();
    });
 
    function clearPopup() {
        $('.popup.visible').addClass('transitioning').removeClass('visible');
        $('html').removeClass('overlay');
 
        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
    }
 
});
});


</script>
</head>
<body>
<div id="wrapper">
 
  
  <div id="header">
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><a href="http://wowslider.com/vf"><img src="data1/images/9.jpg" alt="" title="" id="wows1_0"/></a></li>
		<li><img src="data1/images/10.jpg" alt="" title="" id="wows1_1"/></li>
	</ul>
    </div>
	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
  </div>
  <!-- /header -->
  </div>
  
  <form method="get" id="searchform" action="#" >
  </form>
  <div id="nav">
    <ul id="menu">
      
		 
            
         <li ><a class="home" href="index.php"></a></li>
      <li><a href="#">Telecommunication</a>
        <ul>
           <li><a href="discovery.php">Discovery</a></li>
          <li><a href="technology.php">Technology</a></li>
		  <li><a href="it.php">IT Companies</a></li>
            
        </ul>
       </li>
		
        <li><a href="#">Entertainment</a>
        <ul>
          <li><a href="tv.php">TV</a></li>
          <li><a href="bollywood.php">Bollywood</a></li>
		  <li><a href="hollywood.php">Hollywood</a></li>
		 
        </ul>
        </li>
		<li><a href="#">Sports</a>
        <ul>
          <li><a href="cricket.php">Cricket</a></li>
          <li><a href="football.php">Football</a></li>
		  <li><a href="tennis.php">Tennis</a></li>
		  <li><a href="mores.php">More</a></li>
		 
            
        </ul>
        </li>
        
		
        
        
		<li><a href="#">Corporate</a>
        <ul>
          <li><a href="buisness.php">Business</a></li>
          <li><a href="economics.php">Economics</a></li>
		  <li><a href="companies.php">Companies</a></li>
		 
            
        </ul>
        </li>
		<li><a href="#">Others</a>
        <ul>
          
          <li><a href="article.php">Article</a></li>
		  <li><a href="environment.php">Environment</a></li>
		  <li><a href="event.php">Event</a></li>
          <li><a href="opinion.php">Opinion</a></li>
		  <li><a href="story.php">Story</a></li>
		  <li><a href="moreo.php">More</a></li>
        </ul>
		</li>
      
        <li ><a class="photoicon" alt="photos" title="photos" href="photo.php"></a></li> 
        <li ><a class="videoicon" alt="videos" title="videos" href="video.php"></a></li>
        <li><a class="searchicon" alt="Search" title="Search" href="#ffresult_sbox0"></a></li>
    </ul>
    <!-- /menu -->
  </div>
  <!-- /nav -->
  <div id="content">
    <div id="center">
      <div id="headline">
        <h3>POPULAR NEWS</h3>
		<?php
		$con = mysql_connect('localhost','root');
         mysql_select_db('testdata');
		 $rows_per_page = 7;
		 $rec_limit = 10;
		  //define("_PHP_SELF",$_SERVER['PHP_SELF']); 

			$_PHP_SELF = &$_SERVER['PHP_SELF'];

$q1="select startdate from ddate;";
$r1=mysql_query($q1,$con);



while($row1=mysql_fetch_array($r1))
{?>
<h5><?php echo $row1['startdate'];?> </h5>
         <br>
    <?php
$v= $row1['startdate'];
$sql = "select * from entertainmentp where startdate like '$v%' and (lower(headline) like '%bollywood%' or lower(link) like '%hollywood%' or lower(headline) like '%bwood%' or lower(link) like '%bwood%') ;";
$retval=mysql_query($sql,$con);
$var = mysql_num_rows($retval);
if( (mysql_num_rows($retval)) == 0)
 echo "NO POPULAR NEWS CURRENTLY";
 else {
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

$sql = "select * from entertainmentp where startdate like '$v%' and (lower(headline) like '%bollywood%' or lower(link) like '%bollywood%' or lower(headline) like '%bwood%' or lower(link) like '%bwood%') ".
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
    <p><li><a href = "<?php echo $row['link'] ?> "> 
    <?php
    echo "{$row['headline']}  <br> ";?></a></li></p>
    <?php
         
} ?>
</ul>
<?php

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Previous</a> |";
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
 }

}
?>
		
      </div>
      <!-- /headline -->
      <div id="featured">
        <h3>TRENDING NEWS</h3>
         <div class="spost">
        
        <?php
		$con = mysql_connect('localhost','root');
         mysql_select_db('testdata');
		 $rows_per_page = 7;
		 $rec_limit = 10;
		  //define("_PHP_SELF",$_SERVER['PHP_SELF']); 

			$_PHP_SELF = &$_SERVER['PHP_SELF'];

$q1="select startdate from ddate;";
$r1=mysql_query($q1,$con);



while($row1=mysql_fetch_array($r1))
{?>
<h5><?php echo $row1['startdate'];?> </h5>
         <br>
    <?php
$v= $row1['startdate'];
$sql = " select * from entertainmentt where startdate like '$v%' and (lower(headline) like '%bollywood%' or lower(link) like '%bollywood%' or lower(headline) like '%bwood%' or lower(link) like '%bwood%') ;";
$retval=mysql_query($sql,$con);
$var = mysql_num_rows($retval);
if( (mysql_num_rows($retval)) == 0)
 echo "NO TRENDING NEWS CURRENTLY";
 else {
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

$sql = "select * from entertainmentt where startdate like '$v%' and (lower(headline) like '%bollywood%' or lower(link) like '%bollywood%' or lower(headline) like '%bwood%' or lower(link) like '%bwood%') ".
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
    <p><li><a href = "<?php echo $row['link'] ?> "> 
    <?php
    echo "{$row['headline']}  <br> ";?></a></li></p>
    <?php
         
} ?>
</ul>
<?php

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Previous</a> |";
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
 }

}
?>
          
        </div>
       </div>
      <!-- /featured -->
      <div id="popular">
        <h3>EXCLUSIVE NEWS</h3>
        <div class="spost">
             <?php
		$con = mysql_connect('localhost','root');
         mysql_select_db('testdata');
		 $rows_per_page = 7;
		 $rec_limit = 10;
		  //define("_PHP_SELF",$_SERVER['PHP_SELF']); 

			$_PHP_SELF = &$_SERVER['PHP_SELF'];

$q1="select startdate from ddate;";
$r1=mysql_query($q1,$con);



while($row1=mysql_fetch_array($r1))
{?>
<h5><?php echo $row1['startdate'];?> </h5>
         <br>
    <?php
$v= $row1['startdate'];
$sql = " select * from entertainmente where startdate like '$v%' and (lower(headline) like '%bollywood%' or lower(link) like '%bollywood%' or lower(headline) like '%bwood%' or lower(link) like '%bwood%') ;";
$retval=mysql_query($sql,$con);
$var = mysql_num_rows($retval);
if( (mysql_num_rows($retval)) == 0)
 echo "NO EXCLUSIVE NEWS CURRENTLY";
 else {
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

$sql = "select * from entertainmente where startdate like '$v%' and (lower(headline) like '%bollywood%' or lower(link) like '%bollywood%' or lower(headline) like '%bwood%' or lower(link) like '%bwood%') ".
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
    <p><li><a href = "<?php echo $row['link'] ?> "> 
    <?php
    echo "{$row['headline']}  <br> ";?></a></li></p>
    <?php
         
} ?>
</ul>
<?php

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Previous</a> |";
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
 }

}
?>
</div>
        <!-- /spost -->
 </div>
      <!-- /popular -->
      <div id="latest">
        <h3>ANALYSIS OF NEWS</h3>
        <button id="popup_window" data-popup-target="#example-popup1">  <div class="spost"><img src="graphs\entertainment\bollywood\bollywoodstat.php" width="265" height="341" /> </div></button>
 
<div id="example-popup1" class="popup" >
    <div class="popup-body" >
    <!--<span class="popup-exit"></span> -->
 
        <div class="popup-content" >
       <img src="graphs\entertainment\bollywood\bollywoodstat.php" width="750" height="500"   />    
        </div>
    </div>
</div>
<div class="popup-overlay"></div>



          <button id="popup_window1" data-popup-target="#example-popup2">  <div class="spost"><img src="graphs\entertainment\bollywood\bollywoodplink.php" width="260" height="341" /> </div></button>
 
<div id="example-popup2" class="popup" >
    <div class="popup-body" >
    <!--<span class="popup-exit"></span> -->
 
        <div class="popup-content" >
       <img src="graphs\entertainment\bollywood\bollywoodplink.php" width="750" height="500"   />    
        </div>
    </div>
</div>
<div class="popup-overlay"></div>


<button id="popup_window" data-popup-target="#example-popup3">  <div class="spost"><img src="graphs\entertainment\bollywood\bollywoodtlink.php" width="265" height="341" /> </div></button>
 
<div id="example-popup3" class="popup" >
    <div class="popup-body" >
    <!--<span class="popup-exit"></span> -->
 
        <div class="popup-content" >
       <img src="graphs\entertainment\bollywood\bollywoodtlink.php" width="750" height="500"   />    
        </div>
    </div>
</div>
<div class="popup-overlay"></div>


<button id="popup_window1" data-popup-target="#example-popup4">  <div class="spost"><img src="graphs\entertainment\bollywood\bollywoodelink.php" width="260" height="341" /> </div></button>
 
<div id="example-popup4" class="popup" >
    <div class="popup-body" >
    <!--<span class="popup-exit"></span> -->
 
        <div class="popup-content" >
       <img src="graphs\entertainment\bollywood\bollywoodelink.php" width="750" height="500"   />    
        </div>
    </div>
</div>
<div class="popup-overlay"></div>
        <!--
        <div id="featured1">
            <div class="spost"> <img src="graphs\entertainment\bollywood\bollywoodstat.php" width="265" height="341" /> </div>
          </div>
          <!-- featured1 closed 
          <div id="popular">
            <div class="spost"> <img src="graphs\entertainment\bollywood\bollywoodplink.php" width="274" height="341"  /> </div>
          </div>
          <!-- popular closed 
          <div id="featured1">
            <div class="spost"> <img src="graphs\entertainment\bollywood\bollywoodtlink.php" width="266" height="341" /> </div>
          </div>
          <!-- featured1 closed 
          <div id="popular">
            <div class="spost"> <img src="graphs\entertainment\bollywood\bollywoodelink.php" width="276" height="341" /> </div>
          </div>
          <!-- /popular  closed -->
        
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
            <li><a href="archieve\bollywoodo.php">October 2014</a></li>
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
          
            <a href="#"><img src="images\new\bolly\2.jpg" width="366" height="454" /></a>  <a href="#"></a><br/><br />
              <em></em>
            <a href="#"><img src="images\new\bolly\5.jpg" height="316" /></a>  <a href="#"></a><br/><br />
              <em></em>
              <a href="#"><img src="images\new\bolly\6.jpg" width="343" height="217" /></a>  <a href="#"></a><br/>
              <em></em>
            
        </div>
        <!-- /sitem -->
      </div>
      <!-- /bottom -->
    </div>
    <!-- /sidebar -->
    <div id="footer">
      <div class="nhm_footer">
      <ul class="iconli">
<li><a href="http://www.ndtv.com/rss" class="rss"><span>RSS</span></a></li>
<li><a href="http://www.ndtv.com/convergence/ndtv/new/NDTVNewsAlert.aspx" class="news"><span>News Alerts</span></a></li>
<li><a href="http://www.ndtv.com/page/mobile-web" class="mobile"><span>Mobile</span></a></li>
<li><a href="http://www.ndtv.com/page/apps" class="apps"><span>Apps</span></a></li>
<li><a href="http://www.ndtv.com/page/ios7" class="apple"><span>Apple</span></a></li>
<li><a href="http://www.ndtv.com/page/android-web" class="droid"><span>Android</span></a></li>
<li><a href="http://www.windowsphone.com/en-IN/apps/dbb4205d-1b46-4f29-a5d7-b0b0b70b7e80" class="windows"><span>Windows</span></a></li>
<li><a href="http://www.facebook.com/campaign/landing.php?campaign_id=237467320636" class="fb"><span>Facebook</span></a></li>
<li><a href="http://twitter.com/ndtv" class="twt"><span>Twitter</span></a></li>
<li><a href="https://plus.google.com/102278458637341773682/posts" class="gp"><span>Google +</span></a></li>
<li><a href="http://www.linkedin.com/company/ndtv" class="lnkdin"><span>LinkedIn</span></a></li>

<!-- weather widget-->
<span style="display: inline-block !important; width: 275px; text-align: center; font-family: sans-serif; font-size: 12px; float:left"><a href="http://weathertemperature.com/forecast/?q=New+Delhi,Delhi,India" title="New Delhi, Delhi, India Weather Forecast" onclick="this.target='_blank'"><img src="http://widget.addgadgets.com/weather/v1/?q=New+Delhi,Delhi,India&amp;s=2&amp;u=1"  onerror="this.src='images/weather.jpg'" alt="Weather temperature in New Delhi, Delhi, India"
 width="160" height="102" style="border:0" /></a>
 <br />
 <a href="http://weathertemperature.com/" title="Get latest Weather Forecast updates" style="font-family: sans-serif; font-size: 12px" onclick="this.target='_blank'"></a>
 </span>

<!-- weather widget work ends-->

<!-- Search Bar-->

 <table width="271" cellpadding="0x" cellspacing="0px"
 border="none">
    
      <td width="271" style="font-family: Arial, Helvetica, sans-serif;font-size: 7.5pt;">
       
       
       
      <form  id="ffresult_sbox0" style="margin:0px; margin-top:4px;"  name ="jksearch" action="search.php" onSubmit="jksitesearch(this)"  method="get" accept-charset="utf-8"  target="_blank"  >
          
          <input name="query" type="text" required placeholder = "Search..."  autocomplete="on" size="32" maxlength="50"> 
          <br>
          <span style="display: inline !important; width: 105px; 
          text-align:left; font-family: sans-serif; font-size: 12px; float:left">
           <label for="site">Site Search</label>
          <input type="radio" name="search" id="site" value="Site" checked="checked"><br>
           <label for="web">The Web&nbsp;&nbsp;&nbsp;&nbsp;</label>

                <input type="radio" name="search" id="web" value="Web"></span>
                
                <span style="display: inline-block !important; width: 145px; height:75px; text-align: center; font-family: sans-serif; font-size: 12px; float:left; padding:5px 0px 0px 0px">
                <input type="submit" value="Search" >&nbsp;&nbsp;
                <input type="reset" name="Reset" id="button" value="Reset">
                </span>
     </form>
      </td>
    </tr>
    
  </table>
<script type="text/javascript">
var domainroot=""
var searchaction=[ 
"search.php",
"http://www.google.com/search"
]
var queryfieldname=["q","p"] //name of hidden query form for the 2 search

function switchaction(cur, index)
{
cur.form.action=searchaction[index]
document.getElementById("hiddenquery").name=queryfieldname[index]
}
function jksitesearch(curobj){
for (i=0; i< document.jksearch.search.length; i++){ //loop through radio to see which is checked
if (document.jksearch.search[i].checked==true)
switchaction(document.jksearch.search[i], i)
}
document.getElementById("hiddenquery").value="site:"+domainroot+" "+curobj.query.value
}

</script>
<!-- search process ends-->


    </ul>
</div> 
    
    
   
 
      
      
      <div id="copyright">
     
        <p>&copy; 
    <a href="index.php">MRS3NEWS LIMITED 2014.</a> All Rights Reserved.</p>
        <p>
        <p>
        <!-- #BeginDate format:fcAm1m -->Saturday, October 25, 2014  21:12<!-- #EndDate -->
        <p>&nbsp; </p>
    
    
        </p>
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
