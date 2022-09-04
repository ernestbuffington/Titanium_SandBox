<?php
if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}
############################################################################################################################################################################
print "<a href=\"#\" onClick = \"tag=this.nextElementSibling; tag.style.display=tag.style.display == 'none' ? 'block':'none'\"><strong>Click here to show | hide source code</strong></a>";
print "<div id=\"php_source\" style=\"display:none\">";
OpenTableCode();
highlight_file("modules/Titanium_SandBox/x-browser_check.php");
CloseTableCode();
print "</div><hr />";
###########################################################################################################################################################################
# TEST CODE GOES HERE - START
############################################################################################################################################################################


$titanium_browser = new Browser();

global $cookie;
$name = (isset($cookie[1]) && !empty($cookie[1])) ? $cookie[1] : _ANONYMOUS;
log_write('admin', $name.' x-browser_check.php was called from facebook sandbox', 'loaded x-browser_check.php'); 

if($titanium_browser->getBrowser() == Browser::BROWSER_CHROME && $titanium_browser->getVersion() >= 2 ) 
{
echo '<a href="https://www.chromium.org/" target="_tab"><img alt="the Chromium logo" width="32" height="32" src="'.img('customLogo.png', 'Titanium_SandBox').'">
The Chromium Projects</a>';
echo '<hr>';
echo $titanium_browser;
echo '<hr>';
}
  
if( $titanium_browser->isChromeFrame() == true ) 
echo 'ChromeFrame is <font color=red><b>IN USE</b></font><hr>';
else
echo 'ChromeFrame is <font color=red><b>NOT IN USE</b></font><hr>';

if( $titanium_browser->getBrowser() == Browser::BROWSER_CHROME && $titanium_browser->getVersion() >= 2 ) 
{
echo '<a href="http://www.google.com/chrome"><img src="https://www.chromium.org/chromium-projects/logo_chrome_color_1x_web_32dp.png" alt=""></a>';
echo 'Your Chrome Support is TURNED <font color=red><b>ON</b></font>';
}
else
{
echo $titanium_browser;
echo '<hr>';  
echo 'Your Chrome Support is TURNED <font color=red><b>OFF</b></font>';
echo '<hr>';
echo '<a href="https://www.google.com/chrome" target="_blank"><img border="0" align=top width=15 src="https://www.chromium.org/_/rsrc/1302286290899/chromium-projects/chrome-32.png?height=32&amp;width=32" width="32"> DOWNLOAD CHROME</a>';
}
############################################################################################################################################################################			
# TEST CODE GOES HERE - END
############################################################################################################################################################################
echo "<hr /></fieldset>"; # This stays at is part of the SandBox
############################################################################################################################################################################?> 
