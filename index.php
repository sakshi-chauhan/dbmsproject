<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<title>MRS3 NEWS</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" type="text/css" rel="stylesheet" media="screen" />
<<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="frontend/engine1/style.css" />
	<script type="text/javascript" src="frontend/engine1/jquery.js"></script>
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
 
  <!-- /feeds -->
  <div id="topbar"> <script src="http://h2.flashvortex.com/display.php?id=2_1414597973_56561_495_0_975_123_10_2_90" type="text/javascript"></script>
  </div>
  <!-- /topbar -->
  
  <div id="header">
  <script src="http://h2.flashvortex.com/display.php?id=2_1414597973_56561_495_0_975_123_10_2_90" type="text/javascript"></script>
 <!-- <img src = "images\front\9.jpg" width="970" height="176" />-->
 </div>
  <!-- /header -->
  
  <div id="nav">
    <ul id="menu">
      <li ><a class="home" href="index.php"></a></li>
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
      <div id="headline">
      
      <h3><a href="https://in.news.yahoo.com/modi-wants-bjp-to-become-diverse--launches-mega-membership-drive-040842551.html" alt="Modi wants BJP to become diverse, launches mega membership drive" target="" data-ylk="pkg:578e32a5-9546-364b-a2c3-f7e23eb60695;ver:f7082892-6245-11e4-9eea-83b575bfc519;pos:2;">Modi wants BJP to become diverse, launches mega membership drive</a></h3>
      <p><img src="images/modi.jpg" width="115" height="100"/> &quot;It is said politics is dirty. No, it is not. If politics was dirty, Mahatma Gandhi would never have ventured into this,&quot; Modi said launching the BJP's first membership drive post its emphatic win in the 2014 general elections</p>
      <h3><a href="http://www.huffingtonpost.com/2014/11/02/pakistan-bomb_n_6089632.html" target="#">Bomb Blast On Pakistan-India Border Kills At Least 45</a></h3>
      <p><div style="float:right">  <img src="images/pakistan.jpg" width="127" height="118"/></div>
      <p>&nbsp;</p>
      <p>Pakistani relatives gather beside the covered bodies of victims who were killed in suicide bomb attack in Wagah border near Lahore November 2, 2014. At least 45 people were killed on Sunday when a suicide bomber blew himself up on the Pakistani-Indian border, police said, just after a daily ceremony when troops from both sides simultaneously lower the two nations' flags.</p>
      </p>
     <p>&nbsp;</p>
     
     <h3><a href="http://www.ctvnews.ca/canada/beenrapedneverreported-hashtag-trending-as-women-share-stories-of-assault-1.2080744" target="#">#BeenRapedNeverReported hashtag trending, as women share stories of assault</a></h3>
     <p><img src="images/trending.jpg" width="205" height="180"/>After several women came forward in the press with allegations of violent encounters with former CBC host Jian Ghomeshi, some have been asking why these women haven't reported their allegations to the police.<br />
    Only two of the nine women who have come forward have offered to give their names and to detail what happened. The rest refused to reveal their names to the public, citing fear that they would be sued or that they would become the object of Internet retaliation. None has filed a police complaint
     </p>
     <h3><a href="http://www.cricketcountry.com/news/suresh-raina-completes-200-odis-for-india-204965" target="#">Suresh Raina completes 200 ODIs for India</a></h3>
      <p><div style="float:right">  <img src="images/suresh.jpg" width="127" height="118"/></div>
      <p>&nbsp;</p>
      <p>India all-rounder Suresh Raina on Sunday completed 200 One-Day Internationals (ODIs) for India, during the first match of their five-match ODI series against </p>
      <p> Sri Lanka at Cuttack.
        Raina, who has been in terrific form in the past couple </p>
      <p>of months has also played 17 Tests and 44 T20Is for India. In 199 ODIs, the left-handed batsman has scored 4,956 runs at an average of 35.91.</p>
      </p>
     <p>&nbsp;</p>
     <h3><a href="http://movies.ndtv.com/bollywood/a-special-birthday-gift-for-shah-rukh-khan-with-love-from-dharma-productions-687785" target="#">A Special Birthday Gift For Shah Rukh Khan, With Love From Dharma Productions</a></h3>
     <p><img src="images/shahrukh.jpg" width="112" height="108"/>Dharma Productions created a special gift for Shah Rukh Khan on his 49th birthday Sunday - they created a bouquet of memorable moments from their films with SRK for his fans to enjoy.

Dharma Productions posted a special playlist of special scenes from SRK's films on Twitter.</p>
     <p>&nbsp;</p>
     <h3><a href="http://movies.ndtv.com/hollywood/american-hustle-sued-for-defamation-687402" target="#">American Hustle Sued For Defamation over a dialogue</a></h3>
      <p><div style="float:right">  <img src="images/hollywood.jpg" width="127" height="118"/></div>
      <p>&nbsp;</p>
      <p>
American Hustle, starring Christian Bale, Jennifer Lawrence, Bradley Cooper and Amy Adams, received 10 nominations at the Oscars this year.

One of the scenes shows Jennifer's character telling Christian Bales' character that microwave takes nutrition from food.

"Bullshit," Christian's character says in response to her statement. Jennifer hits back, "It's not bullshit. I read it in an article. Look, by Paul Brodeur."</p>
      <p>&nbsp;</p>
      </p>
      <h3><a href="http://profit.ndtv.com/news/market/article-markets-week-ahead-sensex-nifty-set-to-outperform-amid-global-euphoria-687700?pfrom=home-latest"target="#">Markets Week Ahead: Sensex, Nifty Set to Outperform Amid Global Euphoria</a></h3>
      <p><img src="http://i.ndtvimg.com/i/2014-05/sensex-happy-625_625x300_81400820432.jpg" alt="Markets Week Ahead: Sensex, Nifty Set to Outperform Amid Global Euphoria" width="140" height="117"/>The Sensex and Nifty are likely to make new highs in the coming week as the markets are in an unchartered territory and euphoria has set in globally.<br />
        <br />
        On Friday, the Bank of Japan (BoJ) unleashed a big bond-buying stimulus, which sent the Nikkei index up 5 per cent to a new 52-week high. The Sensex and Nifty also got a boost and the indices ended with over 3.5 per cent gains.<br />
      </p>
      <h3><a href="http://epaperbeta.timesofindia.com/Article.aspx?eid=31808&articlexml=COMPOUND-CLEARED-US-fund-gives-forgotten-Mughal-tomb-02112014005006" target="#">COMPOUND CLEARED - US fund gives forgotten Mughal tomb new life</a></h3>
      <p><div style="float:right">  <img src="images/US.jpg" width="127" height="156"/></div>
      <p>&nbsp;</p>
      <p>
During his November 2010 visit, US President Barack Obama was hugely impressed with the architectural style of Humayun's Tomb. Soon after, American Ambassador's Fund for Cultural Preservation decided to fund conservation of Bare Bateshewala Mahal, a forgotten Mughal-era tomb within walking distance of the late 16th-century World Heritage Site.
Built in the late 16th-early 17th centuries, Bara Batashewala Mahal is the tomb of Mirza Muzaffar Husain, who was married to the eldest daughter of Emperor Akbar.

</p>
      <p>&nbsp;</p>
      </p>
      
     
      </div>
      <!-- /headline --><!-- /featured --><!-- /popular -->
      
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
      <div id="bottom"><!-- /sitem -->
      <div class="sitem">
          <h3>NEWS IN VIDEOS</h3>
         <h3><a href="https://www.youtube.com/watch?v=kduHGDrpTHA" target="#"> Expose : Robert Vadra Land Deals #DamaadGate</a></h3>
           <iframe width="315" height="115" src="//www.youtube.com/embed/kduHGDrpTHA" frameborder="0" allowfullscreen></iframe> 
              <p>&nbsp;</p>
   <h3><a href="https://www.youtube.com/watch?v=pgwIgUtXspY" target="#">Nithari case | Supreme Court stays execution of Surinder Koli's death sentence </a></h3>
           <iframe width="315" height="115" src="//www.youtube.com/embed/pgwIgUtXspY" frameborder="0" allowfullscreen></iframe> 
           <p>&nbsp;</p>
            <h3><a href="https://www.youtube.com/watch?v=AbTKl9p2asg" target="#"> Iran executes woman after 'deeply flawed' investigation</a></h3>
           <iframe width="315" height="115" src="//www.youtube.com/embed/AbTKl9p2asg" frameborder="0" allowfullscreen></iframe>
              <p>&nbsp;</p>
           <h3><a href="https://www.youtube.com/watch?v=MsXhcl7bAVI" target="#">Supernatural Convention Toronto 2014 </a></h3>
           <iframe width="315" height="115" src="//www.youtube.com/embed/MsXhcl7bAVI" frameborder="0" allowfullscreen></iframe>
              <p>&nbsp;</p>
           <h3><a href="https://www.youtube.com/watch?v=ELVR8-h8LY4&list=PLGb_kGllFuDUWHt5bnfXq2VguSEf4xUpy" target="#"> Finally Keep Your New Year's Resolutions: Get in Shape & Stay Organized!</a></h3>
           <iframe width="315" height="115" src="//www.youtube.com/embed/ELVR8-h8LY4?list=PLGb_kGllFuDUWHt5bnfXq2VguSEf4xUpy" frameborder="0" allowfullscreen></iframe>
           <p>&nbsp;</p>
           <h3><a href="https://www.youtube.com/watch?v=HLRN_U__VBc" target="#"> Obesity Industrial Complex: OBESITY: Talk: Health News</a></h3>
           <iframe width="315" height="115" src="//www.youtube.com/embed/HLRN_U__VBc" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- /sitem -->
      </div>
      <!-- /bottom -->
      <!-- /bottom -->
    </div>
    <!-- /sidebar -->
    <div id="footer">
     <div class="nhm_footer">
      <ul class="iconli">
<li><a href="rss.php" class="rss"><span>RSS</span></a></li>
<li><a href="alert.php" class="news"><span>News Alerts</span></a></li>
<li><a href="mobile.php" class="mobile"><span>Mobile</span></a></li>
<li><a href="app.php" class="apps"><span>Apps</span></a></li>
<li><a href="apple.php" class="apple"><span>Apple</span></a></li>
<li><a href="android.php"class="droid"><span>Android</span></a></li>
<li><a href="windows.php" class="windows"><span>Windows</span></a></li>
<li><a href="fb.php" class="fb"><span>Facebook</span></a></li>
<li><a href="tweet.php" class="twt"><span>Twitter</span></a></li>
<li><a href="gplus.php" class="gp"><span>Google +</span></a></li>
<li><a href="linked.php" class="lnkdin"><span>LinkedIn</span></a></li>
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
        <!-- #BeginDate format:fcAm1m -->Monday, November 3, 2014  3:03<!-- #EndDate -->
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
