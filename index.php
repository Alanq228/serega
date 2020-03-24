<?php
$GLOBALS['_ta_campaign_key'] = '4785267e429fc1d88125346bc1fe1f15';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=4785267e429fc1d88125346bc1fe1f15' parameter

require 'bootloader_9538a44cd432d192877edbd36e1f9095.php';

$campaign_id = 'fg7i13';
$hybrid_mode = true;
$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>PC</title>
    <!--pageMeta-->
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Loading Elements Styles -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Loading Magnific-Popup Styles -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Loading Font Styles -->
    <link href="css/iconfont-style.css" rel="stylesheet">
    <!-- WOW Animate-->
    <link href="scripts/animations/animate.css" rel="stylesheet">
    <!-- Datepicker Styles -->
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="scripts/html5shiv.js"></script>
      <script src="scripts/respond.min.js"></script>
    <![endif]-->
    <!--headerIncludes-->
</head>

<body data-spy="scroll" data-target=".navMenuCollapse">
    <!--PRELOADER-->
			    <div id="preloader">
			        <div class="loading-data"></div>
			    </div>
    <div id="wrap">
    <!-- INTRO HALF RIGHT BLOCK -->
	<!-- RECENT POSTS 3 COL BLOCK -->
		<!-- INTRO LEFT BLOCK -->
	<header id="intro-left" class="intro-block bg-color1 dark-bg fixed-bg double-padding" style="background-image: url(&quot;https://hyperpc.ru/images/project/hyperboost/jove-2/gallery/HYP_0487.jpg&quot;); background-color: rgb(37, 40, 48); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;" src="https://tehno-rating.ru/uploads/facts/414-fact-main-840.jpg">
		<div class="container">
			<div class="slogan">
				<h1>Speed &amp; Power</h1>
				<h2 class="giant-title"><strong class="text-highlight">Gaming PC</strong></h2>
				<p>E us you will find only the most powerful and modern system units.<br>
					There must be just important information.</p>
			</div>
			<a class="btn btn-lg btn-default goto" href="#"><i class="icon icon-info"></i> More about</a>
			<a class="btn btn-lg btn-primary goto" href="#">Buy now <i class="icon right-icon icon-pointer"></i></a>
		</div>
	</header><!-- RECENT POSTS 4 COL BLOCK -->
		<section id="blog-4col">
			<div class="container">
				<h2 class="title text-center">Our pc</h2>
				<div class="row">
					<div class="col-sm-3">
						<div class="post">
							<div class="post-media">
								<a href="#"><img src="https://hyperpc.ru/images/content/main-menu/hyperpc-exclusiven-pc-menu.jpg" alt="Resolving the issue with synchronization in old version" class="img-responsive" style="width: 251px; height: 167px; border-radius: 0px; border-color: rgb(85, 85, 85); border-style: none; border-width: 1px;"></a>
							</div>
							<div class="post-content">
								<h4 class="title"><a href="#">The most powerful pc from ours. The most powerful features in the world.</a></h4>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="post">
							<div class="post-media">
								<a href="#"><img src="https://fighters.ru/wp-content/uploads/2018/7b6-best_computers.jpg" alt="Look for the latest update in coming days" class="img-responsive" style="width: 251px; height: 167px; border-radius: 0px; border-color: rgb(85, 85, 85); border-style: none; border-width: 1px;"></a>
							</div>
							<div class="post-content">
								<h4 class="title"><a href="#">The most powerful PC with the latest water cooling.</a></h4>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="post">
							<div class="post-media">
								<a href="#"><img src="https://hyperpc.ru/images/content/main-menu/hyperpc-lumen-pc-menu.jpg" alt="The meeting of developers of cross-platform apps" class="img-responsive" style="width: 251px; height: 167px; border-radius: 0px; border-color: rgb(85, 85, 85); border-style: none; border-width: 1px;"></a>
							</div>
							<div class="post-content">
								<h4 class="title"><a href="#">Optimum assembly, combination of power, compactness and elegance.</a></h4>
							</div>
						</div>
					</div>	
					<div class="col-sm-3">
						<div class="post">
							<div class="post-media">
								<a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo6nZ7JZdudbCDTx5ZKrKnv0HpkWaFPs0mXOSE7lLolKA1FNlr" alt="The new functional sketches" class="img-responsive" style="width: 251px; height: 167px; border-radius: 0px; border-color: rgb(85, 85, 85); border-style: none; border-width: 1px;"></a>
							</div>
							<div class="post-content">
								<h4 class="title"><a href="#">Powerful and rough design that combines speed and quality.</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section></div>
    <!-- /#wrap -->
    <!-- JavaScript -->
    <script src="scripts/jquery-1.11.2.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jquery.validate.min.js"></script>
    <script src="scripts/smoothscroll.js"></script>
    <script src="scripts/jquery.smooth-scroll.min.js"></script>
    <script src="scripts/placeholders.jquery.min.js"></script>
    <script src="scripts/jquery.magnific-popup.min.js"></script>
    <script src="scripts/jquery.counterup.min.js"></script>
    <script src="scripts/waypoints.min.js"></script>
    <script src="scripts/video.js"></script>
    <script src="scripts/bigvideo.js"></script>
    <script src="scripts/animations/wow.min.js"></script>
    <script src="scripts/jquery.jCounter-0.1.4.js"></script>
    <script src="scripts/bootstrap-datepicker.min.js"></script>
    <script src="scripts/audio.min.js"></script>
    <script src="scripts/goodshare.min.js"></script>
    <script src="scripts/custom.js"></script>


</body></html>