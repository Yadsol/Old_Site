
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>UI Elements: Large Drop Down Menu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="UI Elements: Large Drop Down Menu" />
        <meta name="keywords" content="jquery, drop down, menu, navigation, large, mega "/>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7243260-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        <style>
            *{
                padding:0;
                margin:0;
            }
			body{
                
                font-family:"Helvetica Neue",Arial,Helvetica,Geneva,sans-serif;
				overflow-x:hidden;

            }
            h1{
                font-size:180px;
                line-height:180px;
                text-transform: uppercase;
                color:#f9f9f9;
                position:absolute;
                text-shadow:0 1px 1px #ddd;
                top:-25px;
                left:-20px;
                white-space: nowrap;
            }
            span.reference{
                position:fixed;
                left:10px;
                bottom:10px;
                font-size:11px;
            }
            span.reference a{
                color:#DF7B61;
                text-decoration:none;
                text-transform: uppercase;
                text-shadow:0 1px 0 #fff;
            }
            span.reference a:hover{
                color:#000;
            }
            .box{
                margin-top:129px;
                height:460px;
				width:100%;
                position:relative;
                
				-moz-box-shadow:0px 0px 10px #aaa;
				-webkit-box-shadow:0px 0px 10px #aaa;
				-box-shadow:0px 0px 10px #aaa;
            }
            .box h2{
				color:#f0f0f0;
				padding:40px 10px;
				text-shadow:1px 1px 1px #ccc;
            }

        </style>
    </head>
    <body>
		
			<ul id="ldd_menu" class="ldd_menu">
			
		<li class="default">
				<!-- Increases to 510px in width-->
			<p>Home</p>	
	</li>
	<li><p>About Us</p><li>
			<li>
			<span>Locations</span>
			
					<div class="ldd_submenu">
						<ul>
							<li class="ldd_heading">By Location</li>
							<li><a href="#">South America</a></li>
							<li><a href="#">Antartica</a></li>
							<li><a href="#">Africa</a></li>
							<li><a href="#">Asia and Australia</a></li>
							<li><a href="#">Europe</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Category</li>
							<li><a href="#">Sun &amp; Beach</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Science &amp; Education</a></li>
							<li><a href="#">Extreme Sports</a></li>
							<li><a href="#">Relaxing</a></li>
							<li><a href="#">Spa and Wellness</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Theme</li>
							<li><a href="#">Paradise Islands</a></li>
							<li><a href="#">Cruises &amp; Boat Trips</a></li>
							<li><a href="#">Wild Animals &amp; Safaris</a></li>
							<li><a href="#">Nature Pure</a></li>
							<li><a href="#">Helping others &amp; For Hope</a></li>
							<li><a href="#">Diving</a></li>
						</ul>
						<a class="ldd_subfoot" href="#"> + New Deals</a>
					</div>
				</li>
				<li><p>Contacts</p></li>
			</ul>
		</div>

        <div>
            <span class="reference">
                <a href="http://tympanus.net/codrops/2010/07/14/ui-elements-search-box/">© Codrops - back to post</a>
            </span>
        </div>
		<!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				 * the menu
				 */
				var $menu = $('#ldd_menu');
				
				/**
				 * for each list element,
				 * we show the submenu when hovering and
				 * expand the span element (title) to 510px
				 */
				$menu.children('li').each(function(){
					var $this = $(this);
					var $span = $this.children('span');
					$span.data('width',$span.width());
					
					$this.bind('mouseenter',function(){
						$menu.find('.ldd_submenu').stop(true,true).hide();
						$span.stop().animate({'width':'510px'},300,function(){
							$this.find('.ldd_submenu').slideDown(300);
						});
					}).bind('mouseleave',function(){
						$this.find('.ldd_submenu').stop(true,true).hide();
						$span.stop().animate({'width':$span.data('width')+'px'},300);
					});
				});
            });
        </script>	
	
    </body>
</html>