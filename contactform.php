<?php
import_request_variables('gp');
/*

DESCRIPTION

FormToEmail allows you to place a form on your website which your visitors can fill out and send to you.  The contents of the form are sent to the email address which you specify below.  The form allows your visitors to enter their name, email address and comments.

Your visitors (and nasty spambots!) cannot see your email address!

When the form is sent, your visitor will get a confirmation of this on the screen, and will be given a link to continue to your homepage, or other page if you specify it.

This is a PHP script.  In order for it to run, you must have PHP on your webhosting account.  If you are not sure about this, then ask your webhost about it.

SETUP INSTRUCTIONS

Step 1: Put the form on your webpage
Step 2: Enter your email address and continue link
Step 3: Upload the files to your webspace

Step 1:

To put the form on your webpage, copy the code below as it is, and paste it into your webpage:

<form action="FormToEmail.php" method="post">
<table border="0" bgcolor="#ececec" cellspacing="5">
<tr><td><font face="arial"><b>Name</b></font></td><td><input type="text" size="30" name="name"></td></tr>
<tr><td><font face="arial"><b>Email address</b></font></td><td><input type="text" size="30" name="formemail"></td></tr>
<tr><td valign="top"><font face="arial"><b>Comments</b></font></td><td><textarea name="comments" rows="6" cols="30"></textarea></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Send"><font face="arial" size="1">&nbsp;&nbsp;FormToEmail by <a href="http://scriptsthatwork.com">ScriptsThatWork.com</a></font></td></tr>
</table>
</form>

Step 2:

Enter the email address below to send the form to:

*/


$toEmail = "indico@airtelmail.in";

/*

Enter the continue link to offer the user after the form is sent.  If you do not change this, your visitor will be given a continue link to your homepage:

If you do change it, remove the "/" symbol below and replace with the name of the page to link to, eg: "mypage.htm" or "http://www.elsewhere.com/page.htm"

*/

$continue = "index.html";

/*

Step 3:

Save this file (FormToEmail.php) and upload it together with your webpage to your webspace.  IMPORTANT - The file name is case sensitive!  You must save it exactly as it is named above!  Do not put this script in your cgi-bin directory (folder) it may not work from there.

THAT'S IT, FINISHED!

You do not need to make any changes below this line.

*/

// This line prevents values being entered in a URL

if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}


$subject = "Email Confirmation from Indushoses ";
$message = "------------------------------------------------------------------\nThank you for Contacting Indushoses \n------------------------------------------------------------------";
$headers = "From: " . $toEmail. "\n" . "Return-Path: " . $toEmail. "\n" . "Reply-To: " . $toEmail. "\n";

mail($emailaddress,$subject,$message,$headers);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Indushoses :: Leading dealers & suppliers of Gates Industrial Products comprising Hose & Fittings, Industrial Oil Corporation, Industrial Hoses Corporation, Authorises Dealer of gates hoses, Gates Hoses, Industrial and hydraulic Hoses, O-rings, Rubber Hoses, Quick Release Couplings, Industrial Oil, V belts, Hoses With Connector and many more...</title>
<meta name="description" content="leading dealers and suppliers of Gates Industrial Products comprising Hose & Fittings, Pipes & Fittings, Valves, Fasteners, Asbestos Material and many more. Indus Hoses prides itself on working cooperatively with our customers to develop products that meet their needs and quality requirements.">
<meta name="keywords" content="Industrial Oil Corporation, Industrial Hoses Corporation, Authorises Dealer of gates hoses, Gates Hoses, Industrial and hydraulic Hoses, O-rings, Rubber Hoses, Quick Release Couplings, Industrial Oil, V belts, Hoses With Connector">
<script defer type="text/javascript" src="pngfix.js"></script>
<link href="indushoses.css" rel="stylesheet" type="text/css" />


<meta name="google-site-verification" content="NTQqZnbDNJqta6uFO0ICseDkbdDnrCCC27Z4rLFK9JA" />

<script src="home_page_packaged.js" type="text/javascript"></script>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}
$name = stripslashes($HTTP_POST_VARS['name']);
$contactperson = stripslashes($HTTP_POST_VARS['contactperson']);
$address = stripslashes($HTTP_POST_VARS['address']);
$country = stripslashes($HTTP_POST_VARS['country']);
$city = stripslashes($HTTP_POST_VARS['city']);
$state = stripslashes($HTTP_POST_VARS['state']);
$zipcode = stripslashes($HTTP_POST_VARS['zipcode']);
$telephone = stripslashes($HTTP_POST_VARS['telephone']);
$fax = stripslashes($HTTP_POST_VARS['fax']);
$email = stripslashes($HTTP_POST_VARS['email']);
$comment = stripslashes($HTTP_POST_VARS['comment']);


$subject = "Contact : Enquiries for Indushoses ";
$message = "$request\n$name\nContactperson: $contactperson\nAddress: $address\nCountry: $country\nCity: $city\nState: $state\nZipcode: $zipcode\nTelephone: $telephone\nFax: $fax\nEmail: $email\nComment: $comment\n\n\n\n\n------------------------------------------------------------------\nThank You for Contacting Indushoses \n------------------------------------------------------------------";
//$headers = "From: " . $emailaddress . "\n" . "Return-Path: " . $emailaddress . "\n" . "Reply-To: " . $emailaddress . "\n";
$headers = "From: " . $toEmail. "\n" . "Return-Path: " . $toEmail. "\n" . "Reply-To: " . $toEmail. "\n";

mail($toEmail,$subject,$message,$headers);
?>





<table width="942" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" ><table width="942" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="118" align="left" valign="top"><table width="100%" height="118" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top"><img src="images/logo.png" alt="" width="167" height="60" /></td>
              </tr>
              <tr>
                <td height="8" align="left" valign="top"></td>
              </tr>
              <tr>
                <td height="37" align="left" valign="top"><table width="100%" height="37" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="124"><a href="index.html"><img src="images/home_gray_tab.png" alt="" width="124" height="37" border="0" /></a></td>
                    <td width="11"><a href="profile.html"><img src="images/profile_tab.png" alt="" width="111" height="37" border="0" /></a></td>
                    <td width="111"><a href="products.html"><img src="images/products_tab.png" alt="" width="111" height="37" border="0" /></a></td>
                    <td width="111"><a href="quality.html"><img src="images/quality_gray_tab.png" alt="" width="111" height="37" border="0" /></a></td>
                    <td width="111"><a href="contact.html"><img src="images/contact_hover_tab.png" alt="" width="111" height="37" border="0" /></a></td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td width="284" align="left" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/company_logo.png" alt="" width="274" height="42" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><img src="images/red_box_top.gif" alt="" width="284" height="31" /></td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="658" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top"><div class="rotator_box_inner_page">
                    <div style="overflow: hidden; height:200px;" id="slideshow" class="rotator_inner_page">
                      <!-- DIV 1 -->
                      <div style="position: absolute; top: 0pt; left: -658px; display: block; z-index: 4; opacity: 1;" id="divPlans">
                        <div class="divRotator_inner_page">
                          <div class="divRotator_left_inner_page"> <img alt="Industrail Hoses" src="images/hose1.jpg" /> </div>
                        </div>
                      </div>
                      <!-- DIV 2 -->
                      <div id="divSongs" style="position: absolute; top: 0pt; left: -658px; z-index: 3;">
                        <div class="divRotator_inner_page">
                          <div class="divRotator_left_inner_page"> <img alt="Industral Cupling"src="images/cupling1.jpg" /> </div>
                        </div>
                      </div>
                      <!-- DIV 3 -->
                      <div id="divMedia" style="position: absolute; top: 0pt; left: 0px; z-index: 2;">
                        <div class="divRotator_inner_page">
                          <div class="divRotator_left_inner_page"> <img src="images/clamps1.jpg" alt="Industral Clamps" border="0" /> </div>
                        </div>
                      </div>
                      <!-- DIV 4 -->
                      <div id="divScheduling" style="position: absolute; top: 0pt; left: -658px; z-index: 1;">
                        <div class="divRotator_inner_page">
                          <div class="divRotator_left_inner_page"> <img alt="Industral Oil" src="images/oil1.jpg" /> </div>
                        </div>
                      </div>
                    </div>
                  <ul class="rotator_nav">
                      <li class="btn_plans"><a href="#" class="">Plans</a></li>
                      <li class="btn_songs"><a href="#" class="">Songs</a></li>
                      <li class="btn_media"><a href="#" class="">Media</a></li>
                      <li class="btn_scheduling"><a href="#" class="">Scheduling</a></li>
                    </ul>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top"><p class="heading">Contact</p></td>
              </tr>
              <tr><td><p class="dot_line">..................................................................................................................................................................................................</p></td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top">
				
			
				  <div style="width:100%; color:#CCCCCC;  text-align:center;"><strong>Thank You</strong><br />
				      <br />
				    Thank you <?php print "$firstname"; ?> !<br />
  <span class="linkmenu">We shall get back to you at earliest...</span> </div>
				
				
				
				
				</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
            <td width="284" align="left" valign="top" class="red_bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" align="center"><img src="images/v_belt.png" width="109" height="74" /></td>
                      <td width="50%"><p class="white_txt"><a href="v_belt.html">V-Belts Overview </a></p></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top"><img src="images/seprater.gif" alt="" width="259" height="2" /></td>
              </tr>
              <tr>
                <td height="10"></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" align="center"><img src="images/rubber_hose_with_connecter.png" width="110" height="101" /></td>
                      <td width="50%"><p class="white_txt"><a href="hose_with _connector.html">Rubber Hose with Connector </a></p></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top"><img src="images/seprater.gif" alt="" width="259" height="2" /></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" align="center"><a href="quick_release_couplings.html">
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="121" height="107">
                          <param name="movie" value="coupling img.swf" />
                          <param name="quality" value="high" />
                          <embed src="coupling img.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="121" height="107"></embed>
                        </object>
                      </a></td>
                      <td width="50%"><p class="white_txt"><a href="quick_release_couplings.html">Couplings<br />
                        &amp; Adapters<br />
                      </a></p></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top"><img src="images/seprater.gif" alt="" width="259" height="2" /></td>
              </tr>
              <tr>
                <td height="20">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top"><table width="245" height="190" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                      <td align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="229" height="174" vspace="0">
                          <param name="movie" value="slideshow.swf" />
                          <param name="quality" value="high" />
                          <embed src="slideshow.swf" width="229" height="174" vspace="0" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
                      </object></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table>
		
	
		
		
		</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td height="1" bgcolor="#202020"></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="70%" align="left" valign="top"><p class="foter_txt">Copyrights &copy; indushoses.com. All rights reserved. </p></td>
         <td width="16%" align="right" valign="top"><p class="foter_txt">Powered by <a href="http://www.pixelmagics.com" target="_blank">PixelMagics</a></p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
