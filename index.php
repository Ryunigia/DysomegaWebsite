<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Dysomega</title>
  <?php 
	session_start();
	?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Games Game Indiedev Indiegame Dev Indie Belgium Company Programming Tools Cpp SDL2 Unity Development Chuture" />
  <meta name="Description" content="A small belgian indie game development company, we make games~" />
  <link rel="stylesheet" href="./external/bootstrap.min.css">
  <script src="external/jquery.min.js.download"></script>
  <script src="external/popper.min.js.download"></script>
  <script src="external/bootstrap.min.js.download"></script>
<link rel="stylesheet" href="css/basic.css" type="text/css" media="all" />
<link rel="icon" href="images/DysomegaLogo_V2_32_Alpha.png" type="image/png" sizes="32x32">
<link rel="stylesheet" href="css/gamefilter.css" type="text/css" media="all" />
<script src="javascript/gamefilter.js"></script>
<!-- BEGIN TUMBLR FACEBOOK OPENGRAPH TAGS -->
<!-- If you'd like to specify your own Open Graph tags, define the og:url and og:title tags in your theme's HTML. -->
<!-- Read more: http://ogp.me/ -->
<meta property="og:title" content="Dysomega">
<meta property="og:url" content="https://dysomega.com/?og=1">
<meta property="og:image" content="https://dysomega.com/images/DysomegaLogo_V2_64_Alpha.png">
<meta property="og:description" content="A small belgian game company that makes unordinary games">
<meta property="og:type" content="website">
<!-- END TUMBLR FACEBOOK OPENGRAPH TAGS -->
<!-- TWITTER TAGS -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@Dysomega_Games">
<meta name="twitter:title" content="Dysomega">
<meta name="twitter:description" content="A small belgian game company that makes unordinary games" />
<meta name="twitter:creator" content="Ryunigia">
<meta name="twitter:image" content="https://dysomega.com/images/DysomegaLogo_V2_64_Alpha.png" />
<meta name="twitter:image:alt" content="DysomegaLogo" />

</head>
<body> <!-- START OF BODY -->
<!-- NAVIGATION-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbarDys AccentBackColour">
  <a class="navbar-brand" href="https://www.w3schools.com/bootstrap4/trybs_template1.htm#">
  <img src="images/DysomegaLogo_V2_64_Alpha.png" alt="DysLogo" class=""><!--Dysomega--></img>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#feature">Feature</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#giveaways">Giveaways</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#games">Games</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li> 	  
    </ul>
  </div>  
</nav>
<!-- MAGIC HERE-->
<div class="container-fluid" id="home">
	<div class="InnerContainer">
		<div class="MagicWow" id="magic"></div>
		<canvas id="myCanvas"></canvas>
		<script src="javascript/magic.js"></script>
	</div>
</div>
<!-- GAME FEATURE-->
<div class="container-fluid" id="feature">
	<div class="InnerContainer">
		<div class="row">
			<div class="col">
				<h3 class="">Chuture</h3>
				<p class="AccentTextColour">2D survival game.. on a train<p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<h4>Build, craft and fight on a time travelling train</h4>
				<p>Chuture is 2D game in the dragongear engine (custom 2D engine). To complete every level in the game your goal is to catch up to the boss of the level by speeding up your train. The easiest way to do so is to add more engines or upgrade existing ones. Once you catched up the exit will open and you will be able to escape/clear the level, however if you go to slow the boss will escape and you will have to restart.</p>
			</div>
			<div class="Feature col-sm">
				<img src="images/Building.gif" alt=" " class="img-responsive">
				<div class="">
					<!--<img src="images/Transport.gif" alt=" " class="img-responsive">-->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<i> More details:</i>
		<div class="row">
			<div class="col">
				<a href="https://dysomega.itch.io/chuture"><img src="images/icons/itchio.png" alt="itchLogo"></a>
				<a href="https://gamejolt.com/dashboard/games/330268"><img src="images/icons/gamejolt.png" alt="gamejoltLogo"></a>
			</div>
		</div>
		<div class="row">
			<div class="col-5">
				<a href="https://www.indiedb.com/games/chuture" title="View Chuture on Indie DB" target="_blank"><img src="https://button.indiedb.com/popularity/medium/games/66376.png" alt="Chuture" /></a>
			</div>
		</div>
		<i> Give feedback:</i>
		<div class="row">
			<div class="col">
				<a href="https://www.stomt.com/chuture" style="background-color: white;"><img src="images/icons/stomt.png" alt="stomtLogo"></a>
			</div>
		</div>
	</div>
</div>
<div id="wave"> </div>
<div class="container-fluid AccentBackColour"  style="padding-top: 16px;">
	<div class ="InnerContainer-sm" id="giveaways">
		<div class="row">
			<div class="col">
				<h3 class="">Subscribe</h3>
				<p class="AccentTextColour">Want to be notified for a big release? or giveaways~</p>
			</div>
		</div>
		<div class="">
			<form action="https://dysomega.us18.list-manage.com/subscribe/post?u=5100a2b8c10a90cd272734269&amp;id=1b7af3746b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div class="row">
				<div class="col">
					<div class="input-group mb-3" for="mce-EMAIL">
						<input type="email" class="form-control" name="EMAIL" placeholder="Your Email">
						<div class="input-group-append">
						  <span class="input-group-text">@example.com</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="input-group mb-3" for="mce-FNAME">
						<div class="input-group-prepend">
							<span class="input-group-text">@</span>
						</div>
						<input type="text" name="FNAME" id="mce-FNAME" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="col">
						<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary bg-dark">Subscribe</button>
				</div>
			</div>
				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5100a2b8c10a90cd272734269_1b7af3746b" tabindex="-1" value=""></div>
			</div>
			<!--<textarea name="Message" placeholder="Your Message" required=""></textarea>-->
			<div class="row">
			</div>
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="InnerContainer" id="games">
		<h3>Games</h2>
			<div id="myBtnContainer">
			  <button class="btn btnBetter" onclick="filterSelection('all')"> Show all</button>
			  <button class="btn active btnBetter" onclick="filterSelection('games')"> Games</button>
			  <button class="btn btnBetter" onclick="filterSelection('tools')"> Tools</button>
			  <button class="btn btnBetter" onclick="filterSelection('prototypes')"> Prototypes</button>
			</div>
		<!-- Portfolio Gallery Grid -->
		<div class="row">
			<div class="column games">
				<div class="content">
					<div class="row">
						<div class="col-sm">
							<img src="images/Building.gif" alt="ChutureIMG" style="width:100%">
						</div>
						<div class="col">
								<h4>Chuture</h4>
								<p>Build, craft and fight while on a train travelling through time and space!</p>
								<li> Platforms: Windows </li>
								<li> Genre: Crafting Survival </li>
								<li> Engine: Custom/Dragongear sdl2.0 </li>
								<li> State: Alpha </li>
								
							<div class="row col">
								<a href="https://dysomega.itch.io/chuture"><img src="images/icons/itchio.png" alt="itchLogo"></a>
								<a href="https://gamejolt.com/dashboard/games/330268"><img src="images/icons/gamejolt.png" alt="gamejoltLogo"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column tools">
				<div class="content">
					<div class="row">
						<div class="col-sm">
							<img src="images/SpriteVoxels.gif" alt="VoxelsIMG" style="width:100%">
						</div>
						<div class="col">
								<h4>SpriteVoxels</h4>
								<p>Create simple voxels based objects out of sprites in unity</p>
								<li> Engine: Unity </li>
								<li> State: Completed </li>
								
							<div class="row col">
								<a href="https://dysomega.itch.io/spritevoxels"><img src="images/icons/itchio.png" alt="itchLogo"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column prototypes">
				<div class="content">
					<div class="row">
						<div class="col-sm">
							<img src="images/PaintingVortex.gif" alt="VortexIMG" style="width:100%">
						</div>
						<div class="col">
								<h4>Painting with vortexes</h4>
								<p>Draw something with vortexes</p>
								<li> Platforms: Windows, Linux, Html5 </li>
								<li> Genre: Simulation </li>
								<li> Engine: Unity </li>
								<li> State: Prototype, gamejam </li>
								
							<div class="row col">
								<a href="https://dysomega.itch.io/paintingwithvortex" alt="itchLogo"><img src="images/icons/itchio.png" alt="itchLogo"></a>
								<a href="https://gamejolt.com/dashboard/games/330268"><img src="images/icons/gamejolt.png" alt="gamejoltLogo"></a>
								<a href="https://www.kongregate.com/games/Dysomega/painting-with-vortexes"><img src="images/icons/kongregate.png" alt="kongregatelogo"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END GRID -->
	</div>
</div>
<!-- Footer -->
<footer class="page-footer font-small bg-secondary mt-4" id="contact">

  <div class="bg-dark">
    <div class="container">

      <!-- row-->
      <div class="row py-4 align-items-center">

        <!-- column -->
        <div class="col-7">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- column -->

        <!-- column -->
        <div class="col-5">
		<a class="socialIcons" href="https://twitter.com/Dysomega_Games">
			<img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/twitter_online_social_media-128.png" alt="twt">
		</a>
		<a class="socialIcons" href="https://www.youtube.com/channel/UCP8xRBA5Zh4rWrqi7jsxyBg">
			<img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/youtube_online_social_media_tube-128.png" alt="yt">
		</a>
		<a class="socialIcons" href="https://www.facebook.com/Dysomega">
			<img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/online_social_media_facebook-128.png" alt="fb">
		</a>
        </div>
        <!-- column -->

      </div>
      <!-- row-->

    </div>
  </div>

  <!-- Links -->
  <div class="container text-center text-md-left mt-5">

	<!-- row -->
	<div class="row mt-3">

	  <!-- column -->
	  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

		<!-- Content -->
		<h6 class="text-uppercase font-weight-bold">Dysomega</h6>
		<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		<p>A small belgian game company that makes unordinary games</p>

	  </div>
	  
	  <!-- column -->
	  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

		<!-- Links -->
		<h6 class="text-uppercase font-weight-bold">Contact</h6>
		<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		<p>
		  <i class=""></i> Kuurne, West-flanders, Belgium</p>
		<p>
		  <i class=""></i> feedback@dysomega.com</p>
	  </div>

	</div>

  </div>

  <!-- Copyright -->
  <div class="text-center py-3 bg-dark" style="">
    <p>© 2018 Dysomega. All Rights Reserved</p>
  </div>
  <!-- Copyright -->
</footer>

<!-- java -->
<script type="text/javascript">
filterSelection("games") // Execute the function and show all columns
</script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
</script>
<script type='text/javascript'>
// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
if (!btnContainer)
	console.log("myBtnContainer not found");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<?php 
	date_default_timezone_set('UTC');
	$counter_name = "counter.txt";
	$handle = fopen($counter_name, "r");
	$date = date('F Y');
	if(!$handle)
	{ 
		$_SESSION['hasVisited']="yes";
		$handle = fopen($counter_name, "w");
		fwrite($handle, 1  . '\n');
		fwrite($handle, $date . '\n');
		fwrite($handle, 1  . '\n');
		echo" <i> Welcome first vistor </i> " ; 
		fclose ($handle) ; 
	} 
	else 
	{ 
		$handle = fopen($counter_name, "r");
		$filesize = filesize($counter_name);
		$filetext = fread($handle, $filesize);
		fclose ($handle);
		//substr(string,start,length)
		// get alltime
		$nextpos = strpos($filetext, '\n');
		$endAllCount = substr($filetext, 0, $nextpos);
		$filetext = substr($filetext, $nextpos + 2, $filesize);
		$counter = (int) $endAllCount;
		
		// check month
		$nextpos = strpos($filetext, '\n');
		$endCurrentMonth = substr($filetext, 0, $nextpos);
		$filetext = substr($filetext, $nextpos + 2, $filesize);
		$counterMonth = 0;
		// check if month is same?
		if($date == $endCurrentMonth)
		{
			$nextpos = strpos($filetext, '\n');
			$endCurrentCount = substr($filetext, 0, $nextpos);
			$counterMonth = (int) $endCurrentCount;
			//$filetext = substr($filetext, $nextpos + 2, $filesize);
		}
		
		
		
		
		if(!isset($_SESSION['hasVisited']))
		{
			$_SESSION['hasVisited']="yes";
			$counter++;
			$counterMonth++;
			$handle = fopen($counter_name, "w+" ); 
			fwrite($handle, $counter . '\n') ; 
			fwrite($handle, $date . '\n');
			fwrite($handle, $counterMonth . '\n') ;
			fclose ($handle) ; 
		}

		//$counter = (int)fread($handle,20); 
		//$counterMonth = (int)fread($handle,20);  
		echo" <i> Welcome visitor nr.". $counter . " with " . $counterMonth . " visting in the month of " . $date . "</i> " ;
	} 
	exit();
 ?>
</body></html>