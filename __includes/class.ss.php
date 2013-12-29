<?php
#   _
#    \________
# ~   \######/       
#  ~   |####/
# ~    |____.
#______o____o__________ 
#                      \_______
#   ____        __                           ____        __                          
#  /\  _`\     /\ \                         /\  _`\     /\ \                         
#  \ \,\L\_\   \ \ \___      ___    _____   \ \,\L\_\   \ \ \___      ___    _____   
#   \/_\__ \    \ \  _ `\   / __`\ /\ '__`\  \/_\__ \    \ \  _ `\   / __`\ /\ '__`\ 
#     /\ \L\ \   \ \ \ \ \ /\ \L\ \\ \ \L\ \   /\ \L\ \   \ \ \ \ \ /\ \L\ \\ \ \L\ \
#     \ `\____\   \ \_\ \_\\ \____/ \ \ ,__/   \ `\____\   \ \_\ \_\\ \____/ \ \ ,__/
#      \/_____/    \/_/\/_/ \/___/   \ \ \/     \/_____/    \/_/\/_/ \/___/   \ \ \/ 
#                                     \ \_\                                    \ \_\ 
#                                      \/_/                                     \/_/
#		Jérémy "Emetophobic" Castellano @ emetophobic.com - 2014
# ============================================================================================
# Lightweight content management and orders system for the masses
# ============================================================================================

@include("ss-config.php");

class ssCore
{
	public static function SystemError($errno, $title, $text, $solution)
	{
		echo "<head>
		<title>ShopShop System Error</title>
		<link rel='stylesheet' href='../__sysfiles/stylesheets/error-style.css' type='text/css' />
		<link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
		</head><body>";
		echo "<img src='../__sysfiles/images/logo.png'><h3><i class='fa fa-exclamation-triangle'></i> ShopShop System Error</h3><div id='error'>ShopShop has encountered an error (<b>" . $errno . "</b>)<br><br>
		<b>Type of error:</b><br>" . $title . "<br /><br /><b>Description:</b><br>" . $text . "<br><br><b>What do I do?</b><br>" . $solution . "</div><br></body>";
		exit;
	}
}