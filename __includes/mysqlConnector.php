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

		$MySQL_HOST = "localhost";
		$MySQL_PORT = "3306";
		$MySQL_USER = "root";
		$MySQL_PASSWORD = "sonmamwhcha";
		$MySQL_DATABASE = "holograph";
		$MySQL_ERROR_CONNECT = "Unable to connect to MySQL server @ <b>".$MySQL_HOST."</b>";
		$MySQL_ERROR_DATABASE = "Unable to find the <b>".$MySQL_DATABASE."</b> database.";
	    $MySQL_AUTORIZE = 1;
		
		if($MySQL_AUTORIZE == 1)
			{
				$database = new mysqli($MySQL_HOST, $MySQL_USER, $MySQL_PASSWORD, $MySQL_DATABASE);
				
				if($database->connect_error) {
					die('Database error (' . $database->connect_errno . ') ' . $database->connect_error);
				}
			}
?>