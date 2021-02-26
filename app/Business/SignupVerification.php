<?php

namespace App\Business;

/**
 * Verifies a signup for a user.
 * @author Alec Sanchez
 */
class SignupVerification {
	
	/**
	 * Checks the code and verifies it exists.
	 * For this case, the only viable class code is "CST-256".
	 * @param string $classcode Classcode to verify.
	 * @return boolean Whether the class code works.
	 */
	public static function Verify (string $classcode) {
		return $classcode === 'CST-256';
	}
}

