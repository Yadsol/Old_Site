<?php
echo "risahi";
exit;
ini_set("display_errors",1);
error_reporting(1);
session_start();
session_name("Contact Form");







$_SESSION['n1'] = rand(1,20);

$_SESSION['n2'] = rand(1,20);

$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];





$str='';

if($_SESSION['errStr'])

{

	$str='<div class="error">'.$_SESSION['errStr'].'</div>';

	unset($_SESSION['errStr']);

}



$success='';

if($_SESSION['sent'])

{

	$success='<h1>Thank you!</h1>';

	

	$css='<style type="text/css">#contact-form{display:none;}</style>';

	

	unset($_SESSION['sent']);

}

?>





<!DOCTYPE>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Reignsoft</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />

<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
   <link rel="stylesheet" href="style/default.css" type="text/css" media="screen" />
    
    
    
    <link rel="stylesheet" href="style/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="demo.css" />

<?=$css?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!--<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	   <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
    <script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>
    
<!--  Menu Start -->
<link rel="stylesheet" type="text/css" href="menu/menu.css" />
<script type="text/javascript" src="menu/ddlevelsmenu.js"></script>
<script type="text/javascript">
ddlevelsmenu.setup("ddtopmenubar", "topbar") 
</script>

<!-- / Menu END -->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->

<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>





<script type="text/javascript" src="script.js"></script>

<style>

#fade {

   opacity: 0.6;

   transition: opacity 0.5s ease-in-out;

   -moz-transition: opacity 0.5s ease-in-out;

   -webkit-transition: opacity 0.5s ease-in-out;

   }

  

#fadeout2

{

	opacity: 1;

}

   #fade:hover {

      opacity: 1;

	

      }

<script type="text/javascript">



{

}

</script>	  

</style>

</head>



<body>

<!--header part -->

<div class="reignSoftHeaderContainer">

    <div class="reignSoftHeader">

    	<div class="reignSoftHeaderLogo"></div>

        <div class=" reignSoftHeaderMenuContainer">

        	<div id="ddtopmenubar" class="mattblackmenu">
<ul>
<li class="current1"><a href="index.html">Home</a></li>
<li><img src="images/separetor.jpg" alt="menu" /></li>
<li class="current2"><a href="about-us.html" >About Us</a></li>
<li><img src="images/separetor.jpg" alt="menu" /></li>
<li class="current3"><a href="services.html" rel="ddsubmenu1">service</a></li>

<li><img src="images/separetor.jpg" alt="menu" /></li>
<li class="current6"><a href="contact-us.php">Contact Us</a></li>
</ul>
</div>

<!--Top Drop Down Menu 1 HTML-->

<ul id="ddsubmenu1" class="ddsubmenustyle">
<li><a href="#">Supply Chain Management</a> 
<ul>
<li><a href="#">Supply Chain Planner</a> </li>
<li><a href="#">Demand Planner</a></li>
<li><a href="#">Supply Chain Solution</a></li>
</ul>

</li>
<li><a href="#">Solutions</a>
<ul>
<li><a href="#">Inventory Management System</a> </li>
<li><a href="#">Retail Management System</a></li>
<li><a href="#">Order Management System</a></li>
<li><a href="#">Enterprise Resource Planning</a></li>
</ul>
</li>
<li><a href="#">Website and Mobile Development</a>
<ul>
<li><a href="#">Web Application Development</a> </li>
<li><a href="#">CMS Development</a></li>
<li><a href="#">Social Networking</a></li>
<li><a href="#">Mobile Application Development</a></li>
</ul>
</li>
<li><a href="#">Databases</a>
<ul>
<li><a href="#">Database services</a> </li>
<li><a href="#">Database Migration</a></li>

</ul>

</li>
<li><a href="#">Business Intelligence and Data Warehousing</a></li>
<li><a href="#">Industries</a>
<ul>
<li><a href="#">Manufaturing</a> </li>
<li><a href="#">Retail</a></li>

</ul>
</li>
</ul>

        </div>

    </div>

</div>    

    <!-- end of header part -->

<div class="reignSoftWrapper" style="height:875px;">

	

    <!--banner -->

    
  <div id="baner">

  <div id="slider" class="nivoSlider">
                <img src="images/simple_img_1.jpg" data-thumb="images/simple_img_1.jpg" alt="" />
                <img src="images/simple_img_2.jpg" data-thumb="images/simple_img_2.jpg" alt="" />
                <img src="images/simple_img_3.jpg" data-thumb="images/simple_img_3.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/simple_img_4.jpg" data-thumb="images/simple_img_4.jpg" alt="" />
            </div>
           
  </div>
  <div class="clear"></div>

    <!--end of banner -->

    <!--content -->

    <div class="reignSoftContentContainer">

            <div class="reignSoftContentTopBorderContainer">

                <div class="reignSoftContentLeftborder"></div>

                <div class="reignSoftContentborder"></div>

                <div class="reignSoftContentRightborder">

            </div>

     </div>

        <div class="reignSoftWelcome">

        	Reign soft is a solution provider for various systems in Information Technology. We in our development process follow legacy systems. Our operation towards IT development was made in India and offered consulting and development services in software and hardware design to multiple clients.

        </div>

        

       <div id="main-container">



	<div id="form-container">

    <h1>Contact Form</h1>

    <h2>Drop us a line and we will get back to you</h2>

    <div style="float:left; width:390px;">

    <form id="contact-form" name="contact-form" method="post" action="submit.php">

      <table width="100%" border="0" cellspacing="0" cellpadding="5" style="width:450px;">

        <tr style="float:left; margin-bottom:10px;">

          <td width="15%"><label for="name">Name</label></td>

          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="" /></td>

          <td width="15%" id="errOffset">&nbsp;</td>

        </tr>

        <tr style="clear:left;float:left; margin-bottom:10px;">

          <td><label for="email">Email</label></td>

          <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="" /></td>

          <td>&nbsp;</td>

        </tr>

        <tr style="clear:left;float:left; margin-bottom:10px;">

          <td><label for="subject">Subject</label></td>

          <td><select name="subject" id="subject" class="validate[required]">

            <option value="" selected="selected"> - Choose -</option>

            <option value="Question">Question</option>

            <option value="Business proposal">Business proposal</option>

            <option value="Advertisement">Advertising</option>

            <option value="Complaint">Complaint</option>

          </select>          </td>

          <td>&nbsp;</td>

        </tr>

		<tr style="clear:left;float:left; margin-bottom:10px;">

          <td valign="top"></td>

          <td><input type="hidden" name="dumm" id="dumm" class="validate[required]" /></td>

          <td valign="top">&nbsp;</td>

        </tr>
        
        <tr style="clear:left;float:left; margin-bottom:10px;">

          <td valign="top"><label for="message">Message</label></td>

          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"></textarea></td>

          <td valign="top">&nbsp;</td>

        </tr>

        <!--<tr style="float:left; margin-bottom:10px;">

          <td><label for="captcha"> =</label></td>

          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>

          <td valign="top">&nbsp;</td>

        </tr>-->

        <tr style="clear:left;float:left; margin-bottom:10px; clear:both; margin-left:70px;">

          <td valign="top">&nbsp;</td>

          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />

          <input type="reset" name="button2" id="button2" value="Reset" />

          

               <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>

        </tr>

      </table>

      </form>

      <?=$success?>

    </div>

 	<div style="float:right; width:300px;">

<!--    	<img src="images/erp.gif" style="float:left; width:300px; height:200px;" width="368" height="364" alt=""/>-->

        <div style="float:left; width:100%; font-size:16px; color:#999999; text-decoration:underline; margin-bottom:10px;">Reach Us</div>

        <div style="float:left; width:100%; font-size:12px; color:#999999; margin-bottom:5px;">Reign Soft Technologies</div>

        <div style="float:left; width:100%; font-size:12px; color:#999999; margin-bottom:5px;">No-10, Complex Name</div>

        <div style="float:left; width:100%; font-size:12px; color:#999999; margin-bottom:5px;">Steet Name</div>

        <div style="float:left; width:100%; font-size:12px; color:#999999; margin-bottom:5px;">Maruthi Nage Main</div>

        <div style="float:left; width:100%; font-size:12px; color:#999999; margin-bottom:5px;">Bangalore</div>    

        

        

        <div style="float:left; width:100%; font-size:12px; color:#999999; margin-bottom:5px; margin-top:30px;">E-mail: info@raginsoft.com</div> 

        <div style="float:left; width:100%; font-size:12px; color:#999999; margin-bottom:5px;">Contact Number: +80-87596321</div> 

        <div style="float:left; width:60%; font-size:12px; color:#999999; margin-bottom:5px; margin-left:97px;"> +91-81057896521</div> 

        <div style="float:left; width:60%; font-size:12px; color:#999999; margin-bottom:5px; margin-left:97px;"> +91-81057896522</div> 

    </div>

    

    

    </div>

	

        </div>

        



        

      

       

    </div>

    <!--end of content-->



</div>





<div class="reginSoftFooterFull">

    <div class="reginSoftFooter">

    	

        <div class="reginSoftFooterContentContainer">

        <div style="float:left; width:164px; min-height:106px; height:auto;">

	        <div class="reginSoftFooterMenuTitle">

            	<a href="#">About</a>

            </div>

        	<div class="reginSoftFooterMenuSubTitleTwo">

            	<a href="#">Overview</a>

            </div>

        </div>

        

        

        <div style="float:left; width:164px; min-height:106px; height:auto;">

	        <div class="reginSoftFooterMenuTitle">

            	<a href="#">Service</a>

            </div>

        	<div class="reginSoftFooterMenuSubTitleTwo">

            	<a href="#">Web development</a>            

            </div>

            <div class="reginSoftFooterMenuSubTitleTwo">

            	<a href="#">Web hosting</a>            

            </div>

            <div class="reginSoftFooterMenuSubTitleTwo">

            	<a href="#">Mobile app development</a>            

            </div>

        </div>

        

        

        <div style="float:left; width:164px; min-height:106px; height:auto;">

	        <div class="reginSoftFooterMenuTitle">

            	<a href="#">Contact us</a>

            </div>

        	<div class="reginSoftFooterMenuSubTitleTwo">

            	<a href="#">Email Sales</a>

            </div>

            <div class="reginSoftFooterMenuSubTitleTwo">

            	<a href="#">Email Support</a>

            </div>

            <div class="reginSoftFooterMenuSubTitleTwo">

            	Phone : 8105075095

            </div>

            <div class="reginSoftFooterMenuSubTitleTwo">

            	<a href="#">Send us Feedback</a>

            </div>

        </div>

        

        <div>

        	<img src="images/reign-soft-logo-big.png" width="380" height="102" alt=""/>

        </div>

        </div>

            

	</div>

</div>







</body>

</html>

