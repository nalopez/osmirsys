<?php

namespace AppBundle\Util\Helper;

trait SecurityHelperTrait {

	public function generateRandomSaltString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }

	    return $randomString;
	}

	public function checkIfPasswordsMatch($userDetails, $passwordStr)
    {
    	if ($this->hashPassword($passwordStr, $userDetails->getSalt()) != $userDetails->getPassword()) {
    		return false;
    	}

    	return true;
    }

	public function hashPassword($passwordStr, $saltStr)
	{
	    $pwordHash = hash('sha256', $passwordStr);
    	return hash('sha256', $pwordHash . $saltStr);
	}
}