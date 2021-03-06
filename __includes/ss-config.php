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
# 																			Community Edition
# ============================================================================================

	// Website infos
	$www = "http://shopshop.localhost/";
	$name = "ShopShop";
	$description = "Lightweight content management and orders system for the masses";
	
	// This variable is used for the system error handler, which display a way to contact you in case of guests users seeing an error on your website.
	// but you can use it for your templates if you want to, by using $GLOBALS["adminmail"] or by defining a constant.
	$adminmail = "admin@shopshop.localhost";
	
	// System infos
	$themeDir = "default";
	
	// DO NOT TOUCH UNDER THESE LINES OR EDIT THEM AT YOUR OWN RISK !!
	$sysVer = 1.0;
	$getVer = file_get_contents('http://repo.shopshop.localhost/ss-package-versions/public/current-public-version.php');
?>