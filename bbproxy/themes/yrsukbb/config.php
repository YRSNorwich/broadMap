<?php
/*******************************************************************
* Glype Proxy Script
* 
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/ 

// Website name
$themeReplace['site_name'] = 'Rural Broadband Real Feel';

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Browsing through this proxy gives an impression of what it's like to surf on the kind of broadband that loads of rural users have to put up with. It's not quite as bad for you as for them though, because this service doesn't proxy streams (like BBC iPlayer).</p>
   
   <p>If you want the full rural broadband experience you'll need to set up a proxy server. The address for the 128k (average Norfolk speed) is http://ec2-46-51-154-201.eu-west-1.compute.amazonaws.com/. Then you'll need to go into your browser settings and depending on what browser you are using go to proxy settings insert the proxy server address (adove) and the port when asked is: 3001. If you'd like a nice neat video then go here: <a href="http://www.youtube.com/watch?v=h70SEPXZdRE">YouTube Video<a> But use the proxy server above and the port (3001).</p>
OUT;
