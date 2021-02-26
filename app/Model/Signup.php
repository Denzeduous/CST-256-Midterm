<?php

namespace App\Model;

class Signup {
	/**
	 * @var string $username User's username.
	 */
	private string $username;
	
	/**
	 * @var string $lastname User's first name.
	 */
	private string $firstname;
	
	/**
	 * @var string $lastname User's last name.
	 */
	private string $lastname;
	
	/**
	 * @var string $classcode User's class code.
	 */
	private string $classcode;
	
	/**
	 * Constructs a Signup model.
	 * @param string $username User's username
	 * @param string $firstname User's first name.
	 * @param string $lastname User's last name.
	 * @param string $classcode User's class code.
	 */
	public function __construct (string $username, string $firstname, string $lastname, string $classcode) {
		$this->username  = $username;
		$this->firstname = $firstname;
		$this->lastname  = $lastname;
		$this->classcode = $classcode;
	}
	
	/**
	 * @return mixed
	 */
	public function getUsername () {

		return $this->username;
	}

	/**
	 * @return mixed
	 */
	public function getFirstname () {

		return $this->firstname;
	}

	/**
	 * @return mixed
	 */
	public function getLastname () {

		return $this->lastname;
	}

	/**
	 * @return mixed
	 */
	public function getClasscode () {

		return $this->classcode;
	}

	/**
	 * @param mixed $username
	 */
	public function setUsername ( $username ) {

		$this->username = $username;
	}

	/**
	 * @param mixed $firstname
	 */
	public function setFirstname ( $firstname ) {

		$this->firstname = $firstname;
	}

	/**
	 * @param mixed $lastname
	 */
	public function setLastname ( $lastname ) {

		$this->lastname = $lastname;
	}

	/**
	 * @param mixed $classcode
	 */
	public function setClasscode ( $classcode ) {

		$this->classcode = $classcode;
	}
}

