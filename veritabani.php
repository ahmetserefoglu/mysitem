<!DOCTYPE html>
<html lang="en" lang="tr-TR">

<head>
<style type="text/css">
.menulinks {position:relative;}
#menucont a{color:#006699; font-weight:bold; text-decoration:none;}
#menucont a:hover{color:#ff0000; font-weight:bold; text-decoration:underline overline; text-transform: uppercase;}

</style>

<SCRIPT LANGUAGE="JavaScript">

nSpace=7   // how many space maximum between each letter
nSpeed=200 // Animasyonun HÄ±zÄ±
timerLSM=null;
function LetterSpacingMenu() {
  if(document.getElementById){
  lnks = Math.floor(Math.random()*lnk.length);
  letterSpacing = Math.floor(Math.random()*nSpace);
  lnk[lnks].style.letterSpacing = letterSpacing + "px";
  timerLSM = setTimeout("LetterSpacingMenu()", nSpeed);
  }
}
function StopMenu() {
  if(document.getElementById) {
  clearTimeout(timerLSM);
  for(i=0;i<lnk.length;i++)
  lnk[i].style.letterSpacing = 0 + "px";
  }
}
function LSMenuInit() {
  if(document.getElementById) {
  lnk = document.getElementById("menucont").getElementsByTagName("a");
  cnt = document.getElementById("menucont");
  cnt.style.textAlign= "center";
  cnt.onmouseover=StopMenu;
  cnt.onmouseout=LetterSpacingMenu;
  LetterSpacingMenu();
  }
}
onload=LSMenuInit;
BODY { font-family:verdana, arial, helvetica; font-size:70%; }
 H1 { font-size:120%; font-style:italic; }
 
 DIV#divMenuBar { background-color:#999999; }
 TABLE#tblMenuBar TD { font-size:70%; color:white; padding:0px 5px 0px 5px; cursor:default; }
 TABLE#tblMenuBar TD.MenuMadde { font-weight:bold; cursor:hand; }
 
 DIV.clsMenu { 
  font-size:100%; background-color:#999999; 
  position:absolute; visibility:hidden; width:130px; 
  padding:5px 5px 5px 8px; border-top:1 white solid; 
 }
 DIV.clsMenu A { text-decoration:none; color:white; font-weight:bold; }
 DIV.clsMenu A:hover { color:moccasin; }

 BUTTON { font-family:tahoma; font-size:100%; }
</style>

<SCRIPT LANGUAGE="Javascript">
var eOpenMenu = null;

 function OpenMenu(eSrc,eMenu)
 {
  eMenu.style.left = eSrc.offsetLeft + divMenuBar.offsetLeft;
  eMenu.style.top = divMenuBar.offsetHeight + divMenuBar.offsetTop;
  eMenu.style.visibility = "visible";
  eOpenMenu = eMenu;
 }

 function CloseMenu(eMenu)
 {
  eMenu.style.visibility = "hidden";
  eOpenMenu = null;
 }

 function document.onmouseover()
 {
  var eSrc = window.event.srcElement;
  if ("MenuMadde" == eSrc.className)
  {
   eSrc.style.color = "moccasin"; 
   var eMenu = document.all[eSrc.id.replace("tdMenuBarItem","divMenu")];
   if (eOpenMenu && eOpenMenu != eMenu) 
   {
    CloseMenu(eOpenMenu);
   }
   if (eMenu) 
   {
    OpenMenu(eSrc,eMenu);
   }
  }
  else if (eOpenMenu && !eOpenMenu.contains(eSrc) && !divMenuBar.contains(eSrc)) 
  {
   CloseMenu(eOpenMenu);
  }
 }
 
 function document.onmouseout()
 {
  var eSrc = window.event.srcElement;
  if ("MenuMadde" == eSrc.className)
  {
   eSrc.style.color = ""; 
  }
 } 
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ahmet Şerefoğlu-Bilgisayar Mühendisi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
					
            </div>
			

<div id="menucontast">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				<li>
                <a href="index.php"  title="">Ahmet Şerefoğlu</a>
                    </li>
					<li>
                        <a href="index.php"  title="">Anasayfa</a>
                    </li>
					<li>
					<a href="about.php"  title="">Hakkımda</a>
					</li>
					
                    <li>
                       <a href="referans.php"  title="">Referanslar</a>
                    </li>
                    <li>
                        <a href="contct.php"  title="İletisim">İletişim</a>
                    </li>
                </ul>
            </div>
			</div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
               

                <!-- Preview Image -->
                <!-- Caption Style -->
   <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(../img/browser-icons.png);
        }
    </style>
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Fade in R
            {$Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                    //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_sliderb = new $JssorSlider$("sliderb_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_sliderb.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_sliderb.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
<div class="well">
    <div id="sliderb_container" style="position: relative; top: 0px; left: 0px; width: 600px;
        height: 300px; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <img u=image src="resimler/01.jpg" />
                <div u="thumb"></div>
            </div>
            <div>
                <img u=image src="resimler/02.jpg" />
                <div u="thumb"></div>
            </div>
            <div>
                <img u=image src="resimler/03.jpg" />
                <div u="thumb"></div>
            </div>
            <div>
                <img u=image src="resimler/04.jpg" />
                <div u="thumb"></div>
            </div>
        </div>
        
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <!-- thumbnail navigator container -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <div u="thumbnavigator" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!--#endregion ThumbnailNavigator Skin End -->
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(../img/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        <!-- Trigger -->
    </div>
	
</div>
	<hr>
<div class="well">
                    
                   
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="konu1.php">
                        <img class="media-object" src="indir.jpg" alt="" height="64" width="64">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="konu1.php">VERİTABANİ DERSLERİ</a>
                            <small><?php echo date('d.m.Y H:i:s'); ?></small>
                        </h4>
              Şu An Yapım Aşamasında....
				

                    </div>
                </div>
				<hr>
				
				 </div>
				<hr>
                    <nav>
  <ul class="pagination">
    <li>
      <a href="index.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="index1.php">1</a></li>
    <li><a href="index2.php">2</a></li>
    <li><a href="index3.php">3</a></li>
    <li><a href="index4.php">4</a></li>
    <li><a href="index5.php">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<hr>
				

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Arama</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kategoriler</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="cc.php">C++</a>
                                </li>
                                <li><a href="android.php">ANDROİD</a>
                                </li>
                                <li><a href="html.php">HTML</a>
                                </li>
                                <li><a href="java.php">JAVA</a>
                                </li>
								 <li><a href="veritabani.php">VERİTABANİ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="matlab.php">MATLAB</a>
                                </li>
                                <li><a href="web.php">PHP</a>
                                </li>
                                <li><a href="ardunio.php">ARDUİNO</a>
                                </li>
                                <li><a href="csharp.php">C#</a>
                                </li>
								  <li><a href="css.php">CSS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                  <div class="well">
                    <h4>Twitter</h4>
                    <p><a class="twitter-timeline" href="https://twitter.com/serefglu" data-widget-id="619661891774902272">@serefglu tarafından gönderilen tweetler</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</p>
                </div>
				<div class="well">
                    <h4>Haber</h4>
					<p><div style="width: 268px; height: 456px; overflow: hidden;">
<iframe src="http://sondakika.internethaber.com/?t=22" width="268px" height="456px" frameborder="0" scrolling="AUTO"></iframe>
<br /> <a href="http://www.internethaber.com" title="haber">Haber</a></div></p>
                
				</div>
             	
             	<div class="well">
                    <h4>Sayac</h4><p>
                
				<!-- Sayaclar.com Code Start  -->
<div align="center"><script language="Javascript" src="http://sa.sayaclar.com/c/s2.php?a=98abmkl&s=2a3"></script><br /><a href="http://sayaclar.com" title="Sayaçlar">Sayac</a></div>
<!-- Sayaclar.com Code End -->
				</div>

         

            </div>
		
<!--Koddostu Sayfa Sağında Sosyal Ağlar Kodu START-->
<!--Bu çalışma Creative Commons Attribution-Gayriticari-NoDerivs 3.0 Unported Lisansı ile lisanslanmıştır.-->
<!--Telif sahibi:koddostu.com-->

<style>div.koddosturenkli{position:fixed;z-index:1000;}div.sosyal7kd{top:50%;right:0px;margin-top:-250px;width:80px;height:470px;background:transparent;}.a8a{display:block;position:relative;right:-62px;float:right;background:#44f;width:80px;height:60px;margin:0px 0px 6px 0px;background-position:center center;background-repeat:no-repeat;transition: all 0.4s ease-out;-webkit-transition: all 0.4s ease-out;-webkit-box-shadow:-4px 0px 4px -4px #444;-moz-box-shadow:-4px 0px 4px -4px #444;box-shadow:-4px 0px 4px -4px #444;-webkit-border-top-left-radius: 3px;-webkit-border-bottom-left-radius: 3px;border-top-left-radius: 3px;border-bottom-left-radius: 3px;}</style><script src="http://kdostu.googlecode.com/svn/cquery.js"></script><style>.a8a:hover, .a8a:active, .a8a:focus{outline:0;right:-10px;width:60px;transform: rotate(-11deg);-ms-transform: rotate(-11deg);-webkit-transform: rotate(-11deg);}</style><style>.facebook7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/facebook-icon.png);background-color:#4a6ea9}.google7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/google-plus-icon.png);background-color:#e25e43}.twitter7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/twitter-icon.png);background-color:#30dcf3}.linkedin7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/linkedin-icon.png);background-color:#0095bc}.youtube7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/youtube-icon.png);background-color:#e44840}.tumblr7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/tumblr-icon.png);background-color:#375775}.rss7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/rss-icon.png);background-color:#f2b63e}div.koddosturenkli{_position:absolute;}div.sosyal7kd{_bottom:auto;_top:expression(ie6=(document.documentElement.scrollTop+document.documentElement.clientHeight - 52+"px") );}</style>



<koddostu>

<div class="koddosturenkli sosyal7kd">

<a href="https://www.facebook.com/ahmet.serefoglu.5" class="facebook7a a8a"></a>

<a href="https://plus.google.com/u/0/+AhmetSerefoglu/posts" class="google7a a8a"></a>

<a href="https://twitter.com/serefglu" class="twitter7a a8a"></a>



<a href="https://www.youtube.com/channel/UCCSePwGYmmwhwXOuhPjMr5g" class="youtube7a a8a"></a>



</div>

</koddostu>


<!--Telif sahibi:koddostu.com-->
<!--Bu çalışma Creative Commons Attribution-Gayriticari-NoDerivs 3.0 Unported Lisansı ile lisanslanmıştır.-->
<!--Koddostu Sayfa Sağında Sosyal Ağlar Kodu STOP-->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
		<div id="">
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">                
				<li><a href="cc.php">C++</a>
                                </li>
                                <li><a href="android.php">ANDROİD</a>
                                </li>
                                <li><a href="html.php">HTML</a>
                                </li>
                                <li><a href="java.php">JAVA</a>
                                </li>
								 <li><a href="veritabani.php">VERİTABANİ</a>
                                </li>
								 <li><a href="matlab.php">MATLAB</a>
                                </li>
                                <li><a href="web.php">PHP</a>
                                </li>
                                <li><a href="ardunio.php">ARDUİNO</a>
                                </li>
                                <li><a href="csharp.php">C#</a>
                                </li>
								  <li><a href="css.php">CSS</a>
                                </li>
								
								 
                </ul>
            </div>
			</div>
             <hr>
             <span class="footer__copyright">&copy; 2015. Tüm hakları saklıdır.</span></a>
             		  
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
<script type="javasript" src="js/jQuery1.2.6.js"></script>
<script type="javascript" src="js/jFlow.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
