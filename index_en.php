<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include("php/langs.php");


    if ( !isset( $_COOKIE["language"]) ) {
        if ($countryName=="Albania") {
          $_SESSION["lang"] = "AL";
          setcookie ( 'language', "AL", time() + 60*60*24*30);
        }else if ($countryName=="Italy") {
          $_SESSION["lang"] = "IT";
        setcookie ( 'language', "IT", time() + 60*60*24*30);
        }else{
          $_SESSION["lang"] = "EN";
          setcookie ( 'language', "EN", time() + 60*60*24*30);
        }
    } else {
        $_SESSION["lang"] = $_COOKIE["language"];
          }

?>


<html class="no-js" lang="en">
<!--<![endif]--><head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Alfred Gjini - CV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="images/logo_agj1.png" />

<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link href="css/perfect-scrollbar.css" rel="stylesheet">

<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif;-->

<!-- font css style-->
<link rel="stylesheet" href="css/font-awesome.css">

<!--for slider style-->

<noscript>
<link rel="stylesheet" type="text/css" href="css/fallback.css" />
</noscript>
<!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/fallback.css" />
    <![endif]-->
</head><body>

<!--wrapper start-->
<div class="wrapper" id="wrapper">
  <header> 
    <!--menu start-->
    <div class="menu">
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <a class="navbar-brand" href="#">Menu</a> </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav nav-justified">
                    <li class="first menuItem homeLink active"><a href="#wrapper">Home</a></li><li class="menuItem"><a href="#aboutme">About</a></li><li class="menuItem"><a href="#technical">Skills</a></li><li class="menuItem"><a href="#exprience">Experience</a></li><li class="menuItem"><a href="#education">Education</a></li><li class="menuItem"><a href="#protfolio">Portfolio</a></li><!-- <li class="menuItem"><a href="#reffernces">Reffernces</a></li> --><li class="menuItem"><a href="#contact">Contact</a></li>
                    <li class="dropdown menuItem" >

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><? echo $_SESSION["lang"]; ?> &#9660; </a>

                                <ul class="dropdown-menu" style="text-align: center;margin-left: -40px;">

                                    <li><a style="line-height: 40px;" href="language_switcher.php?lang=EN">EN</a></li>

                                    <li><a style="line-height: 40px;" href="language_switcher.php?lang=IT">IT</a></li>

                                    <li><a style="line-height: 40px;" href="language_switcher.php?lang=AL">AL</a></li>

                                </ul>

                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar --> 
        </div>
      </div>
    </div>
    <!--menu end--> 
    
  </header>
  
  <!--about me start-->
  <section class="aboutme" id="aboutme">
    <div class="">
      
      <div class="row">
      <div class=" col-xs-12 col-sm-12 col-md-5 col-lg-5 proPic"> <img src="images/profile.jpg" alt="" class="img-responsive"> </div>
        <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-5 aboutCont">
        	<div class="heading clearfix">
                <h2>About me</h2>
              </div>
        
          <h3>Alfred Gjini</h3>
          <h4 class="subHeading">Programmer from Albania</h4>
          
          <div id="description">
          <p>I am a 23 year old student currently in my last year of Master of Science in Computer Science (Informatics). I’m a full-stack developer with 2 years of experience developing different platforms and websites. I am a quick learner and I like to learn new things.</p> 

<p><!-- test --></p>
			</div>
          <a href="Alfred-Gjini-CV-EN.docx" class="bntDownload">Download Printable Resume</a> </div>
        
      </div>
    </div>
  </section>
  <!--about me end--> 
  
  <!--technical start-->
  <section class="technical" id="technical">
    <div class="container">
      <div class="heading">
        <h2>My Expertise & Skills </h2>
        <!-- <p><?=$langs["belive"][$_SESSION["lang"]]?></p> -->
        <p>Different programs / skills I have mastered during my school and work days and a small description for each one of them.</p>
      </div>
      <div class="row">
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"><span class="chart skilBg" data-percent="65"> <span class="percent"></span> </span>
            <h4>Photoshop</h4>
            <p>I have designed and modified different page layouts, banners, logos, posters etc</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="60"> <span class="percent"></span> </span>
            <h4>Illustrator</h4>
            <p>I have designed the graduation certificates for a foreign language center.</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="80"> <span class="percent"></span> </span>
            <h4>Cyberlink PowerDirector</h4>
            <p>I have used PowerDirector for more than 5 years to edit movies and short videos.</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="50"> <span class="percent"></span> </span>
            <h4>Sony Vegas</h4>
            <p>I have used Sony Vegas for more than 5 years to edit movies and short videos.</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="60"> <span class="percent"></span> </span>
            <h4>Adobe Premiere Pro</h4>
            <p>I have used Adobe Premiere for more than 5 years to edit movies and short videos.</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="60"> <span class="percent"></span> </span>
            <h4>Corel Draw</h4>
            <p>I have created 4 ebooks in 3 different languages using Corel Draw</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="65"> <span class="percent"></span> </span>
            <h4>AdWords / AdSense</h4>
            <p>I have created and managed different marketing campaigns for different works</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="85"> <span class="percent"></span> </span>
            <h4>Email Templates & Campaigns</h4>
            <p>I have created many email templates and used them on Amazon SES, Sendy, ElasticMail, MailChimp etc</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="75"> <span class="percent"></span> </span>
            <h4>Microsoft Office / Page Maker</h4>
            <p>Excellent skills on all Microsoft Office programs. For a short period of time I have also worked on creating some newspapers with Page Maker</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="55"> <span class="percent"></span> </span>
            <h4>CompTia A+</h4>
            <p>I took a school course for installing, maintaining, customizing, and operating personal computers</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="50"> <span class="percent"></span> </span>
            <h4>CompTia Network+</h4>
            <p>I took a school course to design, configure, manage and troubleshoot any wired and wireless networks</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="50"> <span class="percent"></span> </span>
            <h4>Windows Server 2008</h4>
            <p>I took a school course for designing, implementing, configuring, or managing a Windows Server</p>
          </div>
        </div>
      </div>
      <div class="heading">
        <h2 style="font-size: 28px;margin-top: 40px;">Programing Languages</h2>
        <p>All the programming languages which I have studied and have worked with alongside my knowledge level of them.</p>
      </div>
      <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="85"> <span class="percent"></span> </span>
            <h4>PHP / MySQL</h4>
            <p>-------------<!-- Vestibulum erat wisi, condimentum sed, commodo vitamet, wisid --></p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="85"> <span class="percent"></span> </span>
            <h4>Javascript</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="85"> <span class="percent"></span> </span>
            <h4>JQuery / AJAX / JSON</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="95"> <span class="percent"></span> </span>
            <h4>HTML / CSS</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="80"> <span class="percent"></span> </span>
            <h4>Bootstrap</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="75"> <span class="percent"></span> </span>
            <h4>AngularJS</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="80"> <span class="percent"></span> </span>
            <h4>Smarty</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="70"> <span class="percent"></span> </span>
            <h4>C / C++</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="75"> <span class="percent"></span> </span>
            <h4>Java</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="70"> <span class="percent"></span> </span>
            <h4>Android</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="75"> <span class="percent"></span> </span>
            <h4>ASP.NET</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="70"> <span class="percent"></span> </span>
            <h4>C#.NET</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="65"> <span class="percent"></span> </span>
            <h4>SQL / PL/SQL</h4>
            <p>-------------</p>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 skills"> <span class="chart skilBg" data-percent="80"> <span class="percent"></span> </span>
            <h4>XML</h4>
            <p>-------------</p>
          </div>
        </div>
    </div>
  </section>
  <!--technical end--> 
  
  
  <!--exprience start-->
  <section class="exprience" id="exprience">
    <div class="container">
      <div class="heading">
        <h2>Work Experience</h2>
        <p></p>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">Dec,2015</span>
            <span class="afterY">November 2016</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Web Developer at Blue Bull Shpk (Durres, Albania)</h4>
            <h5>Lead Programmer  (Smarty, PHP, Javascript, SQL, HTML, CSS, PL-SQL)</h5>
            <p>I had to work on 4 websites ( <a target="_blank" style="color: #2a6496;" href="http://bluebull.trade/">http://bluebull.trade/ </a> ,<a target="_blank" style="color: #2a6496;" href="http://trading-forex.click/"> http://trading-forex.click/ </a>,<a target="_blank" style="color: #2a6496;" href="http://bluebull.services/"> http://bluebull.services/ </a>, <a target="_blank" style="color: #2a6496;" href="http://competitivetrading.info/">http://competitivetrading.info/</a> ) and  2 trading forex platforms (Blue Bull Platform and Trading Forex Platform). I also worked on creating different email templates and making campaigns with them. I created  video tutorials on how  to use  the trading platform. Also created some ebooks for the platform.</p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">Jan,2015</span>
            <span class="afterY">June 2015</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Web Developer at Webimal.org (Online Indian Company)</h4>
            <h5>Programmer  (HTML, CSS, Javascript)</h5>
            <p>I used to convert books about Linux/SHELL to proper online tutorials. To see my work check the tutorials at <a target="_blank" style="color: #2a6496;" href="http://www.webminal.org/">http://www.webminal.org/ </a></p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">June,2009</span>
            <span class="afterY">November 2015</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Employee at a videostore (Durres, Albania)</h4>
            <h5></h5>
            <p>For 5 years straight, during the 3-4 months of summer I have worked at a videostore in Durres. I had different responsibilities like: creating video game setups, creating video game autoruns, creating intros for movies, creating autoruns for movies, creating audio intros, creating autoruns for different applications, creating and modifying movie posters, creating a database for all the movies, albums, applications, video games in the store, fixing different computer problems to costumers etc.</p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">2013</span>
            <span class="afterY">Currently</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4 style="padding-top: 10px;">I sell different products online. Mostly on <a target="_blank" style="color: #2a6496;" href="http://ebay.co.uk/">eBay</a> and <a target="_blank" style="color: #2a6496;" href="https://www.amazon.co.uk/">Amazon</a></h4>
            <h5></h5>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">2013</span>
            <span class="afterY">Currently</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4 style="padding-top: 10px;">Different online works on <a target="_blank" style="color: #2a6496;" href="https://www.freelancer.com/">freelancer.com</a> and <a target="_blank" style="color: #2a6496;" href="https://www.upwork.com/">upwork.com</a></h4>
            <h5></h5>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--exprience end--> 
  
  <!--education start-->
  <section class="education" id="education">
    <div class="container">
      <div class="heading">
        <h2>Education &amp; Diplomas</h2>
        <p></p>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">Sept, 2015</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Master of Science in Computer Science (Informatics)</h4>
            <h5>Faculty of Natural Sciences, University of Tirana, Tirana</h5>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">Sept, 2012</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Bachelor Degree in Computer Science (Informatics)</h4>
            <h5>Faculty of Natural Sciences, University of Tirana, Tirana</h5>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">Sept, 2009</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>High School Degree</h4>
            <h5>“Gjergj Kastrioti” High School, Durres</h5>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--education end--> 

  <!--trainings start-->
  <section class="exprience" id="exprience">
    <div class="container">
      <div class="heading">
        <h2>Trainings</h2>
        <p><!-- Different training courses I took. --></p>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear"><span class="prevY">Nov,2015</span>
            <span class="afterY">December 2015</span></div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>PHP and Smarty Training</h4>
            <h5>PHP and Smarty Training in Milan, ITALY</h5>
            <p>1 month training about the trading forex platforms that I would later work on.<br /><br /></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--trainings end--> 
  
  <!--protfolio start-->
  <section class="protfolio" id="protfolio">
    <div>
      <div class="portfolioTop clearfix">
          <div class="heading">
            <h2>Portfolio</h2>
            <p>Some of the works and projects I have done through the years.</p>
          </div>
          <div class="portfolioFilter">
            <ul>
              <li><a href="#" data-filter="*" class="current">All</a></li>
              <li><a href="#" data-filter=".websites">Websites</a></li>
              <li><a href="#" data-filter=".platforms">Platforms</a></li>
              <li><a href="#" data-filter=".landing_pages">Landing Pages</a></li>
              <li><a href="#" data-filter=".email-templates">Email Templates</a></li>
            </ul>
          </div>
          <!-- <h2 id="ngarkuar" style="display: none;">Please wait. The images are loading</h2> -->
      </div>
      <ul class="portfolioContainer row gallery">
        <li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
          	<div class="lightCon"> 
          		<span class="hoverBox"> 
          			<span class="smallIcon"> 
                    	<a rel="prettyPhoto[gallery1]" href="images/portfolio/big/blue-bull1.png" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="zoom lb lb_warsaw1">
                        	<i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://bluebull.trade/" title="Project Link" target="_blank" class="linKed">
                        	<i class="fa fa-link fa-2x"></i></i>
                        </a>
                        <a rel="prettyPhoto[gallery1]" href="images/portfolio/big/blue-bull13.png" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery1]" href="images/portfolio/big/blue-bull12.png" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery1]" href="images/portfolio/big/blue-bull-14.jpg" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                     </span> 
                 </span> 
            	<img src="images/portfolio/big/bluebull-logo.jpg" alt=""  >
           	</div>
        </li>
        <li class="platforms col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery7]" href="images/portfolio/big/bb_p_3.jpg" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://bluebull.trade/" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                        <a rel="prettyPhoto[gallery7]" href="images/portfolio/big/bb_p_1.jpg" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery7]" href="images/portfolio/big/bb_p_2.jpg" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery7]" href="images/portfolio/big/bb_p_4.jpg" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery7]" href="images/portfolio/big/bb_p_5.jpg" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery7]" href="images/portfolio/big/bb_p_6.jpg" title="<a target='_blank' href='http://bluebull.trade/'>Blue Bull</a>" class="lb lb_warsaw1">
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/p_bb_logo_1.jpg" alt=""  >
            </div>
        </li>
        <li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery9]" href="images/portfolio/big/trading-forex1.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://trading-forex.click/" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                        <a rel="prettyPhoto[gallery9]" href="images/portfolio/big/trading-forex2.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery9]" href="images/portfolio/big/trading-forex3.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery9]" href="images/portfolio/big/trading-forex4.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/Trading-Forex.jpg" alt=""  >
            </div>
        </li>
        <li class="platforms col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_6.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://trading-forex.click/" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                        <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_1.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_2.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_3.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_4.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_5.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_7.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/tf_p_8.jpg" title="<a target='_blank' href='http://trading-forex.click/'>Trading Forex</a>" class="lb lb_warsaw1">
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/p_tf_logo_1.jpg" alt=""  >
            </div>
        </li>
        <li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_1.jpg" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://bluebull.trade/Competitive/" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_11.jpg" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_2.jpg" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_3.jpg" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_4.jpg" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_5.jpg" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_6.png" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_7.png" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        <a rel="prettyPhoto[gallery11]" href="images/portfolio/big/ct_8.jpg" title="<a target='_blank' href='http://bluebull.trade/Competitive/'>Competitive Trading</a>" class="lb lb_warsaw1">
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/ct_logo.png" alt=""  >
            </div>
        </li>
        <li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery10]" href="images/portfolio/big/bb_services_1.jpg" title="<a target='_blank' href='http://bluebull.services/'>Blue Bull Services</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://bluebull.services/" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                        <a rel="prettyPhoto[gallery10]" href="images/portfolio/big/bb_services_4.jpg" title="<a target='_blank' href='http://bluebull.services/'>Blue Bull Services</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery10]" href="images/portfolio/big/bb_services_5.jpg" title="<a target='_blank' href='http://bluebull.services/'>Blue Bull Services</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery10]" href="images/portfolio/big/bb_services_3.jpg" title="<a target='_blank' href='http://bluebull.services/'>Blue Bull Services</a>" class="lb lb_warsaw1">
                        </a>
                        <a rel="prettyPhoto[gallery10]" href="images/portfolio/big/bb_services_3.jpg" title="<a target='_blank' href='http://bluebull.services/'>Blue Bull Services</a>" class="lb lb_warsaw1">
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/bb_services_logo.png" alt=""  >
            </div>
        </li>
        <li class="email-templates col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery2]" href="images/portfolio/big/bluebull_email_template.png" title="<a target='_blank' href='http://alfredgjini1.tk/my-cv/images/portfolio/big/bluebull_email_template.png'>Email Template #2 Blue Bull</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://alfredgjini1.tk/my-cv/images/portfolio/big/bluebull_email_template.png" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/email_template_1.jpg" alt=""  >
            </div>
        </li>
        <li class="email-templates col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery3]" href="images/portfolio/big/trading_forex_email_template_2.png" title="<a target='_blank' href='http://alfredgjini1.tk/my-cv/images/portfolio/big/trading_forex_email_template_2.png'>Email Template #2 Trading Forex</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://alfredgjini1.tk/my-cv/images/portfolio/big/trading_forex_email_template_2.png" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/email_template_2.jpg" alt=""  >
            </div>
        </li>
        <li class="email-templates col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery4]" href="images/portfolio/big/trading_forex_email_template.png" title="<a target='_blank' href='http://alfredgjini1.tk/my-cv/images/portfolio/big/trading_forex_email_template.png'>Email Template #3 Trading Forex</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://alfredgjini1.tk/my-cv/images/portfolio/big/trading_forex_email_template.png" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/email_template_3.jpg" alt=""  >
            </div>
        </li>
        <li class="landing_pages col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery5]" href="images/portfolio/big/landing_page_1_1.jpg" title="<a target='_blank' href='http://bluebull.trade/landing2/index.php?bver=1&lang=EN'>Landing Page #1 Blue Bull</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://bluebull.trade/landing2/index.php?bver=1&lang=EN" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/landing_page_1.jpg" alt=""  >
            </div>
        </li>
        <li class="landing_pages col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="lightCon"> 
              <span class="hoverBox"> 
                <span class="smallIcon"> 
                      <a rel="prettyPhoto[gallery6]" href="images/portfolio/big/landing_page_2_2.png" title="<a target='_blank' href='http://bluebull.trade/landing4/index.php?bver=1&lang=EN'>Landing Page #2 Blue Bull</a>" class="zoom lb lb_warsaw1">
                          <i class="fa fa-search fa-2x"></i>
                        </a>
                        <a href="http://bluebull.trade/landing4/index.php?bver=1&lang=EN" title="Project Link" target="_blank" class="linKed">
                          <i class="fa fa-link fa-2x"></i></i>
                        </a>
                     </span> 
                 </span> 
              <img src="images/portfolio/big/landing_page_2.jpg" alt=""  >
            </div>
        </li>
        <!-- <li class="websites platforms col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery2]" href="images/portfolio/big/2.jpg" title="Project Title2" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image2" alt="" > </div>
        </li> -->
        <!-- <li class="platforms col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery3]" href="images/portfolio/big/3.jpg" title="Project Title3" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image3" alt="" > </div>
        </li> -->
        <!-- <li class="websites platforms col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery4]" href="images/portfolio/big/4.jpg" title="Project Title4" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image4" alt="" > </div>
        </li> -->
        <!-- <li class="platforms photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery5]" href="images/portfolio/big/5.jpg" title="Project Title5" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a><a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image5" alt="" > </div>
        </li> -->
        <!-- <li class="websites photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery6]" href="images/portfolio/big/6.jpg" title="Project Title6" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image6" alt="" > </div>
        </li> -->
        <!-- <li class="platforms photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery7]" href="images/portfolio/big/7.jpg" title="Project Title7" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image7" alt="" > </div>
        </li>
        <li class="site-template col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="prettyPhoto[gallery8]" href="images/portfolio/big/8.jpg" title="Project Title8" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/390x250&text=image8" alt="" > </div>
        </li> -->
      </ul>
    </div>
  </section>
  <!--protfolio end--> 
  <!--contact start-->
  <section class="contact" id="contact">
    <div class="container topCon">
      <div class="heading">
        <h2>Get In Touch</h2>
        <p></p>
      </div>
    </div>
    
  </section>
  <section class="contactDetails">
    <div class="container"> 
      
      <!--contact info start-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h4>Contact details</h4>
        <p> <i class="fa fa-map-marker"></i> Rruga Bajram Curri, Plazh, Durres 2008 Albania</p>
        <p> <i class="fa fa-mobile"></i> +355696238919</p>
        <p> <i class="fa fa-envelope-o"></i> <a href="mailto:a.gjini@live.com">a.gjini@live.com</a></p>
        <p> <i class="fa fa-link"></i> <a href="http://alfredgjini1.tk/my-cv/">www.alfredgjini1.tk</a></p>
      </div>
      <!--contact info end--> 
      
      <!--contact form start-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 conForm">
        <h4>Shoot a message!</h4>
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Your email..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!--contact form end--> 
      
    </div>
    <div class="row mapArea">
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=41.324590,19.456469&amp;spn=0.01134,0.026157&amp;t=m&amp;z=16&amp;output=embed"></iframe>
    </div>
  </section>
  
  <!--contact end--> 
  
  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <ul>
        <li><a href="https://twitter.com/AlfredGjini/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="https://www.facebook.com/Gjini.Alfred" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="https://www.linkedin.com/in/alfred-gjini-9932a3135" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <!-- <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-rss fa-2x"></i></a></li> -->
      </ul>
      <span class="totop"><i class="fa fa-chevron-up"></i></span>
    </div>
  </section>
  <!--footer end--> 
  
</div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 

<!--jquary min js--> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/jquery.gridrotator.js"></script> 

<!--for portfoli lightbox -->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript" >
	$(document).ready(function(){
		$("area[rel^='prettyPhoto']").prettyPhoto();
		
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:1000, hideflash: true});
		
	});
</script>

<script src="js/jquery.waterfall.js"></script>
<!--for custom jquary--> 
<script src="js/custom.js"></script> 

<!--for placeholder jquary--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for menu jquary--> 
<script type="text/javascript" src="js/stickUp.js"></script> 
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
  $(".totop").click(function(e){
	  e.preventDefault();
	  $(".homeLink a").trigger("click");
	  })
  $('.navbar-wrapper').stickUp();
});

});
</script> 
<!-- for header slider -->
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script>
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>
<!--for portfoli filter jquary--> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 

<!--for portfoli lightbox -->
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<!--for skill chat jquary--> 
<script src="js/jquery.easing.min.js"></script> 
<script src="js/jquery.easypiechart.js"></script> 

<!--for Scroll Bar jquary--> 
<script src="js/jquery.mousewheel.js"></script>
<script src="js/perfect-scrollbar.js"></script>
<script type="text/javascript">
  $(document).ready(function ($) {
	$('#description').perfectScrollbar({
	  wheelSpeed: 20,
	  wheelPropagation: false
	});
  });
</script>

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>