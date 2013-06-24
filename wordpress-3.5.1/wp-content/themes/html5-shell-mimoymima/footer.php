<!--BEGIN: Footer Section-->
<footer id="footer">

	<nav class="horiz-list clear-fix" role="navigation">
		<h1>Footer Navigation</h1>
		<?php wp_nav_menu('menu=footerNav'); // create the mainNav menu inside Appearance menus and go to town -- for more on menus see: http://templatic.com/news/wordpress-3-0-menu-management ?>
	</nav>

	<!--BEGIN: Optional Contact Info using microformats: http://microformats.org/-->
	<!--dl class="vcard">
		<dt class="org fn">OrgName</dt>
		<dd class="adr">
			<span class="street-address"></span>
			<span class="locality">City</span>
			<span class="region">State</span>
			<span class="postal-code">xxxxx</span>		
		</dd>
		<dd class="tel"></dd>
		<dd class="tel"></dd>
		<dd class="email"><a href="mailto:"></a></dd>
		<dd class="fax"></dd>
	</dl-->
	<!--END: Contact Info-->
	
	<!--BEGIN: Credit if you use the shell please either make a donation or keep this ad on the site-->
	<section id="mym-credit">
		<small><a id="cred" href="http://html5.mimoymima.com" title="Build your Wordpress themes faster - HTML5 WordPress Shell">built with the HTML5 Wordpress shell</a></small>
	</section>
	<!--END: Credit-->
	
	<p id="copyright"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name')?></small></p>
	
	<!-- wp_footer hook for Plugins -->
	<?php wp_footer(); ?>

</footer>
<!--END: Footer Section-->

<!--Javascript Indicator-->
<div class="indicator" id="js-ind"><a href="http://www.mimoymima.com/help/turning-javascript-on-and-off/" title="You don't have javascript enabled, click here to learn more.">Enable Javascript</a></div>

<!--show an upgrade notice to ie6 users-->
<!--[if lt IE 7]><div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: absolute; top: 0;'><div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'><a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice'/></a></div><div style='width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'><div style='width: 75px; float: left;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg' alt='Warning!'/></div><div style='width: 275px; float: left; font-family: Arial, sans-serif;'><div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>You are using an outdated browser</div><div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>For a better experience using this site, please upgrade to a modern web browser.</div></div> <div style='width: 75px; float: left;'><a href='http://www.firefox.com' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg' style='border: none;' alt='Get Firefox 3.5'/></a></div>      <div style='width: 75px; float: left;'><a href='http://www.browserforthebetter.com/download.html' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg' style='border: none;' alt='Get Internet Explorer 8'/></a></div><div style='width: 73px; float: left;'><a href='http://www.apple.com/safari/download/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg' style='border: none;' alt='Get Safari 4'/></a></div><div style='float: left;'><a href='http://www.google.com/chrome' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg' style='border: none;' alt='Get Google Chrome'/></a></div></div></div><![endif]-->

<!--simulates canvas elements in IE-->
<!--[if lt IE 9]><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/excanvas.js"></script><![endif]-->

<!--END: page~wrapper-->
</div>

</body>
</html>