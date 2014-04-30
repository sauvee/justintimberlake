<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>#JT2020TOUR </title>
  	<link rel="icon" href="imgs/jt-favicon.jpg" />

	<!-- CSS Stylesheets-->
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="css/examples.css" />
	<link rel="stylesheet" href="css/demo_table.css" />
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/youtube-video-gallery.css" type="text/css" media="screen" />


	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
	
	<!-- JS Documents -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
	
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
        <script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA84OCIvNpfUO7alu3B2-5uvQoDw5IclWM&sensor=true"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	<script src="js/instagram.js" type="text/javascript"></script>
	<script src="js/jquery.tweet-linkify.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jquery.youtubevideogallery.js"></script>
</head>

<body>

<ul id="menu">
	<li><a href="#Intro">Intro</a></li>
	<li><a href="#Tour">The Tour</a></li>
	<li><a href="#Photos">Your Photos</a></li>
        <li><a href="#Share">Share</a></li>
        <li><a href="#Videos">Videos</a></li>
</ul>

<div id="fullpage">
<div id="Intro"></div>

<!-- SECTION 1 -->

	<div class="section " id="section0">
				<div class="intro">
		<h1 class="gold">JUSTIN TIMBERLAKE</h1>
		
                <h2 class="gold">The 2020 Tour Experience</h2>

</div>
	<div class="social-icons">
		<ul>
			<li class="twitter" style="background-color: #f0f0f0">
			<a href="https://twitter.com/jtimberlake" target="_blank">Twitter</a>
			</li>
			<li class="facebook" style="background-color: #f0f0f0">
			<a href="https://www.facebook.com/justintimberlake" target="_blank">Facebook</a>
			</li>
			<li class="youtube" style="background-color: #f0f0f0">
			<a href="http://www.youtube.com/user/justintimberlakeVEVO" target="_blank">YouTube</a>
			</li>
			<li class="googleplus" style="background-color: #f0f0f0">
			<a href="https://plus.google.com/+JustinTimberlake" target="_blank">Google +r</a>
			</li>
		</ul>
	</div>
</div>

<!-- SECTION 2 -->
	<div class="section" id="section1">
		<h1 class="gold">The Tour</h1>
		<p class="white">Find out where you can see JT live</p>
		<h3 class="white">Navigate on the map to see the arenas</h3>
		<div class="tablestyle">
		<table id="dataTable"></table>
		</div>
		<div id="map-canvas"></div>
	</div>

<!-- SECTION 3 -->
	<div class="section" id="section2">
		<div class="intro">
			<h1 class="gold">Your Photos</h1>
			<p class="white">Tag your Instagram photos with #JT2020Tour</p>
			<h3 class="white">Click on the images to see them in full resolution</h3>
			<div id="results"></div>
		</div>
	</div>

<!-- SECTION 4 -->
        	<div class="section" id="section3">
		<div class="intro">
			<h1 class="gold">Share</h1>
			<p class="white">Tweet your #JT2020Tour Experience</p>
<div id="scrollbar1">
	            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">
                 <div class="overview">
                    
<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "240297732-rX5XuHIr2ukqeLkaR1blBfNV3Q7e7wB5OgRXLOSL",
    'oauth_access_token_secret' => "4kujDKhVWryn5s1AFUfRCD1UZ86AutBdZD7MUh8xEYqB1",
    'consumer_key' => "qCnssvcEuFbgxVxWBiJSDJYy9",
    'consumer_secret' => "1PxcYLATvxkKrivoHO7Ezz3qK33iAeWXC1XAjethrHsSLECb3W"
);


/** Perform a GET request and echo the response **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23JT2020TOUR&count=20';

$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
//echo $twitter->setGetfield($getfield)
             //->buildOauth($url, $requestMethod)
             //->performRequest();


$string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(),$assoc = TRUE);

    
    foreach($string['statuses'] as $items)
        {
		$users = $items['user'];
		$tweettime = $items['created_at'];
		$tweettime = date("M d", strtotime($tweettime));
		
	  echo "<img class='floatleft' src='" . $users['profile_image_url'] . "'><br/>";
	  echo "<p class='tweet tweetname'> @". $users['screen_name']. " - " . $tweettime. "<br/>";
          echo "<p class='tweet'>" . $items['text'];
          echo "<hr />";  
        }
?>
 
</div>
</div>
</div>
</div>
</div>
<!-- Section 5 -->
                <div class="section" id="section4">
		<div class="intro">
<h1 class="gold">Videos</h1>
<p class="white"> Watch JT's latest videos</p>
<div class="videogallery">
 <ul class="youtube-videogallery">
      <li><a href="http://www.youtube.com/watch?v=Uj9xg3jAIsY">Not A Bad Thing</a></li>
      <li><a href="http://www.youtube.com/watch?v=CjgT8Af1kGc">Take Back the Night</a></li>
      <li><a href="http://www.youtube.com/watch?v=-WCnpZruNoo">Mirrors</a></li>
      <li><a href="https://www.youtube.com/watch?v=BrMlmbZukOI">Cry Me A River</a></li>
      <li><a href="https://www.youtube.com/watch?v=MFN-iKwMrIQ">TKO</a></li>
      <li><a href="https://www.youtube.com/watch?v=IsUsVbTj2AY">Suit & Tie</a></li>
      <li><a href="http://www.youtube.com/watch?v=5J1oSmlJQi8">JT meets fans</a></li>
      <li><a href="http://www.youtube.com/watch?v=unzWJWiCALA">What Goes Around</a></li>

  </ul>

 </div>

	</div>

<p class="footer">Web design: <a href="http://mariesauvee.com">Marie Sauv&eacute;e</a></p>

	</div>
</div>
</div>

<script type="text/javascript">
	
// Tweet linkify

	$('p.tweet').tweetLinkify();


$(document).ready(function() {


//parallax background       
	$('#fullpage').fullpage({	
                anchors: ['Intro', 'Tour', 'Photos', 'Share', 'Videos'],
       		css3: true,
		easing: 'easeInQuart',
		menu: false,
		navigationPosition: 'left',
		loopBottom: true,
		loopTop: true,
		loopHorizontal: true,
		autoScrolling: false,
		scrollOverflow: false,
		paddingTop: '3em',
		paddingBottom: '10px',
		keyboardScrolling: true,
		touchSensitivity: 15,
		continuousVertical: false,
		animateAnchor: true,
			});


// Fancybox
	$(".fancybox").fancybox();
// Youtube gallery
	 $("ul.youtube-videogallery").youtubeVideoGallery({

          });

// Scrollbar
 var $scrollbar = $("#scrollbar1");
	$scrollbar.tinyscrollbar();

// MAPS PLUGIN
      initialize()
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(33.455105, -53.242188),
          zoom: 2,
	  mapTypeId: google.maps.MapTypeId.SATELLITE,
        };
	
	var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
        
        var marker = new google.maps.Marker({
      position: new google.maps.LatLng(51.96477 , 5.89447 ),
      
                map: map,
          title: 'Arnhem'
        });

       var contentString = 'Arnhem';

      var infowindow = new google.maps.InfoWindow({
      content: contentString,

  });
      
      google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
  });
            var marker2 = new google.maps.Marker({
      position: new google.maps.LatLng(50.93834 , 6.98295 ),
                map: map,
          title: 'Koln!'
        });
        var contentString2 = 'Koln';

  var infowindow2 = new google.maps.InfoWindow({
      content: contentString2,

  });
  
    
        google.maps.event.addListener(marker2, 'click', function() {
      infowindow2.open(map,marker2);
  });
  
              var marker3 = new google.maps.Marker({
      position: new google.maps.LatLng(52.58273 , 13.31151 ),
                map: map,
          title: 'Belin!'
        });
        var contentString3 = 'Berlin';

  var infowindow3 = new google.maps.InfoWindow({
      content: contentString3,

  });
  
        google.maps.event.addListener(marker3, 'click', function() {
      infowindow3.open(map,marker3);
  });
	            var marker4 = new google.maps.Marker({
      position: new google.maps.LatLng(48.86458 , 2.26968 ),
                map: map,
          title: 'Paris'
        });
        var contentString4 = 'Paris';

  var infowindow4 = new google.maps.InfoWindow({
      content: contentString4,

  });
  
    
        google.maps.event.addListener(marker4, 'click', function() {
      infowindow4.open(map,marker4);
  });
	            var marker5 = new google.maps.Marker({
      position: new google.maps.LatLng(52.31344 , 4.93672 ),
                map: map,
          title: 'Amsterdam'
        });
        var contentString5 = 'Amsterdam';

  var infowindow5 = new google.maps.InfoWindow({
      content: contentString5,

  });
  
    
        google.maps.event.addListener(marker5, 'click', function() {
      infowindow5.open(map,marker5);
  });
	            var marker6 = new google.maps.Marker({
      position: new google.maps.LatLng(53.58267 , 10.49615 ),
                map: map,
          title: 'Hamburg'
        });
        var contentString6 = 'Hamburg';

  var infowindow6 = new google.maps.InfoWindow({
      content: contentString6,

  });
  
    
        google.maps.event.addListener(marker6, 'click', function() {
      infowindow6.open(map,marker6);
  });
	            var marker7 = new google.maps.Marker({
      position: new google.maps.LatLng(55.70230 , 12.57156 ),
                map: map,
          title: 'Copenhagen'
        });
        var contentString7 = 'Copenhagen';

  var infowindow7 = new google.maps.InfoWindow({
      content: contentString7,

  });
  
    
        google.maps.event.addListener(marker7, 'click', function() {
      infowindow7.open(map,marker7);
  });
	            var marker8 = new google.maps.Marker({
      position: new google.maps.LatLng(59.91387 , 10.75322 ),
                map: map,
          title: 'Oslo'
        });
        var contentString8 = 'Oslo';

  var infowindow8 = new google.maps.InfoWindow({
      content: contentString8,

  });
  
    
        google.maps.event.addListener(marker8, 'click', function() {
      infowindow8.open(map,marker8);
  });
	            var marker9 = new google.maps.Marker({
      position: new google.maps.LatLng(59.29201 , 18.08481 ),
                map: map,
          title: 'Stokholm'
        });
        var contentString9 = 'Stokholm';

  var infowindow9 = new google.maps.InfoWindow({
      content: contentString9,

  });
  
    
        google.maps.event.addListener(marker9, 'click', function() {
      infowindow9.open(map,marker9);
  });
            var marker10 = new google.maps.Marker({
      position: new google.maps.LatLng(60.17332 , 24.94102 ),
                map: map,
          title: 'Helsinki'
        });
        var contentString10 = 'Helsinki';

  var infowindow10 = new google.maps.InfoWindow({
      content: contentString10,

  });
  
    
        google.maps.event.addListener(marker10, 'click', function() {
      infowindow10.open(map,marker10);
  });
	            var marker11 = new google.maps.Marker({
      position: new google.maps.LatLng(59.83343 , 30.35572
 ),
                map: map,
          title: 'St Petersburg'
        });
        var contentString11 = 'St Petersburg';

  var infowindow11 = new google.maps.InfoWindow({
      content: contentString11,

  });
  
    
        google.maps.event.addListener(marker11, 'click', function() {
      infowindow11.open(map,marker11);
  });
	            var marker12 = new google.maps.Marker({
      position: new google.maps.LatLng(55.78104 , 37.62648 ),
                map: map,
          title: 'Moscow'
        });
        var contentString12 = 'Moscow';

  var infowindow12 = new google.maps.InfoWindow({
      content: contentString12,

  });
  
    
        google.maps.event.addListener(marker12, 'click', function() {
      infowindow12.open(map,marker12);
  });
	            var marker13 = new google.maps.Marker({
      position: new google.maps.LatLng(24.46667 , 54.36667 ),
                map: map,
          title: 'Abu Dhabi'
        });
        var contentString13 = 'Abu Dhabi';

  var infowindow13 = new google.maps.InfoWindow({
      content: contentString13,

  });
  
    
        google.maps.event.addListener(marker13, 'click', function() {
      infowindow13.open(map,marker13);
  });
	            var marker14 = new google.maps.Marker({
      position: new google.maps.LatLng(54.36667 , 28.97696 ),
                map: map,
          title: 'Istanbul'
        });
        var contentString14= 'Istanbul';

  var infowindow14 = new google.maps.InfoWindow({
      content: contentString14,

  });
  
    
        google.maps.event.addListener(marker14, 'click', function() {
      infowindow14.open(map,marker14);
  });
	            var marker15 = new google.maps.Marker({
      position: new google.maps.LatLng(32.10119 , 34.81559 ),
                map: map,
          title: 'Tel Aviv'
        });
        var contentString15 = 'Tel Aviv';

  var infowindow15 = new google.maps.InfoWindow({
      content: contentString15,

  });
  
    
        google.maps.event.addListener(marker15, 'click', function() {
      infowindow15.open(map,marker15);
  });
	            var marker16 = new google.maps.Marker({
      position: new google.maps.LatLng(33.97408 , -6.84582 ),
                map: map,
          title: 'Rabat'
        });
        var contentString16 = 'Rabat';

  var infowindow16 = new google.maps.InfoWindow({
      content: contentString16,

  });
  
    
        google.maps.event.addListener(marker16, 'click', function() {
      infowindow16.open(map,marker16);
  });
	
  	            var marker17 = new google.maps.Marker({
      position: new google.maps.LatLng(38.76863 , -9.09586 ),
                map: map,
          title: 'Lisbon'
        });
        var contentString17 = 'Lisbon';

  var infowindow17 = new google.maps.InfoWindow({
      content: contentString17,

  });
  
    
        google.maps.event.addListener(marker17, 'click', function() {
      infowindow17.open(map,marker17);
  });
	
		            var marker18 = new google.maps.Marker({
      position: new google.maps.LatLng(50.10447 , 14.49969 ),
                map: map,
          title: 'Prague'
        });
        var contentString18 = 'Prague';

  var infowindow18 = new google.maps.InfoWindow({
      content: contentString18,

  });
  
    
        google.maps.event.addListener(marker18, 'click', function() {
      infowindow16.open(map,marker18);
  });
	
		            var marker19 = new google.maps.Marker({
      position: new google.maps.LatLng(48.20242 , 16.33297 ),
                map: map,
          title: 'Vienna'
        });
        var contentString19 = 'Vienna';

  var infowindow19 = new google.maps.InfoWindow({
      content: contentString19,

  });
  
    
        google.maps.event.addListener(marker19, 'click', function() {
      infowindow16.open(map,marker19);
  });
	
		            var marker20 = new google.maps.Marker({
      position: new google.maps.LatLng(50.06955 , 8.64631 ),
                map: map,
          title: 'Frankfurt'
        });
        var contentString20 = 'Frankfurt';

  var infowindow20 = new google.maps.InfoWindow({
      content: contentString20,

  });
  
    
        google.maps.event.addListener(marker20, 'click', function() {
      infowindow16.open(map,marker20);
  });
	
	            var marker21 = new google.maps.Marker({
      position: new google.maps.LatLng(51.50285 , 0.00330 ),
                map: map,
          title: 'London'
        });
        var contentString21 = 'London';

  var infowindow21 = new google.maps.InfoWindow({
      content: contentString21,

  });
  
    
        google.maps.event.addListener(marker21, 'click', function() {
      infowindow21.open(map,marker21);
  });
	
	            var marker22 = new google.maps.Marker({
      position: new google.maps.LatLng(38.19058 , -81.89141 ),
                map: map,
          title: 'Buffalo, NY'
        });
        var contentString22 = 'Buffalo, NY';

  var infowindow22 = new google.maps.InfoWindow({
      content: contentString22,

  });
  
    
        google.maps.event.addListener(marker22, 'click', function() {
      infowindow22.open(map,marker22);
  });
	
		            var marker23 = new google.maps.Marker({
      position: new google.maps.LatLng(35.22709 , -80.84313 ),
                map: map,
          title: 'Charlotte, NC'
        });
        var contentString23 = 'Charlotte, NC';

  var infowindow23 = new google.maps.InfoWindow({
      content: contentString23,

  });
  
    
        google.maps.event.addListener(marker23, 'click', function() {
      infowindow23.open(map,marker23);
  });
	
		            var marker24 = new google.maps.Marker({
      position: new google.maps.LatLng(39.28861 , -76.61889 ),
                map: map,
          title: 'Baltimore, MD'
        });
        var contentString24 = 'Baltimore, MD';

  var infowindow24 = new google.maps.InfoWindow({
      content: contentString24,

  });
  
    
        google.maps.event.addListener(marker24, 'click', function() {
      infowindow24.open(map,marker24);
  });
	
		            var marker25 = new google.maps.Marker({
      position: new google.maps.LatLng(44.83444 , -76.25724 ),
                map: map,
          title: 'Albany, NY'
        });
        var contentString25 = 'Albany, NY';

  var infowindow25 = new google.maps.InfoWindow({
      content: contentString25,

  });
  
    
        google.maps.event.addListener(marker25, 'click', function() {
      infowindow25.open(map,marker25);
  });
	
		            var marker26 = new google.maps.Marker({
      position: new google.maps.LatLng(41.49049 , -72.09345 ),
                map: map,
          title: 'Uncasville, CT'
        });
        var contentString26 = 'Uncasville, CT';

  var infowindow26 = new google.maps.InfoWindow({
      content: contentString26,

  });
  
    
        google.maps.event.addListener(marker26, 'click', function() {
      infowindow26.open(map,marker26);
  });
	
		            var marker27 = new google.maps.Marker({
      position: new google.maps.LatLng(42.36619 , -71.06215 ),
                map: map,
          title: 'Boston, MA'
        });
        var contentString27 = 'Boston, MA';

  var infowindow27 = new google.maps.InfoWindow({
      content: contentString27,

  });
  
    
        google.maps.event.addListener(marker27, 'click', function() {
      infowindow27.open(map,marker27);
  });
	
		            var marker28 = new google.maps.Marker({
      position: new google.maps.LatLng(45.29871 , -75.92632 ),
                map: map,
          title: 'Ottawa'
        });
        var contentString28 = 'Ottawa';

  var infowindow28 = new google.maps.InfoWindow({
      content: contentString28,

  });
  
    
        google.maps.event.addListener(marker28, 'click', function() {
      infowindow28.open(map,marker28);
  });
	
		            var marker29 = new google.maps.Marker({
      position: new google.maps.LatLng(45.49607 , -73.56932 ),
                map: map,
          title: 'Montreal'
        });
        var contentString29 = 'Montreal';

  var infowindow29 = new google.maps.InfoWindow({
      content: contentString29,

  });
  
    
        google.maps.event.addListener(marker29, 'click', function() {
      infowindow29.open(map,marker29);
  });
	
		            var marker30 = new google.maps.Marker({
      position: new google.maps.LatLng(42.33143 , -83.04575 ),
                map: map,
          title: 'Detroit, MI'
        });
        var contentString30 = 'Detroit, MI';

  var infowindow30 = new google.maps.InfoWindow({
      content: contentString30,

  });
  
    
        google.maps.event.addListener(marker30, 'click', function() {
      infowindow30.open(map,marker30);
  });
	
		            var marker31 = new google.maps.Marker({
      position: new google.maps.LatLng(38.91781 , -94.65979 ),
                map: map,
          title: 'Kansas City, MO'
        });
        var contentString31 = 'Kansas City, MO';

  var infowindow31 = new google.maps.InfoWindow({
      content: contentString31,

  });
  
    
        google.maps.event.addListener(marker31, 'click', function() {
      infowindow31.open(map,marker31);
  });
	
		            var marker32 = new google.maps.Marker({
      position: new google.maps.LatLng(30.03015 , -90.05051 ),
                map: map,
          title: 'New Orleans, LA'
        });
        var contentString32 = 'New Orleans, LA';

  var infowindow32 = new google.maps.InfoWindow({
      content: contentString32,

  });
  
    
        google.maps.event.addListener(marker32, 'click', function() {
      infowindow32.open(map,marker32);
  });
	
		            var marker33 = new google.maps.Marker({
      position: new google.maps.LatLng(29.42693 , -98.43742 ),
                map: map,
          title: 'San Antonio, TX'
        });
        var contentString33 = 'San Antonio, TX';

  var infowindow33 = new google.maps.InfoWindow({
      content: contentString33,

  });
  
    
        google.maps.event.addListener(marker33, 'click', function() {
      infowindow33.open(map,marker33);
  });
	
		            var marker34 = new google.maps.Marker({
      position: new google.maps.LatLng(36.16994 , -115.13983 ),
                map: map,
          title: 'Las Vegas, NV'
        });
        var contentString34 = 'Las Vegas, NV';

  var infowindow34 = new google.maps.InfoWindow({
      content: contentString34,

  });
  
    
        google.maps.event.addListener(marker34, 'click', function() {
      infowindow34.open(map,marker34);
  });
	
		            var marker35 = new google.maps.Marker({
      position: new google.maps.LatLng(33.53193 , -112.26122 ),
                map: map,
          title: 'Glendale, AZ'
        });
        var contentString35 = 'Glendale, AZ';

  var infowindow35 = new google.maps.InfoWindow({
      content: contentString35,

  });
  
    
        google.maps.event.addListener(marker35, 'click', function() {
      infowindow35.open(map,marker35);
  });
	
		            var marker36 = new google.maps.Marker({
      position: new google.maps.LatLng(37.33939 , -121.89496 ),
                map: map,
          title: 'San Jose, CA'
        });
        var contentString36 = 'San Jose, CA';

  var infowindow36 = new google.maps.InfoWindow({
      content: contentString36,

  });
  
    
        google.maps.event.addListener(marker36, 'click', function() {
      infowindow36.open(map,marker36);
  });
	
		            var marker37 = new google.maps.Marker({
      position: new google.maps.LatLng(34.04243 , -118.26659 ),
                map: map,
          title: 'Los Angeles, CA'
        });
        var contentString37 = 'Los Angeles, CA';

  var infowindow37 = new google.maps.InfoWindow({
      content: contentString37,

  });
  
    
        google.maps.event.addListener(marker37, 'click', function() {
      infowindow37.open(map,marker37);
  });
	
		            var marker38 = new google.maps.Marker({
      position: new google.maps.LatLng(51.71117 , 0.43721 ),
                map: map,
          title: 'Chelmsford'
        });
        var contentString38 = 'Chelmsford';

  var infowindow38 = new google.maps.InfoWindow({
      content: contentString38,

  });
  
    
        google.maps.event.addListener(marker38, 'click', function() {
      infowindow38.open(map,marker38);
  });
		            var marker39 = new google.maps.Marker({
      position: new google.maps.LatLng(52.81600 , -2.30566 ),
                map: map,
          title: 'South Staffordshire'
        });
        var contentString39 = 'South Staffordshire';

  var infowindow39 = new google.maps.InfoWindow({
      content: contentString39,

  });
  
    
        google.maps.event.addListener(marker39, 'click', function() {
      infowindow39.open(map,marker39);
  });
	
		            var marker40 = new google.maps.Marker({
      position: new google.maps.LatLng(54.39008 , 18.63930 ),
                map: map,
          title: 'Gdansk'
        });
        var contentString40 = 'Gdansk';

  var infowindow40 = new google.maps.InfoWindow({
      content: contentString40,

  });
  
    
        google.maps.event.addListener(marker40, 'click', function() {
      infowindow40.open(map,marker40);
  });
	
		            var marker41 = new google.maps.Marker({
      position: new google.maps.LatLng(64.07885 , -21.83254 ),
                map: map,
          title: 'K—pavogur'
        });
        var contentString41 = 'K—pavogur';

  var infowindow41 = new google.maps.InfoWindow({
      content: contentString41,

  });
  
    
        google.maps.event.addListener(marker41, 'click', function() {
      infowindow41.open(map,marker41);
  });
	
		            var marker42 = new google.maps.Marker({
      position: new google.maps.LatLng(-37.817987 , 144.94811 ),
                map: map,
          title: 'Melbourne'
        });
        var contentString42 = 'Melbourne';

  var infowindow42 = new google.maps.InfoWindow({
      content: contentString42,

  });
  
    
        google.maps.event.addListener(marker42, 'click', function() {
      infowindow42.open(map,marker42);
  });
	
		            var marker43 = new google.maps.Marker({
      position: new google.maps.LatLng(-34.90721 , 138.57493 ),
                map: map,
          title: 'Adelaide'
        });
        var contentString43 = 'Adelaide';

  var infowindow43 = new google.maps.InfoWindow({
      content: contentString43,

  });
  
    
        google.maps.event.addListener(marker43, 'click', function() {
      infowindow43.open(map,marker43);
  });
	
		            var marker44 = new google.maps.Marker({
      position: new google.maps.LatLng(-27.56084 , 153.06790 ),
                map: map,
          title: 'Brisbane'
        });
        var contentString44 = 'Brisbane';

  var infowindow44 = new google.maps.InfoWindow({
      content: contentString44,

  });
  
    
        google.maps.event.addListener(marker44, 'click', function() {
      infowindow44.open(map,marker44);
  });
	var marker45 = new google.maps.Marker({
      position: new google.maps.LatLng(-33.86749 , 151.20699 ),
                map: map,
          title: 'Sydney'
        });
        var contentString45 = 'Sydney';

  var infowindow45 = new google.maps.InfoWindow({
      content: contentString45,

  });
  
    
        google.maps.event.addListener(marker45, 'click', function() {
      infowindow45.open(map,marker45);
  });
			            var marker46 = new google.maps.Marker({
      position: new google.maps.LatLng(43.56307 , -80.92139 ),
                map: map,
          title: 'Perth'
        });
        var contentString46 = 'Perth';

  var infowindow46 = new google.maps.InfoWindow({
      content: contentString46,

  });
  
    
        google.maps.event.addListener(marker46, 'click', function() {
      infowindow46.open(map,marker46);
  });
			            var marker47 = new google.maps.Marker({
      position: new google.maps.LatLng(-36.84670 ,174.77516 ),
                map: map,
          title: 'Auckland'
        });
        var contentString47 = 'Auckland';

  var infowindow47 = new google.maps.InfoWindow({
      content: contentString47,

  });
  
    
        google.maps.event.addListener(marker47, 'click', function() {
      infowindow47.open(map,marker47);
  });
			            var marker48 = new google.maps.Marker({
      position: new google.maps.LatLng(45.53150 , -122.66678 ),
                map: map,
          title: 'Portland, OR'
        });
        var contentString48 = 'Portland, OR';

  var infowindow48 = new google.maps.InfoWindow({
      content: contentString48,

  });
  
    
        google.maps.event.addListener(marker48, 'click', function() {
      infowindow48.open(map,marker48);
  });
			            var marker49 = new google.maps.Marker({
      position: new google.maps.LatLng(37.80436 , -122.27111 ),
                map: map,
          title: 'Oakland, CA'
        });
        var contentString49 = 'Oakland, CA';

  var infowindow49 = new google.maps.InfoWindow({
      content: contentString49,

  });
  
    
        google.maps.event.addListener(marker49, 'click', function() {
      infowindow49.open(map,marker49);
  });
			            var marker50 = new google.maps.Marker({
      position: new google.maps.LatLng(33.95806 , -118.34199 ),
                map: map,
          title: 'Los Angeles, CA'
        });
        var contentString50 = 'Los Angeles, CA';

  var infowindow50 = new google.maps.InfoWindow({
      content: contentString50,

  });
  
    
        google.maps.event.addListener(marker50, 'click', function() {
      infowindow50.open(map,marker50);
  });
			            var marker51 = new google.maps.Marker({
      position: new google.maps.LatLng(29.75080 , -95.36227 ),
                map: map,
          title: 'Houston, TX'
        });
        var contentString51 = 'Houston, TX';

  var infowindow51 = new google.maps.InfoWindow({
      content: contentString51,

  });
  
    
        google.maps.event.addListener(marker51, 'click', function() {
      infowindow51.open(map,marker51);
  });
			            var marker52 = new google.maps.Marker({
      position: new google.maps.LatLng(41.63284 , -93.78999 ),
                map: map,
          title: 'Dallas, TX'
        });
        var contentString52 = 'Dallas, TX';

  var infowindow52 = new google.maps.InfoWindow({
      content: contentString52,

  });
  
    
        google.maps.event.addListener(marker52, 'click', function() {
      infowindow52.open(map,marker52);
  });
			            var marker53 = new google.maps.Marker({
      position: new google.maps.LatLng(35.46339 , -97.51459 ),
                map: map,
          title: 'Oklahoma City, OK'
        });
        var contentString53 = 'Oklahoma City, OK';

  var infowindow53 = new google.maps.InfoWindow({
      content: contentString53,

  });
  
    
        google.maps.event.addListener(marker53, 'click', function() {
      infowindow53.open(map,marker53);
  });
			            var marker54 = new google.maps.Marker({
      position: new google.maps.LatLng(41.88069 , -87.67418 ),
                map: map,
          title: 'Chicago, IL'
        });
        var contentString54 = 'Chicago, IL';

  var infowindow54 = new google.maps.InfoWindow({
      content: contentString54,

  });
  
    
        google.maps.event.addListener(marker54, 'click', function() {
      infowindow54.open(map,marker54);
  });
			            var marker55 = new google.maps.Marker({
      position: new google.maps.LatLng(43.64415 , -79.37822 ),
                map: map,
          title: 'Toronto'
        });
        var contentString55 = 'Toronto';

  var infowindow55 = new google.maps.InfoWindow({
      content: contentString55,

  });
  
    
        google.maps.event.addListener(marker55, 'click', function() {
      infowindow55.open(map,marker55);
  });
			            var marker56 = new google.maps.Marker({
      position: new google.maps.LatLng(40.68367 , -73.97881 ),
                map: map,
          title: 'Brooklyn, NY'
        });
        var contentString56 = 'Brooklyn, NY';

  var infowindow56 = new google.maps.InfoWindow({
      content: contentString56,

  });
  
    
        google.maps.event.addListener(marker56, 'click', function() {
      infowindow56.open(map,marker56);
  });
			            var marker57 = new google.maps.Marker({
      position: new google.maps.LatLng(39.90067 , -75.17142 ),
                map: map,
          title: 'Philadelphia, PN'
        });
        var contentString57 = 'Philadelphia, PN';

  var infowindow57 = new google.maps.InfoWindow({
      content: contentString57,

  });
  
    
        google.maps.event.addListener(marker57, 'click', function() {
      infowindow57.open(map,marker57);
  });
			            var marker58 = new google.maps.Marker({
      position: new google.maps.LatLng(36.15921 , -86.77840 ),
                map: map,
          title: 'Nashville, TN'
        });
        var contentString58 = 'Nashville, TN';

  var infowindow58 = new google.maps.InfoWindow({
      content: contentString58,

  });
  
    
        google.maps.event.addListener(marker58, 'click', function() {
      infowindow58.open(map,marker58);
  });
			            var marker59 = new google.maps.Marker({
      position: new google.maps.LatLng(33.96500 , -84.01217 ),
                map: map,
          title: 'Atlanta, GA'
        });
        var contentString59 = 'Atlanta, GA';

  var infowindow59 = new google.maps.InfoWindow({
      content: contentString59,

  });
  
    
        google.maps.event.addListener(marker59, 'click', function() {
      infowindow59.open(map,marker59);
  });
	

      }
      

      //Table

     //Builds table data
	//loadXML     
    $.ajax({
    type: "GET",
    url: "data/tourdates.xml",
    dataType: "xml",
    success: parseXml4
  });

//ParseXML

function parseXml4(xml){
  var tourDates = new Array;

    
    var aaData = new Array;
    $(xml).find("Row").each(function(index)
{
      var eachRow = new Array;
      eachRow.push($(this).attr("A")); //Date
      eachRow.push($(this).attr("B")); //Country
      eachRow.push($(this).attr("C")); //City
      eachRow.push($(this).attr("D")); //Tickets

      
      aaData.push(eachRow);
      
  })
    

	$('#dataTable').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>' );
	$('#dataTable').dataTable( {
	      "bSort": true,
	"bScrollInfinite": true,
    "bScrollCollapse": true,
    "sScrollY": "200px",
    "bInfo": false,

		      

		"aaData": aaData,
		"aoColumns": [
			
			{ "sTitle": "Date" },
			{ "sTitle": "Country" },
			{ "sTitle": "City" },
			{ "sTitle": "Tickets"},			
		]
	} );	
}

//End of document ready
		});
	</script>
</body>
</html>
