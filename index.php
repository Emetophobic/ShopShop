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

require_once "ss-global.php";

$tpl->SetParam('page_title', 'ShopShop');
$tpl->SetParam('perm_level', 1);

$tpl->AddGeneric('generic-header');

echo '<img src="' . $www . '__sysfiles/images/logo.png"><br>';
echo 'ShopShop have successfully connected to the database → <b>' . $database->host_info . "</b>\n";
echo '<hr>';
echo '<i>ShopShop v' . $sysVer;

?>