<?php session_start();
error_reporting(E_ALL);
ini_set('display_errors','Off');
ini_set('error_log','/var/www/vhosts/portal.instateangels.com/error_docs/login.errors.log');
//error_log = /var/www/vhosts/instateangels.com/portal/login-error.log

?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<link rel="pingback" href="http://portal.instateangels.com/xmlrpc.php" />

	<title>  Client Login &raquo; In-State Angels</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
<link rel="alternate" type="application/rss+xml" title="In State Angel &raquo; Feed" href="http://www.instateangels.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="In State Angel &raquo; Comments Feed" href="http://www.instateangels.com/comments/feed/" />

<link rel="stylesheet" href="http://www.instateangels.com/wordpress/wp-content/themes/Instate-Angels-master/css/formalize.css">
<link rel="stylesheet" href="http://www.instateangels.com/wordpress/wp-content/themes/Instate-Angels-master/style.css">

<link rel="stylesheet" media="only screen and (min-width:561px) and (max-width:880px)" href="css/login-tablet.css" />

<link rel="stylesheet" media="only screen and (min-width:320px) and (max-width:560px)" href="css/login-mobile.css" />

<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.instateangels.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.instateangels.com/wp-includes/wlwmanifest.xml" /> 

<link rel='canonical' href='http://www.instateangels.com/login/' />

<script type='text/javascript' src='http://www.instateangels.com/wordpress/wp-content/themes/Instate-Angels-master/_/js/jquery.formalize.js'></script>

<script type='text/javascript' src='http://www.instateangels.com/wordpress/wp-includes/js/jquery/jquery.js'></script>

<script type='text/javascript' src='js/login-functions.js'></script>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<script language="JavaScript" type="text/javascript">
function clientlogin(){

    var useremail = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    if(useremail!="" && password!=""){
    jQuery('#loading1').css({ 'display': 'block'});
    var theDiv=jQuery('div#errormessage')
    theDiv.html("");
         jQuery.ajax(
                {
                    type: "POST",
                    url: "/cp/authenticate.php?useremail="+useremail+"&password="+password,
                    success: function(data)
                    {
                        //alert(data);
                        var found=data.search("found");
                        if(found==-1)
                        {
                            var dividd="errormessage";
                            var theDiv=jQuery('div#'+dividd)
                            theDiv.html("Invalid Username/Password");
                            jQuery('#loading1').css({ 'display': 'none'});
                            jQuery('#forget').css({ 'display': 'block'});
                            jQuery('#forgetdescription').css({ 'display': 'none'});
                        }else{
                            window.location.href = "/dashboard.php";
                        }

                    }
                });
    } else{  
            var dividd="errormessage";
            var theDiv=jQuery('div#'+dividd)
            theDiv.html("Invalid Username/Password");                                
    }   
}

function expand(param) {
 jQuery("div"+param).stop().slideToggle("slow", function() {
    linkname = jQuery("a"+param).html();
    if( jQuery("div"+param).is(":visible") ) {
      jQuery("a"+param).html(expand_text+" "+linkname.substring(collapse_text_length));
    }
    else {
        jQuery("a"+param).html(collapse_text+" "+linkname.substring(expand_text_length));
    }
  });

}
function expander_hide(param) {
        jQuery("div"+param).hide();
		linkname = jQuery("a"+param).html();
        collapse_text  = "▼";
        expand_text    = "▲";
        collapse_text_length = jQuery("<span />").html(collapse_text).text().length;
        expand_text_length = jQuery("<span />").html(collapse_text).text().length;
        jQuery("a"+param).html(collapse_text + " " + linkname);
        jQuery("a"+param).show();
}
</script>
<!-- special style specifically to client login -->



</head>

<body>
	
<header>
	<div id="head" class="clearfix">
		<div id="social-toggle">
			<a id="fb" href="https://www.facebook.com/InStateTuition"><span class="hidden">Facebook</span></a>
			<a id="twitter" href="https://twitter.com/InStateAngels"><span class="hidden">Twitter</span></a>
		</div>
		<div id="topnav">		
		<nav role="main-navigation">
			<ul>
				<li><a href="http://www.instateangels.com/learn">Learn More</a></li>
				<li><a href="http://www.instateangels.com/start">Get Started</a></li>
				<li><a href="http://instateangels.com/login.php">Client Login</a></li>
			</ul>
		</nav>
		<a href="#" id="navbtn">Nav Menu</a>
		</div>
		<a href="http://www.instateangels.com" title="Instate Angels Home" rel="home">
			<figure><span class="hidden"><h1>In-State Angels</h1></span></figure>
		</a>
		 		
		<aside>
			<div>
				<a id="bbb" href="http://www.bbb.org/denver/business-reviews/educational-consultants/in-state-angels-in-boulder-co-90132319" target="_blank"><span class="hidden">Better Business Bureau</span></a>
			</div>
			<div>
				<a id="fb" href="https://www.facebook.com/InStateTuition" target="_blank"><span class="hidden">Facebook</span></a>
				<a id="twitter" href="https://twitter.com/InStateAngels" target="_blank"><span class="hidden">Twitter</span></a>
			</div>			
		</aside>
	</div>
</header>





<div id="container"><!--width desktop 960px-->
<div id="main-headline">
	<div id="headline" class="clearfix">
		<h6 id="site-tag">Get In-State Tuition: Fast, Simple, Certain</h6>
		<h6 id="page-tag">Login to your portal here.</h6>
	</div>
</div>
<div id="white-break"></div>
<div id="entry" class="full">
<article>
<p>Clients Only: login here to access your portal.  Want to know exactly what you have to do?  This is your 24/7 one-stop-shop to stay on top of your progress toward in-state tuition.  This is where you see exactly what you need to do and exactly how to do it.  Although we'll send you a weekly status email, you're encouraged to login frequently and you're responsible for completing the tasks assigned. If you experience any problems, <a href="mailto:contact@instateangels.com">contact us</a>. We'll be happy to walk you through the process.</p>


				<div id="client-login">
					
					<form id="loginform" action="javascript:void(0);" onsubmit="clientlogin();">
						<div id="logininputs">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" value=""/>
							<label for="password">Password</label>
							<input type="password" name="password" id="password" value="" />
						</div>
						<div id="loginsubmits">
						<input id="submitbutton" type="submit" value="Login">
						</div>
						<div id="errormessage" style="color:red;font-size: .8em; height: 30px;">
                        </div>
					    <div id="loading1" style="display: none;margin-top: 0px; height: 30px;">
					          <p><img src="/images/loading.gif" alt="loading"> Please Wait....</p>
					    </div>
					</form>
    			</div>
</article>
</div>   			
</div><!--close container -->
<footer>
	<div id="foot">
		<div id="bottom-nav" class="clearfix">
			<div>
				<a class="parent" href="http://www.instateangels.com">Home</a>
				<a href="https://www.facebook.com/InStateTuition" target="_blank">Facebook</a>
				<a href="https://twitter.com/InStateAngels" target="_blank">Twitter</a>
			</div>
			<div>
				<a class="parent" href="http://www.instateangels.com/learn">Learn More</a>
				<a href="http://www.instateangels.com/about">About Us</a>
				<a href="http://www.instateangels.com/learn/faq">FAQ</a>
			</div>
			<div>
				<a class="parent" href="http://www.instateangels.com/start">Get Started</a>
				<a href="http://www.instateangels.com/learn/privacy">Privacy Policy</a>
				<a href="http://www.instateangels.com/start">Contact Us</a>
			</div>
			<div>
				<a class="parent" href="http://portal.instateangels.com/login.php">Client Login</a>
			</div>
		</div>
		<div id="copy">
			<small>Copyright 2011-2013. All Rights Reserved. In-Stated LLC doing business as In-State Angels - Boulder, CO</small>
		</div>
		<div id="toggle-bbb">
			<p><a id="bbb" href="http://www.bbb.org/denver/business-reviews/educational-consultants/in-state-angels-in-boulder-co-90132319" target="_blank"><span class="hidden">Better Business Bureau</span></a></p>
		</div>
	</div>	
</footer>
</body>

</html>
