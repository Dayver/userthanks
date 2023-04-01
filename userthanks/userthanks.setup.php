<?php
/* ====================
[BEGIN_COT_EXT]
Name=User thanks
Category=misc-ext
Description=Displays in profile all thanks which give and send user
Version=0.0.1
Date=2023-04-01
Author=Dayver
Copyright=Partial copyright (c) Pavlo Tkachenko aka Dayver 2023
Notes=BSD License
Auth_guests=R
Lock_guests=W12345A
Auth_members=R
Lock_members=W12345A
Requires_plugins=thanks
Recommends_modules=page,forums
Recommends_plugins=comments
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
countonpage=01:select:3,5,10,15,20,25,30,35,40:5:Displayed thanks on page
ajax=02:radio::1:Turn on AJAX navigation
timeback=03:select:2,3,5,7,10,15,30:7:Period for stats count (in days)
[END_COT_EXT_CONFIG]
==================== */
defined('COT_CODE') or die('Wrong URL.');
