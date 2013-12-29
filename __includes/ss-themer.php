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
define('TWD', '../themes/');

class Themer
{
	private $outputData;
	private $params = Array();
	private $includeFiles = Array();
	
	public function AddGeneric($tplName)
	{
		$tpl = new Template($tplName);
		$this->outputData .= $tpl->GetHtml();
	}
	
	public function AddTemplate($tpl)
	{
		$this->outputData .= $tpl->GetHtml();
	}
	
	public function SetParam($param, $value)
	{
		$this->params[$param] = is_object($value) ? $value->fetch() : $value;
	}
	
	public function UnsetParam($param)
	{
		unset($this->params[$param]);
	}
	
	public function AddIncludeFile($incFile)
	{
		$this->includeFiles[] = $incFile;
	}
	
	public function WriteIncludeFiles()
	{
		foreach ($this->includeFiles as $f)
		{
			$this->Write($f->GetHtml() . LB);
		}
	}
	
	public function Write($str)
	{
		$this->outputData .= $str;
	}
	
	public function FilterParams($str)
	{
		foreach ($this->params as $param => $value)
		{
			$str = str_ireplace('%' . $param . '%', $value, $str);
		}
		
		return $str;
	}
	
	public function Output()
	{
		global $core;
	
		$this->Write(LB . LB . LB . LB);
		
		echo $this->FilterParams($this->outputData);
	}
}

class Template
{
	private $outputData;
	private $params = Array();
	private $tplName = '';

	public function Template($tplName)
	{
		$this->tplName = $tplName;
	}
	
	public function FilterParams($str)
	{
		foreach ($this->params as $param => $value)
		{
			if (is_object($value))
			{
				continue;
			}
		
			$str = str_ireplace('%' . $param . '%', $value, $str);
		}
		
		return $str;
	}
	
	public function getHtml()
	{
		global $users;
	
		extract($this->params);
	
		$file = '"../themes/' . $GLOBALS["themeDir"] . '/' . $this->tplName . '.tpl"';
	
		if (!file_exists($file))
		{
			ssCore::SystemError(5, 'Template system error', 'Could not load template: <b>' . $this->tplName . '</b>.', 'Please check if you set the correct theme name in the config file or created the specified .tpl file');
		}
		
		ob_start();
		include($file);
		$data = ob_get_contents();
		ob_end_clean();	
		
		return $this->FilterParams($data);
	}
}