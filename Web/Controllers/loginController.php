<?php

class loginController{
	
	
	function __construct()
	{
	}

		function validateNullString($strText)
		{
			if($strText)
				{
					return true;
				}
			else
			{
				return false;
			}
		}
	
	function validLogins($userName,$password){
		$nullName = $this->validateNullString($userName);
		$nullPassword = $this->validateNullString($password);
		if($nullName && $nullPassword)
		{
			$isPasswordLengthValid = $this->validatePwLength($password);
			$userNameAndPasswordMatch = $this->validateUserNameAndPassword($userName,$password);
			
			return $isPasswordLengthValid==true && $userNameAndPasswordMatch==true;

		}
	}
	
	function validatePwLength($passwordStr)
	{
		return strlen($passwordStr) > 8;
	}
	
		
	function validateStr6Length($str6)
	{
		return strlen($str6) > 5;
	}
	
	function validateUserNameAndPassword($uname,$passw){
		return $uname="Kgantsi Rabatseta" && $passw="kim191191";
	}
	
		

}
?>