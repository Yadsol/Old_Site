
<?php

session_name("fancyform");
session_start();


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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />

<?=$css?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="script.js"></script>


</head>

<body>
<!--header part -->
<div class="reignSoftHeaderContainer">
    <div class="reignSoftHeader">
    	<div class="reignSoftHeaderLogo"></div>
        <div class=" reignSoftHeaderMenuContainer">
        	<div class="reignSoftHeaderMenu">
            	<ul>
                	<li><a href="#">Home</a></li>
                    	<li><div class="reignSoftHeaderMenuSeparator"></div></li>
                    <li><a href="#">about us</a></li>
                    	<li><div class="reignSoftHeaderMenuSeparator"></div></li>
                    <li><a href="#">service</a></li>
                    	<li><div class="reignSoftHeaderMenuSeparator"></div></li>
                    <li><a href="#">contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>    
    <!-- end of header part -->
<div class="reignSoftWrapper">
	
    <!--banner -->
    <div class="reignSoftHeaderBanner">
    	<img src="images/banner.jpg" width="959" height="244" alt=""/>
    </div>
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
        	<div id="main-container">

	<div id="form-container">
    <h1>Fancy Contact Form</h1>
    <h2>Drop us a line and we will get back to you</h2>
    
    <form id="contact-form" name="contact-form" method="post" action="submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="15%"><label for="name">Name</label></td>
          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><label for="subject">Subject</label></td>
          <td><select name="subject" id="subject">
            <option value="" selected="selected"> - Choose -</option>
            <option value="Question">Question</option>
            <option value="Business proposal">Business proposal</option>
            <option value="Advertisement">Advertising</option>
            <option value="Complaint">Complaint</option>
          </select>          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><label for="message">Message</label></td>
          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label></td>
          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
          <input type="reset" name="button2" id="button2" value="Reset" />
          
          <?=$str?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        </tr>
      </table>
      </form>
      <?=$success?>
    </div>
	
        </div>
            
	</div>

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

</body>
</html>
