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
$themeReplace['site_name'] = 'Rural Broadband Emulator';

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Browsing through this proxy gives an impression of what it's like to surf on the kind of broadband that loads of rural users have to put up with. It's not quite as bad for you as for them though, because this service doesn't proxy streams (like BBC iPlayer)</p>
OUT;
